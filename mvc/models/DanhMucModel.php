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
    

    //atribute
    //dem so luong tong
    function count_attribute($key){
        $truyvan_Count = "SELECT count(*) from tbl_sanpham where attribute like '%".$key."%'";
       return mysqli_query($this->con,$truyvan_Count);
    }

    //phan tran 
    function attribute_Page($key,$from,$page){
        $attribute_page="SELECT * FROM tbl_sanpham WHERE attribute like '%".$key."%' limit " . $from . ", " . $page;
        return mysqli_query($this->con,$attribute_page);
    }

    //gia
    function sortPrice($key,$from,$page){
        $truyvan="SELECT * FROM tbl_sanpham WHERE TRIM(TRAILING RIGHT(gia,3) FROM gia) > ".$key."  limit " . $from . ", " . $page;
        return mysqli_query($this->con,$truyvan);
    }
    function sortPriceDis($key1,$key2,$from,$page){
        $truyvan="SELECT * FROM tbl_sanpham WHERE TRIM(TRAILING RIGHT(gia,3) FROM gia)  >= ".$key1." and TRIM(TRAILING RIGHT(gia,3) FROM gia) <= ".$key2." limit " . $from . ", " . $page;
        return mysqli_query($this->con,$truyvan);
    }

    function sortPrice_short($key,$from,$page){
        $truyvan="SELECT * FROM tbl_sanpham WHERE TRIM(TRAILING RIGHT(gia,3) FROM gia) < ".$key."    limit " . $from . ", " . $page;
        return mysqli_query($this->con,$truyvan);
    }



    //phan trang
    function count_dm_Page_Price_T($key){
        $truyvan_Price = "SELECT count(*) from tbl_sanpham where TRIM(TRAILING RIGHT(gia,3) FROM gia) > $key ";
       return mysqli_query($this->con,$truyvan_Price);
    }

    function count_dm_Page_Price_S($key){
        $truyvan_Price = "SELECT count(*) from tbl_sanpham where TRIM(TRAILING RIGHT(gia,3) FROM gia) < $key ";
       return mysqli_query($this->con,$truyvan_Price);
    }
    

    function count_dm_Page_Price_M($key1,$key2){
        $truyvan_Price1= "SELECT count(*) from tbl_sanpham where TRIM(TRAILING RIGHT(gia,3) FROM gia) >= $key1 and TRIM(TRAILING RIGHT(gia,3) FROM gia)  <= $key2";
       return mysqli_query($this->con,$truyvan_Price1);
    }

    

    
}
?>
