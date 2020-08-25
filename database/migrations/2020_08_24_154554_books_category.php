<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BooksCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_book',function (Blueprint $table){
            $table->increments('id_category_book');
            $table->integer('book_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->foreign('book_id')->references('id')->on('books')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('category_id')->references('id')->on('category')
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
        Schema::table('category_book', function(Blueprint $table) {
            $table->dropForeign('category_books_id_foreign');
        });
        Schema::drop('category_book');
    }
}
