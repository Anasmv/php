<?php
$post = array(
			'form[district]' => '2', // $_POST['form[district]']  = '2'
			'form[localBody]' => '92', // $_POST['values']
			'form[ward]' => '17374', // $_POST['values']
			'form[pollingStation]' => '37593', // $_POST['values']
			'form[submit]' => 'submit' // $_POST['values']
        );
		
$ch = curl_init('http://lsgelection.kerala.gov.in/voters/view'); //action page url to post values
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_ENCODING,"");

header('Content-Type: text/html');
$data = curl_exec($ch);
echo $data; 
?>