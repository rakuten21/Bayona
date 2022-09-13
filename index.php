<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUSTARE</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Tab Icon -->
    <link rel="icon" href="images/white.png">

    <!-- Social Media Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Scroll Animation -->
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
    
    <!-- Header - consists of logo and nav links -->
    <header>
        <a href="index.php" class="logo"><img src="images/logo.png" title="GUSTARE"></a>
        
        <!-- Navbar Menu -->
        <ul class="navbar">
            <li><a href="index.php">HOME</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#menu">MENU</a></li>
        </ul>
    </header>
    <!-- End of Header -->

    <!-- Home Section -->
    <section class="home">
        <div class="page">
            <h1>GUSTARE</h1>
            <p>Thousand Flavors in One Place</p>
            <a href="reserve.php" class="btn down">BOOK A TABLE</a>
        </div>

        <div class="feature">
            <img src="images/plate.png" class="feature-img">
        </div>
    </section>
    <!-- End of Home Section -->
  
    <!-- About Section -->
    <section class="about" id="about">
        <div class="row">
            <div class="col">
                <div class="img">
                    <img src="images/img.jpg" alt="">
                </div>
            </div>
            
            <div class="col right">
                <h2 class="us des">ABOUT US</h2>
                <p>
                    Gustare is a four Michelin star that provides high quality and fresh food to everyone since 1987 by Chef Alphonso Capone. The restaurant is famous for its risotto, lasagna and salad. Gustare have always been there to every famiy, relationships or even business meeting that want to spend their time peacefully. <br> <br>
                    Gustare is perfect for people who want to satisfy their palate with sophisticated and elegant food and will caters to an upscale clientele.
                </p>
            </div>
        </div>
    </section>
    <!-- End of About Section -->

    <!-- Menu Section -->
    <section class="menu" id="menu">
        <div class="container">
            <div class="text-box">
                <h2 class="us">WHAT DO WE HAVE?</h2> <hr>
                <p>Gustare offers four(4) meal course that will satisfy your palate. The courses are Antipasto serve as starter, First Piatto serve as the main dish, Second Piatto also known as side dishes, and Dolce serve as an dessert. <br> <br> Everyday, the menu is new as the restaurant want customers to taste different dishes.</p>
                <a href="menu.php" class="btn">CHECK THE MENU</a>
            </div>

            <div class="image">
                <img src="images/img1.jpg" alt="">
            </div>
        </div>
    </section>
    <!-- End of Menu Section -->

    <!-- Contact Information -->
    <footer class="contact">
        <div class="footer">
            <div class="footer-row">
                <div class="footer-col">
                    <h4>QUICK LINKS</h4>

                    <!-- Quick links - consists of navlinks -->
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="#about"> ABOUT</a></li>
                        <li><a href="menu.php"> MENU</a></li>
                        <li><a href="reserve.php"> RESERVATION</a></li>
                        <li><a href="https://www.termsandconditionsgenerator.com/live.php?token=dE6LbDuu19pniqTQHnFC7FxDRSIk6ePE&fbclid=IwAR2XTtTuFxfYYdCgEDA2GEP06tkppTC6PSpMtSeZEBmxmwyOB3kKgc1GLQw" target="_blank">TERMS & CONDITIONS</a></li>
                        <li><a href="https://www.privacypolicygenerator.info/live.php?token=aJpbZRTfvahSzD6I1DbhbFf1UlgiU0Fx" target="_blank">PRIVACY POLICY</a></li>
                    </ul>
                </div>
                <!-- End of Quick Links -->

                <!-- Contact Information of Gustare -->
                <div class="footer-col">
                    <h4>CONTACT US</h4>
                    <ul>
                        <li>338 123 4567 (for local)</li>
                        <li>+39-388-555-591 (for abroad)</li>
                        <li>concerns@gustare.com</li>
                        <li>feedback@gustare.com</li>
                    </ul>
                </div>
                <!-- End of Contact Information -->

                <!-- Location and Opening Hours of Gustare -->
                <div class="footer-col">
                    <h4>WHERE WE ARE</h4>
                    <ul>
                        <li>Via Di Torretta, 26 , 56122 Milan, Italia</li>
                    </ul>

                    <h4>OPENING HOURS</h4>
                    <ul>
                        <li>Weekdays: 10:00 AM - 09:00 PM</li>
                        <li>Weekends: 10:00 AM - 09:00 PM</li>
                    </ul>
                </div>
                <!-- End of Location and Opening Hours -->

                <!-- Newsletter of Gustare -->
                <div class="footer-col">
                    <h4>NEWSLETTER</h4>
                    <form action="" method="post">
                        <input type="email" name="email" placeholder="Enter email address" required>
                        <button type="submit" name="newsletter" class="sub-btn" value="Reset form" onclick="alert('Thank you for subscribing to our newsletter.')">SUBSCRIBE</button>
                    </form>
                <!-- End of Newsletter -->

                <!-- Social Medias -->
                    <h4>FOLLOW US</h4>
                    <div class="social">
                        <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.whatsapp.com/" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://twitter.com/?lang=en" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
                    </div>
                <!-- End of Social Media -->
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Reveal Animations -->
    <script>
        ScrollReveal({
            reset: true,
            distance: '60px',
            duration: 1500,
            delay: 400
        });

        ScrollReveal().reveal('.page, .img, .text-box', { delay: 40, origin: 'left'})
        ScrollReveal().reveal('.image, .feature-img', { delay: 40, origin: 'right'})
    </script>
</body>
</html>