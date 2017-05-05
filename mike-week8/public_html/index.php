
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>VANARTS STUDENT MOCK PROJECT</title>
	<meta name="description" content="This is a student exercise website for the Vancouver Institute of Media Arts (www.vanarts.com)">
	<link rel="icon" type="image/png"  href="favicon.png">
<!-- CSS -->
	<link href="https://fonts.googleapis.com/css?family=Ceviche+One|Hammersmith+One|Open+Sans|Orbitron" rel="stylesheet">
	<link href="css/foundation/foundation.css" rel="stylesheet" type="text/css">
  <link href="css/foundation/normalize.css" rel="stylesheet" type="text/css">
	<link href="css/main.css" media="screen, projector, print" rel="stylesheet" type="text/css">
<!-- modernizr -->
  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
	<header class="header-wrapper">
		<div class="banner row">
<!-- NAV PARTIAL -->
		<?php include "partials/menu.php"; ?>
		<div class="banner-container">
			<img src="img/belfegoth.png" alt="hot mobile game neo monstars">
		</div>
	</div>
<!-- nav partial -->
	</header>

	<div class='content-background'>
		<div class="pageContent row">
			<h1>Choose Your Phone</h1>
			<div class="large-4 columns">
				<h3 class="center">iPhone</h3>
				<div class="phones"><img src="img/iphone.jpg" alt="Neo Monstars for iphone"></div>
				<div class="appButton"><a href="https://itunes.apple.com"><img src="img/app-store.jpg" alt="Download Neo Monstars for iphone"></a>
			</div>
		</div>
		<div class="large-4 columns">
			<h3 class="center">Android</h3>
			<div class="phones"><img src="img/android.jpg" alt="Neo Monstars for android"></div>
			<div class="appButton"><a href="https://itunes.apple.com"><img src="img/google-play.jpg" alt="Download Neo Monstars for android"></a>
		</div>
	</div>
	<div class="large-4 columns">
		<h3 class="center">Windows</h3>
		<div class="phones"><img src="img/windows.jpg" alt="Neo Monstars for windows"></div>
		<div class="appButton"><a href="https://itunes.apple.com"><img src="img/windows-store.jpg" alt="Download Neo Monstars for windows"></a>
	</div>
</div>
	</div>

	<?php include "partials/footer.php"; ?>
</body>
</html>
