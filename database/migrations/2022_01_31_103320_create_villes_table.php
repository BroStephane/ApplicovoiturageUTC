<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villes', function (Blueprint $table) {
            $table->id(column:"ville_id");
            $table->string(column:"ville_departement");
            $table->string(column:"ville_slug");
            $table->string(column:"ville_nom_reel");
            $table->string(column:"ville_code_postal");
            $table->string(column:"ville_commune");
            $table->string(column:"ville_code_commune");
            $table->integer(column:"ville_arrondissement");
            $table->float(column:"ville_longitude_deg");
            $table->float(column:"ville_latitude_deg");
            $table->string(column:"ville_longitutude_grd");
            $table->string(column:"ville_latitude_grd");
            $table->string(column:"ville_longitude_dms");
            $table->string(column:"ville_latitude_dms");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('villes');
    }
}
