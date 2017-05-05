<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>VANARTS STUDENT MOCK PROJECT</title>
	<meta name="description" content="This is a student exercise website for the Vancouver Institute of Media Arts (www.vanarts.com)">
	<link rel="icon" type="image/png"  href="favicon.png">

	<link href="css/foundation/foundation.css" rel="stylesheet" type="text/css">
  <link href="css/foundation/normalize.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
	<link href="css/main.css" media="screen, projector, print" rel="stylesheet" type="text/css">

  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<!-- BEGIN BODY -->
    <body>
        <?php include 'menu.php'; ?>
		<?php
			if(isset($_GET["id"])){
//connect to db
        $host = "localhost";
        $username = "michaels_vanarts";
        $password = "vanarts";
        $database = "michaels_works_db";

		 		$conn = mysqli_connect($host, $username, $password, $database);

		 		if(!$conn) {
		 			die("Connection has failed: " . mysqli_connect_error());
		 		}
		 		else {
		 			$query = "SELECT * FROM works_table WHERE id='$_GET[id]'";
		 			$resultQuery = mysqli_query($conn, $query);

 					$num = mysqli_num_rows($resultQuery);

 					if($num > 0) {
 						while ($row = mysqli_fetch_assoc($resultQuery)) {
              $title = $row["title"];
              $image = $row["image"];
              $alt = $row["alt"];
              $description = $row["description"];
              $id = $row["id"];

							echo '<form method="post" action="cmsEdit_process.php">';
							echo '	<label>ID</label><input name="id" readonly value="'. $id .'"/>';
							echo '	<label>Title</label><input name="title" value="' . $title . '"/>';
							echo '	<label>Description</label><input name="eventDate" value="' . $description . '"/>';
							echo '	<input name="update" type="submit" value="Update"/>';
							echo '</form>';
			 			}
			 		}
				}
				mysqli_close($conn);
			}
			else {
				echo "Shoo shoo internet troll!";
			}
		?>
		<?php include 'footer.php'; ?>
	</body>

<html>
