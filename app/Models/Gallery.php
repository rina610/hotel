<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model\Category;

class Gallery extends Model
{
    
    use HasFactory;    
    protected $fillable = ['image', 'category_id'];

    protected $table = 'Gallery';
    public function Image() {
    return asset($this->image);

}
    
    public function category(){
        return $this -> belongsTo(Category::class);
    }
}

