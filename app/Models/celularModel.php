<?php 
namespace App\Models;
use CodeIgniter\Model;

class CelularModel extends Model {

    protected $table = 'celular';
	protected $primaryKey = 'id';
	protected $allowedFields = ['marca', 'modelo', 'serie',
        'almacenamiento', 'ram', 'procesador', 'comentario'];
    
    public function readCelS(){
            return $this->findAll();
        }
    
    public function readCel($id){
            return $this->find($id);
    }   
    
    public function createCel($data){
        return $this->insert($data);
    }
    
    public function updateCel($id, $data){
		return $this->update($id, $data);
	}

    public function deleteCel($id){
		return $this->delete($id);
	}
}
