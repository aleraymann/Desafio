<?php

use Illuminate\Database\Seeder;

class User_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            ["name"=> "Valmir", "email"=> "valmir@gmail.com", "password"=> bcrypt("123456789"),"city" => "guarapuava" , "state"=>"Paraná" ,"postalcode"=>"84430000" , "address"=>"julio de castilho" , "number"=>2497 , "complement"=>"casa fundos" , "district"=>"Brasil" ]);
            DB::table('users')->insert(
                ["name"=> "Laisa", "email"=> "laisa@gmail.com", "password"=> bcrypt("123456789"), "city"=> "imbituva", "state"=>"Paraná","postalcode"=>"84430000", "address"=>"tancredo neves", "number"=>222, "complement"=>"casa frente", "district"=>"Brasil"  ]);
            DB::table('users')->insert(
                ["name"=> "Maria", "email"=> "maria@gmail.com", "password"=> bcrypt("123456789"), "city"=> "ivaipora", "state"=>"Paraná","postalcode"=>"84235485", "address"=>"juiz de fora", "number"=>76, "complement"=>"casa fundos", "district"=>"Brasil" ]);
    }
}
