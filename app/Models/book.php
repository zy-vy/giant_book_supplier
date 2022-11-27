<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsToMany(category::class,'book_category','book_id','category_id');
    }

    public function publisher(){
        return $this->belongsTo(publisher::class);
    }
}
