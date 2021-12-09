<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'data.attributes.body'  =>  ''
        ]);
        $post = request()->user()->posts()->create($data['data']['attributes']);
        return response([
            'data' => [
                'type'      =>  'posts',
                'post_id'   =>  $post->id,
                'attributes'    =>  [
                    'body'  =>  $post->body
                ],
                'links' => [
                    'self'   => route('api.posts.show', $post)
                ]
            ]
        ], 201);
    }
}
