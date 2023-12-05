<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("emplois_du_temps",function(Blueprint $table){
            $table->bigIncrements("id");
            $table->string("CC");
            $table->string("Jour");
            $table->string("D1");
            $table->string("D2");
            $table->string("D3");
            $table->string("D4"); 
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
        Schema::dropIfExists("emplois_du_temps");
    }
}
