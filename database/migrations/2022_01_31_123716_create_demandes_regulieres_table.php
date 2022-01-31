<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesRegulieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes_regulieres', function (Blueprint $table) {
            $table->id(column:"demande_reguliere_id");
            $table->time(column:"heure_depart");
            
            $table->unsignedBigInteger('utilisateur_id');
            $table->foreign('utilisateur_id')->references('utilisateur_id')->on('utilisateurs');
            $table->unsignedBigInteger('jour_id');
            $table->foreign('jour_id')->references('jour_id')->on('jours');
            $table->unsignedBigInteger('ville_id_depart');
            $table->foreign('ville_id_depart')->references('ville_id')->on('villes');
            $table->unsignedBigInteger('ville_id_arrivee');
            $table->foreign('ville_id_arrivee')->references('ville_id')->on('villes');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demandes_reguliers');
    }
}
