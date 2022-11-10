<?php
class Register extends Controller {
    function SayHi(){
        $list=$this -> model("SanPhamModel");

        $product1=null;
            if(!empty( $_SESSION["giohang"])) {
                $product1= $list->list_Cart();
            }
        $this->view("master",[
            "Page"=>"register",
            "Product1"=>$product1
        ]);
       
    }

    public function Xuli() {
        
        $list=$this -> model("UserModel");

        //xu li dang kki
        if (
            isset($_POST['username'])
            && isset($_POST['password'])
            && isset($_POST['password2'])
            && isset($_POST['fullname'])
            && isset($_POST['email'])
            
        ) {
            if (
                $_POST['password'] == $_POST['password2'] //Kiểm tra 2 ô mật khẩu có giống nhau
                && $list-> validateLenUP($_POST['username']) //username phải lớn hơn 8 và nhỏ hơn 30 kí tự
                && $list-> validateLenUP($_POST['password']) //password phải lớn hơn 8 và nhỏ hơn 30 kí tự
                && $list-> validateLenUP($_POST['fullname']) //fullname phải lớn hơn 8 và nhỏ hơn 30 kí tự
                && $list-> validateEmail($_POST['email']) //email phải đúng định dạng abc@xyz.com
        
            ) {
                //nếu username đã tồn tại trong CSDL
                if ($list->existsUsername($_POST["username"])) {
                    header("Location: dangki?msg=duplicate&username=" . $_POST['username'] . "&fullname=" . $_POST['fullname'] . "&email=" . $_POST['email']);
                } else {
                    //nếu username chưa tồn tại thì cho đăng kí
                    $list->dangki($_POST["username"], $_POST["password"], $_POST["fullname"], $_POST["email"]);
                    header("Location: dangki?msg=done");
                }
            } else {
                //nếu các điều kiện không thoả mãn
                header("Location: dangki?msg=unvalid-data&username=" . $_POST['username'] . "&fullname=" . $_POST['fullname'] . "&email=" . $_POST['email']);
            }
        }


        
    }

  
    
 }
?>