<html>
<body>
<?php

$conn = mysql_connect("localhost", "root", "");

if(!$conn){
	die("connection failed: " . mysql_error());
}

mysql_select_db("ChildAid");

	

	if(isset($_POST["idea"]))
	$idea = $_POST["idea"];
	

	$sql = "SELECT comment from comments where idea_ID = (SELECT idea_ID from idea where description = '$idea')";

	$retval = mysql_query($sql, $conn);

	if(!$retval){
		echo 'Could not fetch data: ' . mysql_error();
	}

	while($row = mysql_fetch_array($retval)){
		echo "{$row['comment']}<br>";
	}



?>

</body>


</html>