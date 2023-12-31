<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $nullable = [];
    protected $hidden = ['created_at' , 'updated_at'];


    ############     Relation       ############
    public function category()
    {
        return $this->belongsTo('App/Models/Category');
    }
}
