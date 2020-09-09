<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Requests\ExampleRequest as Payload;
use Illuminate\Foundation\Http\FormRequest;
use JsonMapper;
use JsonMapper_Exception;
use ReflectionClass;
use RuntimeException;
use Symfony\Component\HttpFoundation\ParameterBag;

/**
 * Class ExampleRequest
 * @package App\Http\Requests
 */
class ExampleRequest extends FormRequest
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'num' => 'required|integer',
            'text' => 'required|string',
        ];
    }

    /**
     * @return Payload
     */
    public function toPayload(): Payload
    {
        try {
            $mapper = new JsonMapper();
            $mapper->bIgnoreVisibility = true;

            return $mapper->map(
                new ParameterBag($this->all()),
                (new ReflectionClass(Payload::class))->newInstanceWithoutConstructor()
            );
        } catch (JsonMapper_Exception $exception) {
            throw new RuntimeException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }
}
