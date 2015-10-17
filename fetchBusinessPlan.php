<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "childaid_cfg2015";

$conn = mysql_connect($servername,$username,$password);

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}


mysql_select_db($dbname);

function fetch_data(){
	if($_POST["plan"] || $_POST["product"] || $_POST["marketing"]
		$_POST["statup_cost"] || $_POST["cost_per_unit"] || 
		$_POST["revenue"]){
		echo
	$inserquery = INSERT INTO `childaid_cfg2015`.`business_plan` 
		('idea_ID','plan','product desceiption','marketing plan',
			'startup_cost','cost_per_unit','revenue') VALUES ($idea_ID,);
	}
}

fetch_data();
?>