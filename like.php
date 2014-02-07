<?php
	$id = $_POST['id'];

	$cn = mysql_connect('localhost', 'root', 'qwertyuiop');
	mysql_select_db('pclub', $cn);
		echo $id;
	mysql_query("update posts set likes=likes+1 where id=$id");
	mysql_close($cn);
	header( 'Location: index.php' ) ;
?>
