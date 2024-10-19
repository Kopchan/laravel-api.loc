<?php

namespace App\Http\Requests;

use App\Exceptions\ApiException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class ApiRequest extends FormRequest
{
    // Вызов исключение при провале валидации данных
    public function failedValidation(Validator $validator) {
        throw new ApiException(422, 'Request validation error', $validator->errors());
    }

    // Вызов исключение при провале авторизации пользователя
    public function unauthenticated() {
        throw new ApiException(401, 'Failed Authorize');
    }
}
