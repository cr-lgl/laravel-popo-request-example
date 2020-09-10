<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
}
