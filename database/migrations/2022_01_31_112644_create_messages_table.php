<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id(column:"message_id");
            $table->string(column:"message");
            $table->dateTime(column:"date_envoie");

            $table->unsignedBigInteger('expediteur');
            $table->foreign('expediteur')->references('utilisateur_id')->on('utilisateurs'); 
            $table->unsignedBigInteger('destinataire');
            $table->foreign('destinataire')->references('utilisateur_id')->on('utilisateurs');
            

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
        Schema::dropIfExists('messages');
    }
}
