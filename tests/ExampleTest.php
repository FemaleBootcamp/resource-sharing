<?php
class ExampleTest extends TestCase
{
    public function testBasicExample()
    {
        $response = $this->json('POST', '/resources', ['tags' => 'Testing']);

        $response
            ->assertStatus(201)
            ->assertExactJson([
                'created' => true,
            ]);
    }
}