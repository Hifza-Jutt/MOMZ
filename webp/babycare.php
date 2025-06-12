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
   <title>BabyCare</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stylee.css">
</head>
<body>

<?php include 'components/user_header.php'; ?>

<br>
<h1 class="heading">BabyCare: A Complete Guide from Pregnancy to Toddlerhood</h1>

<section class="trimester" id="pregnancy">
<h1>Pregnancy Care</h1>
<h2>Foundation for a Healthy Baby Starts Here</h2>
<p class="intro">
Pregnancy is a journey of transformation—emotionally, physically, and mentally. As a Gen Z or first-time mom, it's important to understand the basics of care during pregnancy. From nutrition and sleep to hygiene and emotions, everything contributes to your baby's future health.
</p>
<div class="section" >
  <h3>🍽️ Nutrition & Diet</h3>
  <ul>
    <li>Folic acid, iron, calcium, and protein are must-haves</li>
    <li>Fresh fruits (bananas, apples) and leafy greens (spinach, broccoli)</li>
    <li>Hydrate well, avoid caffeine and junk food</li>
    <li>Include prenatal vitamins like Pregnacare</li>
  </ul>
  <div class="product">
    <strong>Recommended Products:</strong> <br> 
    • <span>Pregnacare Original Tablets</span>   <a href="quick_view.php?pid=2" class="shop-now-btn">Shop Now</a><br>
    • <span>Bio Oil for Stretch Marks</span>   <a href="quick_view.php?pid=3" class="shop-now-btn">Shop Now</a><br>
    • <span>Mothercare Maternity Belt</span>   <a href="quick_view.php?pid=4" class="shop-now-btn">Shop Now</a><br>
    <!-- <a href="shop.php" class="shop-now-btn">Shop Now</a> -->
  </div>
</div>

<div class="section">
  <h3>🧼 Hygiene & Checkups</h3>
  <ul>
    <li>Get regular ultrasounds and tests</li>
    <li>Use gentle skincare and wear breathable clothes</li>
    <li>Avoid self-medication and common myths</li>
  </ul>
</div>

<div class="section">
  <h3>💬 Emotional Well-being</h3>
  <ul>
    <li>Practice prenatal yoga, mindfulness, and open communication</li>
    <li>Take time to rest and bond with your growing baby</li>
    <li>Seek help if you feel overwhelmed</li>
  </ul>
</div>
</section>

<section class="trimester" id="newborn">
<h1>Newborn Care (0–3 Months)</h1>
<h2>Welcome to the World</h2>
<p class="intro">
Your newborn is here, and every moment counts. This stage is all about bonding, building trust, and laying the foundation for your baby’s physical and emotional growth.
</p>
<div class="section">
  <h3>🍼 Feeding and Nutrition</h3>
  <ul>
    <li>Exclusive breastfeeding is highly recommended for the first 6 months</li>
    <li>In case breastfeeding isn’t possible, use a recommended infant formula</li>
    <li>Sterilize bottles and nipples thoroughly</li>
  </ul>
  <div class="product">
    <strong>Recommended Products:</strong><br>
    • <span>Nestlé Lactogen 1 Infant Formula</span><br>
    • <span>Himalaya Gentle Baby Wipes</span><br>
    • <span>Johnson's Top-to-Toe Wash</span><br>
    <a href="quick_view.php?pid=5" class="shop-now-btn">Shop Now</a>
  </div>
</div>
<div class="section">
  <h3>🧼 Hygiene and Sleep</h3>
  <ul>
    <li>Give sponge baths 2–3 times/week using mild baby soap</li>
    <li>Change diapers frequently and apply rash cream</li>
    <li>Babies sleep 16–18 hours/day — ensure a safe, flat sleep surface</li>
  </ul>
</div>
<div class="section">
  <h3>🧠 Bonding and Development</h3>
  <p>Emotional well-being plays a powerful role in both your recovery and your baby’s development. The postpartum period can be overwhelming, but nurturing emotional connection with your newborn helps ease stress and supports healthy bonding from the very beginning.<br>

Simple, loving actions can build a strong connection between you and your baby. Talking, humming, or singing to your baby—even during pregnancy—helps them recognize your voice and feel safe. Once your baby is born, start skin-to-skin contact as soon as possible. This practice regulates the baby’s heartbeat and temperature while strengthening emotional closeness.<br>

Responding to your baby’s cries with a calm voice and gentle touch fosters trust and emotional security. These early moments of bonding also boost your own mental well-being and encourage the natural release of oxytocin—the “love hormone.”</p>
  <ul>
    <li>Talk, hum, and sing to your baby</li>
    <li>Respond with calm and gentle touch to cries</li>
    <li>Start skin-to-skin contact immediately after birth</li>
  </ul>
</div>
</section>

<section class="trimester" id="mon6">
<h1>Baby Care (0–6 Months)</h1>
<h2>First Milestones and Muscle Strength</h2>
<p class="intro">Your baby becomes more alert, begins to smile, and responds to your voice. This stage is key for muscle and sensory development.</p>
<div class="section">
  <h3>🍽️ Feeding</h3>
  <p>After delivery, feeding your newborn becomes one of your most important tasks. Whether you choose to breastfeed, formula feed, or combine both, the goal is to ensure your baby receives all the essential nutrients they need to grow and thrive.<br>

Breast milk is naturally rich in antibodies and nutrients, making it the ideal first food for most babies. If you're able to breastfeed, try to do so exclusively for the first six months, as recommended by health organizations. However, if breastfeeding isn't possible or if you choose formula feeding, rest assured that modern formulas are designed to closely match breast milk in nutritional value.</p>
  <div class="product">
    <strong>Recommended Products:</strong><br>
    • <span>Pampers Premium Care Diapers</span><br>
    • <span>Canpol Soft Baby Rattle</span><br>
    • <span>Mothercare Tummy Time Play Mat</span><br>
    <a href="shop.php" class="shop-now-btn">Shop Now</a>
  </div>
</div>
<div class="section">
  <h3>💪 Growth & Play</h3>
  <p>
Encouraging your baby’s development starts with simple activities. Tummy time helps strengthen their neck and shoulder muscles, preparing them for crawling. Use soft sensory toys, make eye contact, and talk to your baby often — these small moments support bonding and early brain development.
</p>
  <ul>
    <li>Tummy time builds neck strength</li>
    <li>Use sensory toys and talk to them often</li>
  </ul>
</div>
</section>

<section class="trimester" id="mon12">
<h1>Baby Care (6–12 Months)</h1>
<h2>Solids, Sitting & Curious Minds</h2>
<p class="intro">Your baby starts exploring more! Crawling, babbling, and teething are common.</p>
<div class="section">
  <h3>🥣 Nutrition & Teething</h3>
  <p>As your baby begins teething and transitioning to solids, start with soft, mashed foods like vegetables, fruits, and rice cereal. These are gentle on sore gums and easy to digest. You can also introduce small sips of water in a sippy cup to help them stay hydrated and practice drinking independently.
</p>
  <ul>
    <li>Introduce mashed vegetables, fruits, rice cereal</li>
    <li>Offer small sips of water in a sippy cup</li>
  </ul>
  <div class="product">
    <strong>Recommended Products:</strong><br>
    • <span>Cerelac Stage 1 (Wheat & Milk)</span><br>
    • <span>Pigeon Baby Toothbrush (Stage 1)</span><br>
    • <span>Fisher-Price Stack & Rock Rings</span><br>
    <a href="shop.php" class="shop-now-btn">Shop Now</a>
  </div>
</div>
<div class="section">
  <h3>🧠 Behavior & Milestones</h3>
 <p>During the early months of life, your baby begins to explore the world through movement, sound, and touch. This is a crucial time for cognitive and emotional development, so it’s important to create an environment that nurtures curiosity and builds strong connections.<br>

You can support your baby’s growth by encouraging interaction through simple activities like reading picture books, playing soft music, and using colorful toys or games that stimulate the senses. These activities help improve memory, recognition, and emotional bonding.

As your baby becomes more active, provide a safe and open space for crawling, stretching, and reaching. This promotes motor skill development and allows them to build strength and coordination at their own pace.

Offering love, attention, and safe opportunities for discovery helps lay the foundation for healthy behavior and developmental milestones in the months ahead.</p>
</div>
</section>

<section class="trimester" id="mon18">
<h1>Baby Care (12–18 Months)</h1>
<h2>Exploring the World</h2>
<p class="intro">Your toddler may begin to walk, say basic words, and express preferences. This is a big transition phase.</p>
<div class="section">
  <h3>🍽️ Eating & Independence</h3>
  <p>Encourage independence by offering finger foods like fruits, lentils, eggs, and chapatis to promote self-feeding skills. This helps develop fine motor abilities and makes mealtime enjoyable.</p>
  <div class="product">
    <strong>Recommended Products:</strong><br>
    • <span>Nestlé NIDO 1+ Growing Up Milk</span><br>
    • <span>Chicco No-Tears Shampoo</span><br>
    • <span>LeapFrog Shapes and Sharing Picnic Basket</span><br>
    <a href="shop.php" class="shop-now-btn">Shop Now</a>
  </div>
</div>
<div class="section">
  <h3>🧠 Behavior</h3>
  <ul>
    <li>Temper tantrums may begin — stay calm and redirect</li>
    <li>Provide routines and encourage hugs and social gestures</li>
  </ul>
</div>
</section>

<section class="trimester" id="mon24">
<h1>Baby Care (18–24 Months)</h1>
<h2>The Independent Toddler</h2>
<p class="intro">Your baby now becomes more independent, mobile, and expressive.</p>
<div class="section">
  <h3>🍽️ Daily Routine & Family Meals</h3>
<p>Include your child in daily family meals to build routine and social skills. Begin using spoons and cups to encourage self-feeding, and gently introduce basic table manners to make mealtimes enjoyable and structured.</p>
  <div class="product">
    <strong>Recommended Products:</strong><br>
    • <span>Farlin Potty Training Seat</span><br>
    • <span>Mamaearth Kids Toothpaste</span><br>
    • <span>Melissa & Doug Wooden Puzzle Toys</span><br>
    <a href="shop.php" class="shop-now-btn">Shop Now</a>
  </div>
</div>
<div class="section">
  <h3>🧠 Play & Cognitive Development</h3>
  <p>Play is essential for your child's cognitive and emotional development. Encourage activities like pretend play, storytelling, and simple art projects to spark creativity, improve language skills, and build imagination. Outdoor play is equally important—it supports physical health, problem-solving, and social interaction. Providing opportunities for independent play also helps your child build confidence, focus, and decision-making skills in a fun and natural way.</p>
  <ul>
    <li>Promote pretend play, storytelling, and art</li>
    <li>Encourage outdoor play and independence</li>
  </ul>
</div>
</section>

<section>
   <div class="trimester">
  <h1>
    Final Words for New Moms  </h1>

<h2>Motherhood is a journey of love, learning, and endless care. As you nurture your baby through each stage, remember that your presence, patience, and protection mean more than perfection. Trust your instincts, celebrate the little wins, and know that in your arms, your baby finds their safest home. You're not just raising a child—you're shaping a future with love. 💗.</h2>
</div>
</section>


<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>
