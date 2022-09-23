<?php

namespace App\Http\Requests;

use App\Rules\NumberOfWords;
use Illuminate\Foundation\Http\FormRequest;

class ContestSubmissionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255', new NumberOfWords(4)],
            'email' => ['required', 'email', 'max:255', 'unique:contest_submissions']
        ];
    }
}
