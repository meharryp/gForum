<?php
	//gForum base code
require 'config.php';

$mysqli = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db, isset($mysql_port) ? $mysql_port : 3306);

class gForum{
	public static function post(post_text){
		//Stuff
	}

}
