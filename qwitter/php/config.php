<?php
        $hostname='sql113.epizy.com';
		$username='epiz_32565365';
		$password='kWypNuIRef9';
		$dbname='epiz_32565365_qwitter';

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }else{
    // echo "OK";
  }
?>


