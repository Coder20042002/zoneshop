<?php
class SizeModel extends DB{
    //list danh muc
    function list_size(){
        $truyvan_size="SELECT * FROM tbl_size";
        return mysqli_query($this->con,$truyvan_size);
    }

    function list_ID_Size($key){
        $truyvan_size="SELECT * FROM tbl_size where id_size='$key' ";
        return mysqli_query($this->con,$truyvan_size);
    }
    
}
?>
