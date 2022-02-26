<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\ImplicitRule;

class UniqueForTenant implements ImplicitRule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
	  dd( $attribute );
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return ':attribute tersebut sudah digunakan, mohon gunakan :attribute lain';
    }
}
