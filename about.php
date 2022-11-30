<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
}
;

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> About us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>

<?php include 'header.php'; ?>

<body>
   <div class="about-bg">
      <p style="font-size: 18pt; color:var(--black);"><br><b>About Us</b></p>
      <section class="about">
         <b>SJ Grocer is an online service that allows users to easily order their favourite food!
            <br><br>Users can browse a vast list of foods with ease, adding whatever they need along the way.
            <br><br>SJ Grocer has everything you would find at your local grocery store, and more!
            <br><br>No need to make multiple trips, all your ingredients are avaliable through us!</b>
   </div>
   </div>

   <!-- need to clean up styles.css and this code, we dont need specific classes
   for just color and font sizes -->
   <div class="row">
      <div class="column">
         <div class="card">
            <img src="/images/sheep.jpg" style="width:100%">
            <div class="container">
               <h2 class="name">John Doe</h2>
               <p class="title">Job title</p>
               <p class="job-description">My job description</p>
            </div>
         </div>
      </div>

      <div class="row">
         <div class="column">
            <div class="card">
               <img src="/images/sheep.jpg" style="width:100%">
               <div class="container">
                  <h2 class="name">John Doe</h2>
                  <p class="title">Job title</p>
                  <p class="job-description">My job description</p>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="column">
               <div class="card">
                  <img src="/images/sheep.jpg" style="width:100%">
                  <div class="container">
                     <h2 class="name">John Doe</h2>
                     <p class="title">Job title</p>
                     <p class="job-description">My job description</p>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="column">
                  <div class="card">
                     <img src="/images/sheep.jpg" style="width:100%">
                     <div class="container">
                        <h2 class="name">John Doe</h2>
                        <p class="title">Job title</p>
                        <p class="job-description">My job description</p>
                     </div>
                  </div>
               </div>

               <div class="row">
                  <div class="column">
                     <div class="card">
                        <img src="/images/sheep.jpg" style="width:100%">
                        <div class="container">
                           <h2 class="name">John Doe</h2>
                           <p class="title">Job title</p>
                           <p class="job-description">My job description</p>
                        </div>
                     </div>
                  </div>

                  <div class="row">
                     <div class="column">
                        <div class="card">
                           <img src="/images/sheep.jpg" style="width:100%">
                           <div class="container">
                              <h2 class="name">John Doe</h2>
                              <p class="title">Job title</p>
                              <p class="job-description">My job description</p>
                           </div>
                        </div>
                     </div>
                  </div>
</body>


<?php include 'footer.php'; ?>
<script src="js/script.js"></script>

</html>