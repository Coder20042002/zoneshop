<?php
class Detail extends Controller {
    function SayHi(){
        $list_size=$this -> model("SizeModel");
        $list_img=$this -> model("HinhAnhModel");
        $list=$this -> model("SanPhamModel");
        if (isset($_GET["id"])) {
            $key= $_GET["id"];
            $result =$list_img->list_HinhAnh($key);
        }

        if (isset($_GET["id"])) {
            $key= $_GET["id"];
            $sp =$list->list_id_HinhAnh($key);
            $k =$list->list_id_HinhAnh($key);
            $cart =$list->list_id_HinhAnh($key);
            
        }

        if (isset($_GET["dm"]) && isset($_GET["id_sp"])) {
            
            $id= $_GET["id_sp"];
            $id_dm= $_GET["dm"];
            $dm =$list->list_ID_DM($id,$id_dm);
            
        }
        $product1=null;
        if(!empty( $_SESSION["giohang"])) {
            $product1= $list->list_Cart();
        }
        $this->view("master",[
            "Page"=>"detail",
            "Size"=>$list_size->list_size(),
            "Image"=>$result,
            "Product"=>$sp,
            "gp"=>$k,
            "DM"=>$dm,
            "Cart"=>$cart,
            "id_sp"=>$id,
            "Product1"=>$product1,
        ]);
       
    }

  
    
 }
?>