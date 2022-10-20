<?php
class UserModel extends DB{
   function login($username,$password) {
    $query = "SELECT count(*) FROM tb_user WHERE username='".mysqli_real_escape_string($this->con,$username)."'
    and password='".md5($password)."'";
    return mysqli_query($this->con,$query);
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

   
}

?>
