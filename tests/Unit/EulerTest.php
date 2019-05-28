<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EulerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $data = [
            'text' => '10',
        ];
        $this->post(route('euler'), $data)
            ->assertStatus(201)
            ->assertEquals('23');
    }
}
