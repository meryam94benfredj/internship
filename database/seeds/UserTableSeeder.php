<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        for($i = 0; $i < 10; ++$i)
        {
            DB::table('users')->insert([
                'name' => 'Library' . $i,
                'email' => 'email' . $i . '@gmail.com',
                'password' => bcrypt('password' . $i),
            ]);
        }
    }
}
