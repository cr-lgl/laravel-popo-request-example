<?php

declare(strict_types=1);

namespace App\Services;

use App\Requests\ExampleRequest;

/**
 * Class ExampleService
 */
class ExampleService
{
    /**
     * @param ExampleRequest $request
     */
    public function run(ExampleRequest $request): void
    {
        // do something...
    }
}
