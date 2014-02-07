<?php
	session_start();
	$username = $_POST['username'];
	$password = sha1($_POST['password']);


	$cn = mysql_connect('localhost', 'root', 'qwertyuiop');
	mysql_select_db('pclub', $cn);
	$res = mysql_query("select * from users where username='$username' and password='$password'");
	if($r = mysql_fetch_array($res)){
		mysql_close($cn);
		$_SESSION['loggedIn'] = 1;
		header( 'Location: index.php' ) ;
	}
	else{
		mysql_close($cn);
		$_SESSION['loggedIn'] = 0;
		header( 'Location: login.html' ) ;
	}
?>