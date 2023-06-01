<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|max:255|min:5',
            'description' =>'nullable|max:800',
            'thumb' =>'nullable|min:8',
            'price' =>'required|max:255|min:4',
            'sale_date' =>'nullable|date',
            'type' =>'nullable|max:255',
        ];
    }
}
