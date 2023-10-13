<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    use HasFactory;
    protected $guarded=[]; //all coloumns of tables come in guard

    public function parent()
    {
       return $this->belongsTo(Category::class, 'category_id');  //Relation made for extracting child of Category model where category_id is foreign key
    }
}
