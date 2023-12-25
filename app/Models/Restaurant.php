<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Restaurant extends Model
{
    protected $table = "restaurants";
    protected $fillable = [
        'restaurant_name_ar' ,
        'restaurant_name_en' ,
        'restaurant_description_en',
        'restaurant_description_ar',
        'restaurant_review',
        'restaurant_location_en',
        'restaurant_location_ar',
        'restaurant_phone',
        'restaurant_image',
        'total_sales',
        'total_sales_before_tax'
    ];

    public function menu_meals(){
        return $this->hasMany('Menu_Meal');
    }

    public function restaurant_categories(){
        return $this->hasMany(Restaurant_Category::class);
    }

    public function scopeRestaurantName(){
        return $this->{'restaurant_name_'.App::getLocale()} ;
    }

    public function scopeRestaurantDesc(){
        return $this->{'restaurant_description_'.App::getLocale()} ;
    }
}
