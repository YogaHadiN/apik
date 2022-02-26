<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Asuransi;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\AsuransiController
 */
class AsuransiControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $asuransis = Asuransi::factory()->count(3)->create();

        $response = $this->get(route('asuransi.index'));

        $response->assertOk();
        $response->assertViewIs('asuransi.index');
        $response->assertViewHas('asuransis');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('asuransi.create'));

        $response->assertOk();
        $response->assertViewIs('asuransi.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\AsuransiController::class,
            'store',
            \App\Http\Requests\AsuransiStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $nama               = $this->faker->word;
        $tipe_asuransi_id   = $this->faker->randomNumber();
        $kali_obat          = $this->faker->randomFloat(/** double_attributes **/);
        $coa_id             = $this->faker->randomNumber();
        $aktif              = $this->faker->numberBetween(-8, 8);
        $pelunasan_transfer = $this->faker->numberBetween(-8, 8);
        $tenant_id          = $this->faker->randomNumber();

        $response = $this->post(route('asuransi.store'), [
            'nama'               => $nama,
            'tipe_asuransi_id'   => $tipe_asuransi_id,
            'kali_obat'          => $kali_obat,
            'coa_id'             => $coa_id,
            'aktif'              => $aktif,
            'pelunasan_transfer' => $pelunasan_transfer,
            'tenant_id'          => $tenant_id,
        ]);

        $asuransis = Asuransi::query()
            ->where('nama', $nama)
            ->where('tipe_asuransi_id', $tipe_asuransi_id)
            ->where('kali_obat', $kali_obat)
            ->where('coa_id', $coa_id)
            ->where('aktif', $aktif)
            ->where('pelunasan_transfer', $pelunasan_transfer)
            ->where('tenant_id', $tenant_id)
            ->get();
        $this->assertCount(1, $asuransis);
        $asuransi = $asuransis->first();

        $response->assertRedirect(route('asuransi.index'));
        $response->assertSessionHas('asuransi.id', $asuransi->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $asuransi = Asuransi::factory()->create();
        $response = $this->get(route('asuransi.show', $asuransi));
        $response->assertOk();
        $response->assertViewIs('asuransi.show');
        $response->assertViewHas('asuransi');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $asuransi = Asuransi::factory()->create();

        $response = $this->get(route('asuransi.edit', $asuransi));

        $response->assertOk();
        $response->assertViewIs('asuransi.edit');
        $response->assertViewHas('asuransi');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\AsuransiController::class,
            'update',
            \App\Http\Requests\AsuransiUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $asuransi           = Asuransi::factory()->create();
        $nama               = $this->faker->word;
        $tipe_asuransi_id   = $this->faker->randomNumber();
        $kali_obat          = $this->faker->randomFloat(/** double_attributes **/);
        $coa_id             = $this->faker->randomNumber();
        $aktif              = $this->faker->numberBetween(-8, 8);
        $pelunasan_transfer = $this->faker->numberBetween(-8, 8);
        $tenant_id          = $this->faker->randomNumber();

        $response = $this->put(route('asuransi.update', $asuransi), [
            'nama'               => $nama,
            'tipe_asuransi_id'   => $tipe_asuransi_id,
            'kali_obat'          => $kali_obat,
            'coa_id'             => $coa_id,
            'aktif'              => $aktif,
            'pelunasan_transfer' => $pelunasan_transfer,
            'tenant_id'          => $tenant_id,
        ]);

        $asuransi->refresh();

        $response->assertRedirect(route('asuransi.index'));
        $response->assertSessionHas('asuransi.id', $asuransi->id);

        $this->assertEquals($nama, $asuransi->nama);
        $this->assertEquals($tipe_asuransi_id, $asuransi->tipe_asuransi_id);
        $this->assertEquals($kali_obat, $asuransi->kali_obat);
        $this->assertEquals($coa_id, $asuransi->coa_id);
        $this->assertEquals($aktif, $asuransi->aktif);
        $this->assertEquals($pelunasan_transfer, $asuransi->pelunasan_transfer);
        $this->assertEquals($tenant_id, $asuransi->tenant_id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $asuransi = Asuransi::factory()->create();

        $response = $this->delete(route('asuransi.destroy', $asuransi));

        $response->assertRedirect(route('asuransi.index'));

        $this->assertDeleted($asuransi);
    }
}
