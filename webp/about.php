<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stylee.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about.jpg"  alt="" >
      </div>

      <div class="content">
         <h3>Our Vision</h3>
  <p>
    At <strong>Momzi</strong>, our vision is to create a supportive, informed, and empowered community for mothers across Pakistan and beyond.
    We believe every mom deserves access to trusted guidance, whether she's nurturing a newborn, navigating toddler tantrums, or seeking postpartum support.
    We help moms by <strong>solving their problems and answering their queries</strong> — from baby care and nutrition to emotional wellness and everyday challenges.
    Together, let's raise happy, healthy little humans.
  </p>
  <p>
    If you ever have a question, concern, or need personalized advice, <strong>we're here for you</strong>. Just
    contact us and share your query — our team is always ready to help you with care, empathy, and expert-backed answers.
  </p>


         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Our Ambassadors</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/ayeza.jpeg" alt="">
         <p>As a mother and a woman, I understand how overwhelming the journey of motherhood can be — especially for new moms. That’s why I’m proud to be part of Momzi, a platform that truly cares. From baby care tips to nutrition and mental health support for moms.</p>
         <!-- <div class="stars">
             <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i> 
         </div> -->
         <h3>Ayeza Khan</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/iqra.jpeg" alt="">
         <p>As a mother and a woman, I understand how overwhelming the journey of motherhood can be especially for new moms. That’s why I’m proud to be part of Momzi, a platform that truly cares. From baby care tips to nutrition and mental health support for moms</p>
         
         <h3>Iqra Aziz</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/yumna.jpeg" alt="">
         <p>As a mother and a woman, I understand how overwhelming the journey of motherhood can be especially for new moms. That’s why I’m proud to be part of Momzi, a platform that truly cares. From baby care tips to nutrition and mental health support for moms</p>
         
         <h3>Yumnah zaidi</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/yumna.jpeg" alt="">
         <p>As a mother and a woman, I understand how overwhelming the journey of motherhood can be especially for new moms. That’s why I’m proud to be part of Momzi, a platform that truly cares. From baby care tips to nutrition and mental health support for moms</p>
         <h3>Hadiyah Jamshaid</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/mahira.jpeg" alt="">
         <p>As a mother and a woman, I understand how overwhelming the journey of motherhood can be especially for new moms. That’s why I’m proud to be part of Momzi, a platform that truly cares. From baby care tips to nutrition and mental health support for moms</p>
        
         <h3>Mahira Khan</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.png" alt="">
         <p>As a mother and a woman, I understand how overwhelming the journey of motherhood can be — especially for new moms. That’s why I’m proud to be part of Momzi, a platform that truly cares. From baby care tips to nutrition and mental health support for moms</p>
       
         <h3>Aiman Muneeb</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>