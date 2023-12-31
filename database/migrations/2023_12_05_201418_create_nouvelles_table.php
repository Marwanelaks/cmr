<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNouvellesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nouvelles', function (Blueprint $table) {
            $table->id();
            $table->string("titre");
            $table->string("image");
            $table->string("description");
            $table->enum('type', ['SPORT', 'FORMATION']); 
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
        Schema::dropIfExists('nouvelles');
    }
}
