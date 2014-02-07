<?php
	$username = $_POST['username'];
	$password = sha1($_POST['password']);


	$cn = mysql_connect('localhost', 'root', 'qwertyuiop');
	mysql_select_db('pclub', $cn);

	mysql_query("insert into users(username , password) values('$username', '$password')");
	mysql_close($cn);
	header( 'Location: login.html' ) ;
?>
