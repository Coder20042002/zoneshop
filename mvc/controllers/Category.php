<?php
class Category extends Controller {
    function SayHi(){
        //model
        $list=$this -> model("SanPhamModel");
        $list_dm=$this -> model("DanhMucModel");
        $result=null;
        if (isset($_GET["dm"])) {
            $key= $_GET["dm"];
            $result =$list->list_DM($key);

        } else {
            $result=$list->list_SP();
        }

        $this->view("master",[
            "Page"=>"category",
            "list_DM"=>$list_dm->list_DanhMuc(),
            "Danhmuc"=>$result
            
            
            
            
        ]);
    }

    function Danhmuc(){
        $list=$this -> model("SanPhamModel");
        $list_dm=$this -> model("DanhMucModel");
        $result=null;
        if (isset($_POST["dm"])) {
            $key= $_POST["dm"];
            $result =$list->list_DM($key);

        } else {
            $result=$list->list_SP();
        }

        $this->view("master",[
            "Page"=>"category",
            "list_DM"=>$list_dm->list_DanhMuc(),
            "Danhmuc"=>$result
            
            
            
            
        ]);
  
        }
        
       
        
    }
    
    


?>