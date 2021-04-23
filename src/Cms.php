<?php

namespace Test\Cms;

use Test\Cms\Models\Post;

class Cms 
{
    public function users()
    {
        return ['ali', 'milad'];
    }

    public function posts()
    {
        return Post::get();
    }
}