<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $fillable = [
        'category_name', 'slug', 'status'
    ];


    public function subcategory()
    {
        return $this->hasMany(Subcategory::class);
    }

    public function product(){
        return $this->hasMany(Product::class);
    }


    public function project(){
        return $this->hasMany(Project::class);
    }
}
