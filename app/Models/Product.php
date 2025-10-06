<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    // Permitir asignación masiva:
    protected $fillable = ['description', 'price', 'stock'];
}
