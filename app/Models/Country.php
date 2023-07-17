<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function manufacturer() {
        return $this->hasMany('App\Models\Manufacturer');
    }
}
