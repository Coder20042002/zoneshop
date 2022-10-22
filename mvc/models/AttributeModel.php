<?php
class AttributeModel extends DB{
    //list danh muc
    function list_AT(){
        $truyvan_dm="SELECT * FROM tbl_attribute";
        return mysqli_query($this->con,$truyvan_dm);
    }

    function list_ID_AT($key){
        $truyvan_dm="SELECT * FROM tbl_attribute where id_dm='$key' ";
        return mysqli_query($this->con,$truyvan_dm);
    }
    
}
?>
