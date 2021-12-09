<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Post;
use App\Models\User;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostToTimelineTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_post_a_text()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create();
        Sanctum::actingAs($user, ['*']);
        $response = $this->postJson(route('api.posts.create'), [
            'data'  =>  [
                'type'  =>  'posts',
                'attributes'    =>  [
                    'body'  =>  'Testing body'
                ]
            ]
        ]);
        $post = Post::first();
        $this->assertCount(1, Post::all());
        $this->assertEquals($user->id, $post->user_id);
        $this->assertEquals('Testing body', $post->body);
        $response->assertStatus(201)
                ->assertJson([
                    'data' => [
                        'type'      =>  'posts',
                        'post_id'   =>  $post->id,
                        'attributes'    =>  [
                            'body'  =>  'Testing body'
                        ],
                        'links' => [
                            'self'   => route('api.posts.show', $post)
                        ]
                    ]
                ]);
    }
}
