<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    public $fillable =[
        'name'
    ];

    public function books(){
        return $this->belongsToMany(book::class,'book_category','category_id','book_id');
    }
}
