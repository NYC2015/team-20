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
		$_POST["statup_cost"] || $_POST["target_revenue"]){
		
		$target_revenue = $_POST["target_revenue"];
		$cost = $_POST["startup_cost"];

		$margin = ($target_revenue - $cost)/100;


		$inserquery = INSERT INTO `childaid_cfg2015`.`business_plan` 
		('idea_ID','plan','product desceiption','marketing plan',
			'startup_cost','cost_per_unit','revenue','product_sold','target_revenue') 
		VALUES 
		($idea_ID, $_POST["plan"],$_POST["product"],$_POST["marketing"],
			$_POST["startup_cost"],$margin,NULL,NULL,$target_revenue);
	}

	mysql_query(inserquery);

	echo("You are all set, now track your progress");
}

function compute_profit(){
	if($_POST["product_sold"] || $_POST["cost_per_unit"]){
		$revenue = $_POST["product_sold"] * $_POST["cost_per_unit"];

		$inserquery = INSERT INTO 'childaid_cfg2015'.'business_plan'
		('idea_ID','plan','product desceiption','marketing plan',
			'startup_cost','cost_per_unit','revenue','product_sold','target_revenue') 
		VALUES 
		($idea_ID, $_POST["plan"],$_POST["product"],$_POST["marketing"],
			$_POST["startup_cost"],$margin,$revenue,$_POST["product_sold"],$target_revenue);
	}
}

fetch_data();
?>