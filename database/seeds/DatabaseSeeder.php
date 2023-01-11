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
        $this->call([
            UsersSeed::class,
            AdminsSeed::class,
            ProductCategoriesSeed::class,
            ProductsSeed::class,
            ProductAndCategoriesSeed::class,
        ]);
    }
}
