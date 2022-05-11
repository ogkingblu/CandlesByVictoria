<?php
session_start();

include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Candles By Victoria</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/fresh-roomettes-personal-use" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/d80f87dcf4.js"></script>
</head>
<body class="bg-banana">
  <header class="mb-10 font-cabin bg-rosewood">
    <div class="mx-auto px-8 py-5 flex flex-wrap flex-col md:flex-row items-center">
        <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
            <a href="./home.php" class="mr-5 text-princeton-orange-links font-bold hover:text-vermilion">HOME</a>
            <a href="./about.php" class="mr-5 text-princeton-orange-links font-bold hover:text-vermilion">ABOUT</a>
            <a href="./candles.php" class="mr-5 text-princeton-orange-links font-bold hover:text-vermilion">CANDLES</a>
        </nav>
        <div class="flex flex-col md:flex-row order-first lg:order-none lg:w-1/5 items-center lg:items-center lg:justify-center mb-4 md:mb-0">
        <div class="relative rounded-full bg-princeton-orange w-20 h-20 px-10 mx-auto">
            <img class="absolute -top-1 right-1 w-20 h-20 mx-auto mt-2" src="./img/icon-logo.png" alt="" />
        </div>
        <div class="mx-auto md:ml-8">
            <h1 class="font-flattery font-bold text-4xl text-rufous whitespace-nowrap">Candles by Victoria</h1>
        </div>
        </div>
        <div class="lg:w-2/5 mr-8 inline-flex lg:justify-end ml-5 lg:mx-auto">
        <?php if(isset($_SESSION["loggedin"])){?>
            <a href="./logout.php" class="text-princeton-orange-links font-bold hover:text-vermilion inline-flex items-center rounded mr-7 py-1 px-2 md:mt-0 mt-4 border-princeton-orange border hover:border-vermilion">LOGOUT</a>    
            <?php }
            else{?> 
            <a href="./login.php" class="text-princeton-orange-links font-bold hover:text-vermilion inline-flex items-center rounded mr-7 py-1 px-2 md:mt-0 mt-4 border-princeton-orange border hover:border-vermilion">LOGIN</a>
            <?php }?>   
            <a href="./register.php" class="text-princeton-orange-links font-bold hover:text-vermilion inline-flex items-center rounded mr-7 py-1 px-2 md:mt-0 mt-4 border-princeton-orange border hover:border-vermilion">SIGN UP</a>
            <a href="./cart.html" class="inline-flex items-center">
                    <div class="text-3xl cart">
                        <i class="fa fa-shopping-cart font-medium border-0 text-princeton-orange-links cursor-pointer focus:outline-none hover:text-vermilion rounded mt-4 md:mt-0"></i>
                        <span class= "mr-5 text-princeton-orange-links font-bold hover:text-vermilion px-2">0</span>
                    </div>
            </a>
        </div>
    </div>
</header>

    <section>
        <div class="container px-5 pt-12 pb-6 mx-auto">
          <div class="flex items-center lg:w-4/5 mx-auto border-b-2 pb-10 mb-10 border-rosewood sm:flex-row flex-col">
            <div class="flex-grow items-end sm:text-left text-center mt-6 sm:mt-0">
              <h1 class="text-rosewood text-5xl text-center font-flattery mb-4">About Us</h1>
              <p class="font-cabin text-rosewood text-lg leading-relaxed mb-4">I started making candles in 1999 for myself because I was a huge candle lover but was always disappointed in the scent throw and burn quality that I got from store bought candles, even from the upper end candle companies. So in my quest for a better burning more fragrant candle, I started Candles By Victoria. I tested for over a year until I came up with the perfect wax formulation to give a full and complete burn all the way to the bottom of the candle. Then I tested and searched for the perfect scents for our line that would give off the strongest and most fragrant aromas!</p>
              <p class="font-cabin text-rosewood text-lg leading-relaxed mb-4">I requested the help of my friends and family to give me honest opinions and through many months of testing and reformulating, Candles By Victoria went public in May of 2000 and has been going strong and growing ever since! In June of 2006 I opened my first retail store in Van, Texas where CBV currently resides. From my kitchen stove years ago to a small workshop in my backyard to the production facility, dreams do come true!</p>
              <p class="font-cabin text-rosewood text-lg leading-relaxed">Candles By Victoria is my dream and my passion, all of us here at CBV put our entire heart and soul into this business. Candles By Victoria is a family business started by me but loved and nurtured by my family. Our #1 priority is producing high quality, 100% handmade candles and wax melts that smell amazing! Top notch customer service is of utmost importance to us as well and we will go above and beyond the normal call of duty to make sure EVERY customer is satisfied with the products and the service they receive.</p>
            </div>
          </div>

          <section>
              <div class="container px-5 pb-16 border-b-2 border-rosewood">
                  <h2 class="text-rosewood text-4xl text-center font-flattery mb-8">Meet The Team</h2>
                  <div class="flex flex-wrap -m-4">
                  <div class="lg:w-1/3 lg:mb-0 mb-6 p-4 mx-auto">
                      <div class="h-full text-center">
                          <img alt="testimonial" class="w-20 h-20 object-cover object-center rounded-full inline-block border-2 border-rosewood" src="img/owners-victoria.jpg">
                          <br>
                          <span class="inline-block h-1 w-16 rounded  mt-6 mb-4"></span>
                      <h2 class="text-rosewood font-cabin font-medium tracking-wider text-xl">VICTORIA</h2>
                      <p class="text-rosewood text-md font-cabin">Your Candle Queen!</p>
                    </div>
                  </div>
                  <div class="lg:w-1/3 lg:mb-0 mb-6 p-4 mx-auto">
                    <div class="h-full text-center">
                      <img alt="testimonial" class="w-20 h-20 object-cover object-center rounded-full inline-block border-2 border-rosewood" src="img/owners-candleman.jpg">
                      <br>
                      <span class="inline-block h-1 w-16 rounded mt-6 mb-4"></span>
                      <h2 class="text-rosewood font-cabin font-medium tracking-wider text-xl">CANDLEMAN</h2>
                      <p class="text-rosewood text-md font-cabin">He Packs A Mighty Punch!</p>
                    </div>
                  </div>
                  <div class="lg:w-1/3 lg:mb-0 p-4 mx-auto">
                    <div class="h-full text-center">
                      <img alt="testimonial" class="w-20 h-20 object-cover object-center rounded-full inline-block border-2 border-rosewood" src="img/owners-chels-and-wade.jpg">
                      <br>
                      <span class="inline-block h-1 w-16 rounded mt-6 mb-4"></span>
                      <h2 class="text-rosewood font-medium title-font tracking-wider text-xl">CHELSEA & WADE</h2>
                      <p class="text-rosewood text-md font-cabin">My Right Hand & Your Tart Man!</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>

          <div class="flex items-center lg:w-4/5 mx-auto py-10 mb-10 sm:flex-row flex-col border-b-2 border-rosewood">
            <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
              <h2 class="text-rosewood text-4xl text-center font-flattery mb-4">Our Mission</h2>
              <p class="font-cabin text-rosewood text-lg leading-relaxed mb-4">It is our mission here at Candles By Victoria to offer our customers the finest candles, tarts and wax melt products with the most fragrant scents anywhere.</p>
              <p class="font-cabin text-rosewood text-lg leading-relaxed">CBV offers a wide variety of products and an even larger variety of fragrances to choose from. With over 1000 fragrances you are bound to find the perfect one. From container candles to pillars, tarts to decorative candles and one of a kind wax creations, we know you will find exactly what you are looking for here at Candles By Victoria.</p>
            </div>
          </div>
          
          <div class="flex items-center lg:w-4/5 mx-auto py-10 mb-10 sm:flex-row flex-col">
            <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
              <h2 class="text-rosewood text-4xl text-center font-flattery mb-4">Contact Us</h2>
              <p class="font-cabin text-rosewood text-lg text-center leading-relaxed mb-4">Email: <a href="mailto: victoria@candlesbyvictoria.com">victoria@candlesbyvictoria.com</a></p>
              <p class="font-cabin text-rosewood text-lg text-center leading-relaxed mb-4">Address: Candles By Victoria
                296 W. Kansas St.
                Van, TX. USA 75790</p>
              <p class="font-cabin text-rosewood text-center leading-relaxed">*Please contact us by phone at: (903) 944-5042, for a faster response*</p>
            </div>
          </div>
          

        </div>
          <script src="main.js"></script>
      </section>

      <footer class="text-gray-600 body-font w-full min-h-full">
        <div class="w-full bg-rosewood absolute right-0 left-0 px-8 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <p class="text-md font-cabin text-princeton-orange sm:ml-4 sm:pl-4 sm:py-2 sm:mt-0 mt-4">© 2000-2021 Candles By Victoria</p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a href="https://www.facebook.com/candlesbyvictoria/" class="px-2">
              <img src="./img/social-icon-facebook.png" alt="Facebook social media icon" class="w-7 h-10">
            </a>
            <a href="https://www.instagram.com/candlesbyvictoria/" class="px-2">
              <img src="./img/social-icon-instagram.png" alt="Instagram social media icon" class="w-7 h-11">
            </a>
            <a href="https://www.youtube.com/c/candlesbyvictoria" class="px-2">
              <img src="./img/social-icon-youtube.png" alt="YouTube social media icon" class="w-7 h-11">
            </a>
            <a href="https://www.tiktok.com/@candlesbyvictoria?is_from_webapp=1&sender_device=pc" class="px-2">
              <img src="./img/social-icon-tiktok.png" alt="TikTok social media icon" class="w-7 h-10">
            </a>
          </span>
        </div>
      </footer>
</body>
</html>