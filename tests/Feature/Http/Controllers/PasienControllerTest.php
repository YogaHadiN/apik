<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PasienController
 */
class PasienControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $pasiens = Pasien::factory()->count(3)->create();

        $response = $this->get(route('pasien.index'));

        $response->assertOk();
        $response->assertViewIs('pasien.index');
        $response->assertViewHas('pasiens');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('pasien.create'));

        $response->assertOk();
        $response->assertViewIs('pasien.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PasienController::class,
            'store',
            \App\Http\Requests\PasienStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $nama = $this->faker->word;
        $asuransi_id = $this->faker->randomNumber();
        $jenis_peserta = $this->faker->numberBetween(-10000, 10000);
        $sex = $this->faker->numberBetween(-8, 8);
        $alamat = $this->faker->text;
        $jangan_disms = $this->faker->numberBetween(-8, 8);
        $sudah_kontak_bulan_ini = $this->faker->numberBetween(-8, 8);
        $prolanis_ht = $this->faker->numberBetween(-8, 8);
        $prolanis_dm = $this->faker->numberBetween(-8, 8);

        $response = $this->post(route('pasien.store'), [
            'nama' => $nama,
            'asuransi_id' => $asuransi_id,
            'jenis_peserta' => $jenis_peserta,
            'sex' => $sex,
            'alamat' => $alamat,
            'jangan_disms' => $jangan_disms,
            'sudah_kontak_bulan_ini' => $sudah_kontak_bulan_ini,
            'prolanis_ht' => $prolanis_ht,
            'prolanis_dm' => $prolanis_dm,
        ]);

        $pasiens = Pasien::query()
            ->where('nama', $nama)
            ->where('asuransi_id', $asuransi_id)
            ->where('jenis_peserta', $jenis_peserta)
            ->where('sex', $sex)
            ->where('alamat', $alamat)
            ->where('jangan_disms', $jangan_disms)
            ->where('sudah_kontak_bulan_ini', $sudah_kontak_bulan_ini)
            ->where('prolanis_ht', $prolanis_ht)
            ->where('prolanis_dm', $prolanis_dm)
            ->get();
        $this->assertCount(1, $pasiens);
        $pasien = $pasiens->first();

        $response->assertRedirect(route('pasien.index'));
        $response->assertSessionHas('pasien.id', $pasien->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $pasien = Pasien::factory()->create();

        $response = $this->get(route('pasien.show', $pasien));

        $response->assertOk();
        $response->assertViewIs('pasien.show');
        $response->assertViewHas('pasien');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $pasien = Pasien::factory()->create();

        $response = $this->get(route('pasien.edit', $pasien));

        $response->assertOk();
        $response->assertViewIs('pasien.edit');
        $response->assertViewHas('pasien');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PasienController::class,
            'update',
            \App\Http\Requests\PasienUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $pasien = Pasien::factory()->create();
        $nama = $this->faker->word;
        $asuransi_id = $this->faker->randomNumber();
        $jenis_peserta = $this->faker->numberBetween(-10000, 10000);
        $sex = $this->faker->numberBetween(-8, 8);
        $alamat = $this->faker->text;
        $jangan_disms = $this->faker->numberBetween(-8, 8);
        $sudah_kontak_bulan_ini = $this->faker->numberBetween(-8, 8);
        $prolanis_ht = $this->faker->numberBetween(-8, 8);
        $prolanis_dm = $this->faker->numberBetween(-8, 8);

        $response = $this->put(route('pasien.update', $pasien), [
            'nama' => $nama,
            'asuransi_id' => $asuransi_id,
            'jenis_peserta' => $jenis_peserta,
            'sex' => $sex,
            'alamat' => $alamat,
            'jangan_disms' => $jangan_disms,
            'sudah_kontak_bulan_ini' => $sudah_kontak_bulan_ini,
            'prolanis_ht' => $prolanis_ht,
            'prolanis_dm' => $prolanis_dm,
        ]);

        $pasien->refresh();

        $response->assertRedirect(route('pasien.index'));
        $response->assertSessionHas('pasien.id', $pasien->id);

        $this->assertEquals($nama, $pasien->nama);
        $this->assertEquals($asuransi_id, $pasien->asuransi_id);
        $this->assertEquals($jenis_peserta, $pasien->jenis_peserta);
        $this->assertEquals($sex, $pasien->sex);
        $this->assertEquals($alamat, $pasien->alamat);
        $this->assertEquals($jangan_disms, $pasien->jangan_disms);
        $this->assertEquals($sudah_kontak_bulan_ini, $pasien->sudah_kontak_bulan_ini);
        $this->assertEquals($prolanis_ht, $pasien->prolanis_ht);
        $this->assertEquals($prolanis_dm, $pasien->prolanis_dm);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $pasien = Pasien::factory()->create();

        $response = $this->delete(route('pasien.destroy', $pasien));

        $response->assertRedirect(route('pasien.index'));

        $this->assertDeleted($pasien);
    }
}
