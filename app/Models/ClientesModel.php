<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientesModel extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'cliente_id';
    protected $allowedFields = [
        'cliente_id', 'nombre', 'apellido', 'correo_electronico', 'calle_avenida', 'no_casa', 'zona'
    ];
}

