<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function(Blueprint $table) {
            $table->increments('id');
            $table->string('book_name', 100)->unique();
            $table->mediumText('image')->nullable();
            $table->string('author', 100);
            $table->float('price');
            $table->integer('number_pages');
            $table->foreignId('user_id')->constrained('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function(Blueprint $table) {
            $table->dropForeign('books_id_foreign');
        });
        Schema::drop('books');
    }
}
