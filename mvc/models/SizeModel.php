<?php
class SizeModel extends DB{
    //list danh muc
    function list_size(){
        $truyvan_dm="SELECT * FROM tbl_size";
        return mysqli_query($this->con,$truyvan_dm);
    }

    
    
}
?>
