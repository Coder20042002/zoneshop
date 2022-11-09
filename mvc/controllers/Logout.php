<?php
class Logout extends Controller {
    function SayHi(){
        $list=$this -> model("UserModel");
        if ($list->dangxuat()) {
            header("Location: ./?msg=out");
        } else {
            header("content-type: text/html; charset=utf8");
            echo "Bạn chưa đăng nhập!";
        }
        
       
    }
}
?>