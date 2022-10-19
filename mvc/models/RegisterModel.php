<?php
class RegisterModel extends DB{
    public function InsertNewUser($username,$password,$email,$fullname) {
        $add = mysql_query("
        INSERT INTO member (
            username,
            password,
            email,
            fullname
            
        )
        VALUE (
            '{$username}',
            '{$password}',
            '{$email}',
            '{$fullname}'
           
        )
    ");

   
    
}
}
?>
