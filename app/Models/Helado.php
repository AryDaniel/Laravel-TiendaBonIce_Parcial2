<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Helado extends Model
{
    use HasFactory;

    protected $table = 'helados';

    // ASIGNACIÓN MASIVA
    /* Con esto estamos especificando que solos los
    campos que aparezcan aqui seran los que iran 
    a la base de datos */
    protected $fillable = [
        'nombre_producto',
        'sabor',
        'precio'
    ];
}
