<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use SoftDeletes;
    protected $guarded = []; 
    public function images(){
        return $this->hasMany(ImageProperty::class,'properties_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function productImages()
    {
        return $this->hasMany(ImageProperty::class,'properties_id');
    }
    public function avatar()
    {
        return $this->hasOne(ImageProperty::class,'properties_id');
    }
   
}
