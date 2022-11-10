<?php
class OrderModel extends DB {
    function insertOrder($ten,$sdt,$email,$diachi,$thanhtien) {
        $truyvan="INSERT INTO `tbl_order`(`ten`, `sdt`, `email`, `điachia`, `thanhtien`) VALUES ('".$ten."','".$sdt."','".$email."','".$diachi."','".$thanhtien."')";
        return mysqli_query($this->con,$truyvan);
    }
} 
?>