<?php

$f0 = $_GET["f0"];
$f1 = $_GET["f1"];
$f2 = $_GET["f2"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

	$query 	= "UPDATE teacher SET course =$f1 WHERE id = $f2";

	echo $query;

	mysqli_query( $connect, $query )

		or die("Can not execute query");
	echo "<p>Updated Successfully!</p>";

?>
