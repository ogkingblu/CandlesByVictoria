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

    <section class="overflow-hidden">
        <div class="container px-5 pb-24 pt-12 mb-12 mx-auto">
          <div class="lg:w-4/5 mx-auto flex flex-col md:flex-row">
            <img alt="Large image of the selected candle" class="lg:w-1/2 w-full lg:h-auto h-full object-cover object-center rounded border-2 border-rosewood" src="./img/candles-blueberry-pie.png">
            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0 image">
              <h1 class="text-4xl text-rosewood font-cabin font-medium mb-3">Blueberry Pie</h1>
              <div class="flex mb-4">
                <span class="flex items-center">
                  <svg fill="#d84727" stroke="#d84727" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                  </svg>
                  <svg fill="#d84727" stroke="#d84727" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                  </svg>
                  <svg fill="#d84727" stroke="#d84727" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                  </svg>
                  <svg fill="#d84727" stroke="#d84727" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                  </svg>
                  <svg fill="#d84727" stroke="#d84727" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                  </svg>
                  <span class="text-rosewood font-cabin ml-3 underline">12 Reviews</span>
                </span>
              </div>
              <p class="leading-relaxed text-lg text-rosewood font-flattery">
                Brand new to the CBV line up! This stunning candle comes double wicked in a beautiful ribbed style jar with lid and is available in all our wonderful fragrances including our Create A Scent (CAS) option. This candle comes in our Create A Scent (CAS) option. We give you the opportunity to create a one of a kind fragrance by mixing two of our existing fragrances and giving your new scent creation a name! If you would prefer a single scent in this candle, just choose one scent from the drop down menu and we will take of the rest.
              </p>
              <div class="flex mt-6 items-center pb-5 border-b-2 border-rosewood mb-5">
                <div class="flex items-center">
                  <p class="mr-3 font-medium font-cabin text-2xl text-rosewood">Quantity:</p>
                  <div class="relative">
                    <input type="text" class="h-8 w-24 pr-8 pl-5 shadow-sm border-2 border-rosewood rounded focus:outline-none">
                  </div>
                </div>
              </div>
              <div class="flex">
                <span class="font-cabin font-medium text-2xl text-rosewood">$20.00</span>
                <button class="flex ml-auto border-2 border-rosewood text-rosewood font-cabin rounded-sm py-2 px-6 focus:outline-none hover:bg-vermilion hover:text-black hover:border-vermilion add-cart cart1">Add to cart</button>
              </div>
            </div>
              <script src="main.js"></script>
          </div>
        </div>
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