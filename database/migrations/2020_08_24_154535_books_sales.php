<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BooksSales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_book',function (Blueprint $table){
            $table->increments('id_sale_book');
            $table->integer('book_id')->unsigned();
            $table->integer('sale_id')->unsigned();
            $table->integer('quantity')->unsigned();
            $table->foreign('book_id')->references('id')->on('books')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('sale_id')->references('id')->on('sales')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sale_book', function(Blueprint $table) {
            $table->dropForeign('sales_books_id_foreign');
        });
        Schema::drop('sale_book');
    }
}
