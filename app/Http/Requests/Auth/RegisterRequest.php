<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\ApiRequest;

class RegisterRequest extends ApiRequest
{
    public function rules(): array
    {
        // Правила валидации
        return [
            'login'      => ['required', 'string', 'max:255', 'unique:users'],
            'email'      => ['required', 'email' , 'max:255', 'unique:users'],
            'surname'    => ['required', 'string', 'max:255'],
            'name'       => ['required', 'string', 'max:255'],
            'patronymic' => ['nullable', 'string', 'max:255'],
            'password'   => ['required', 'string', 'max:255'],
            'birthday'   => ['required', 'date:Y-m-d', 'max:255'],
            'sex'        => ['required', 'boolean'],
        ];
    }
    public function messages(): array {
        // Кастомные сообщения об ошибках
        return [
            'surname.required' => 'Фамилия обязательна для заполнения',
            'name.required' => 'Имя обязательно для заполнения',
            'surname.max' => 'Фамилия должна состоять максимум из 255 символов',
            'name.max' => 'Имя должно состоять максимум из 255 символов',
            'patronymic.max' => 'Отчетво должно состоять максимум из 255 символов',
            'birthday.required' => 'Дата рождения обязательна для заполнения',
            'birthday.date' => 'Дата рождения должна быть в фомате YYYY-MM-DD',
            'Login.required' => 'Логин обязателен для заполнения',
            'email.required' => 'Почта обязательна для заполнения',
            'password.required' => 'Пароль обязателен для заполнения',
            'Login.max' => 'Логин должен состоять максимум из 255 символов',
            'email.max' => 'Почта должна состоять максимум из 255 символов',
            'password.max' => 'Пароль должен состоять максимум из 255 символов',
            'email.unique' => 'Такая почта уже используется',
            'login' => 'Такой логин уже существует',
        ];
    }
}
