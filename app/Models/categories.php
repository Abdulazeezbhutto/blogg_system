<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $table = 'category';
    protected $fillable = ['name', 'description'];
}
