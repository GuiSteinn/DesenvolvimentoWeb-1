<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassModelIMC extends Model
{
    public function getImc($peso, $altura)
    {
        return $peso / ($altura * $altura);
    }
}
