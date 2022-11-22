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
   <title>Shop</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'header.php'; ?>

<section class="home-category">

   <h1 class="title">shop by category</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/cat-1.png" alt="">
         <h3>fruits</h3>
         <p>Fresh, Organic Fruit straight from farm to your table!</p>
         <a href="category.php?category=fruits" class="btn">fruits</a>
      </div>

      <div class="box">
         <img src="images/cat-3.png" alt="">
         <h3>vegitables</h3>
         <p>Fresh, Organic Vegatables; straight from farm to your table </p>
         <a href="category.php?category=vegitables" class="btn">vegitables</a>
      </div>

      <div class="box">
         <img src="images/cat-2.png" alt="">
         <h3>meat</h3>
         <p>Locally sorced organic meat.</p>
         <a href="category.php?category=meat" class="btn">meat</a>
      </div>

      <div class="box">
         <img src="images/dairy.jpg" alt="">
         <h3>Dairy</h3>
         <p>organic dairy packed with all the best Nutrient!</p>
         <a href="category.php?category=dairy" class="btn">dairy</a>
      </div>

      <div class="box">
         <img src="images/snacks.png" alt="">
         <h3>Snacks</h3>
         <p>organic dairy packed with all the best Nutrient!</p>
         <a href="category.php?category=snacks" class="btn">snacks</a>
      </div>

      <div class="box">
         <img src="images/beverages.jpg" alt="">
         <h3>Beverages</h3>
         <p>organic dairy packed with all the best Nutrient!</p>
         <a href="category.php?category=beverages" class="btn">beverages</a>
      </div>
   </div>
</section>


<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>
