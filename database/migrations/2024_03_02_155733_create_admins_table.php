<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_qr')->nullable();
            $table->foreign('id_qr')->references('id')->on('qrs');
            $table->string('nom',100);
            $table->string('prenom',100);
            $table->char('genre',100);
            $table->date('date_naissance');
            $table->string('num_telephone',100);
            $table->string('num_urgence',100)->nullable();
            $table->string('adresse',100);
            $table->string('email',100);
            $table->string('password',100);
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
        Schema::dropIfExists('admins');
    }
}
