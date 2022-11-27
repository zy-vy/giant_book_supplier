<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publisher extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'image',
    ];

    public function books(){
        return $this->hasMany(book::class);
    }
}
