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
        elseif(isset($_GET["attribute"]))
            $result =$list_dm->count_attribute($_GET["attribute"]);
        elseif(isset($_GET["price"]))
            if($_GET["price"]==">600k")
            $result=$list_dm->count_dm_Page_Price_T(trim($_GET["price"],"k,<,>")); 
            elseif(strlen($_GET["price"])>7) {
            $key1=substr($_GET["price"],0,3);
            $key2=substr($_GET["price"],5,3);
            $result=$list_dm->count_dm_Page_Price_M($key1,$key2);  }    
            else
            $result=$list_dm->count_dm_Page_Price_S(trim($_GET["price"],"k,<,>"));   
        else 
            $result = $list->count_SP();
            
        
        $row = mysqli_fetch_row($result);
        //var_dump($row);exit;      
        $total = ceil($row[0] / SO_SP_TREN_TRANG);
        

        

        //Mặc định các sản chấm sẽ căn niễn thị cha trang hiện tại
        
        if (isset($_GET["dm"])) {
            $result = $list->dm_Page($_GET["dm"],$from,SO_SP_TREN_TRANG);

        } elseif(isset($_GET["attribute"])) 
            $result=$list_dm->attribute_Page($_GET["attribute"],$from,SO_SP_TREN_TRANG);
          
         elseif(isset($_GET["price"]) ) {
            if($_GET["price"]==">600k")
            $result=$list_dm->sortPrice(trim($_GET["price"],"k,<,>"),$from,SO_SP_TREN_TRANG);
            elseif(strlen($_GET["price"])>7)
            $result=$list_dm->sortPriceDis(substr($_GET["price"],0,3),substr($_GET["price"],5,3),$from,SO_SP_TREN_TRANG);
            else
            $result=$list_dm->sortPrice_short(trim($_GET["price"],"k,<,>"),$from,SO_SP_TREN_TRANG);
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

    

   
        
       
        
    }
    
    


?>