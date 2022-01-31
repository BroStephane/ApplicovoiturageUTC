<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatPivotTableFonctionnalitePrivileges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fonctionnalite_privilege', function (Blueprint $table) {
            $table->foreignId('fonctionnalite_id')->references('fonctionnalite_id')->on('fonctionnalite')->constrained()->onDelete('cascade');
            $table->foreignId('privilege_id')->references('privilege_id')->on('privilege')->constrained()->onDelete('cascade');

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
