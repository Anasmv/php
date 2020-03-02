<form method='post'>
	<textarea name='text_s'>'' UNION SELECT table_schema, table_name, 1 FROM information_schema.tables </textarea>
	<input type='submit' name='sub'>
</form>

<?php
if(isset($_POST['text_s']))
{
	//
	$name = $_POST['text_s'];
	$con = mysqli_connect('localhost','root','','database');
	echo $sql="SELECT * FROM `table` WHERE `name` = $name ";
	//INSERT INTO `table` (`id`, `name`, `file`) VALUES ('1', '2', '0x4e6f6b6961373631302f322e')
	//echo $sql="SELECT * FROM `table` WHERE `name` = '' UNION SELECT table_schema, table_name, 1 FROM information_schema.tables ";
	
	
	//TRUNCATE `table`";
	
	
	$res = mysqli_query($con, $sql);
	
	
	if($res)
	{
		$rw = mysqli_fetch_array($res);
		
		while($rw = mysqli_fetch_array($res))
		{
			echo '<pre>';
			print_r($rw);
			echo '</pre>';
		}
	}
	else
	{
		echo '<br>error';
	}
}
?>
