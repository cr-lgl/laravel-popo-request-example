<?php

declare(strict_types=1);

namespace App\Factories\Requests;

use App\Requests\ExampleRequest;
use Illuminate\Http\Request;

/**
 *
 * Interface ExampleRequestFactory
 */
interface ExampleRequestFactory
{
    /**
     * @param Request $request
     * @return ExampleRequest
     */
    public function createFromLaravelRequest(Request $request): ExampleRequest;
}
