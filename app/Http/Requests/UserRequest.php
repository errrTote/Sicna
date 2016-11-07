<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'       => 'required|min:3|max:120|alpha',
            'user'       => 'required|min:8|max:120|alpha_num|unique:users',
            'password'   => 'required|min:8|max:120|',
            'password_b' => 'same:password|required|min:8|max:120'
            
        ];
    }
}
