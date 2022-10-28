<?php
class Category extends Controller {
    function SayHi(){
        //model
        $list=$this -> model("SanPhamModel");
        $list_dm=$this -> model("DanhMucModel");
        $list_att=$this->model("AttributeModel");
        $list_size=$this->model("SizeModel");

        //danh muc
        $result=null;
        
        if (isset($_GET["dm"])) {
            $key= $_GET["dm"];
            $result =$list->list_DM($key);

        } else {
            $result=$list->list_SP();
        }


        //attribute
        $att=null;
        if (isset($_GET["attribute"])) {
            $key= $_GET["attribute"];
            $att =$list->list_DM($key);

        } else {
            $att=$list->list_SP();
        }

        //size
        $size=null;
        if (isset($_GET["size"])) {
            $key= $_GET["size"];
            $size =$list_size->list_ID_Size($key);

        } else {
            $size=$list_size->list_size();
        }

        $this->view("master",[
            "Page"=>"category",
            "list_DM"=>$list_dm->list_DanhMuc(),
            "Danhmuc"=>$result,
            "Attribute"=>$att,
            "Size"=>$size
            
            
            
            
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