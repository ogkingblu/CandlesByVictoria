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

    <section class="container py-8 mx-auto">
        <div class="flex flex-wrap justify-center -mx-4 -mb-10 text-center font-cabin">

            <div class="flex flex-col sm:w-1/4 mb-16 px-7 mx-10 p-6 rounded-md bg-rosewood border-2 border-rosewood shadow-lg">
                <div class="rounded-sm h-64 overflow-hidden m-6 mx-auto">
                    <img src="./img/candles-blueberry-pie.png" alt="content" class="object-cover object-center h-full">
                </div>
                <div class="mx-auto flex flex-col my-auto">
                    <h2 class="text-2xl font-medium font-flattery text-rosewood mb-3">Blueberry Pie</h2>
                    <span class="text-xl font-medium font-flattery text-rosewood mb-3">$19.99</span>
                    <button class="flex mx-auto mt-6 font-cabin bg-babypink-links border-0 py-2 px-5 focus:outline-none rounded" onclick="window.location.href='./blueberry-pie.php';">View details</button>
                </div>
            </div>

            <div class="flex flex-col sm:w-1/4 mb-16 px-7 mx-10 p-6 rounded-md bg-rosewood border-2 border-rosewood shadow-lg">
                <div class="rounded-sm h-64 overflow-hidden m-6 mx-auto">
                    <img src="./img/candles-chocolate-sugar-cookie.png" alt="content" class="object-cover object-center h-full">
                </div>
                <div class="mx-auto flex flex-col my-auto">
                    <h2 class="text-2xl font-medium font-flattery text-rosewood mb-3">Chocolate Sugar Cookie</h2>
                    <span class="text-xl font-medium font-flattery text-rosewood mb-3">$24.99</span>
                    <button class="flex mx-auto mt-6 font-cabin bg-babypink-links border-0 py-2 px-5 focus:outline-none rounded" onclick="window.location.href='./chocolate-sugar-cookie.php';">View details</button>
                </div>
            </div>

            <div class="flex flex-col sm:w-1/4 mb-16 px-7 mx-10 p-6 rounded-md bg-rosewood border-2 border-rosewood shadow-lg">
                <div class="rounded-sm h-64 overflow-hidden m-6 mx-auto">
                    <img src="./img/candles-gingerbread.png" alt="content" class="object-cover object-center h-full">
                </div>
                <div class="mx-auto flex flex-col my-auto">
                    <h2 class="text-2xl font-medium font-flattery text-rosewood mb-3">Gingerbread</h2>
                    <span class="text-xl font-medium font-flattery text-rosewood mb-3">$29.99</span>
                    <button class="flex mx-auto mt-6 font-cabin bg-babypink-links border-0 py-2 px-5 focus:outline-none rounded" onclick="window.location.href='./gingerbread.php';">View details</button>
                </div>
            </div>

            <div class="flex flex-col sm:w-1/4 mb-16 px-7 mx-10 p-6 rounded-md bg-rosewood border-2 border-rosewood shadow-lg">
                <div class="rounded-sm h-64 overflow-hidden m-6 mx-auto">
                    <img src="./img/candles-peanut-chocolate-cheesecake.png" alt="content" class="object-cover object-center h-full">
                </div>
                <div class="mx-auto flex flex-col my-auto">
                    <h2 class="text-2xl font-medium font-flattery text-rosewood mb-3">Peanut Chocolate Cheesecake</h2>
                    <span class="text-xl font-medium font-flattery text-rosewood mb-3">$19.99</span>
                    <button class="flex mx-auto mt-6 font-cabin bg-babypink-links border-0 py-2 px-5 focus:outline-none rounded" onclick="window.location.href='./peanut-chocolate-cheesecake.php';">View details</button>
                </div>
            </div>

            <div class="flex flex-col sm:w-1/4 mb-16 px-7 mx-10 p-6 rounded-md bg-rosewood border-2 border-rosewood shadow-lg">
                <div class="rounded-sm h-64 overflow-hidden m-6 mx-auto">
                    <img src="./img/candles-smores-donut.png" alt="content" class="object-cover object-center h-full">
                </div>
                <div class="mx-auto flex flex-col my-auto">
                    <h2 class="text-2xl font-medium font-flattery text-rosewood mb-3">Smores Donut</h2>
                    <span class="text-xl font-medium font-flattery text-rosewood mb-3">$24.99</span>
                    <button class="flex mx-auto mt-6 font-cabin bg-babypink-links border-0 py-2 px-5 focus:outline-none rounded" onclick="window.location.href='./smores-donut.php';">View details</button>
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