<?php

use Illuminate\Database\Seeder;
use App\NhanVien;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++){
            $nv = new NhanVien();
            $nv->email = $faker->email;
            $nv->name = $faker->name;
            $nv->address = $faker->address;
            $nv->save();
        }
    }
}
