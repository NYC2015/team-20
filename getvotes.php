<html>
<body>
<?php

$conn = mysql_connect("localhost","root", "");

if(!$conn){
	die("connection failed: " . mysql_error());
}

mysql_select_db("ChildAid");

if(isset($_POST['content']){

	$content = $_POST['content'];

	$sql = "SELECT number_votes from votes where idea_ID = (SELECT idea_ID from Idea where description = '$content') ";

	$retval = mysql_query($sql, $conn);

	if(!$retval){
		die("could not fetch data: " . mysql_error());
	}

	while($row=mysql_fetch_array($retval)){
		echo "{$row['number_votes']}";
	}

}


?>
<body>


<html>