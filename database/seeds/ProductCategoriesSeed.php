<?php

use Illuminate\Database\Seeder;

class ProductCategoriesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++){
            \Illuminate\Support\Facades\DB::table('product_categories')->insertOrIgnore([
                "name" => "name " . $i
            ]);
        }
    }
}
