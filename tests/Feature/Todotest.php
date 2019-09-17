<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Todotest extends TestCase
{
    /**
     * A basic feature test example.
     * @test  //追記
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/todo/create');
        $response->assertStatus(200);
    }

    public function storeTest()
    {
        $this->post('todo/',['title'=>'foo']);
        $this->assertDatabaseHas('todos',['title'=>'foo']);
    }

    public function editTest()
    {
        $response = $this->get('todo/1/edit');
        $response->assertStatus(200);
    }

    public function updateTest()
    {
        $this->put('todo'['title'=>'updateData']);
        $this->assertDatabaseHas('todos',['title'=>'updateData']);
    }

    public function destroyTest()
    {
        $this->delete('todo/1');
        $this->assertDatabaseMissing('todos',['is'=>1]);
    }


}
