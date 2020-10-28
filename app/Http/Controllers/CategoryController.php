<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Tag  $tag)
    {
      $posts = Post::postTag( $tag);
      
      return view('category.index', compact('posts'));
        
       
       


     }
    }

