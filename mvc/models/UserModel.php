<?php
class UserModel extends DB{ 
   function dangnhap($username, $password)
{
    $account = "";
    $result = mysqli_query($this->con,
        "SELECT * FROM tb_user WHERE username='" . mysqli_real_escape_string($this->con,$username) . "'
        and password='" . md5($password) . "'"
    );
    $row = mysqli_fetch_row($result);
    mysqli_free_result($result);

    if ($row != NULL) {
        $account = array(
            "id" => $row[0],
            "username" => $row[1],
            "fullname" => $row[3],
            "email" => $row[4]
        );
        $_SESSION['account'] = $account;
        return true;
    } else
        return false;
}

   function register($username,$password,$email,$fullname) {
    $truyvan="INSERT INTO tb_user values(null,'".mysqli_real_escape_string($this->con,$username)."',
    '".md5($password)."','".$email."')";
    return chayTruyVanKhongTraVeDL($this->con,$truyvan);
   }

   function logout(){
    if(isset($_SESSION['username'])){
        unset($_SESSION['username']);
        return true;
    } else {
        return false;
    }
   }

   function dangxuat()
{
    if (isset($_SESSION['account'])) {
        unset($_SESSION['account']);
        return true;
    } else
        return false;
}

   
}

?>
