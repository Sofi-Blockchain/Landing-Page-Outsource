<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;

class ValidUrl implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        try {
            $response = Http::head($value);
            if ($response->status() === 200) {
                // Đường dẫn tồn tại  
            }
        } catch (\Exception $e) {
            $fail('Đường dẫn không tồn tại');
        }
    }
}
