<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedBigInteger('titel_id')->index();
            $table->timestamp('email_verified_at')->nullable();
            $table->longText('alamat_domisili')->nullable();
            $table->longText('alamat_ktp')->nullable();
            $table->string('no_ktp')->nullable();
            $table->string('no_str')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('universitas_asal')->nullable();
            $table->date('tanggal_lulus')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->string('photo')->nullable();
            $table->string('photo_mime_type')->nullable();
            $table->string('ktp_image')->nullable();
            $table->string('ktp_image_mime_type')->nullable();
            $table->string('str_image')->nullable();
            $table->string('str_image_mime_type')->nullable();
            $table->string('npwp_image')->nullable();
            $table->string('npwp_image_mime_type')->nullable();
            $table->string('sip_image')->nullable();
            $table->string('sip_image_mime_type')->nullable();
            $table->string('kartu_keluarga_image')->nullable();
            $table->string('kartu_keluarga_image_mime_type')->nullable();
            $table->tinyInteger('menikah')->default(0);
            $table->string('npwp')->nullable();
            $table->integer('jumlah_anak')->default(0);
            $table->tinyInteger('jenis_kelamin')->default(0);
            $table->string('nomor_rekening')->nullable();
            $table->string('bank')->nullable();
            $table->integer('gaji_tetap')->default(0);
            $table->unsignedBigInteger('role_id')->index();
            $table->unsignedBigInteger('tenant_id')->index();
            $table->boolean('active')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
