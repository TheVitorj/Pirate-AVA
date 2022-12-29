<?php 
class Router{
    protected $router = [];


    public function add($rotas){
        $this->router[$rotas];
    }

    public function match($url){
        foreach($this->router as $route=>$view){
            if($route === $url){
                return $view;
            }
        }
        
    }
    

}

$projeto = ["/aluno/View/form_acesso.php"];

?>