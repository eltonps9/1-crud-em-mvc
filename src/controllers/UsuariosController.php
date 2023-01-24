<?php
namespace src\controllers;

use \core\Controller;
use \src\models\usuario;

class UsuariosController extends Controller {

    public function new() {
        $this->render('add');
    }

    public function add_action(){
       $nome = $_POST['nome'];
       $numero = $_POST['tel'];
       $idade = $_POST['idade'];

       if(isset($nome) && isset($numero)){
           $usur = Usuario::select()->where('nome',$nome)->execute();
            
            if(count($usur) === 0){
                Usuario::insert([
                    'nome'=>$nome,
                    'numero'=>$numero,
                    'idade'=>$idade
                ])->execute();
                    
                $this->redirect('/');
                exit;
            }
            
        }
        
        $this->redirect('/new');
        
    }

    public function editar_action($args){
        $nome=$_POST['nome'];
        $numero= $_POST['tel'];
        $idade=$_POST['idade'];

        $usuario = Usuario::update()->set([
            'nome'=>$nome,
            'numero'=>$numero,
            'idade'=>$idade
        ])->where('id', $args['id'])
        ->execute();

        $this->redirect('/');
    }

    public function editar($args){
       $user = Usuario::select()
       ->where('id', $args['id'])
       ->one();
       
        $this->render('editar',[
            'user'=>$user
        ]);
    }
 
    public function excluir($args){
        
        $usuario = Usuario::delete()->where('id',$args['id'])->execute();
        $this->redirect('/');
    }

}