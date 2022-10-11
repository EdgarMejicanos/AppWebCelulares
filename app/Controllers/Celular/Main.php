<?php

namespace App\Controllers\Celular;
use CodeIgniter\Controller;
use App\Models\celularModel;
use Config\Services;

class Main extends Controller
{
    public function index()
    {
        //return view('bienvenida');
        //print_r($userModel -> readUsers());
        $celularModel = new CelularModel();
        $data["celulares"] = $celularModel -> readCelS();

        return view ("celular/main", $data);
    }
    public function delete($id){
        $celularModel = new CelularModel();
        $celularModel -> deleteCel($id);

        $session = Services::session();
        $session->setFlashdata("success", "Los datos se han eliminado correctamente");

        return redirect()->to("celulares");
    }
}