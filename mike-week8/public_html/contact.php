
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
	<link href="css/main.css" media="screen, projector, print" rel="stylesheet" type="text/css">

  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
	<header class="header-wrapper">
		<div class='hero-contact'>
<!-- NAV PARTIAL -->
		<?php include "partials/menu.php"; ?>
<!-- nav partial -->
		</div>
	</header>
	<div class="contact-content row ">
		<form class="large-6 columns">
<!-- Took from the internet due to time crunch -->
			<ul class="form-style-1">
			    <li><label>Full Name <span class="required">*</span></label><input type="text" name="field1" class="field-divided" placeholder="First" />&nbsp;<input type="text" name="field2" class="field-divided" placeholder="Last" /></li>
			    <li>
			        <label>Email <span class="required">*</span></label>
			        <input type="email" name="field3" class="field-long" />
			    </li>
			    <li>
			        <label>Your Message <span class="required">*</span></label>
			        <textarea name="field5" id="field5" class="field-long field-textarea"></textarea>
			    </li>
			    <li>
			        <input type="submit" value="Submit" />
			    </li>
			</ul>
		</form>
		<div class="large-6 columns">
			<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2602.674658361516!2d-123.11738545159113!3d49.28256170424573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5486717893865d35%3A0xa8d10bdb2ca1c083!2sVancouver+Institute+of+Media+Arts+(VanArts)!5e0!3m2!1sen!2sca!4v1471310228487"></iframe>
		</div>
	</div>
	<?php include "partials/footer.php"; ?>
</body>
</html>
