<?php
class Search extends Controller {
    function SayHi(){
        
        $list=$this -> model("SanPhamModel");

        
        if(isset($_POST["keyword"])) {
            $key=$_POST["keyword"];

            $kq=$list->list_Count($key);
            $kq_search=$list->list_Search($key);

             $this->view("master",[
            "Page"=>"search",
            "count"=>$kq,
            "search"=>$kq_search,
            "sanpham"=>$list->list_SP(),
            "gp_sanpham"=>$list-> gp_SP()
            
        ]);
        } 
    }

   
 }
?>