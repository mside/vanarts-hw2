<?php
	if(isset($_GET["id"])){

		$host = "localhost";
		$username = "michaels_vanarts";
		$password = "vanarts";
		$database = "michaels_works_db";

 		$conn = mysqli_connect($host, $username, $password, $database);

 		if(!$conn) {
 			die("Connection has failed: " . mysqli_connect_error());
 		}
 		else {
 			$delete = "DELETE FROM works_table WHERE id='$_GET[id]'";
 			$resultDelete = mysqli_query($conn, $delete);

 			if($resultDelete) {
 				header("location: cmsMaster.php");
 			}
 			else{
 				echo "No work :(";
 			}
		}
	}
	else {
		echo "Shoo Shoo, get a real job troll!";
	}
?>
