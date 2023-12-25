<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Menu_Category extends Model
{
    protected $table = "menu_categories";
    protected $fillable = [
        'category_name_en' ,
        'category_name_ar' ,
    ];

    public function scopeCategoryName(){
        return $this->{"category_name_".App::getLocale()};
    }

    public function menu_meals(){
        return $this->hasMany(Menu_Meal::class);
    }

    public function restaurant_categories(){
        return $this->hasMany(Restaurant_Category::class);
    }
}
