<?php
class Category extends Controller {
    function SayHi(){
        //model
        $list=$this -> model("SanPhamModel");
        $list_dm=$this -> model("DanhMucModel");
        $list_size=$this->model("SizeModel");


        

        //size
        $size=null;
        if (isset($_GET["size"])) {
            $key= $_GET["size"];
            $size =$list_size->list_ID_Size($key);

        } else {
            $size=$list_size->list_size();
        }

        //===================================================\
       


        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $page = is_numeric($page) ? $page : 1;
        $from = ($page - 1) * SO_SP_TREN_TRANG;

        if (isset($_GET["dm"])) 
            
            $result = $list->count_dm_Page($_GET["dm"]);
           
        
        else 
            $result = $list->count_SP();
            
        $row = mysqli_fetch_row($result);
               
        $total = ceil($row[0] / SO_SP_TREN_TRANG);

        

        //Mặc định các sản chấm sẽ căn niễn thị cha trang hiện tại
        
        if (isset($_GET["dm"])) {
            $result = $list->dm_Page($_GET["dm"],$from,SO_SP_TREN_TRANG);
        } elseif(isset($_GET["price"])) {
            $result=$list_dm->sortPrice(trim($_GET["price"],"k"),$from,SO_SP_TREN_TRANG);
        }
         else {
            $result = $list->list_Page_Count($from,SO_SP_TREN_TRANG);
        }
        $product1=null;
        if(!empty( $_SESSION["giohang"])) {
            $product1= $list->list_Cart();
        }

        $this->view("master",[
            "Page"=>"category",
            "list_DM"=>$list_dm->list_DanhMuc(),
            "Size"=>$size,
            "Total"=> $total,
            "Padi"=>$page,
            "Paging"=>$result,
            "Product1"=>$product1,
            
            
            
            
        ]);
    }

    function Ajax() {
        echo"hi a";

    }

   
        
       
        
    }
    
    


?>