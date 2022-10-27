<?php
session_start();
class Pay extends Controller {
    function SayHi(){
        
        $this->view("master",[
            "Page"=>"pay"
               
        ]);
       
    }

    
    
 }
?>