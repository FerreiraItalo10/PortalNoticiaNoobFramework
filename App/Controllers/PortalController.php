<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\noticia;

class PortalController extends Controller {

    public function index(){
        $noticiaModel = new noticia();
        $noticias = $noticiaModel->getAll();

        $this->view('portal',['noticias' => $noticias]);

    }
    
    public function noticia($titulo) {
        // var_dump($titulo);

        $noticiaModel = new noticia();
        $noticia = $noticiaModel->getByTituloUrl($titulo);
        // $noticia = $noticiaModel->getAll();

        $this->view('noticia',['noticia' => $noticia]);
    }
}