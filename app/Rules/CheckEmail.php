<?php

namespace App\Rules\Api;

use Illuminate\Contracts\Validation\Rule;

class CheckEmail implements Rule
{
    public function __construct()
    {
        //
    }

    public function passes($attribute, $value)
    {
        //
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        //
    }
}
