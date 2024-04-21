<?php
	$host='localhost';
	$user='root';
	$pw='';
	$db='curiosity hotel';
    try{
        $connection = mysqli_connect($host, $user, $pw, $db);
    }
    catch(mysqli_sql_exception $e){
        echo "Connection failed:";
    }
	
	if($connection){
	echo "Connection successful";
	}