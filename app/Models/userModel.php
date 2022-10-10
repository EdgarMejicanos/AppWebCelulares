<?php 
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model {

    protected $table = 'user';
	protected $primaryKey = 'id';
	protected $allowedFields = ['nombres', 'apellidos', 'dpi',
        'telefono', 'correo', 'direccion', 'puesto'];
    
    public function readUsers(){
            return $this->findAll();
        }
    
    public function readUser($id){
            return $this->find($id);
    }   
    
    public function createUser($data){
        return $this->insert($data);
    }
    
    public function updateUser($id, $data){
		return $this->update($id, $data);
	}

    public function deleteUser($id){
		return $this->delete($id);;
	}
}
