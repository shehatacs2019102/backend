<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//this is a change
class FoodItem extends Model
{
    use HasFactory;
    public function dietplans(){
        return $this->belongsToMany(DietPlan::class);
    }
}
