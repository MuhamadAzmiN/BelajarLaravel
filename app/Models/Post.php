<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // ini kalau ada keyword database baru harus kita tambahkan jadi ribet
    // protected $fillable = ['title', 'excerpt', 'body'];

    // ini mengunakan metode mengecualikan
    protected $guarded = ["id"];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}           
