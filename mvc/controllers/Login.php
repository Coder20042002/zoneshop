<?php
class Login extends Controller {
    function SayHi(){
        $list=$this -> model("SanPhamModel");
        if(!isset($_SESSION["login"])) {
            $_SESSION["login"]=array();
        }
        $product1=null;
            if(!empty( $_SESSION["giohang"])) {
                $product1= $list->list_Cart();
            }
        $this->view("master",[
            "Page"=>"login",
            "Product1"=>$product1
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