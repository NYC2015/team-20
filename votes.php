<html>
<body>
<?php

$conn = mysql_connect("localhost","root","");

if(!$conn){
echo 'connection failed: ' . mysql_error();
}

mysql_select_db("ChildAid");
 if(isset($_POST['content'] && $_POST['number']){
 	$number = $_POST['number'];
 	$content = $_Post['content'];


 	$sql = mysql_query("UPDATE votes set number_votes = number_votes + '$number' where idea_ID = (SELECT idea_ID from Idea where description = '$content' ) ");

 	$retval = mysql_query($sql, $conn);


 }


?>
</body>
</html>
