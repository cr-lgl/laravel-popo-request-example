<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Http\Requests\ExampleRequest;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;

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
        $request = ExampleRequest::create('/', Request::METHOD_POST, [
            'num' => 123,
            'text' => 'Hello, world!',
        ]);

        $payload = $request->toPayload();
        $this->assertEquals(123, $payload->getNum());
        $this->assertEquals('Hello, world!', $payload->getText());
    }
}
