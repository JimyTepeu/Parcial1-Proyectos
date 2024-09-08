<?php

    namespace App\Controllers;
    use CodeIgniter\Controller;

    class ControladorDetallefactura extends BaseController{

        public function verConstruccion(){

            return view('DetalleFactura');
        }

    }

?>