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
    protected $with = ['author', 'category'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function roles()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    

  
}           
