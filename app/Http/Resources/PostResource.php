<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
                'type'      =>  'posts',
                'post_id'   =>  $this->id,
                'attributes'    =>  [
                    'posted_by' =>  new UserResource($this->user),
                    'body'  =>  $this->body
                ],
                'links' => [
                    'self'   => route('api.posts.show', $this)
                ]
            ];
    }
}
