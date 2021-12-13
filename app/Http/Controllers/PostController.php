<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use App\Http\Resources\PostResourceCollection;

class PostController extends Controller
{
    public function index()
    {
        return PostResourceCollection::make(request()->user()->posts);
    }

    public function store()
    {
        $data = request()->validate([
            'data.attributes.body'  =>  ''
        ]);
        $post = request()->user()->posts()->create($data['data']['attributes']);
        return PostResource::make($post);
    }
}
