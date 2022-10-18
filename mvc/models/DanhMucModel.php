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
    
}
?>
