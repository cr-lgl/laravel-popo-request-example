<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Factories\Requests\JsonMapperExampleRequestFactory;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase;

/**
 * Class ExampleTest
 * @package Tests\Unit
 */
class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest(): void
    {
        $factory = new JsonMapperExampleRequestFactory();

        $payload = $factory->createFromLaravelRequest(Request::create(
            '/',
            Request::METHOD_POST,
            [
                'num' => 123,
                'text' => 'Hello, world!',
            ]
        ));

        $this->assertEquals(123, $payload->getNum());
        $this->assertEquals('Hello, world!', $payload->getText());
    }
}
