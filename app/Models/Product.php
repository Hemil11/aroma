<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'img',
        'price',
        'Availibility',
        'category_id',
        'about',
        'brand_id',
    ];
    public function Brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }
    public function Category()
    {
        return $this->belongsTo('App\Models\Category');
    }   
}
