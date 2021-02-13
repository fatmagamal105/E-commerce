<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('product_tbl', function (Blueprint $table) {
           $table->increments("p_id");
           $table->string("p_name");
           $table->string("p_description");
           $table->integer("publication_status");
           $table->string("p_price");
           $table->string("p_size");
           $table->string("p_color");

           $table->unsignedBigInteger("m_id");
           $table->foreign("m_id")->references("m_id")->on("manufacture_tbl")->onDelete('cascade');

           $table->unsignedBigInteger("c_id");
           $table->foreign("c_id")->references("c_id")->on("category_tbl")->onDelete('cascade');

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
         Schema::dropIfExists('product_tbl');
     }
 }
