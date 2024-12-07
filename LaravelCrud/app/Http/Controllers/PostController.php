<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view("create");
    }
    public function ourfilestore(Request $request)
    {
       
              // Create a new Post instance
              $post = new Post;
              $post->name = $request->name;
              $post->description = $request->description;
              $post->image = $request->image;
      
         
              // Save the Post model
              $post->save();

              return redirect()->route('home')->with('success', 'Post created successfully.');
    }
}
