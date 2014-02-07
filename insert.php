<?php
	$post = $_POST['post'];

	$cn = mysql_connect('localhost', 'root', 'qwertyuiop');
	mysql_select_db('pclub', $cn);

	mysql_query("insert into posts(post) values('$post')");
	mysql_close($cn);
	header( 'Location: index.php' ) ;
?>
