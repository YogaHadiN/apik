<?php

namespace App\Actions\Fortify;

use App\Models\User;
use DB;
use App\Models\Coa;
use App\Models\Asuransi;
use App\Models\AturanMinum;
use App\Models\Role;
use App\Models\JenisTarif;
use App\Models\Tarif;
use App\Models\TipeAsuransi;
use App\Models\TipeTindakan;
use App\Models\Titel;
use App\Models\Tenant;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        DB::beginTransaction();
        try {
            Validator::make($input, [
                'name'     => ['required', 'string', 'max:255'],
                'tenant'   => ['required', 'string', 'max:255', 'unique:tenants'],
                'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => $this->passwordRules(),
                'terms'    => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
            ])->validate();

            $tenant = Tenant::create([
                'tenant'     => $input['tenant'],
                'owner_name' => $input['name']
            ]);
            $titel = Titel::where('tenant_id', $tenant->id)->where('titel', 'Tidak ada titel')->first();
            $role  = Role::where('tenant_id', $tenant->id)->where('role', 'owner')->first();
            DB::commit();
            return User::create([
                'name'      => $input['name'],
                'email'     => $input['email'],
                'tenant_id' => $tenant->id,
                'role_id'   => $role->id,
                'titel_id'  => $titel->id,
                'password'  => $input['password'],
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }
	/**
	* undocumented function
	*
	* @return void
	*/
	private function prepareModelForThisTenant($model)
	{
		return $model->makeHidden([ 'id', 'created_at', 'updated_at', 'tenant_id' ])->toArray();
	}
	
}
