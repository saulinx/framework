<?php
class Paginas extends Controllers{
    public function sobre(){
     $dados = ['titulo'=> 'Página sobre nós.', 'descricao'=>'Somos a maior empresa de tecnologia do Brasil.', 'contado'=>'Estamos localizados na rua das flores, jardim das maravilhas..'];
     this->view('paginas/sobre', $dados);
    }//fim do método sobre
public function index(){
    $dados = ['titulo'=>'Página Inicial',
    'descricao'=> 'Aula de PHP orientada a objetos com MVC.'];
        $this->view('paginas/home', $dados);
}//fim da fução index
}//fim da classe controllers