<?php

	$f0 = $_GET["f0"];
	$f1 = $_GET["f1"];
	$f2 = $_GET["f2"];
	$f3 = $_GET["f3"];
	$f4 = $_GET["f4"];
	$f5 = $_GET["f5"];
	$f6 = $_GET["f6"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO student VALUES ( '', '$f1', '$f2', '$f3', '$f4', '$f5', '$f6' )" )

		or die("Can not execute query");



	 echo "Record inserted";
	 echo "<p><a href=read.php>READ all records</a>";

?>