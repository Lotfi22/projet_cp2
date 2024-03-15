<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->unsignedBigInteger('id_coach');
            $table->foreign('id_coach')->references('id')->on('coachs');
            $table->unsignedBigInteger('id_sport');
            $table->foreign('id_sport')->references('id')->on('sports');
            $table->unsignedBigInteger('id_abonnement');
            $table->foreign('id_abonnement')->references('id')->on('abonnements');
            $table->bigInteger('capacite');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groupes');
    }
}
