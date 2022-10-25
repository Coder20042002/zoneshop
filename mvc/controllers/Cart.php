<?php
class Cart extends Controller {
    function SayHi(){
      

        $this->view("master",[
            "Page"=>"cart",

        ]);
       
    }

  
    
 }
?>