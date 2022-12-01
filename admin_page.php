<?php

@include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>

<?php include 'admin_header.php'; ?>

<section class="dashboard">

   <h1 class="title">dashboard</h1>

   <div class="box-container">

      <div class="box">
      <?php
         $total_pendings = 0;
         $select_pendings = $conn->prepare("SELECT * FROM `orders` WHERE payment_status = ?");
         $select_pendings->execute(['pending']);
         while($fetch_pendings = $select_pendings->fetch(PDO::FETCH_ASSOC)){
            $total_pendings += $fetch_pendings['total_price'];
         };
      ?>
      <h3><i class="fas fa-hourglass"></i></h3>
    <p><b style="color:Tomato;">$<?= $total_pendings; ?></b> pending amount</p>
      <a href="admin_orders.php" class="btn">Pending Orders</a>
      </div>

      <div class="box">
      <?php
         $total_completed = 0;
         $select_completed = $conn->prepare("SELECT * FROM `orders` WHERE payment_status = ?");
         $select_completed->execute(['completed']);
         while($fetch_completed = $select_completed->fetch(PDO::FETCH_ASSOC)){
            $total_completed += $fetch_completed['total_price'];
         };
      ?>
      <h3><i class="fas fa-check"></i></h3>
      <p><b style="color:Tomato;">$<?= $total_completed; ?></b> completed</p>
      <a href="admin_orders.php" class="btn">Completed Orders</a>
      </div>

      <div class="box">
      <?php
         $select_orders = $conn->prepare("SELECT * FROM `orders`");
         $select_orders->execute();
         $number_of_orders = $select_orders->rowCount();
      ?>
      <h3><i class="fas fa-shopping-cart"></i></h3>
      <p><b style="color:Tomato;"><?= $number_of_orders; ?> </b>Total Orders</p>
      <a href="admin_orders.php" class="btn">see orders</a>
      </div>

      <div class="box">
      <?php
         $select_products = $conn->prepare("SELECT * FROM `products`");
         $select_products->execute();
         $number_of_products = $select_products->rowCount();
      ?>
      <h3><i class="fas fa-carrot"></i></h3>
      <p><b style="color:Tomato;"><?= $number_of_products; ?></b>  Products Added</p>
      <a href="admin_products.php" class="btn">see products</a>
      </div>

      <div class="box">
      <?php
         $select_users = $conn->prepare("SELECT * FROM `users` WHERE user_type = ?");
         $select_users->execute(['user']);
         $number_of_users = $select_users->rowCount();
      ?>
      <h3><i class="fas fa-user"></i></h3>
      <p><b style="color:Tomato;"><?= $number_of_users; ?></b> Customer</p>
      <a href="admin_users.php" class="btn">see customer accounts</a>
      </div>

      <div class="box">
      <?php
         $select_admins = $conn->prepare("SELECT * FROM `users` WHERE user_type = ?");
         $select_admins->execute(['admin']);
         $number_of_admins = $select_admins->rowCount();
      ?>
      <h3><i class="fas fa-lock"></i></h3>
      <p><b style="color:Tomato;"><?= $number_of_admins; ?></b> Admin</p>
      <a href="admin_users.php" class="btn">see admin accounts</a>
      </div>

      <div class="box">
      <?php
         $select_accounts = $conn->prepare("SELECT * FROM `users`");
         $select_accounts->execute();
         $number_of_accounts = $select_accounts->rowCount();
      ?>
      <h3><i class="fas fa-users"></i></h3>
      <p><b style="color:Tomato;"><?= $number_of_accounts; ?></b> Total Account</p>
      <a href="admin_users.php" class="btn">see all accounts</a>
      </div>

      <div class="box">
      <?php
         $select_messages = $conn->prepare("SELECT * FROM `message`");
         $select_messages->execute();
         $number_of_messages = $select_messages->rowCount();
      ?>
      <h3><i class="fas fa-message"></i></h3>
      <p><b style="color:Tomato;"><?= $number_of_messages; ?></b> Message</p>
      <a href="admin_contacts.php" class="btn">see message</a>
      </div>

   </div>

</section>













<script src="js/script.js"></script>

</body>
</html>
