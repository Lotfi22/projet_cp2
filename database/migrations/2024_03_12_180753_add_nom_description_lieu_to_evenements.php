<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNomDescriptionLieuToEvenements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('evenements', function (Blueprint $table) {

            $table->string('nom',100);
            $table->text('description');
            $table->string('lieu');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evenements', function (Blueprint $table) {
            
            $table->dropColumn('nom');
            $table->dropColumn('description');
            $table->dropColumn('lieu');
            
        });
    }
}
