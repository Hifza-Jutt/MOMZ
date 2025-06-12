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
   <title>Momcare</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
<link rel="stylesheet" href="css/stylee.css">



</head>
<body>
   
<?php include 'components/user_header.php'; ?>
<br>
    <h1 class="heading">Momcare: A Complete Guide for Every Stage of Motherhood</h1>

    
   
  <section class="trimester">
    <h1>1st Trimester of Pregnancy</h1>
    <h2>Laying the Foundation for a Healthy Journey</h2>

    <p class="intro">
      The first trimester (weeks 1 to 12) is a delicate and foundational phase of pregnancy. This is when your body begins a remarkable transformation to support a growing life, and it's crucial for moms—especially new-generation moms—to understand the physical, nutritional, and emotional needs during this period. You might experience a mix of joy, anxiety, nausea, and even disbelief—but remember, you're not alone.
    </p>

    <div class="section">
      <h3>🩺 Health Tips and Medical Checkups</h3>
      <p>
        During these early weeks, confirming your pregnancy through a blood or urine test is the first step. Once confirmed, schedule your first prenatal visit immediately. Your doctor will perform a full physical exam, record your medical history, and suggest essential blood tests, ultrasounds, and supplements (especially folic acid and iron). Regular monthly checkups are a must to track your baby’s development and catch any early concerns.
      </p>
      <p>
        Avoid self-medicating or falling for common pregnancy myths such as <em>"you shouldn't eat papaya"</em> or <em>"you must eat for two."</em> These beliefs can be misleading and harmful. Always follow medical advice, not hearsay.
      </p>
    </div>

    <div class="section">
      <h3>🍎 Diet and Nutrition</h3>
      <p>Your baby’s major organs begin developing in this trimester, so a balanced and nutrient-rich diet is vital. Focus on:</p>
      <ul>
        <li>Folic acid to prevent birth defects</li>
        <li>Iron and Vitamin C to prevent anemia</li>
        <li>Calcium and Vitamin D for bone health</li>
        <li>Fiber-rich foods to ease constipation</li>
        <li>Plenty of water to stay hydrated</li>
      </ul>
      <p>Eat small, frequent meals to combat nausea. Ginger tea and dry crackers may help morning sickness. Avoid caffeine, processed foods, and anything unhygienic.</p>
   <p>One of the most important nutrients in early pregnancy is folic acid, which helps prevent neural tube defects. Doctors typically recommend taking 400–600 mcg of folic acid daily. You can also boost your intake through natural sources such as leafy greens, citrus fruits, and lentils.<br>

Iron is another key nutrient, as your body needs to produce more blood to support your growing baby. Pairing iron-rich foods like spinach or red meat with sources of vitamin C, such as oranges or tomatoes, helps improve absorption. Avoid drinking tea or coffee immediately after iron-rich meals, as they may reduce its effectiveness.<br>

Calcium and vitamin D are vital for the development of your baby’s bones and teeth. Try to include dairy products like milk and yogurt, eggs, and safe sun exposure in your daily routine. Fiber is equally important — pregnancy hormones can slow down digestion, so eating whole grains, fresh fruits with skin, and vegetables like carrots or sweet potatoes can help prevent constipation.

Staying hydrated is just as important as eating well. Aim for 8–10 glasses of water each day. You can also include other fluids like coconut water or ginger tea, especially if you’re experiencing nausea or vomiting.</p>
    </div>
      <div class="product">
        <strong>Recommended Product:</strong><br>

         <span>Nutrifactor’s Pregnafix</span> – A prenatal multivitamin supplement with folic acid, iron, and DHA. Available in Pakistan at major pharmacies.
          <a href="quick_view.php?pid=2" class="shop-now-btn">Shop Now</a>   <br>
          <span> Nutrifactor’s Vitamax Women </span> – a multivitamin and multimineral supplement specifically formulated to meet the nutritional needs of women. Available in Pakistan at major pharmacies.
              <a href="quick_view.php?pid=2" class="shop-now-btn">Shop Now</a>  
      </div>



    <div class="section">
      <h3>🧼 Hygiene and Self-Care</h3>
      <p>Hormonal changes can make you sweat more and feel bloated. Maintain daily hygiene by:</p>
      <ul>
        <li>Taking regular baths</li>
        <li>Wearing breathable cotton clothes</li>
        <li>Washing intimate areas gently with mild soap</li>
        <li>Keeping your surroundings clean to avoid infections</li>
      </ul>
      <p>Avoid salons that use strong chemicals, and skip hair dyes or skin bleaching creams.</p>
    </div>

    <div class="section">
      <h3>💬 Behavioral Changes and Emotional Well-being</h3>
      <p>Mood swings, irritability, or sudden emotional reactions are common due to hormonal fluctuations. Practice deep breathing, talk to your partner or a trusted friend, and try light stretching or walking.</p>
      <p>If you're working or studying, reduce stress by prioritizing rest. Sleep at least 8–9 hours, preferably on your side after the 10th week to aid blood circulation.</p>
      <p class="alert"> 🎗 Stay aware of danger signs like bleeding, severe cramps, or dizziness. If anything feels wrong—don't wait. Consult your doctor immediately.</p>
    </div>
                <p>The first trimester (week 1–12) is a time of rapid changes. Hormonal shifts, early pregnancy symptoms, and emotional changes are common. Nutrition, folic acid, and early checkups are critical.</p>
</section>


<section class="trimester">

  <h1>2nd Trimester of Pregnancy</h1>
  <h2>Comfort, Growth, and Emotional Balance</h2>

  <p class="intro">
    The second trimester (weeks 13 to 26) is often described as the most enjoyable part of pregnancy. Morning sickness usually subsides, energy returns, and your baby bump becomes more noticeable. It’s the perfect time to focus on proper nutrition, emotional well-being, and medical monitoring.
  </p>

  <div class="section">
    <h3>🩺 Medical Monitoring and Tests</h3>
    <p>Attend your scheduled prenatal checkups every 4 weeks. Around week 18–22, your doctor will recommend an anatomy scan to assess the baby’s growth and organ development. You may also be tested for gestational diabetes and iron deficiency. Follow your doctor’s guidance for supplements and scans.</p>
  </div>

  <div class="section">
    <h3>🍽️ Diet and Nutrition</h3>
    <p>This is a critical growth period for your baby. Add the following to your daily meals:</p>
    <ul>
      <li>Protein sources like eggs, meat, and lentils</li>
      <li>Iron-rich foods like spinach and dates</li>
      <li>Calcium and vitamin D from milk and yogurt</li>
      <li>Fiber from fruits and vegetables to prevent constipation</li>
      <li>Plenty of water to stay hydrated</li>
    </ul>

    <div class="product">
      <strong>Recommended Products:</strong><br>
      • <span>Ensure® Nutrition Supplement</span> – Boosts maternal nutrition 🥛 <a href="quick_view.php?pid=2" class="shop-now-btn">Shop Now</a><br>
      • <span>Palmer’s Cocoa Butter</span> – Helps reduce stretch marks 🧴 <a href="quick_view.php?pid=2" class="shop-now-btn">Shop Now</a>
    </div>
  </div>

  <div class="section">
    <h3>💬 Emotional and Mental Well-being</h3>
    <p>Mood swings might continue, but most moms feel more emotionally stable in this phase. Feel your baby move around week 20—it’s a magical bonding moment! Practice breathing, gentle prenatal yoga, and get enough sleep to support your mental peace.</p>
  </div>

  <p class="alert">
⚠️ Stay alert for signs of preterm labor: frequent cramps, lower back pain, or watery discharge. If you feel something’s off, contact your doctor right away.
</p>
   <p>The second trimester (week 13–26) brings energy and comfort. Baby starts moving. Focus on iron, calcium, and mental health. Stay active and hydrated.</p>
              
                
</section>

               
         
<section class="trimester">
  <h1>3rd Trimester of Pregnancy</h1>
  <h2>Preparation, Discomfort, and Excitement</h2>

  <p class="intro">
    The third trimester (weeks 27 to 40) is the final phase before delivery. As your baby continues to grow, your body might feel heavier and more tired. It's time to finalize your delivery plan, manage discomfort, and prepare emotionally for birth.
  </p>

  <div class="section">
    <h3>🩺 Frequent Checkups and Birth Plan</h3>
    <p>Your visits become weekly after week 36. Discuss your delivery preferences, pain relief options, and hospital procedures. Monitor fetal movements daily. Pack your hospital bag and organize emergency contacts.</p>
  </div>

  <div class="section">
    <h3>🍲 Nutrition and Energy</h3>
    <p>Continue iron, calcium, and multivitamins. Focus on light meals and hydration to prevent bloating. Add:</p>
    <ul>
      <li>Dates – may help ease labor</li>
      <li>Bone broth (yakhni) and soups</li>
      <li>Fruits and high-fiber foods</li>
    </ul>

    <div class="product">
      <strong>Recommended Products:</strong><br>
      • <span>Nestlé MOM & me</span> – Prenatal milk supplement 🍼 <a href="quick_view.php?pid=2" class="shop-now-btn">Shop Now</a><br>
      • <span>Himalaya FOR MOMS Body Butter</span> – For skin comfort 🧴 <a href="quick_view.php?pid=2" class="shop-now-btn">Shop Now</a><br>
      • <span>Mothercare Maternity Starter Kit</span> – Hospital essentials 🎒 <a href="quick_view.php?pid=2" class="shop-now-btn">Shop Now</a>
    </div>
  </div>

  <div class="section">
    <h3>💤 Coping with Discomfort</h3>
    <p>As your pregnancy progresses into the third trimester, your body experiences increased physical strain. Common discomforts include backaches, swollen feet, shortness of breath, and trouble sleeping. These changes are completely normal but can be managed with a few simple habits to help you feel more at ease.<br>

To support better rest and reduce strain, try using maternity pillows that provide proper belly and back support. Opt for soft, breathable clothing that doesn't restrict your movement. Sleeping on your left side is highly recommended, as it improves blood flow to the baby and reduces pressure on internal organs.<br>

Light breathing exercises and prenatal stretches can ease muscle tension and calm your mind. They also help prepare you mentally and physically for labor.</p>
    <p>Use maternity pillows, wear comfortable clothes, and sleep on your left side. Practice breathing exercises daily. If you feel reduced fetal movement, severe pain, or water leakage—seek help immediately.</p>
  </div>
  <p class="alert">
🚨 Go to the hospital if you experience regular contractions, bleeding, water leakage, or decreased baby movement. These may be signs that labor is starting or something is wrong.
</p>



    <p>The third trimester (week 27–birth) is all about preparing for labor. Weekly checkups, baby monitoring, and resting are essential. Start packing your hospital bag.</p>
            
      
</section>

              
<section class="trimester">
  <h1>Post-Pregnancy Care</h1>
  <h2>Healing the Body, Nurturing the Bond</h2>

  <p class="intro">
    The postpartum period (also called the fourth trimester) is full of changes. Your body needs time to recover while you care for your newborn. This is a time for love, healing, support, and mental well-being.
  </p>

  <div class="section">
    <h3>🩺 Physical Recovery and Medical Follow-Up</h3>
    <p>Attend your postpartum checkup within 6 weeks. If you had stitches or a C-section, keep the area clean and dry. Get plenty of sleep and avoid heavy lifting. Eat healthy and take iron and calcium supplements regularly.</p>
  </div>

  <div class="section">
    <h3>🍼 Feeding and Nutrition</h3>
    <p>Breastfeeding burns calories and helps shrink the uterus. Drink water frequently and eat nourishing meals:</p>
    <ul>
      <li>Desi ghee-based foods (in moderation)</li>
      <li>Fenugreek (methi) and fennel (saunf) to boost milk</li>
      <li>Ajwain water to ease bloating</li>
    </ul>

    <div class="product">
      <strong>Recommended Products:</strong><br>
      • <span>Lactogrow by Nestlé</span> – Infant formula option 🍼 <a href="quick_view.php?pid=2" class="shop-now-btn">Shop Now</a><br>
      • <span>Canbebe Maternity Pads</span> – For postpartum hygiene 🧻 <a href="quick_view.php?pid=2" class="shop-now-btn">Shop Now</a><br>
      • <span>Bio-Oil Skincare Oil</span> – For scar and stretch mark care 💧 <a href="quick_view.php?pid=2" class="shop-now-btn">Shop Now</a>
    </div>
  </div>

  <div class="section">
    <h3>💞 Mental Health and Baby Bonding</h3>
    <p>It’s normal to feel emotional or even overwhelmed. Talk to your loved ones. Practice skin-to-skin contact, respond to your baby’s cries, and rest when the baby sleeps. If you feel persistent sadness or hopelessness, speak to a doctor—it could be postpartum depression.</p>
 
  </div>
  <p class="alert">
💡 Watch for signs of postpartum depression: sadness, exhaustion, trouble bonding with your baby, or thoughts of self-harm. Please reach out for help—you're never alone.
</p>


  
   <p>Postpartum care includes healing, rest, bonding, and mental health support. Maintain hygiene, take iron-rich foods, and feed baby every 2–3 hours.</p>
              
          
</section>

<section>
   <div class="trimester">
  <h1>
    Final Words for New Moms  </h1>

<h2>You created life. You gave birth. Now, you’re learning to raise a human. This is tough, beautiful, and utterly magical. You are not alone. You are enough. And you are doing amazing.

Let Momcare guide you every step of the way.💗</h2>
</div>
</section>

      
               


<?php include 'components/footer.php'; ?>
 
<script src="js/script.js"></script>

</body>
</html>