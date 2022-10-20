<?php
class Register extends Controller {
    function SayHi(){
        
        $this->view("master",[
            "Page"=>"register",
               
        ]);
       
    }

  
    
 }
?>