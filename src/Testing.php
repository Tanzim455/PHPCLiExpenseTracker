<?php

namespace App;




class Testing
{


    public function test(Post $post)
    {
        echo $post->create();
    }
}

// Instantiate the Testing class with a Post object.
