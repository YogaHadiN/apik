<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsuransisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asuransis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->longText('alamat')->nullable();
            $table->date('tanggal_berakhir')->nullable();
            $table->longText('alamat_penagihan')->nullable();
            $table->longText('catatan_pelayanan_gigi')->nullable();
            $table->unsignedBigInteger('tipe_asuransi_id');
            $table->double('kali_obat', 8,1);
            $table->unsignedBigInteger('coa_id');
            $table->string('kata_kunci')->nullable();
            $table->tinyInteger('aktif');
            $table->tinyInteger('pelunasan_transfer');
            $table->unsignedBigInteger('tenant_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asuransis');
    }
}
