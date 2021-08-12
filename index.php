 <?php

  include('PHP/login.php');


  if (($_SESSION['usr'] == null)) {
    header("location: HTML\login.html");
  }
  $temp_user = $_SESSION['usr'];
  $cur_user = trim($temp_user, '\'"');

  ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8" />
   <link rel="stylesheet" href="CSS\index.css">
   <link rel="stylesheet" href="CSS\fonts.css">
   <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
   <script src="JS\index.js"></script>
   <link rel="icon" href="Assets\Images\favicon.ico" />
   <meta http-equiv="X-UA-Compatible" content="uft-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>The Bando Coffee House</title>
 </head>

 <body>
   <section id="Header">
     <div id="main_banner">
       <div id="logo_container"></div>
       <a href="PHP\profile.php" id="login">
         <?php
          print <<<GFG
        $cur_user;
        GFG;
          ?>
       </a>

       <a href="HTML\about.html" id="about_button">About</a>
       <a href="HTML\about.html" id="location_img"></a>
       <a href="HTML\about.html" id="find_a_store">Find a Bistro</a>
       <a href="PHP\admin.php" id="cart1">Order</a>
       <a href="#" id="cart_logo"></a>
       <div id="header_parent">
         <h1 id="header_text">THE BANDO</h1>
       </div>
       <div id="subheader_parent">
         <h1 id="subheader_text">Coffee & Beverage House</h1>
       </div>
     </div>
     <div id="banner1">
       <h1 id="announcement">
         Facial Coverings are a requirement in all our bistros. <br />

         <a id="learn" target="blank" href="http://www.kenyalaw.org/kl/fileadmin/pdfdownloads/Interim-guidelines-on-the-management-of-COVID-19-in-Kenya.pdf">Learn more.</a>
       </h1>

     </div>
   </section>
   <section class="Mid">
     <div id="cover_text">
       <span>
         <h1 id="coffee_love">meals with a hint of love</h1>
       </span>
       <hr class="solid" />
       <div id="text_box">
         <p id="main_text">
           We now deliver!!<br />
           <br />We have teamed up with our friends from Uber Eats to offer
           delivery service to Nairobi,Kajiado and Rongai Areas! Now you can
           get your fresh hot coffee and breakfast, lunch, or early dinner
           delivered straight to your home or office! We are also able to
           deliver along with your food order.<br /><br />Anything from
           traditional coffee for breakfast to a selection of our beers, gins,
           or bottled wines for that kind of morning. If you want it we'll
           serve it. <br />*Alcohol must be served along with food and person
           ordering must be 18 or older. <br>Ordering alcohol from an office is discouraged but not prohibited :D <br /><br />Ordering through our app
           is still available if you are in the area and would like to just
           stop in to pick it up.
         </p>
         <span id="sub_text">looking foward to serving you soon :) </span>
         <br /><br /><br /><br />
       </div>
       <span> <a id="delivery" href="#">Order for Delivery</a> </span>
       <span> <a id="pickup" href="#">Order for Pickup</a> </span>
       <br /><br /><br />

       <hr class="solid" />

       <div class="menu_container">
         <h1 id="menu_title"><span>Le MENU</span></h1>

         <div class="tab">
           <button id="eat_button" class="tablinks" onclick="openTab(event, 'to_eat')">
             To Eat
           </button>
           <button class="tablinks" onclick="openTab(event, 'to_drink')">
             To Drink
           </button>
           <button class="tablinks" onclick="openTab(event, 'special_offers')">
             Special Offers & Combos
           </button>
         </div>


         <div id="to_eat" class="tabcontent">
           <h3>Pastry Box</h3>
           <p>8 Freshly baked pastries of your choice. <br>(Ksh1200)</p>
           <br>
           <h3>Cookie Box Bundle</h3>
           <p>A seletion of 3 whole wheat cookies with toppings of your choice. <br> (Ksh 200)</p>
           <br>
           <h3>Bread</h3>
           <p>A loaf of Freshly Baked whole wheat bread. Severd either white or whole grain [400 grams of greatness] <br> (Ksh 70)</p>
           <br>
           <h3>Pies</h3>
           <p>Anything goes. If you can think it up, we can serve it.<br> (Ksh 250)</p>
           <br>
           <h3>Slab Cakes</h3>
           <p>Choose between three trademark flavors. Red Velvet, Dark Forest and Strawberry Crumble<br> (Ksh 200)</p>
         </div>

         <div id="to_drink" class="tabcontent">
           <h3>Coffee</h3>
           <p>All coffee sizes are the same and a cup retails for Ksh 200</p>
           <ul id="coffee_list">
             <li>Americano</li>
             <li>Caffe Latte</li>
             <li>Vanilla Latte</li>
             <li>Mocha</li>
             <li>Hot Chocolate</li>
             <li>Cappuccino</li>
             <li>latte macchiatto</li>
           </ul>
           <h3>Teas</h3>
           <p>A glass is 300ml and retails at Ksh 120</p>
           <p>Flavours of your choice can be added at an extra cost</p>
           <ul id="tea_list">
             <li>Green Tea</li>
             <li>chai Latte</li>
             <li>green tea and lemon grass</li>
             <li>morrocan mint tea</li>
             <li>kenyan tea</li>

           </ul>
           <h3>Smoothies</h3>
           <p>Explore fruit combos you never knew existed!</p>
           <h4>CLASSIC SMOOTHIES</h4>
           <p>
             Banana / Strawberry / Mango /Pineapple
             <br>(Ksh 450)
           </p>
           <h4>the weight watcher smoothie</h4>
           <p>
             Cucumber, Spinach, apple, lemon & Ginger
             <br>(Ksh 450)
           </p>
           <h4>mint twist</h4>
           <p>
             Mint, celery, avocado, spinach, basil, apple, honey & moringa
             <br>(Ksh 450)
           </p>
           <h4>indian madlad smoothie</h4>
           <p>
             Baobab powder, chia seeds, honey, banana,sweetmelon, passion juice & red chilli
             <br>(Ksh 450)
           </p>

         </div>
         <div id="special_offers" class="tabcontent">
           <h3>BREAKFAST CROISSANT</h3>
           <p>
             Two poached eggs, mustard, tomatoes, rocket leaves, cheese & served with fresh salad. <br>ADD: Bacon or Beef bacon 250/- Avocado 50/- Two Sausages 260/-<br>
             (Ksh 690) </p>
           <br>
           <h3>FRENCH TOAST</h3>
           <p>
             Served with homemade jam, Mascarpone cheese & fresh fruit salad. <br> ADD: Bacon or Beef bacon 250/-<br>
             (Ksh 690)
           </p>
           <br>
           <h3>FRESHLY BAKED BREAD BASKET</h3>
           <p>Served with butter & homemade jam<br>
             Ksh 390
           </p>
           <br>
           <h3>MUESLI</h3>
           <p>
             Fresh fruit salad, granola, honey & yoghurt
             <br>(Ksh 550)
           </p>
         </div>
       </div>
   </section>
   <section id="Footer">
     <div class="bottom">
       <div>
         <a id="twitter" target="blank" href="https://twitter.com/mwafrikaa_" title="Follow me on Twitter"><span class="iconify" data-icon="mdi-twitter"></span>
         </a>
       </div>
       <div>
         <a id="insta" href="#" title="No Insta :)"><span class="iconify" data-icon="akar-icons:instagram-fill"></span></a>
       </div>
       <div>
         <a id="youtube" target="blank" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" title="My YouTube channel"><span class="iconify" data-icon="akar-icons:youtube-fill"></span></a>
       </div>
       <span id="bottom_text">The Bando Coffee House &nbsp | &nbsp All Rights Reserved</span>
     </div>
   </section>
 </body>

 </html>