<?php
class CartModel extends DB
{
    function Update($key=false) {
        foreach($_POST['soluong'] as $id_sp => $soluong) {

            if($soluong==0) {
                unset( $_SESSION["giohang"][$id_sp]);
            } else {
                if($key) {
                    $_SESSION["giohang"][$id_sp]+=$soluong;
                } else {
                    $_SESSION["giohang"][$id_sp]=$soluong;
                }
            }

            
            
        }
    }
    
    function Dipose() {
        mysqli_close($this->con);
    }
    
    //danh sach danh mục san pham
    function list_SP($key){
        $truyvan_dm = "SELECT * FROM tbl_sanpham where id='$key' ";
        return mysqli_query($this->con,$truyvan_dm);
        
		
			
		
    }

    function list_Cart(){
        $truyvan_cart = "SELECT * FROM `tbl_sanpham` WHERE `id` IN (".implode(",",array_keys($_SESSION["giohang"])).")";
        return mysqli_query($this->con,$truyvan_cart);
       
    }

    
    
}
