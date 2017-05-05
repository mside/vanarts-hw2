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
//get all info
                            $query = "SELECT * FROM works_table";
                            $resultQuery = mysqli_query($conn, $query);
                            $num = mysqli_num_rows($resultQuery);
//if info is present in table do the following
                            if($num > 0) {
                                echo "<table>";
                                echo "<tr><td><a href='cmsInsert.php'>Create New</a></td><td></td><td>Title</td><td>Event Date</td><td>Location</td><td>Image</td></tr>";
// All the results are put into an associative array called $row which we can loop through
// Each pass of this while loop isolates a single row beginning from top to bottom
                                while ($row = mysqli_fetch_assoc($resultQuery)) {
                                  $id = $row["id"];
                                  $title = $row["title"];
                									$image = $row["image"];
                									$alt = $row["alt"];
                									$description = $row["description"];
                                    echo "<tr>";
                                    echo    "<td><a href='cmsEdit.php?id=$id'>Edit</a></td>";
                                    echo    "<td><a href='cmsDelete_process.php?id=$id'>Delete</a></td>";
                                    echo    "<td>$title</td>";
                                    echo    "<td>$description</td>";
                                    echo    "<td><img src='$image' alt='$alt'></td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                            }
// Create new Event
                    }
                    mysqli_close($conn);
                ?>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>
