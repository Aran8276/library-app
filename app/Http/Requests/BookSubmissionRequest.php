<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookSubmissionRequest extends FormRequest
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
            'bookContent1' => 'required|max:131072',
            'bookContent2' => 'required|max:131072',
            'bookName' => 'required|max:150',
            'bookDescription' => 'nullable|max:1024',
        ];
    }
}
