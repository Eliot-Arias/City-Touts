<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $table = "paquetes";
    protected $primaryKey = "id";
    protected $fillable = ['img', 'nombre', 'descripcion', 'precio'];

    protected $hidden = ['id'];
}
