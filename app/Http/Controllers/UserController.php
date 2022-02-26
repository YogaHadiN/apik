<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Models\Titel;
use App\Models\Role;
use Auth;
use DB;
use Storage;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

	public $sexes;
	public $titels;
	public $roles;
	public $menikah_options;
	public $active_options;
		/**
		* @param $dependencies
		*/
	public function __construct()
	{
	  $this->sexes = [
		  '' => '- Pilih Jenis Kelamin -',
		  0 => 'Perempuan',
		  1 => 'Laki-laki',
	  ];

      $this->menikah_options = [
          '' => '- Pilih Status Pernikahan -',
          0  => 'Belum Menikah',
          1  => 'Sudah Menikah',
      ];

      $this->active_options = [
          '' => '- Pilih Status Akun -',
          0  => 'Tidak Aktif',
          1  => 'Aktif'
      ];

	}
		
    public function index()
    {
		$users = User::when(request('term'), function ($query, $term) {
			$query->where('name', 'like', "%$term%");
		})->paginate(15);
        return inertia('Users/Index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return inertia('Users/Edit', [
		  'roles'           => Role::pluck('role', 'id'), // traits dapat terpanggil disini
		  'menikah_options' => $this->menikah_options,
		  'active_options'  => $this->active_options,
		  'titels'          => Titel::pluck('titel', 'id'),
		  'sexes'           => $this->sexes,
		]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
	  DB::beginTransaction();
	  try {
		$user    = User::create($request->except(['password_confirmation', 'phones']));
		$user->phones()->createMany( onlyWhenNumberExists( $request->phones ) );
        session()->flash('message', 'User berhasil di buat');
	  	DB::commit();
        return redirect()->route('users.index');
	  } catch (\Exception $e) {
	  	DB::rollback();
	  	throw $e;
	  }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::with('role', 'titel')->where('id', $id )->first();
        return inertia('Users/Show', compact(
            'user'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

		return inertia('Users/Edit', [
		  'usr'            =>  User::with('phones')->where('id', $id )->first(),
		  'roles'           => Role::pluck('role', 'id'),
		  'active_options'  => $this->active_options,
		  'titels'          => Titel::pluck('titel', 'id'),
		  'menikah_options' => $this->menikah_options,
		  'sexes'           => $this->sexes,
		]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
		$user->phones()->delete();
        $user->update($request->except(['password_confirmation', 'phones']));
		$user->phones()->createMany( onlyWhenNumberExists( $request->phones ) );

        session()->flash('message', 'User berhasil di update');

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        session()->flash('message', 'User berhasil dihapus');
		$user = User::destroy($id);
        return redirect()->route('users.index');
    }

    public function getImage($id, $name){
        $user           = User::find($id);
        if (!is_null( $user )) {
            $mime_type_name = $name . '_mime_type';
            $photo_path     = $user->$name;
            return response(Storage::disk('s3')->get($photo_path))
                ->header('Content-Type', $user->$mime_type_name);
        } else {
            return abort(403);
        }
    }
    /**
     * undocumented function
     *
     * @return void
     */
    private function moveBucketToPrivate($path)
    {
        try {
            $s3 = Storage::disk('s3');
            $s3_temp = $s3->getDriver()->getAdapter()->getClient()->copy(
                env('s3_public'),
                $path,
                env('s3'),
                $path
            );
        } catch(\Exception $e) {
            dd($e->getMessage());
        }
    }
	/**
	* undocumented function
	*
	* @return void
	*/
	public function uploadImage(Request $request, $name )
	{
		if( $request->hasfile($name) ) {

            $filepath    = 'img/users/' . Auth::id() . '/' . $name . '/';

			$uploadcover = $request->file($name);
			$extension   = $uploadcover->getClientOriginalExtension();
			$filename    = Auth::id() . time() . '.' . $extension;
            $fullpath    = $filepath . $filename;
            $mime_type = $uploadcover->getClientMimeType();

			Storage::disk('s3')->put($fullpath, file_get_contents($uploadcover));

            return [
                'file_path' => Storage::disk('s3')->url($fullpath),
                'file_name'  => $fullpath
            ];
		} else {
			return null;
		}
	}
	
	/**
	* undocumented function
	*
	* @return void
	*/
	private function valid($request, $user = null)
	{
		if (isset($user)) {
			$email_validation =  'required|string|email|max:255|unique:users,email,' . $user->id;
			$password_validation = ['nullable', 'confirmed', Rules\Password::defaults()];
		} else {
			$email_validation =  'required|string|email|max:255|unique:users';
			$password_validation = ['required', 'confirmed', Rules\Password::defaults()];
		}
          $data = $request->validate([
			  'name'                           => 'required|string|max:255',
			  'email'                          => $email_validation,
			  'password'                       => $password_validation,
			  'email_verified_at'              => ['nullable'],
			  'alamat_domisili'                => ['nullable'],
			  'alamat_ktp'                     => ['nullable'],
			  'titel_id'                       => ['required'],
			  'no_ktp'                         => ['nullable'],
			  'no_str'                         => ['nullable'],
			  'no_hp'                          => ['nullable'],
			  'universitas_asal'               => ['nullable'],
			  'tanggal_lulus'                  => ['nullable', 'date_format:Y-m-d'],
			  'tanggal_lahir'                  => ['nullable', 'date_format:Y-m-d'],
			  'tanggal_mulai'                  => ['nullable', 'date_format:Y-m-d'],
			  'photo'                          => ['nullable'],
			  'phones'                          => ['required', 'array'],
			  'ktp_image'                      => ['nullable','image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
			  'str_image'                      => ['nullable','image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
			  'npwp_image'                     => ['nullable','image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
			  'sip_image'                      => ['nullable','image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
			  'kartu_keluarga_image'           => ['nullable','image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
			  'menikah'                        => ['required'],
			  'npwp'                           => ['nullable'],
			  'jumlah_anak'                    => ['nullable', 'integer'],
			  'jenis_kelamin'                  => ['required'],
			  'nomor_rekening'                 => ['nullable'],
			  'bank'                           => ['nullable'],
			  'gaji_tetap'                     => ['nullable', 'integer'],
			  'role_id'                        => ['required'],
			  'active'                         => ['required'],
          ]);
		return $data;
	}
	


}
