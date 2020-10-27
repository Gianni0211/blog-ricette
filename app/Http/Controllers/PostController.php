<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Mail\NewPostMail;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //post per pagina       ↓
        $posts = Post::paginate(4);
        $lastPosts = Post::orderBy('created_at', 'desc')->paginate(4);
        return view('post.index', compact('posts'), ['post'=>$posts, 'lastPosts' => $lastPosts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {

        $bag = Post::create([
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'body' => $request->input('body'),
            'img' => $request->file('img')->store('public/img'),
            'user_id' => Auth::user()->id
        ]);

        //Trovo tutti gli user
        foreach(User::all() as $user){
            if($user->role == 'admin'){
                
                Mail::to($user->email)->send(new NewPostMail($bag)); 
            }
        }
        /*
            il problema qui è che php è sincrono, qundi finche non finisce di mandare tutte le email la pagina resta bloccata
            Si possono creare Jobs e queue 
        */

        return redirect(route('post.index'))->with('message', 'Post creato');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
            
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     * PROTECTED
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        if (Auth::user()->role == 'admin' || $post->user_id == Auth::user()->id) {
            $post->update($request->all());
        }

        return redirect(route('post.index'))->with('message', 'Post Aggiornato');
    }

    /**
     * Remove the specified resource from storage.
     *  PROTECTED
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {

        if (Auth::user()->role == 'admin' || $post->user_id == Auth::user()->id) {
            $post->delete();
            return redirect(route('post.index'));
        }

        return redirect(route('post.index'))->with('message', 'Post Eliminato');
    }

    public function likePost(Post $post){
        $post->toggleLikeToPost(Auth::user());
        return redirect()->back();
    }
}
