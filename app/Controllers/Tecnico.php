<?php
namespace App\Controllers;

use App\Models\TecnicoModel;

class Tecnico extends BaseController {
    
    public function index() {
        $tecnico = new TecnicoModel();
        $fetch = $tecnico->findAll();     
        echo '<pre>';
        var_dump($fetch);        
    }
    
    public function detalhes($id){
        $tecnico = new TecnicoModel();
        echo "Detalhes do Técnico: ".$id;
        $fetch = $tecnico->read($id);
        echo '<pre>';
        var_dump($fetch);
    }  
    
}
