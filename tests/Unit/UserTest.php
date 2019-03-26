<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    public function test_createUser(){
        \App\User::create([
            'name'=> 'Admin User',
            'email'=> 'admin_user@admin.com',
            'password'=> bcrypt(123123),
            'city'=> 'Guarapuava',
            'state'=> 'Paraná',
            'postalcode'=>'84620-012',
            'address'=> 'Inacio karpisnki',
            'number'=>'123',
            'complement'=>'ap 34',
            'district'=> 'Brasil'
        ]);
        $this->assertDatabaseHas('users',['name'=>'Admin User']);
    }
}
