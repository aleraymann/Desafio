<?php

use Illuminate\Database\Seeder;

class Product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
        	["title"=> "Camisa Polo az", "description"=> "Azul", "price"=>40, "image"=>"camisa.jpg" ]);
        DB::table('products')->insert(
        	["title"=> "Camisa Polo verm", "description"=> "vermelha", "price"=>40, "image"=>"camisavermelha.jpg" ]);
        DB::table('products')->insert(
        	["title"=> "Camisa Polo ver", "description"=> "Verde", "price"=>40, "image"=>"camisaverde.jpg" ]);
        DB::table('products')->insert(
        	["title"=> "Camisa", "description"=> "manda longa", "price"=>60, "image"=>"camisalonga.jpg" ]);
        DB::table('products')->insert(
        	["title"=> "Camisa Regata", "description"=> "regata", "price"=>30, "image"=>"camisaregata.jpg" ]);
        DB::table('products')->insert(
        	["title"=> "Camisa Polo bra", "description"=> "branca", "price"=>40, "image"=>"camisa.jpg" ]);
        DB::table('products')->insert(
        	["title"=> "Camisa Polo am", "description"=> "amarela", "price"=>40, "image"=>"camisa.jpg" ]);
    }
}
