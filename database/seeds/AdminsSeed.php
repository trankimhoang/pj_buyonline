<?php

use Illuminate\Database\Seeder;

class AdminsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++){
            \Illuminate\Support\Facades\DB::table("admins")->insertOrIgnore([
                "name" => "admin " . $i,
                "email" => "admin" .$i . "@gmail.com",
                "password" => \Illuminate\Support\Facades\Hash::make('123')
            ]);
        }
    }
}
