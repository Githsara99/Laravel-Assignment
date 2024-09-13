<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventories extends Model
{
    protected $fillable = [
       // 'id',
        'itemName',
        'description',
        'quantity',
        'price',

    ];

    use HasFactory;
}
