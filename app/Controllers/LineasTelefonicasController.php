<?php


namespace App\Controllers;
use App\Models\LineasTelefonicasModel;
class LineasTelefonicasController extends BaseController
{
    public function LineasTelefonicas(): string
    {
        //creado un objeto de tipo RegionesModel
        $LineasTelefonicas = new LineasTelefonicasModel();
        $Datos['datos']=$LineasTelefonicas->findAll();

        $Datos['datos']=($LineasTelefonicas->findAll());
        //findAll()= selec * from regiones;/ esto haria

        
        return view ('lineas_telefonicas',$Datos);
    }
    public function LineasTelefonicasNuevas(): string
    {
        
        return view ('lineas_telefonicas_nuevas');
    }
 

    public function agregarLinea() 
    {
       $datos=[
            'no_telefono' => $this->request->getVar('no_telefono'),
            'fecha_pago' => $this->request->getVar('FechaPago'),
            'meses_atraso' => $this->request->getVar('MesesAtraso'),
            'plan_id' => $this->request->getVar('PlanId'),
            'cliente_id' => $this->request->getVar('NoCliente')
        ];

        //crear objeto de tipo ClientesModel
        $lineas = new LineasTelefonicasModel();
        $lineas->insert($datos); //insert into cliente values(...);
        echo "Datos guardados";
        return redirect()->route('lineas_telefonicas');
    }


    public function editarLinea($id_t) : string
    {
        $lineas = new LineasTelefonicasModel();
        $datos['lineas_telefonicas'] = $lineas->find($id_t);
        return view('lineas_editar',$datos);
    }

    public function actualizarLinea()
    {
        $datos=[
            'fecha_pago' => $this->request->getVar('FechaPago'),
            'meses_atraso' => $this->request->getVar('MesesAtraso'),
            'plan_id' => $this->request->getVar('PlanId'),
            'cliente_id' => $this->request->getVar('NoCliente')
        ];

        $lineas = new LineasTelefonicasModel();
        $lineas->update($this->request->getVar('no_telefono'), $datos);
        return redirect()->route('lineas_telefonicas');
    }
    public function eliminarlinea ($id_t)
{
    $lineas = new LineasTelefonicasModel();
    $lineas->delete($id_t);
    return redirect()->route('lineas_telefonicas');
}
}
