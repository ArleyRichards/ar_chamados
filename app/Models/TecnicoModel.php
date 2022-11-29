<?php

namespace App\Models;

use \CodeIgniter\Model;

class TecnicoModel extends Model {
    protected $table      = 'tecnicos';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';//RETORNANDO ARRAYS  
    
    public function read($id) {
        $tecnico = $this->find($id);
        return $tecnico;
    }
}
