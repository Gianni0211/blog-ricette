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
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //post per pagina       ↓
        $posts = Post::paginate(3);
        return view('post.index', compact('posts'));
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
            'user_id'=> Auth::user()->id
        ]);

        //invio email alla creazione del nuovo post (solo a admin)
        foreach(User::all() as $user){
            if($user->role == 'admin'){
                
                Mail::to($user->email)->send(new NewPostMail($bag)); 
            }
        }
     

        return redirect(route('post.index'))->with(['message','Articolo creato']);
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
             return redirect(route('post.index'))->with(['message','Articolo aggiornato']);
        }
    
        return abort(401);

       
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

        return redirect(route('post.index'))->with(['message','Articolo eliminato']);
    }
}
