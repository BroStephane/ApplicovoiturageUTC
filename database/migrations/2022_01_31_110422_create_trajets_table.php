<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrajetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trajets', function (Blueprint $table) {
            $table->id(column:"numero_trajet");
            $table->dateTime(column:"date_de_publication");
            $table->string(column:"commentaire");
            $table->integer(column:"nb_passager");
            $table->dateTime(column:"date_heure_depart");
            $table->string(column:"adresse_depart");
            $table->string(column:"adresse_arrivee");
            $table->string(column:"marque_voiture");
            $table->string(column:"model_voiture");
            $table->string(column:"couleur_voiture");

            $table->unsignedBigInteger('etat_id');
            $table->foreign('etat_id')->references('etat_id')->on('etats');
            $table->unsignedBigInteger('utilisateur_id');
            $table->foreign('utilisateur_id')->references('utilisateur_id')->on('utilisateurs');
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
        Schema::dropIfExists('trajets');
    }
}
