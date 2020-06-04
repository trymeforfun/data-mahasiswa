<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
       
        for ($i=0; $i < 10 ; $i++) { 
            DB::table('mahasiswa')->insert([
                'nama' => $faker->name,
                'nim' => $faker->numberBetween(1000, 9999),
                'email' => $faker->email->unique()
            ]);
        }
    }
}
