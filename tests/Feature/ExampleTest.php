<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * Class ExampleTest
 * @package Tests\Feature
 */
class ExampleTest extends TestCase
{
    use WithFaker;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->post('/', [
            'num' => $this->faker->randomNumber(),
            'text' => $this->faker->text(),
        ]);

        $response->assertNoContent();
    }
}
