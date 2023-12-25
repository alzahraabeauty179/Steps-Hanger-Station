<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = "carts";
    protected $fillable = [
        'meal_id','price','quantity','total_price','user_id' , 'IP_ADDRESS','status'
    ];

    public function meal(){
        return $this->belongsTo(Menu_Meal::class, 'meal_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
