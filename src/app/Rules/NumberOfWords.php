<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NumberOfWords implements Rule
{
    private ?string $attribute = null;
    private int $expected;

    public function __construct(int $expected)
    {
        $this->expected = $expected;
    }

    public function passes($attribute, $value): bool
    {
        $this->attribute = $attribute;
        $trimmed = trim($value);
        $numWords = count(explode(' ', $trimmed));
        return $numWords <= $this->expected;
    }

    public function message(): string
    {
        return 'The '.$this->attribute.' field must have to be equal or less than '.$this->expected.'  words';
    }
}
