<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatPivotTableTypeTransportUtilisateurs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_transport_utilisateurs', function (Blueprint $table) {
            $table->foreignId('type_transport_id')->references('type_transport_id')->on('type_transports')->constrained()->onDelete('cascade');
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
