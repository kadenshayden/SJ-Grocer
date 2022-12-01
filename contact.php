<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
	header('location:login.php');
};

if(isset($_POST['message'])){
	/*$id = $_POST['id'];
	$id = filter_var($id, FILTER_SANITIZE_STRING);
	$user_id = $_POST['user_id'];
	$user_id = filter_var($user_id, FILTER_SANITIZE_STRING);*/
	$name = $_POST['name'];
	$name = filter_var($name, FILTER_SANITIZE_STRING);
	$email = $_POST['email'];
	$email = filter_var($email, FILTER_SANITIZE_STRING);
	/*$number = $_POST['number'];
	$number = filter_var($number, FILTER_SANITIZE_STRING);*/
	$send_message = $_POST['message'];
	$send_message = filter_var($send_message, FILTER_SANITIZE_STRING);
 	

	$insert_message = $conn->prepare("INSERT INTO `message` (id, user_id, name, email, number, message) VALUES (NULL,?,?,?,?,?)");
	$insert_message->execute([$user_id, $name, $email, NULL, $send_message]);

 };
 

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>home page</title>

	<!-- font awesome cdn link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

	<!-- custom css file link  -->
	<link rel="stylesheet" href="css/style.css">

</head>

<body>

	<?php include 'header.php'; ?>

	<div class="home-bg">

		<section class="home">

			<div class="content">

				<body>
					<form class="contact" method="POST" action="" enctype="multipart/form-data">
						<h1>Questions? Send Us A Message!</h1>
						<div class="fields">
							<label for="email">
								<input id="email" type="email" name="email" placeholder="Your Email" required>
							</label>
							<label for="name">
								<input type="text" name="name" placeholder="Your Name" required>
								<label>
									<textarea name="message" placeholder="Message" required></textarea>
						</div>
						<input type="submit" name = "message">
						
					</form>
				</body>

				</head>
		</section>
	</div>
	<section class="home-category">
	</section>
	<?php include 'footer.php'; ?>
	<script src="js/script.js"></script>
</body>

</html>