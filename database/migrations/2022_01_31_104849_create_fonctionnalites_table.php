<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFonctionnalitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fonctionnalites', function (Blueprint $table) {
            $table->id(column:"fontionnalite_id");
            $table->string(column:"libelle");
            $table->string(column:"libelle_menu_parent");
            $table->string(column:"libelle_menu_enfant");
            $table->string(column:"lien_menu");
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
        Schema::dropIfExists('fonctionnalites');
    }
}
