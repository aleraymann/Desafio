<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    public function test_createProduct(){
        \App\Product::create([
            'title'=> 'Prancha Surf',
            'description'=> 'amarela',
            'price'=> '65',
            'image'=> '4901_45962980071_7137cc3fa4_320_240_nofilter',
        ]);
        $this->assertDatabaseHas('produts',['name'=>'Prancha Surf']);
    }
}
