<?php

    namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\Models\Cliente;

    class ControladorCliente extends BaseController{

        //Mostrar clientes

        public function verCliente(){

            $nuecliente = new Cliente();

            $datosbd['clientes']=$nuecliente->findAll();

            return view('Clientes', $datosbd);

        }

        //Mostrar formulario para insertar cliente

        public function crearCliente(){

            return view('crear_cliente');

        }

        //Guardar cliente nuevo

        public function guardarCliente(){

            $nuecliente = new Cliente();

            $datosbd = [
                'cliente_id' => $this->request->getPost('txt_clienteid'),
                'nombre' => $this->request->getPost('txt_nombre'),
                'apellido' => $this->request->getPost('txt_apellido'),
                'direccion' => $this->request->getPost('txt_direccion'),
                'nit' => $this->request->getPost('txt_nit'),
                'correo_electronico' => $this->request->getPost('correo_electronico'),
                'telefono_movil' => $this->request->getPost('txt_telefono_movil'),
            ];

            $nuecliente->insert($datosbd);
            return redirect()->to('ver_cliente');

        }

        //Eliminar Cliente

        public function eliminarCliente($cliente_id){
            $nuecliente = new Cliente();
            
            //Eliminar cliente
            if($nuecliente->find($cliente_id)){
                $nuecliente->delete($cliente_id);
                return redirect()->to('ver_cliente')->with('status', 'Cliente eliminado con éxito');
            } else {
                return redirect()->to('ver_cliente')->with('status', 'Cliente no encontrado');
            }
        }

        // Formulario para editar cliente

        public function editarCliente($cliente_id) {
            $nuecliente = new Cliente();
            $datosbd['cliente'] = $nuecliente->find($cliente_id);
    
            if (!$datosbd['cliente']) {
                return redirect()->to('ver_cliente')->with('status', 'Cliente no encontrado');
            }
    
            return view('editar_cliente', $datosbd);
        }

        //Actualizar cliente

        public function actualizarCliente($cliente_id) {
            
            $nuecliente = new Cliente();
            
            $datosbd = [
                'nombre' => $this->request->getPost('nombre'),
                'apellido' => $this->request->getPost('apellido'),
                'direccion' => $this->request->getPost('direccion'),
                'nit' => $this->request->getPost('nit'),
                'correo_electronico' => $this->request->getPost('correo_electronico'),
                'telefono_movil' => $this->request->getPost('telefono_movil'),
            ];
    
            if ($nuecliente->update($cliente_id, $datosbd)) {
                return redirect()->to('ver_cliente')->with('status', 'Cliente actualizado correctamente');
            } else {
                return redirect()->to('ver_cliente')->with('status', 'Error al actualizar el cliente');
            }
        }

    }

?>