<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\ExampleRequest;
use App\Services\ExampleService;
use Illuminate\Http\Response;

/**
 * Class ExampleController
 * @package App\Http\Controllers
 */
class ExampleController extends Controller
{
    /**
     * @var ExampleService
     */
    private ExampleService $service;

    /**
     * ExampleController constructor.
     * @param ExampleService $service
     */
    public function __construct(ExampleService $service)
    {
        $this->service = $service;
    }

    /**
     * @param ExampleRequest $request
     * @return Response
     */
    public function __invoke(ExampleRequest $request): Response
    {
        $this->service->run($request->toPayload());

        return response()->noContent();
    }
}
