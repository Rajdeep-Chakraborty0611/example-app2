<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
require(__DIR__.'/../../rajdeepprac/song.php');
use practicals\Song;
class SongsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
        /**
     * A basic feature test songs.
     */
    /*
     public function testSongsOk(): void
    {
        $response = $this->get('/songs');

        $response->assertStatus(200);
    }
    
    public function testSongsStaticEndpointStatus()
    {
        // Make an HTTP request to /songs_static (replace with your actual endpoint)
        // Assume $response contains the HTTP response object

        // Assert that the status code is not 200 OK
        $response = $this->get('/songs_static');
        $this->assertNotEquals(200, $response->getStatusCode());
    }*/
}

