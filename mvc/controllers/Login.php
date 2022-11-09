<?php
class Login extends Controller {
    function SayHi(){
        if(!isset($_SESSION["login"])) {
            $_SESSION["login"]=array();
        }
        $this->view("master",[
            "Page"=>"login"
               
        ]);
       
    }
    
    public function Xuli() {
        
        $list=$this -> model("UserModel");
        if (isset($_POST['username']) && isset($_POST['password'])) {
            if ($list->dangnhap($_POST["username"], $_POST["password"])) {
                
                header("Location: ./?msg=susceess");
            } else {
                header("Location: ./?msg=login-fail");
            }
        } else {
            header("Location: dangnhap");
        }


        
    }
    
 }
?>