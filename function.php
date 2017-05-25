<?php
session_start();
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'taskdb');
class DB_conection
{
	function __construct()
	{
		$conn = mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die('localhost connection problem'.mysql_error());
		mysql_select_db(DB_NAME, $conn);
	}
	public function fetchdoctors()
	{
	
	$sql="SELECT  *, DATE_FORMAT(lastupdated, '%m/%d/%Y') 
                      	from doctor WHERE   lastupdated BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE() 
						ORDER BY hospital_name='Appolo' DESC,  qualification DESC, hospital_name ASC, location DESC, name DESC
						
						LIMIT 150
						 ";
	$result=mysql_query($sql);					 
	return $result;
	}
}
?>