<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulas', function (Blueprint $table) {
            $table->id();
            $table->longText('indikasi')->nullable();
            $table->longText('kontraindikasi')->nullable();
            $table->longText('efek_samping')->nullable();
            $table->tinyInteger('dijual_bebas')->default(1);
            $table->tinyInteger('fornas');
            $table->unsignedBigInteger('sediaan_id');
            $table->string('aturan_minum_id')->nullable();
            $table->longText('peringatan')->nullable();
            $table->longText('formula_json');
            $table->tinyInteger('boleh_dipuyer')->default(1);
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
        Schema::dropIfExists('formulas');
    }
}
