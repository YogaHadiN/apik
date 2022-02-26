<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarifs', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('jenis_tarif_id');
            $table->integer('biaya');
            $table->unsignedBigInteger('asuransi_id');
            $table->integer('fee_dokter');
            $table->integer('fee_asisten_tindakan');
            $table->unsignedBigInteger('tipe_tindakan_id');
            $table->unsignedBigInteger('tenant_id')->index();
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
        Schema::dropIfExists('tarifs');
    }
}
