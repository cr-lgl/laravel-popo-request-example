<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Factories\Requests\ExampleRequestFactory;
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
     * @var ExampleRequestFactory
     */
    private ExampleRequestFactory $factory;

    /**
     * ExampleController constructor.
     * @param ExampleService $service
     * @param ExampleRequestFactory $factory
     */
    public function __construct(ExampleService $service, ExampleRequestFactory $factory)
    {
        $this->service = $service;
        $this->factory = $factory;
    }

    /**
     * @param ExampleRequest $request
     * @return Response
     */
    public function __invoke(ExampleRequest $request): Response
    {
        $this->service->run($this->factory->createFromLaravelRequest($request));

        return response()->noContent();
    }
}
