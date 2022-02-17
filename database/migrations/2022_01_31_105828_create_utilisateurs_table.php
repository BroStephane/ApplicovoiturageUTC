<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id(column: "id");
            $table->string(column: "nom");
            $table->string(column: "prenom");
            $table->string(column: "pseudo");
            $table->string(column: "mail");
            $table->string(column: "num_tel");
            $table->string(column: "mot_de_passe");

            $table->unique(['pseudo']);
            $table->unsignedBigInteger('sexe_id');
            $table->foreign('sexe_id')->references('sexe_id')->on('sexes');
            $table->unsignedBigInteger('fonction_id');
            $table->foreign('fonction_id')->references('fonction_id')->on('fonctions');
            $table->unsignedBigInteger('etat_compte_id');
            $table->foreign('etat_compte_id')->references('etat_compte_id')->on('etat_comptes');



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
        Schema::dropIfExists('utilisateurs');
    }
}
