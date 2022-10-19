<?php
class Login extends Controller {
    function SayHi(){
        $list=$this -> model("SanPhamModel");
        
        $this->view("master",[
            "Page"=>"login"
            
        ]);
    }

    
 }
?>