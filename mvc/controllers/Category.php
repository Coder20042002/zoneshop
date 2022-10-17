<?php
class Category extends Controller {
    function SayHi(){
        //model
        $list=$this -> model("SanPhamModel");
        $list_dm=$this -> model("DanhMucModel");
        
        // if (isset($_GET['category'])) {
        //     $result = queryData($link, "select * from tb_category where id = " . $_GET['category']);
        // }

        $this->view("master",[
            "Page"=>"category",
            "list_DM"=>$list_dm->list_DanhMuc(),
            "list_SP"=>$list->list_SP(),
            "list_Limit"=>$list->list_Limit()
            
            
        ]);
    }

    function Danhmuc(){
        $list_dm=$this -> model("DanhMucModel");
        
       
        //kiemtra catehgory
        if (isset($_GET["category"])) {
            $key=$_GET["category"];

            
            $kq_id_dm=$list_dm->list_DanhMuc($key);

            $this->view("master",[
                "Page"=>"category",
                "list_ID_DM"=>$kq_id_dm
            ]);
  
        }
        
       
        
    }
    
    

}
?>