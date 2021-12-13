<?php

namespace Tests\Feature;

use App\Models\Post;
use Tests\TestCase;
use App\Models\User;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RetrievePostsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_retrieve_posts()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create();
        $posts = Post::factory(2)->create(['user_id' => $user->id]);
        Sanctum::actingAs($user, ['*']);
        $response = $this->getJson(route('api.posts.index'));
        $response->assertStatus(200)
                ->assertExactJson([
                    'data'  =>  [
                        [
                            'type'  =>  'posts',
                            'post_id'   =>  $posts->last()->id,
                            'attributes'    =>  [
                                'posted_by' =>  [
                                    'type'      =>  'users',
                                    'user_id'   =>  $user->id,
                                    'attributes'    =>  [
                                        'name'  =>  $user->name
                                    ],
                                    'links' => [
                                        'self'   => route('api.users.show', $user)
                                    ]
                                ],
                                'body'  =>  $posts->last()->body
                            ],
                            'links' => [
                                'self'   => route('api.posts.show', $posts->last())
                            ]
                        ],
                        [
                            'type'  =>  'posts',
                            'post_id'   =>  $posts->first()->id,
                            'attributes'    =>  [
                                'posted_by' =>  [
                                    'type'      =>  'users',
                                    'user_id'   =>  $user->id,
                                    'attributes'    =>  [
                                        'name'  =>  $user->name
                                    ],
                                    'links' => [
                                        'self'   => route('api.users.show', $user)
                                    ]
                                ],
                                'body'  =>  $posts->first()->body
                            ],
                            'links' => [
                                'self'   => route('api.posts.show', $posts->first())
                            ]
                        ]
                    ],
                    'links' => [
                        'self'  =>  route('api.posts.index')
                    ]
                ]);
    }

    /** @test */
    public function a_user_can_only_retrieve_their_posts()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create();
        $posts = Post::factory(2)->create();
        Sanctum::actingAs($user, ['*']);
        $response = $this->getJson(route('api.posts.index'));
        $response->assertStatus(200)
                ->assertExactJson([
                    'data'  =>  [],
                    'links' =>  [
                        'self'  =>  route('api.posts.index')
                    ]
                ]);
    }
}
