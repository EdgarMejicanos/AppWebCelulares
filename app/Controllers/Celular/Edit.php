<?php

namespace App\Controllers\Celulares;
use CodeIgniter\Controller;
use App\Models\celularModel;
use Config\Services;

class Edit extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */

    protected $request;
    protected $helpers = ["form"];
    public function index($id)
    {
        //return view('bienvenida');
        $celularModel = new CelularModel();
        $data["celular"] = $celularModel -> readCel($id);
        return view("celular/edit", $data);
    }
    public function save($id){
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
            return redirect()->to("celular/".$id)->withInput();
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
    
        $celularModel->updateCel($id, $data);

        $session = Services::session();
        $session->setFlashdata("success", "Los datos se actualizaron correctamente");
            
        return redirect()->to("celu");
        }
    }
}
