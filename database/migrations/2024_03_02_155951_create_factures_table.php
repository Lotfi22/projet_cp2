<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_gestionnaire');
            $table->foreign('id_gestionnaire')->references('id')->on('gestionnaires');
            $table->double('ht');
            $table->double('tva');
            $table->double('versement');
            $table->double('droit_timbre');
            $table->string('etat_paiement', 100);
            $table->softDeletes();
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
        Schema::dropIfExists('factures');
    }
}
