<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Str;
use Faker\factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
       // $this->call(MemberTableSeeder::class);
       $faker = Faker::create();
      // foreach(range(1,10) as $index){
        for($i=0; $i<10;$i++){
        DB::table('members')->insert([
            'name' => $faker->name,
            'email' =>  $faker->safeEmail(),
            'password' => bcrypt('password'),
        ]);

       };
      
    }
}
