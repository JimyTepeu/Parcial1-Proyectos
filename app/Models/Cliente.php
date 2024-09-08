<?php

    namespace App\Models;
    use CodeIgniter\Model;

    class Cliente extends Model{

        protected $table = 'clientes';
        protected $primaryKey = 'cliente_id';
        protected $allowedFields = ['nombre', 'apellido', 'nit', 'correo_electronico', 'telefono_movil', 'direccion'];

    }

?>