<?php

namespace App\Models;

use Core\DataBase; 

class noticia{

    public static function getAll(){
        $table = "noticia";
        $db = DataBase::getInstance();
        $dados = $db->getList($table,'*');
        return $db->getList($table,'*');
    }

    public static function getByTituloUrl($tituloUrl){
        $table = "noticia";
        $db = DataBase::getInstance();
        $noticia = $db->getList($table,'*',['titulo_url' => "'".$tituloUrl."'"]);

        return $noticia[0];
    }
}