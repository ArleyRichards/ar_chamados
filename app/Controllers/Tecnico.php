<?php
namespace App\Controllers;

use App\Models\TecnicoModel;

class Tecnico extends BaseController {
    
    public function index() {
        $tecnico = new TecnicoModel();
        $fetch = $tecnico->findAll();     
        echo '<pre>';
        var_dump($fetch);     
        $this->erro(1);
    }      
    
    public function detalhes($id){
        $tecnico = new TecnicoModel();
        echo "Detalhes do Técnico: ".$id;
        $fetch = $tecnico->read($id);
        echo '<pre>';
        var_dump($fetch);
    }  
    
    private function erro($id){
        if($id == 1){
            log_message("error", "Erro ao Gravar os Dados do Técnico");
        }
    }
    
}
