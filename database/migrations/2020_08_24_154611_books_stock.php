<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BooksStock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_book',function (Blueprint $table){
            $table->increments('id_stock_book');
            $table->integer('book_id')->unsigned();
            $table->integer('stock_id')->unsigned();
            $table->integer('s_quantity')->unsigned();
            $table->foreign('book_id')->references('id')->on('books')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('stock_id')->references('id')->on('stock')
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
        Schema::table('stock_book', function(Blueprint $table) {
            $table->dropForeign('stocks_books_id_foreign');
        });
        Schema::drop('stock_book');
    }
}
