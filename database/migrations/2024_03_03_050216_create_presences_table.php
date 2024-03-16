<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_adherant');
            $table->foreign('id_adherant')->references('id')->on('adherants');
            $table->unsignedBigInteger('id_seance');
            $table->foreign('id_seance')->references('id')->on('seances');
            $table->timestamp('heure_debut')->nullable()->default(null);
            $table->timestamp('heure_fin')->nullable()->default(null);
            $table->boolean('evaluation');
            $table->text('description_eve'); 
            $table->boolean('visible')->default(true);
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
        Schema::dropIfExists('presences');
    }
}
