<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nintendo extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'gender', 'description', 'img', 'price'];
}
