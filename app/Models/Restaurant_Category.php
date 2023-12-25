<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant_Category extends Model
{
    protected $table = "restaurant_categories";
    protected $fillable = [
        'category_id',
        'restaurant_id'
    ];

    public function menu_categories(){
        return $this->belongsTo(Menu_Category::class, 'category_id');
    }

    public function restaurants(){
        return $this->belongsTo(Restaurant::class, 'restaurant_id');
    }
}