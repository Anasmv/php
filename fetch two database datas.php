<?php
$db_selected = mysqli_connect('localhost', 'root', '' );
if($db_selected) { echo 'success_con'; } else { echo 'con error'; }

$sql_db="SELECT db_1.table_1.id as db_1_table_1_id, db_2.table_2.id as db_2_table_2_id,
				db_1.table_1.name as db_1_table_1_name, db_2.table_2.name as db_2_table_2_name,
				db_1.table_1.age as db_1_table_1_age, db_2.table_2.age as db_2_table_2_age FROM 
				db_1.table_1, db_2.table_2 ";
				
$res = mysqli_query($db_selected, $sql_db);
$row = mysqli_fetch_array($res);

echo 'first db first table id = ' . $row['db_1_table_1_id'] . '<br>';
echo 'second db second table id = ' . $row['db_2_table_2_id'] . '<br>' . '<br>';

echo 'first db first table name = ' .  $row['db_1_table_1_name'] . '<br>';
echo 'second db second table name = ' .  $row['db_2_table_2_name'] . '<br>' . '<br>';

echo 'first db first table age = ' . $row['db_1_table_1_age']. '<br>';
echo 'first db first table age = ' . $row['db_2_table_2_age']. '<br>' . '<br>';
?>