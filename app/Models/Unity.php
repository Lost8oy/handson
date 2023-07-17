<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unity extends Model
{
    use HasFactory;

    protected $fillable = [
        'zone_id',
        'code',
        'description',
    ];
    
    public function shelf() {
        return $this->hasMany('App\Models\Shelf');
    }
}
