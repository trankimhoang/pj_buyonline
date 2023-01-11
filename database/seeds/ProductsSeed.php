<?php

use Illuminate\Database\Seeder;

class ProductsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++){
            \Illuminate\Support\Facades\DB::table('products')->insertOrIgnore([
                "name" => "name " . $i,
                "description" => "description " . $i,
                "image" => "",
                "price" => 2000000,
            ]);
        }
    }
}
