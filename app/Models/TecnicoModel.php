<?php

namespace App\Models;

use \CodeIgniter\Model;

class TecnicoModel extends Model {
    protected $table      = 'tecnicos';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';//RETORNANDO ARRAYS  
    
    /**
     * Recupera um Técnico da tabela [tecnicos];
     * @param int $id Código ID do Técnico
     */
    public function read($id) {
        $tecnico = $this->find($id);
        return $tecnico;
    }
}
