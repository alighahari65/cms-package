<?php

namespace Test\Cms\Http\Controller;

use App\Http\Controllers\Controller;
use Cms;
use Test\Cms\Models\Post;

class AdminController extends Controller
{
    public function index()
    {
        // $name = 'ali';
        // return view('n::index', compact('name'));

        // Post::create([
        //     'name' => 'milad'
        // ]);
        // return Post::all();
        return Cms::posts();
    }
}