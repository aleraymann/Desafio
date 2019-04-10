<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email',
        'password',
        'city',
        'state',
        'postalcode',
        'address',
        'number',
        'complement',
        'district'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function search(Array $data)
    {
        //dd($data['name']);
        $users =  $this->where(function($querry) use ($data){
            if(isset($data['id']))
                $querry->where('id', $data['id']);

            if(isset($data['name']))
                $querry->where('name','like', '%'.$data['name'].'%');

            if(isset($data['city']))
                $querry->where('city','like', '%'.$data['city'].'%');

            if(isset($data['state']))
                $querry->where('state', 'like', '%'.$data['state'].'%');

            if(isset($data['district']))
                $querry->where('district', 'like', '%'.$data['district'].'%');
        });//->toSql();
        return $users->get();

    }
}
