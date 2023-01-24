<?php
namespace src\controllers;

use \core\Controller;
use \src\models\usuario;

class HomeController extends Controller {

    public function index() {

        $usu = Usuario::select()->execute();
        
        $this->render('home',[
            'usu' => $usu
        ]);
    }


}