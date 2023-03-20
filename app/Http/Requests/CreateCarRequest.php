<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCarRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'brand' => 'required|string|between:2,255',
            'model' => 'required|string|between:2,255',
            'year' => 'required|integer|between:1970,2030',
            'max_speed' => 'integer|between:20,300',
            'is_automatic' => 'required|boolean',
            'engine' => 'required|string|in:electric,hybrid,gas,diesel',
            'number_of_doors' => 'required|integer|between:2,5',
        ];
    }
}
