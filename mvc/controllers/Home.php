<?php
class Home extends Controller {
    function SayHi(){
        $list=$this -> model("SanPhamModel");
        
        $this->view("master",[
            "Page"=>"home",
            "list_BestSeller"=>$list->list_BestSeller(),
            "gp_BestSeller"=>$list->gp_BestSeller()
        ]);
    }

    
 }
?>