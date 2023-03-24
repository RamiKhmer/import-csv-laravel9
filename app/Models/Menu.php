<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'original_price',
        'unit',
        'desc',
        'is_published',
        'user_id',
        'branch_id',
        'menu_category_id'
    ];
}
