<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

class CreateNotebookRequest extends FormRequest
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
            'full_name' => ['required','string','max:40','unique:notebooks'],
            'company' => ['string','max:40'],
            'telephone' => ['required','string','max:40','unique:notebooks'],
            'email' => ['required','email','max:255','unique:notebooks'],
            'date_of_birth' => ['max:40'],
            'image' => ['max:255'],
        ];
    }
}
