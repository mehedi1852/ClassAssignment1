<?php

$f0 = $_GET["f0"];
$f1 = $_GET["f1"];
$f2 = $_GET["f2"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

	$query 	= "DELETE FROM semester WHERE semester=$f2 && course_id=$f1";

	echo $query;

	mysqli_query( $connect, $query )

		or die("Can not execute query");
	echo "<p>Updated Successfully!</p>";

?>