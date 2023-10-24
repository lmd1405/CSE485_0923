<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\major; 
use Illuminate\Support\Facades\DB;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('majors')->delete();
        $faker = Faker::create();
        for ($i =0;$i<30;$i++){
            major::create([
                'name'=> $faker->userName(),
                'description'=> $faker->paragraph(),
                'duration'=>$faker->randomNumber(1,9),
            ]);
        }
    }
}
