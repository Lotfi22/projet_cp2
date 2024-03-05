<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participations', function (Blueprint $table) {
            $table->bigIncrements('id');
              $table->unsignedBigInteger('id_evenement');
            $table->foreign('id_evenement')->references('id')->on('evenements');
              $table->unsignedBigInteger('id_adherant');
            $table->foreign('id_adherant')->references('id')->on('adherants');
            $table->timestamp('heure_debut')->nullable()->default(null);
            $table->timestamp('heure_fin')->nullable()->default(null);
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
        Schema::dropIfExists('participations');
    }
}
