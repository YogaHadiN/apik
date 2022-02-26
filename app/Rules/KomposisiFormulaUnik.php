<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Formula;

class KomposisiFormulaUnik implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public $formula;
    public $sediaan_id;
    public function __construct($sediaan_id)
    {
        $this->sediaan_id = $sediaan_id;
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
		$fm            = new Formula;
		$formula_json  = $fm->komposisiSortedWithSediaan( $value, $this->sediaan_id );
        $this->formula = Formula::where('formula_json', $formula_json)->first();
        return is_null($this->formula);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Formula harus unik. Komposisi ini sudah dibuat sebelumnya, klik <a class="text-blue-600" href="/formulas/' . $this->formula->id. '/create/rak">disini</a> apabila ingin menambah rak dengan komposisi yang sama';
    }
}
