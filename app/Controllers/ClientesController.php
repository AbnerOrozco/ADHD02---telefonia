<?php
namespace App\Controllers;

use App\Models\ClientesModel;

class ClientesController extends BaseController
{
    public function index()
    {
        $clientes = new ClientesModel();
        $datos['datos'] = $clientes->findAll();
        return view('clientes', $datos);
    }

    public function nuevoCliente()
    {
        return view('clientes_nuevos');
    }

    public function agregarCliente() 
    {
        $datos = [
            'cliente_id' => $this->request->getVar('txtId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'apellido' => $this->request->getVar('txtApellido'),
            'correo_electronico' => $this->request->getVar('txtCorreo'),
            'calle_avenida' => $this->request->getVar('txtCalleAvenida'),
            'no_casa' => $this->request->getVar('txtNoCasa'),
            'zona' => $this->request->getVar('txtZona')
        ];

        $clientes = new ClientesModel();
        $clientes->insert($datos);
        return redirect()->route('clientes');
    }

    public function editarCliente($id): string
    {
        $clientes = new ClientesModel();
        $datos['cliente'] = $clientes->find($id);
        return view('clientes_editar', $datos);
    }

    public function actualizarCliente()
    {
        $datos = [
            'nombre' => $this->request->getVar('txtNombre'),
            'apellido' => $this->request->getVar('txtApellido'),
            'correo_electronico' => $this->request->getVar('txtCorreo'),
            'calle_avenida' => $this->request->getVar('txtCalleAvenida'),
            'no_casa' => $this->request->getVar('txtNoCasa'),
            'zona' => $this->request->getVar('txtZona')
        ];
    
        $clientes = new ClientesModel();
        $clientes->update($this->request->getVar('txtId'), $datos);
        return redirect()->route('clientes');
    }

    public function eliminarCliente($id)
    {
        $clientes = new ClientesModel();
        $clientes->delete($id);
        return redirect()->route('clientes');
    }
}
