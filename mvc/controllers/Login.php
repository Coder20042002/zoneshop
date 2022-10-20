<?php
session_start();
class Login extends Controller {
    function SayHi(){
        
        $this->view("master",[
            "Page"=>"login"
               
        ]);
       
    }

    public function Xuli() {
        
        $list=$this -> model("UserModel");
        if (isset($_POST['username']) && isset($_POST['password'])) {
            if ($list->dangnhap($_POST["username"], $_POST["password"])) {
                $this->view("master",[
                    "Page"=>"admin"
                       
                ]);
            } else {
                header("Location: ./?msg=login-fail");
            }
        } else {
            header("Location: dangnhap.php");
        }


        
    }
    
 }
?>