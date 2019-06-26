<?php 
	require '../includes/init.php';

	if(isset($_GET['page'])){
		require '../controller/' . $_GET['page'] . '.php';
	}else{
		require '../controller/home.php';
	}

	$sendVars = [
		'creativeTitle' => $creativeTitle,
		'creativeHeader' => $creativeHeader,
		'creativeContent' => $creativeContent
	];
	$loadHTML = template('../view/layout.php', $sendVars);
	echo $loadHTML;
?>