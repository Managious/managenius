<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'client_name'=>'required|string|max:255',
            'client_city'=>'nullable|string|max:255',
            'client_zone'=>'nullable|string|max:255',
            'client_type'=>'nullable|string|max:255',
            'client_address'=>'nullable|string|max:255',
            'client_email'=>'nullable|string|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'client_phone'=>'nullable|string|max:10',
            'client_discount'=>'required|integer',
            'client_points'=>'required|integer',
            'points_system'=>'required|integer',
            'points_reset_date'=>'required',
            'client_in_partnership'=>'required|string|max:255',
            'payment_type'=>'nullable|string|max:255',
        ];
    }
}
