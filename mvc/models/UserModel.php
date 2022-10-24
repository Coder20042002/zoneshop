<?php
class UserModel extends DB
{
    function dangnhap($username, $password)
    {
        $account = "";
        $result = mysqli_query(
            $this->con,
            "SELECT * FROM tb_user WHERE username='" . mysqli_real_escape_string($this->con, $username) . "'
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

    function dangki($username, $password, $email, $fullname)
    {
        $truyvan = "INSERT INTO tb_user values(null,'" . mysqli_real_escape_string($this->con, $username) . "',
    '" . md5($password) . "','" . $email . "','".$fullname."')";
        return mysqli_query($this->con,$truyvan);
    }


    function dangxuat()
    {
        if (isset($_SESSION['account'])) {
            unset($_SESSION['account']);
            return true;
        } else
            return false;
    }

    function existsUsername($username)
    {
        $result = mysqli_query($this->con, "SELECT count(*) FROM tb_user WHERE username='" . $username . "'");
        $row = mysqli_fetch_row($result);
        mysqli_free_result($result);
        return $row[0] > 0;
    }


    //Kiểm tra tính hợp lệ độ dài (độ dài từ 8 đến 30 kí tự)
    function validateLenUP($up)
    {
        return strlen($up) >= 8 && strlen($up) <= 30;
    }

    //Kiểm tra tính hợp lệ của email. Email phải có dạng abc@xyz.com
    function validateEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) != false ? true : false;
    }
}
