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

   <style>
   table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 2px solid #dddddd;
  text-align: left;
  padding: 12px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>
   
</head>
<body>

<?php include 'header.php'; ?>


<section class="orders">
   <h1 class="title">Order History</h1>
   <div class="box-container">
<body>
<span style="font-size: 18px;">
<table>
  <tr>
    <th>Product Name</th>
    <th>Price</th>
    <th>Category</th>
    <th>Order Date</th>
    <th>Status</th>
  </tr>

</table>
</body>
</html>
</div>
</section>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>
