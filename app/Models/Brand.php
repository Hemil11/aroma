<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'categroy_id'
    ];
    public function Product()
    {
        return $this->hasOne('App\Models\Product');
    }

}
