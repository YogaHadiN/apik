<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NamaIbuHarusDiisi implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public $tanggal_lahir;
    public $nama_ayah;
    public function __construct($nama_ayah, $tanggal_lahir)
    {
        $this->nama_ayah     = $nama_ayah;
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
            empty($this->nama_ayah) &&
            empty($this->tanggal_lahir) &&
            empty($value)
        ) {
            return false;
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Nama Ibu harus diisi kalau nama ayah dan tanggal lahir kosong';
    }
}
