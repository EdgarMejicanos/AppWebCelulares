<?php

namespace App\Controllers\Celular;
use CodeIgniter\Controller;
use App\Models\celularModel;
use Config\Services;

class Add extends Controller
{
        /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;
    protected $helpers = ['form'];

    public function index()
    {
        //return view('bienvenida');
        //print_r("add hola");
        return view("celular/add");
    }
    public function save(){
        $celularModel = new CelularModel();

        $validation = $this->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'serie' => 'required',
            'almacenamiento' => 'required',
            'ram' => 'required',
            'procesador' => 'required',
            'comentario' => 'required'
        ]);
        if (!$validation){
            return redirect()->to("celular")->withInput();
        }else{
            $data = [ 
                'marca' => $this->request->getVar('marca'),
                'modelo' => $this->request->getVar('modelo'),
                'serie' => $this->request->getVar('serie'),
                'almacenamiento' => $this->request->getVar('almacenamiento'),
                'ram' => $this->request->getVar('ram'),
                'procesador' => $this->request->getVar('procesador'),
                'comentario' => $this->request->getVar('comentario')
            ];
    
            $celularModel->createCel($data);

        $session = Services::session();
        $session->setFlashdata("success", "Celular guardado correctamente");
    
            return redirect()->to("celu");
        }

       
    }
}
