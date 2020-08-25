<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->delete();

        for($i = 0; $i < 100; ++$i)
        {
            DB::table('books')->insert([
                'book_name' => 'Book' . $i,
                'image' => 'meryam',
                'author' => 'auth' . $i,
                'price' => rand(10,50),
                'number_pages' => rand(50,150),
                'user_id' => rand(1,10),
            ]);
        }
    }
}
