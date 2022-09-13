<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUSTARE | Reservation</title>

    <!-- Tab Icon -->
    <link rel="icon" href="images/white.png">

    <!-- CSS -->
    <link rel="stylesheet" href="new.css">

    <!-- Scroll Animation -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- Social Media Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>

    <!-- Logo with Navlinks -->
    <header>
        <a href="index.php" class="logo"><img src="images/logo.png" title="GUSTARE"></a>
        
        <!-- Navbar Menu -->
        <ul class="navbar">
            <li><a href="index.php">HOME</a></li>
            <li><a href="menu.php">MENU</a></li>
        </ul>
    </header>
    <!-- End of Header -->

    <section>
        <div class="container">
            <div class="content">
                <div class="image">
                    <!-- Image -->
                    <img src="rimg.jpg">
                </div>

                <div class="text-box">
                    <h2>BOOK A TABLE</h2>

                    <!-- Note for customers who wants to reserve -->
                    <p>Welcome to our reservation system. Gustare is open weekdays and weekends (you can see the schedule below our website). <br> <br> Do not reserve greater than desired. <br> <br> Your reservation is accepted once you receive our confirmation through contact information you give to us. <br> <br> Between 96 or 72 hours before your experience, we will contact you to finalize your details and confirm the reservation. When we don't hear anything from you between that said time, we will cancel your reservation. <br> <br> Also, reserving a seat/s will cost you 200$ per person and will be added to your final bill on the day of your experience. Please be reminded that cancel your reservation 7 days before the day of your experience. <br> <br> For five (5) and up reservation, please contact us.</p>
                    <!-- End of Note -->

                    <!-- Form -->
                    <div class="wrapper">
                    <form action="connect.php" method="post">

                    <div class="user-details">
                    <!-- First Name -->
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" name="firstName" placeholder="Enter your first name" required>
                    </div>
                    <!-- End of First Name -->

                    <!-- Last Name -->
                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input type="text" name="lastName" placeholder="Enter your last name" required>
                    </div>
                    <!-- End of Last Name -->

                    <!-- Email -->
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="email" placeholder="Enter your email" required>
                    </div>
                    <!-- End of Email -->

                    <!-- Phone Number -->
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="tel" name="phoneNumber" placeholder="Enter your number" required>
                    </div>
                    <!-- End of Phone Number -->

                    <!-- Seating Area -->
                    <div class="input-box">
                        <span class="details">Seating Area</span>
                        <select name="area">
                            <option hidden>Select seating area</option>
                            <option value="i" name="area">Inside</option>
                            <option value="o" name="area">Outside</option>
                        </select>
                    </div>
                    <!-- Seating Area -->

                    <!-- Time -->
                    <div class="input-box">
                        <span class="details">Time</span>
                        <select name="time">
                            <option hidden>Select preferred time</option>
                            <option value="l" name="time">Lunch (10:00 AM - 04:00 PM)</option>
                            <option value="d" name="time">Dinner (10:00 AM - 09:00 PM)</option>
                        </select>
                    </div>
                    <!-- End of Time -->

                    <!-- Date -->
                    <div class="input-box">
                        <span class="details"> Select Date </span>
                        <input type="date" id="datepicker" name="date">
                    </div>
                    <!-- End of Date -->

                    <!-- Submit Button -->
                    <div class="input-box">
                        <input type="submit" class="btn">
                    </div>
                    <!-- End of Submit Button -->
                </form>
                <!-- End of Form -->
                </div>
            </div>
        </div>
    </section>
    <!-- End -->

    <!-- Footer -->
    <footer class="contact">
        <div class="footer">
            <div class="footer-row">
                <div class="footer-col">
                    <h4>QUICK LINKS</h4>

                    <!-- Navlinks -->
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="#about"> ABOUT</a></li>
                        <li><a href="menu.php"> MENU</a></li>
                        <li><a href="reserve.php"> RESERVATION</a></li>
                        <li><a href="https://www.termsandconditionsgenerator.com/live.php?token=dE6LbDuu19pniqTQHnFC7FxDRSIk6ePE&fbclid=IwAR2XTtTuFxfYYdCgEDA2GEP06tkppTC6PSpMtSeZEBmxmwyOB3kKgc1GLQw" target="_blank">TERMS & CONDITIONS</a></li>
                        <li><a href="https://www.privacypolicygenerator.info/live.php?token=aJpbZRTfvahSzD6I1DbhbFf1UlgiU0Fx" target="_blank">PRIVACY POLICY</a></li>
                    </ul>
                </div>
                <!-- End of Navlinks -->

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
                <!-- End of Location and Opening Hours of Gustare -->

                <!-- Newsletter of Gustare -->
                <div class="footer-col">
                    <h4>NEWSLETTER</h4>
                    <form>
                        <input type="email" name="email" placeholder="Enter email address" required>
                        <!-- <input type="submit" value="Subscribe"> -->
                        <button type="submit" class="sub-btn" value="Reset form" onclick="alert('Thank you for subscribing to our newsletter.')">SUBSCRIBE</button>
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
                <!-- End of Social Medias -->
                </div>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    <!-- Scroll Reveal Animations -->
    <script>
        ScrollReveal({
            reset: true,
            distance: '60px',
            duration: 1500,
            delay: 400
        });

        ScrollReveal().reveal('.text-box', { delay: 40, origin: 'right'})
        ScrollReveal().reveal('.image', { delay: 40, origin: 'left'})
    </script>
    <!-- End of Scroll Reveal Animation -->

	<!-- Restrict Dates -->
    <script>
			var dates = ["09-21-2022", "09-06-2022", "09-30-2022"];

            function disableDates(date) {
            var string = $.datepicker.formatDate('dd-mm-yy', date);
            return [dates.indexOf(string) == -1];
            }

            $("#datepicker").datepicker({
            beforeShowDay: disableDates
            });
	</script>
    <!-- End -->
</body>
</html>