<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nama_peserta')->nullable();
            $table->string('nomor_asuransi')->nullable();
            $table->unsignedBigInteger('asuransi_id');
            $table->integer('jenis_peserta')->nullable();
            $table->tinyInteger('sex');
            $table->longText('alamat')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('image')->nullable();
            $table->string('ktp_image')->nullable();
            $table->string('bpjs_image')->nullable();
            $table->string('nomor_asuransi_bpjs')->nullable();
            $table->string('nomor_ktp')->nullable();
            $table->tinyInteger('jangan_disms');
            $table->tinyInteger('sudah_kontak_bulan_ini')->default(0);
            $table->tinyInteger('prolanis_ht');
            $table->tinyInteger('prolanis_dm');
            $table->string('prolanis_ht_flagging_image')->nullable();
            $table->string('prolanis_dm_flagging_image')->nullable();
            $table->string('kartu_asuransi_image')->nullable();
            $table->string('image_mime_type')->nullable();
            $table->string('ktp_image_mime_type')->nullable();
            $table->string('bpjs_image_mime_type')->nullable();
            $table->string('prolanis_ht_flagging_image_mime_type')->nullable();
            $table->string('prolanis_dm_flagging_image_mime_type')->nullable();
            $table->string('kartu_asuransi_image_mime_type')->nullable();
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
        Schema::dropIfExists('pasiens');
    }
}
