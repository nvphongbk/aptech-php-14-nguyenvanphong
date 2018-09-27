<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder_categoris extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 33;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('categories')->insert([ //,
                'name' => $faker->name,
            ]);
        }
    }
}
