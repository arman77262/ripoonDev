<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $guarded = [];

     public function Categories(){
        return $this->belongsTo(Categories::class, 'cat_id');
    }
}
