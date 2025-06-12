<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stylee.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- Inside your existing home.php -->
<div class="home-bg momz-theme">

<section class="home">

   <div class="swiper home-slider momz-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide momz-slide">
         <div class="image">
            <img src="images/home-img-1.png" alt="">
         </div>
         <div class="content">
            <span>From First Kick to First Step</span>
            <h3 >Smarter Parenting</h3>
            <a href="babycare.php" class="btn">Explore Now</a>
         </div>
      </div>

      <div class="swiper-slide slide momz-slide">
         <div class="image">
            <img src="images/home-img.png" alt="">
         </div>
         <div class="content">
            <span>Tips about Baby Diet, Behavior and much more</span>
            <h3>BabyCare Guide</h3>
            <a href="babycare.php" class="btn">Explore Now</a>
         </div>
      </div>

      <div class="swiper-slide slide momz-slide"> 
         <div class="image">
            <img src="images/home-img-3.png" alt="">
         </div>
         <div class="content">
            <span>Every Mom Deserves to Feel Confident and Capable</span>
            <h3>Empowering Mothers</h3>
           
            <a href="momcare.php" class="btn">Explore Now</a>
         </div>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

</div>

<section class="category">

   <h1 class="heading">Explore By Baby Age</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">


   <a href="momcare.php" class="swiper-slide slide">
      <img src="images/icon-1.png" alt="">
      <h3>Pregnancy</h3>
   </a>

   <a  href="babycare.php#newborn" class="swiper-slide slide">
      <img src="images/icon-2.png" alt="">
      <h3>New Born Care</h3>
   </a>

   <a href="babycare.php#mon6" class="swiper-slide slide">
      <img src="images/icon-3.png" alt="">
      <h3>First 6 Months</h3>
   </a>

   <a href="babycare.php#mon12" class="swiper-slide slide">
      <img src="images/icon-4.png" alt="">
      <h3>12 Months</h3>
   </a>

   <a href="babycare.php#mon18" class="swiper-slide slide">
      <img src="images/icon-5.png" alt="">
      <h3>18 Months</h3>
   </a>

   <a href="babycare.php#mon24" class="swiper-slide slide">
      <img src="images/icon-6.png" alt="">
      <h3>24 Months</h3>
   </a>

 
   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<!-- FAQ's Section -->
<section class="faqs">

<h1 class="faqh">Frequently Asked Questions</h1>

<div class="faq-container">
   <div class="faq-column">
      <div class="faq-item">
         <div class="faq-question">
            <h3>What products do I need for a newborn baby?</h3>
            <span class="toggle-icon">+</span>
         </div>
         <div class="faq-answer">
            <p>For newborn care, we recommend essentials like gentle baby wipes, mild soap, soft cotton clothes, diapers, a thermometer, and rash cream. You can check out our curated list in the BabyCare section or explore our shop for mom-approved products.

</p>
         </div>
      </div>
      
      <div class="faq-item">
         <div class="faq-question">
            <h3>Is breastfeeding better than formula feeding?</h3>
            <span class="toggle-icon">+</span>
         </div>
         <div class="faq-answer">
            <p>Breastfeeding is highly recommended for the first 6 months as it builds immunity and promotes bonding. However, if breastfeeding isn't possible, doctor-recommended formulas are safe alternatives. Always sterilize feeding bottles properly.</p>
         </div>
      </div>
      
      <div class="faq-item">
         <div class="faq-question">
            <h3>What should I do if my baby isn’t eating solids?</h3>
            <span class="toggle-icon">+</span>
         </div>
         <div class="faq-answer">
            <p>It's common for babies to resist solids at first. Be patient, offer mashed fruits or vegetables, and try different textures. Avoid force-feeding and keep mealtimes fun. If you're concerned, consult your pediatrician.</p>
         </div>
      </div>
   </div>
   
   <div class="faq-column">
      <div class="faq-item">
         <div class="faq-question">
            <h3> How can I manage postpartum depression or stress?</h3>
            <span class="toggle-icon">+</span>
         </div>
         <div class="faq-answer">
            <p>Postpartum emotions are natural, but persistent sadness or stress could signal postpartum depression. Please don’t ignore it. Reach out to a loved one, a doctor, or a support group. You're not alone — and there is help.</p>
         </div>
      </div>
      
      <div class="faq-item">
         <div class="faq-question">
            <h3>What products are safe and easily available in Pakistan?</h3>
            <span class="toggle-icon">+</span>
         </div>
         <div class="faq-answer">
            <p>We carefully select and recommend products that are not only safe for your baby but also available locally. You’ll find popular brands like Nestlé, Johnson’s, Himalaya, and Pigeon featured in our guides and shop section.</p>
         </div>
      </div>
      
      <div class="faq-item">
         <div class="faq-question">
            <h3> Can I ask my personal baby-related questions here?</h3>
            <span class="toggle-icon">+</span>
         </div>
          <div class="faq-answer">
  <p>Absolutely! We help moms by solving their problems and answering their queries. Youcan contact us anytime with your question — and our team will get back to you with helpful, expert-backed guidance.

</p>
      <a href="contact.php" class="btn" style="margin-top: 1.5rem; display: inline-block;">Contact Us</a>

   </div>
      </div>
   </div>
</div>

</section>






<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

// FAQ toggle functionality
document.querySelectorAll('.faq-question').forEach(question => {
    question.addEventListener('click', () => {
        const faqItem = question.parentElement;
        faqItem.classList.toggle('active');
        
        const icon = question.querySelector('.toggle-icon');
        if (faqItem.classList.contains('active')) {
            icon.textContent = '-';
        } else {
            icon.textContent = '+';
        }
    });
});

</script>

</body>
</html>