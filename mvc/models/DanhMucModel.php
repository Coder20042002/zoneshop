<?php
class DanhMucModel extends DB{
    //list danh muc
    function list_DanhMuc(){
        $truyvan_dm="SELECT * FROM tbl_danhmuc";
        return mysqli_query($this->con,$truyvan_dm);
    }

    function list_ID_DanhMuc($key){
        $truyvan_dm="SELECT * FROM tbl_danhmuc where id_dm='$key' ";
        return mysqli_query($this->con,$truyvan_dm);
    }
    

    function sortPrice($key,$from,$page){
        $truyvan="SELECT * FROM tbl_sanpham WHERE SUBSTRING(gia,1,3) >=" . $key. "  and LENGTH(gia)=6  limit " . $from . ", " . $page;
        return mysqli_query($this->con,$truyvan);
    }
    function sortPriceDis($key,$from,$page){
        $truyvan="SELECT * FROM tbl_sanpham where SUBSTRING(gia,1,3) < ".$key." and SUBSTRING(gia,1,3) > ".$key." limit " . $from . ", " . $page;
        return mysqli_query($this->con,$truyvan);
    }
    //phan trang
    

    

    
}
?>
