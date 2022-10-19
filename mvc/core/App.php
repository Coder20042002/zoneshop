<?php 
class App{
    protected $controller="Home";
    protected $action="SayHi";
    protected $params=[];

    

    function __construct()
    {
         $arr=$this->UrlProcess();
         

         // Controller
        if( file_exists("./mvc/controllers/".$arr[0].".php") ){
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once "./mvc/controllers/".$this->controller.".php";
        $this->controller = new $this->controller;
        //action
        if(isset($arr[1])){
            if( method_exists( $this->controller , $arr[1]) ){
                $this->action = $arr[1];
                unset($arr[1]);
            }
            
        }

        

         // Params
         $this->params = $arr?array_values($arr):[];

         
       
         

         //ham goi mang hinh
         call_user_func_array ([new $this->controller, $this->action], $this->params);
    }
    
    function UrlProcess(){
        if(isset($_GET["url"])) {
            return $url= explode("/",filter_var(rtrim($_GET["url"],"/")));
        }
        
    }
}
?>