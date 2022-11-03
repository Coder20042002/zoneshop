<?php
class Search extends Controller
{
    function SayHi()
    {

        $list = $this->model("SanPhamModel");

        $kq=null;
        
        if (isset($_GET["keyword"])) {
            $key = $_GET["keyword"];

            $kq = $list->list_Count($key);
            $kq_search = $list->list_Search($key);
        }


        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        //var_dump(($_GET['page']));
        $page = is_numeric($page) ? $page : 1;
        //var_dump(is_numeric($page));
        $from = ($page - 1) * SO_SP_TREN_TRANG;
        //var_dump($from);
        if (isset($_GET["keyword"])) 
            
            $result = $list->count_Page($_GET["keyword"]);
           
        
        else 
            $result = $list->count_SP();
            
        $row = mysqli_fetch_row($result);
               
        $total = ceil($row[0] / SO_SP_TREN_TRANG);
         //var_dump($row);
         //var_dump($total);
        

        //Mặc định các sản chấm sẽ căn niễn thị cha trang hiện tại
        
        if (isset($_GET["keyword"])) {
            $result = $list->list_Page($_GET["keyword"],$from,SO_SP_TREN_TRANG);
        }  else {
            $result = $list->list_Page_Count($from,SO_SP_TREN_TRANG);
        }
            
        if(!empty( $_SESSION["giohang"])) {
            $product1= $list->list_Cart();
        }

        
        

        $this->view("master", [
            "Page" => "search",
            "count" => $kq,
            "sanpham" => $list->list_SP(),
            "Total"=> $total,
            "Result"=>$result,
            "Padi"=>$page,
            "Product1"=>$product1,
       

        ]);
    }
}
