<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[]; //all coloumns of tables come in guard /when we have to load bulk/mass data

    public function Category()
    {
       return $this->belongsTo(Category::class);  //Relation made for extracting child of Category model where category_id is foreign key
    }

    public function ProductDetail()
    {
        return $this->hasOne(ProductDetail::class);  //this relation is made to fetch data from product table in details table
    }
}
