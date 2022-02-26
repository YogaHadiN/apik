<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NamaAyahHarusDiisi implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */

    public $tanggal_lahir;
    public $nama_ibu;
    public function __construct($nama_ibu, $tanggal_lahir)
    {
        $this->nama_ibu      = $nama_ibu;
        $this->tanggal_lahir = $tanggal_lahir;
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
        if (
            empty($this->nama_ibu) &&
            empty($this->tanggal_lahir) &&
            empty($value)
        ) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Nama Ayah harus diisi kalau nama ibu dan tanggal lahir kosong';
    }
}
