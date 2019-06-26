<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $creativeTitle; ?></title>

	<meta charset="utf-8">
	<meta name="description" content="This is a creative of Growork">
	<link rel="stylesheet" type="text/css" href="../css/styles.css"/>

	<!-- Bootstrap links -->
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css"/>
	<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>

	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Fondamento" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"/>

	<!-- <script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/script.js"></script> -->
</head>
<body>
	<?php echo $creativeHeader; ?>
	<?php echo $creativeContent; ?>
	<footer>
		Copyright &copy; <?php echo Date("Y"); ?> CREATIVE
	</footer>
</body>
</html>