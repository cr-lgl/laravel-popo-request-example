<?php

declare(strict_types=1);

namespace App\Factories\Requests;

use App\Requests\ExampleRequest;
use Illuminate\Http\Request;
use JsonMapper;
use JsonMapper_Exception;
use ReflectionClass;
use RuntimeException;
use Symfony\Component\HttpFoundation\ParameterBag;

/**
 * Class JsonMapperExampleRequestFactory
 * @package App\Factories\Requests
 */
class JsonMapperExampleRequestFactory implements ExampleRequestFactory
{
    /**
     * @inheritDoc
     */
    public function createFromLaravelRequest(Request $request): ExampleRequest
    {
        try {
            $mapper = new JsonMapper();
            $mapper->bIgnoreVisibility = true;

            return $mapper->map(
                new ParameterBag($request->all()),
                (new ReflectionClass(ExampleRequest::class))->newInstanceWithoutConstructor()
            );
        } catch (JsonMapper_Exception $exception) {
            throw new RuntimeException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }
}
