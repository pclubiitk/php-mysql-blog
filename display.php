<?php
	$cn = mysql_connect('localhost', 'root', 'qwertyuiop');
	mysql_select_db('pclub', $cn);

	$res = mysql_query('select * from posts order by id desc');

	while($r = mysql_fetch_array($res))
		echo "<div class='display-post'>
				<div class='box' id='$r[id]'> 
					$r[post] <br><br>
					Likes:$r[likes] 
			 	</div>
			 	<form action='delete.php' name='deleteform' method='post'>
			 		<input input type='hidden' name='id' value='$r[id]' />
			 		<input type='submit' value='Delete'/>
			 	</form>
			 	<form action='like.php' name='likeform' method='post'>
			 		<input input type='hidden' name='id' value='$r[id]' />
			 		<input type='submit' value='Like'/>
			 	</form>
			 </div>";


	mysql_close($cn);
?>
