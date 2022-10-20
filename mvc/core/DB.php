<?php

class DB{

    public $con;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "db_zoneshop";

    function __construct(){
        $this->con = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }

     function chayTruyVanTraVeDL($q)
	{
		$result = mysqli_query($this->con, $q);
		return $result;
	}

	function chayTruyVanKhongTraVeDL( $q)
	{
		$result = mysqli_query($this->con, $q);
		return $result;
	}

	function giaiPhongBoNho( $result)
	{
		try {
			mysqli_close($this->con);
			mysqli_free_result($result);
		} catch (TypeError $e) {
		}
	}

	
	function dispose($link)
	{
		try {
			mysqli_close($link);
		} catch (TypeError $e) {
		}
	}

function executeNonQuery($q)
{
	
	$result = mysqli_query($this->con,$q);
	giaiPhongBoNho($this->con,$q);
	return $result;
}

function executeQuery($q)
{
	$result = mysqli_query($this->con,$q);
	giaiPhongBoNho($this->con,$q);
	return $result;
}
	
function stringSQL($string)
{
	mysqli_real_escape_string($this->con, $string);
	giaiPhongBoNho($this->con,$string);
	return $string;
}

	
}

?>