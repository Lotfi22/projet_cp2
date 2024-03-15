<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdherantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adherants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_qr');
            $table->foreign('id_qr')->references('id')->on('qrs');
            $table->string('nom', 100);
            $table->string('prenom', 100);
            $table->date('date_naissance');
            $table->string('genre');
            $table->string('num_tel');
            $table->string('num_tel_urgence')->nullable();
            $table->string('dossier_medical')->nullable();
            $table->text('adresse')->nullable();
            $table->text('email')->nullable();
            $table->string('type_abonnement');
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
        Schema::dropIfExists('adherants');
    }
}
