<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'inventory_number',
        'serial_number',
        'manufacturer_id',
        'model',
        'color',
        'size',
        'pixels',
        'description'
    ];
    public function manufacturer() {
        return $this->belongsto('App\Models\Manufacturer', 'manufacturer_id', 'id');
    }
    public function modelid() {
        return $this->belongsTo('App\Models\Item', 'item_id', 'id');
    }
}
