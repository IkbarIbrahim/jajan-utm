<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'product_id' => 'integer',
    ];

    public $timestamps = false;
}
