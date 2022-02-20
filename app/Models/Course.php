<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // protected $fillable = ['name', 'price', 'image', 'description'];
    protected $guarded = [];

    protected $table = 'courses';

    public $timestamps = true;
}
