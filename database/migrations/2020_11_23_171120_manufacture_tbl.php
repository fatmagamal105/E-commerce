<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ManufactureTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
       {
         Schema::create('manufacture_tbl', function (Blueprint $table) {
             $table->bigIncrements("m_id");
             $table->string("m_name");
             $table->string("m_description");
             $table->integer("publication_status");
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
           Schema::dropIfExists('manufacture_tbl');
       }
   }
