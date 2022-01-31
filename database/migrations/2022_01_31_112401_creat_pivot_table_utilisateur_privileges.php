<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatPivotTableUtilisateurPrivileges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateur_privilege', function (Blueprint $table) {
            $table->foreignId('privilege_id')->references('privilege_id')->on('privileges')->constrained()->onDelete('cascade');
            $table->foreignId('utilisateur_id')->references('utilisateur_id')->on('utilisateurs')->constrained()->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
