<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model\Category;

class Number extends Model
{
    use HasFactory;
    protected $fillable = ['id','city','street','build','floor','number','category_id','status','note'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
