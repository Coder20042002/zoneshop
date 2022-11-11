<?php
class CartModel extends DB
{
    function themhangvaogdo($hang)
    {
        if (isset($_SESSION['giohang'])) {
            $giohang =$_SESSION['giohang'];
            if (!array_key_exists($hang["id"], $giohang)) { //nêu hàng chưa có trong giỏ mới cho thêm
                $giohang[$hang["id"]] = $hang; //key của mảng sẽ được xây theo id của sản phẩm
                $_SESSION['giohang'] = $giohang;
            } else {
                $giohang[$hang["id"]] = $hang;
                $_SESSION["giohang"] = $giohang;
            }
        } 
    }
    function xoahangkhoiglio($key)
    {
        if (isset($_SESSTON["giohang"])) {
            $giohang = $_SESSION['giohang'];
        };
        unset($giohang[$key]);
        $_SESSTON['giohang'] = $giohang;
    }

    function capnhathangtrongio($key, $soluong)
    {
        if (isset($_SESSION['giohang'])) {
            $giohang = $_SESSION['giohang'];
            $qiohang[$key]['soluong'] = $soluong;
            $_SESSION['giochang'] = $giohang;
        }
    }
    function tinhtien()
    {
        $sum = 0;
        $giohang = $_SESSION['giohang'];
        foreach ($giohang as $v)
            $sum += $v['soluong'] * $v['gia'];
        return number_format($sum);
    }



    function Update($key = false)
    {
        foreach ($_POST['soluong'] as $id_sp => $soluong) {

            if ($soluong == 0) {
                unset($_SESSION["giohang"][$id_sp]);
            } else {
                if ($key) {
                    $_SESSION["giohang"][$id_sp] += $soluong;
                } else {
                    $_SESSION["giohang"][$id_sp] = $soluong;
                }
            }
        }
    }

    function Dipose()
    {
        mysqli_close($this->con);
    }

    //danh sach danh mục san pham
    function list_SP($key)
    {
        $truyvan_dm = "SELECT * FROM tbl_sanpham where id='$key' ";
        return mysqli_query($this->con, $truyvan_dm);
    }

    function list_Cart()
    {
        $truyvan_cart = "SELECT * FROM `tbl_sanpham` WHERE `id` IN (" . implode(",", array_keys($_SESSION["giohang"])) . ")";
        return mysqli_query($this->con, $truyvan_cart);
    }

    function  suggestProducts1() {
        $truyvan="SELECT * FROM `tbl_sanpham` WHERE id_bestseller=1 ORDER BY gia ASC LIMIT 1";
        return mysqli_query($this->con,$truyvan);
    }
    function  suggestProducts2() {
        $truyvan="SELECT * FROM `tbl_sanpham` WHERE id_bestseller=1 ORDER BY gia ASC LIMIT 2,1";
        return mysqli_query($this->con,$truyvan);
    }
    function  suggestProducts3() {
        $truyvan="SELECT * FROM `tbl_sanpham` WHERE id_bestseller=1 ORDER BY gia ASC LIMIT 3,1";
        return mysqli_query($this->con,$truyvan);
    }
    function  suggestProducts4() {
        $truyvan="SELECT * FROM `tbl_sanpham` WHERE id_bestseller=1 ORDER BY gia ASC LIMIT 4,1";
        return mysqli_query($this->con,$truyvan);
    }
}
