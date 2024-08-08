<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model\Number;
use Illuminate\Database\Eloquent\Model\Gallery;



class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'area', 'wi-fi', 
    'balcony','no_smoking','bathroom','washer','kitchen','conditioner','heating', 'price'];
    public function images() {
        return $this->hasMany(Gallery::class);
    }

    public function numbers() {
        return $this->hasMany(Number::class);
    }
}
