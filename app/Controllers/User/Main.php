<?php

namespace App\Controllers\User;
use CodeIgniter\Controller;
use App\Models\userModel;
use Config\Services;

class Main extends Controller
{
    public function index()
    {
        //return view('bienvenida');
        //print_r($userModel -> readUsers());
        $userModel = new UserModel();
        $data["users"] = $userModel -> readUsers();

        return view ("user/main", $data);
    }
    public function delete($id){
        $userModel = new UserModel();
        $userModel -> deleteUser($id);

        $session = Services::session();
        $session->setFlashdata("success", "Los datos se han eliminado correctamente");

        return redirect()->to("usuarios");
    }
}

