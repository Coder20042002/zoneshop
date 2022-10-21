<?php
class Detail extends Controller {
    function SayHi(){
        $list=$this -> model("SizeModel");
        $this->view("master",[
            "Page"=>"detail",
            "Size"=>$list->list_size()
        ]);
       
    }

  
    
 }
?>