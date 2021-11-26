<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookstoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Bookstore::factory(10)->create();
    }
}
