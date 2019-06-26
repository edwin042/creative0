<?php 
	//database connection
	

	if(isset($_POST['submit'])){
		//file folder
		$target_destination = "new_files/" . basename($_FILES['portfolioFile']['name']);
		//temp file name
		$file_name = $_FILES['portfolioFile']['tmp_name'];
		//if the file exists in the folder
		if(file_exists($target_destination)){
			echo "File Already Exists";
		}else{
			//move the uploaded file into the selected destination
			move_uploaded_file($file_name, $target_destination);
		}
		//inserting into database table
		$insertDb = $pdo->prepare("INSERT INTO client(name, email, social_links, portfolioFile, category) VALUES(:name, :email, :social_links, :portfolioFile, :category)");
		$criteria = [
			'name' => $_POST['name'],
			'email' => $_POST['email'],
			'social_links' => $_POST['social_links'] ,
			'portfolioFile' => $_FILES['portfolioFile']['name'],
			'category' => $_POST['category'],
		];
		if($insertDb->execute($criteria)){
			echo "<script>alert('Inserted');</script>";
		}
	}
?>