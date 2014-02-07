<?php
	$cn = mysql_connect('localhost', 'root', 'qwertyuiop');
	mysql_select_db('pclub', $cn);

	$res = mysql_query('select * from posts order by id desc');

	while($r = mysql_fetch_array($res))
		echo "<div class='box' id='$r[id]'> 
					$r[post] 
			 </div>";

	mysql_close($cn);
?>
