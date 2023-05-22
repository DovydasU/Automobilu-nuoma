<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['make', 'model', 'price', 'mileage', 'transmission', 'seats', 'luggage', 'petrol', 'description'];
}
