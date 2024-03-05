<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdQrToGestionnaires extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gestionnaires', function (Blueprint $table) {

            $table->bigInteger("id_qr");

            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gestionnaires', function (Blueprint $table) 
        {

            $table->dropColumn('id_qr');

            //
        });
    }
}
