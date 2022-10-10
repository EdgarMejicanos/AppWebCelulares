<?php

namespace App\Controllers;

use App\Libraries\Calculos;
use App\Models\LoginModel;

class Home extends BaseController
{
    protected $loginModel;
    protected $request;
    protected $calculos;

    public function index()
    {
        return view('login');
    }
    public function inicio(){
        return view('inicio');
    }
    public function __construct()
    {
        $this->loginModel = new LoginModel(); 
        $this->uri = service('uri');
        $this->request = service('request');
        $this->calculos = new Calculos();
    }
    public function ingresar()
    {
        $resul = $this->loginModel->getUsuario();
        //echo $resul["usuario"];
        $formulario["usuario"] = $this->request->getPost("usuario");
        $formulario["password"] = $this->request->getPost("password");

        $resultado=$this->calculos->calcular($formulario,$resul);

        if($resultado==1){
            return redirect()->to(base_url('/inicio'))->with('mensaje','1');

        }else{
            return redirect()->to(base_url('/'))->with('mensaje','1');

        }
    }

}
