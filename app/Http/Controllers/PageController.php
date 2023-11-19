<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        //$posts = Post::first();
        //$posts = Post::find(8);

        // $posts = Post::get();

        $posts = Post::latest()->paginate(3);
        /*
        $posts = [
            ['id'=>1, 'title'=>'PHP', 'slug'=>'php'],
            ['id'=>2, 'title'=>'Laravel', 'slug'=>'laravel'],
            ['id'=>3, 'title'=>'JavaScript', 'slug'=>'javascript'],
            ['id'=>4, 'title'=>'Vue.js', 'slug'=>'vue-js'],
        ];*/
        return view('blog', ['posts'=>$posts]);
    }

    public function post(Post $post)
    {
        //$post = $slug;

        return view('post', ['post'=>$post]);
    }
}
