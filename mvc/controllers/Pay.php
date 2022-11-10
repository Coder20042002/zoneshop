<?php
class Pay extends Controller {
    function SayHi(){
        $list=$this -> model("SanPhamModel");
        $order=$this->model("OrderModel");
        $product1=null;
        if(!empty( $_SESSION["giohang"])) {
            $product1= $list->list_Cart();
            $product2= $list->list_Cart();
            $total= $list->list_Cart();
            $total1= $list->list_Cart();
            
        }

        


        if(isset($_POST["pay"])){
            $name=$_POST["Name"];
            $phone=$_POST["Phone"];
            $emali=$_POST["Email"];
            $address1= $_POST["Address"];
            $address2=$_POST["City"];
            $address1 .= $address2;
            $thanhtien=$_POST["total"];
            //var_dump( $thanhtien);exit;
            $order->insertOrder($name,$phone,$emali,$address1,$thanhtien);
        }
        $this->view("master",[
            "Page"=>"pay",
            "Product1"=>$product1,
            "Result"=>$product2,
            "Total"=>$total,
            "Total1"=>$total1
        ]);
       
    }

    
    
 }
?>