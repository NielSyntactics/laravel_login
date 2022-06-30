<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email_input'   => 'required|unique:users,email',
            'password'      => 'required|confirmed|min:8',
            'orgname'       =>'required|unique:user_information,orgname',
            'adviser'       =>'required',
            'representative'=>'required',
            'image'         =>'required|image|mimes:jpg,png,jpeg',
            'vision'        =>'required',
            'mission'       =>'required',
            'college_id'    =>'required|exists:colleges,id',
        ];
    }
}
