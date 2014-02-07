<?php
	$id = $_POST['id'];

	$cn = mysql_connect('localhost', 'root', 'qwertyuiop');
	mysql_select_db('pclub', $cn);

/*	if($id == "last")
		mysql_query("delete from posts where id=(select MAX(id) from posts)");
	else
*/		mysql_query("delete from posts where id=$id");
	mysql_close($cn);
	header( 'Location: index.php' ) ;
?>
