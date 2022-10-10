<?php

namespace App\Controllers\User;
use CodeIgniter\Controller;
use App\Models\userModel;
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
        return view("user/add");
    }
    public function save(){
        $userModel = new UserModel();

        $validation = $this->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'dpi' => 'required',
            'telefono' => 'required|min_length[8]',
            'correo' => 'required|valid_email',
            'direccion' => 'required',
            'puesto' => 'required'
        ]);
        if (!$validation){
            return redirect()->to("usuario")->withInput();
        }else{
            $data = [ 
                'nombres' => $this->request->getVar('nombres'),
                'apellidos' => $this->request->getVar('apellidos'),
                'dpi' => $this->request->getVar('dpi'),
                'telefono' => $this->request->getVar('telefono'),
                'correo' => $this->request->getVar('correo'),
                'direccion' => $this->request->getVar('direccion'),
                'puesto' => $this->request->getVar('puesto')
            ];
    
            $userModel->createUser($data);

        $session = Services::session();
        $session->setFlashdata("success", "Usuario guardado correctamente");
    
            return redirect()->to("usuarios");
        }

       
    }
}
