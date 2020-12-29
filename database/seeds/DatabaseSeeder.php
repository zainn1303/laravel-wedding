<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(VendorsTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
        $this->call(ControlsTableSeeder::class);
        $this->call(KotasTableSeeder::class);
    }
}
