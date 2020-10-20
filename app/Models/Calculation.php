<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculation extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_parameter',
        'second_parameter',
        'operator',
        'result',
        'init_calculation',
        'end_calculation',
    ];

    public static function create(array $array)
    {
    }
}
