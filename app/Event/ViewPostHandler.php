<?php

namespace App\Event;

use App\Post;

class ViewPostHandler
{
    public function handle(Post $post)
    {
    	// dd($post);
        $post->increment('view_count');
         // $post->view_count += 1; 
    }
}
