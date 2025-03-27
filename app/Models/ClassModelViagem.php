<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassModelViagem extends Model
{
    protected $fillable = ['distancia', 'consumo', 'valor_litro'];
}
