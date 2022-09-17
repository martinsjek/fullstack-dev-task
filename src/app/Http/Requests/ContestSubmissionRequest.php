<?php

namespace App\Http\Requests;

use App\Rules\NumberOfWords;
use Illuminate\Foundation\Http\FormRequest;

class ContestSubmissionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', new NumberOfWords(4)],
            'email' => ['required', 'email', 'unique:contest_submissions']
        ];
    }
}
