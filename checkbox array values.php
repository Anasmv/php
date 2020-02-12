<html>
    <body>
		<form method="post" action="">
			<input type='checkbox' value='1' name='checkbox1[]'/>
			<input type='checkbox' value='2' name='checkbox1[]'/>
			<input type='checkbox' value='3' name='checkbox1[]'/>
			<input type='checkbox' value='4' name='checkbox1[]'/>
			<input type="submit" class="btn btn-success" name="submitscodeid" />
		</form>
	</body>
</html>

<?php
	if(isset($_POST['submitscodeid']) && isset($_POST['checkbox1']))
	{
		$check=$_POST['checkbox1'];
		for ($i=0; $i<sizeof($check);$i++)
		{
			echo $a=$check[$i];
		}
	}
	else
	{
		echo 'check a checkbox';
	}
?>