<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoryTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {

         Schema::create('category_tbl', function (Blueprint $table) {
             $table->bigIncrements("c_id");
             $table->string("name");
             $table->string("description");
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
         Schema::dropIfExists('category_tbl');
     }
 }
