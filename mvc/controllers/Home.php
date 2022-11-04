<?php
class Home extends Controller {
    function SayHi(){
        $list=$this -> model("SanPhamModel");
        $product1=null;
        if(!empty( $_SESSION["giohang"])) {
            $product1= $list->list_Cart();
        }
        $this->view("master",[
            "Page"=>"home",
            "list_BestSeller"=>$list->list_BestSeller(),
            "gp_BestSeller"=>$list->gp_BestSeller(),
            "Product1"=>$product1,
        ]);
    }

    
 }
?>