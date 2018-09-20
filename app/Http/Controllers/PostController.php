<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post_slug)
    {
        $titulo = 'Maneras de publicar un post';
        $slug = 'maneras-publicar-post';
        dd($post);
        return $post;
    }
}
