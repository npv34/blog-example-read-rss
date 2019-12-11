<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    function show($urlPost)
    {
        $post = $this->findPostByUrl($urlPost);
        return view('layout.page.posts.detail', compact('post'));
    }

    public function findPostByUrl($urlPost)
    {
        $data = $this->getDataRss(env("URL_RSS"));
        $post = null;
        foreach ($data['items'] as $item) {
            if (Str::slug($item->get_title()) == $urlPost) {
                $post = $item;
                break;
            }
        }
        return $post;
    }
}
