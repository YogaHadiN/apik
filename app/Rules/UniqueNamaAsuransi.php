<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\ImplicitRule;
use App\Models\Asuransi;

class UniqueNamaAsuransi implements ImplicitRule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
	public $id;
    public function __construct($id = null)
    {
		$this->id = $id;
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
	  return $this->id? 
		!Asuransi::where('id', 'not like', $this->id)->where('nama', $value)->exists() :
	   	!Asuransi::where('nama', $value)->exists();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Nama asuransi sudah dipakai, mohon gunakan nama lain';
    }
}
