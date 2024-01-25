<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['projectimage', 'category'];

    public function category(){

        return $this->belongsTo(Category::class);
    }

    public function projectimage(){
        return $this->hasMany(ProductImage::class, 'product_id')
            ->where('type', 'project');
    }


}
