<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id',
        'title',
        'description',
        'price',
        'image'
    ];
    public function search(Array $data)
    {
        $products =  $this->where(function($querry) use ($data){
            if(isset($data['title']))
                $querry->where('title', $data['title']);
        });
        return $products->get();

    }
}
