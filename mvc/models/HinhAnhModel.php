<?php
class HinhAnhModel extends DB{
    //list danh muc
    function list_HinhAnh($id){
        $truyvan_dm="SELECT * FROM `tbl_hinhanh_sanpham` where id_hinhanh='$id'";
        return mysqli_query($this->con,$truyvan_dm);
    }
    
    
    
}
?>
