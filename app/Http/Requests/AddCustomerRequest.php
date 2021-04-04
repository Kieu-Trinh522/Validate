<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCustomerRequest extends FormRequest
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
            'name' => 'required|alpha|min:3',
            'age' => 'required|numeric',
            'address' => 'required',
            'inputFile' => 'required',
        ];
    }

    public function messages()
    {
        $messages = [
            'name.required'=>'khong duoc bo trong ten',
            'name.alpha' => 'ten chi duoc chua chu cai',
            'name.min' => 'ten qua ngan',
        ];
        return $messages;
    }
}
