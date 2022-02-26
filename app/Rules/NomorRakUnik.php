<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Rak;

class NomorRakUnik implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public $rak;
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
        $this->rak = Rak::where('nomor_rak', $value)->first();
        return is_null($this->rak);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Rak <strong> '. $this->rak->nomor_rak .'</strong> sudah pernah dibuat, buatlah rak baru, atau klik link <a class="text-blue-600" href="/raks/' . $this->rak->id. '/create/merek">disini</a> untuk membuat merek baru dari tersebut';
    }
}
