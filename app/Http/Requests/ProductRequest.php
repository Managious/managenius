<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'product_name' => 'required|string|max:255',
            'product_brand' => 'required|string|max:255',
            'product_category' => 'required|string|max:255',
            'product_subcategory' => 'nullable|string|max:255',
            'product_supplier' => 'required|string|max:255',
            'product_cmup' => 'required|numeric',
            'product_price' => 'required|numeric',
            'product_location' => 'nullable|string|max:255',
            'product_ean_code' => 'nullable|string|max:255',
            'product_stock_1' => 'required|integer',
            'product_image_link' => 'nullable|string|max:255',
            'product_return_condition' => 'nullable|string|max:255',
            'product_discount' => 'required|numeric',
            'product_points' => 'required|integer',
            'product_in_partnership' => 'required|boolean',
        ];
    }
}
