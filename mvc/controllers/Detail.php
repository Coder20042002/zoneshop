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
            
        }
        $this->view("master",[
            "Page"=>"detail",
            "Size"=>$list_size->list_size(),
            "Image"=>$result,
            "Product"=>$sp,
            "gp"=>$k
        ]);
       
    }

  
    
 }
?>