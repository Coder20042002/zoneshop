<?php
class Cart extends Controller {
    function SayHi(){
        $list=$this->model("CartModel");

        // $product=mysqli_fetch_assoc($list);
        if(!isset($_SESSION["giohang"])) {
            $_SESSION["giohang"]=array();
        }

        $error=false;
        $size=null;
     
        var_dump($_POST);exit;
         if(isset($_GET["action"])) {
            
            // var_dump($_SESSION["giohang"]);exit;
            switch($_GET["action"]) {
                case "add":
                    foreach($_POST['size'] as $id_sp => $size) {
                        $_SESSION["giohang"][$id_sp]= $size;
                       
                    }
                    var_dump($_SESSION["giohang"]);exit;
                    $list->Update(true);
                    header("Location: ./cart" );
                    
                    break;
                case "delete":
                    if(isset($_GET["id"])) {
                        unset( $_SESSION["giohang"][$_GET["id"]]);
                    }
                    header("Location: ./cart" );
                    break;

                case "submit":
                    //update san pham
                    if(isset($_POST["update"])) {
                        $list->Update(false);
                        header("Location: ./cart" );
                    } elseif($_POST["pay"]) {

                        if($error==false && !empty($_POST["soluong"])) {

                        }

                    }

                    
            }
         }
         
         if(!empty( $_SESSION["giohang"])) {
            $product= $list->list_Cart();
            
            $result= $list->list_Cart();
            
            $total=$list->list_Cart();
           
         } else {
            $result=null;
            $total=null;
         }
       
        

        $this->view("master",[
            "Page"=>"cart",
            "Product"=>$product,
            "Result"=>$result,
            "Total"=>$total,
            "Size"=>$size
        ]);
       
    }

  
    
 }
