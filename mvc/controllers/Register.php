<?php
class Register extends Controller {
    function SayHi(){
        
        $this->view("master",[
            "Page"=>"register",
               
        ]);
       
    }

    public function Xuli() {
        $list=$this -> model("UserModel");
        if (isset($_POST["username"]) && isset($_POST["password"])) {
            if ($list->login($_POST["username"], $_POST["password"])) {
                header("Location: admin.php");
            } else {
                header("Location: login.php?msg=login-fail");
            }
        } else {
            header("Location: login=");
        }
        
    }
    
 }
?>