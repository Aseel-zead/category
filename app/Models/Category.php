<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $nullable = [];
    protected $hidden = ['created_at' , 'updated_at'];


    ############     Relation       ############
    public function product()
    {
        return $this->hasMany('App/Models/Product' , 'category-id','id');
    }
}
