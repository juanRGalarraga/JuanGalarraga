<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'item', 
        'unidad', 
        'cantidad',
        'importe_materiales', 
        'importe_mano_obra', 
        'total',
        'updated_at',
        'created_at',
    ];
}
