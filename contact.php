<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
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
		<form class="contact" method="post" action="">
			<h1>Contact Form</h1>
			<div class="fields">
				<label for="email">
					<i class="fas fa-envelope"></i>
					<input id="email" type="email" name="email" placeholder="Your Email" required>
				</label>
				<label for="name">
					<i class="fas fa-user"></i>
					<input type="text" name="name" placeholder="Your Name" required>
				<label>
				<input type="text" name="subject" placeholder="Subject" required>
				<textarea name="msg" placeholder="Message" required></textarea>
			</div>
			<input type="submit">
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
