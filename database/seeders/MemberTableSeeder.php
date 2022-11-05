<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'name' => 'arjuman1',
            'email' => 'arjumanjesmin1@gmail.com',
            'password' => bcrypt('arjumanjesmin@gmail.com'),
        ]);

        DB::table('members')->insert([
            'name' => 'arjuman2',
            'email' => 'arjumanjesmin221186@gmail.com',
            'password' => bcrypt('arjumanjesmin@gmail.com'),
        ]);
        DB::table('members')->insert($members);

       
    }
}
