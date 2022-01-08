<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['type', 'firstname', 'mainname', 'title','numpages', 'price'];

    public $table = 'product';
}

