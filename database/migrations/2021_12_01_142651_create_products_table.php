<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'products', function ( Blueprint $table ) {
          $table->bigIncrements('id'); // by default the primary key is set to unsigned big integer
          $table->unsignedBigInteger('cat_id');
          $table->string( 'name' );
          $table->string( 'description' );
          $table->double( 'price' );
          $table->string( 'status' )->default( 'Active' );
          $table->tinyInteger( 'quantity' )->default( 0 );
          $table->timestamps();
          $table->foreign('cat_id')->references('id')->on('cats')->onDelete('cascade');
        } );


      }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
