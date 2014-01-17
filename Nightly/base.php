<?php
	//gForum base code
require 'config.php';
if ($mysql_port != "") {
	mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db, $mysql_port);
}
else{
	mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
}
class gForum{
	public static function post(post_text){
		//Stuff
	}

}