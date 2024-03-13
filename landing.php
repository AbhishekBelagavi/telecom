<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="./styles/landing.css">
    <link rel="stylesheet" href="./styles/card.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merienda:wght@600&family=Overlock+SC&display=swap');


        .text {
            font-family: 'Merienda', cursive;
            font-size: 40px;
        }

        .heading {

            font-size: 100px;
            margin-top: 20px;
            margin-bottom: 20px;
            text-transform: uppercase;
            font-family: 'Overlock SC', sans-serif;

            font-weight: 700;
            color: #190937;
            text-shadow: 1px 1px 1px #919191,
                1px 2px 1px #919191,
                1px 3px 1px #919191,
                1px 4px 1px #919191,
                1px 5px 1px #919191,
                1px 6px 1px #919191,
                1px 7px 1px #919191,
                1px 8px 1px #919191,
                1px 9px 1px #919191,
                1px 10px 1px #919191,
                1px 18px 6px rgba(16, 16, 16, 0.4),
                1px 22px 10px rgba(16, 16, 16, 0.2),
                1px 25px 35px rgba(16, 16, 16, 0.2),
                1px 30px 60px rgba(16, 16, 16, 0.4);
        }

        .footer {
            position: relative;
            width: 100%;
            background: #000;
            min-height: 100px;
            padding: 20px 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .wave {
            position: absolute;
            top: -100px;
            left: 0;
            width: 100%;
            height: 100px;
            /* background: url("https://i.ibb.co/wQZVxxk/wave.png") ; */
            /* background: url("imag") ; */
            background: url("images/wave3.png");
            background-size: 1000px 100px;
        }

        .wave#wave1 {
            z-index: 1000;
            opacity: 1;
            bottom: 0;
            animation: animateWaves 4s linear infinite;
        }

        .wave#wave2 {
            z-index: 999;
            opacity: 0.5;
            bottom: 10px;
            animation: animate 4s linear infinite !important;
        }

        .wave#wave3 {
            z-index: 1000;
            opacity: 0.2;
            bottom: 15px;
            animation: animateWaves 3s linear infinite;
        }

        .wave#wave4 {
            z-index: 999;
            opacity: 0.7;
            bottom: 20px;
            animation: animate 3s linear infinite;
        }





        * {
            font-family: Nunito, sans-serif;
        }

        .text-blk {
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
            line-height: 25px;
        }

        .responsive-cell-block {
            min-height: 75px;
        }

        .responsive-container-block {
            min-height: 75px;
            height: fit-content;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            margin-top: 0px;
            margin-right: auto;
            margin-bottom: 0px;
            margin-left: auto;
            justify-content: space-evenly;
        }

        .outer-container {
            padding-top: 10px;
            padding-right: 50px;
            padding-bottom: 10px;
            padding-left: 50px;
            background-color: rgb(244, 252, 255);
        }

        .inner-container {
            max-width: 1320px;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
            margin-right: auto;
            margin-bottom: 50px;
            margin-left: auto;
        }

        .section-head-text {
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 5px;
            margin-left: 0px;
            font-size: 35px;
            font-weight: 700;
            line-height: 48px;
            color: rgb(0, 135, 177);
            margin: 0 0 10px 0;
        }

        .section-subhead-text {
            font-size: 25px;
            color: rgb(153, 153, 153);
            line-height: 35px;
            max-width: 470px;
            text-align: center;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 60px;
            margin-left: 0px;
        }

        .img-wrapper {
            width: 100%;
        }

        .team-card {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .social-media-links {
            width: 125px;
            display: flex;
            justify-content: space-between;
        }

        .name {
            font-size: 25px;
            font-weight: 700;
            color: rgb(102, 102, 102);
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 5px;
            margin-left: 0px;
        }

        .position {
            font-size: 25px;
            font-weight: 700;
            color: rgb(0, 135, 177);
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 50px;
            margin-left: 0px;
        }

        .team-img {
            width: 100%;
            height: 100%;
        }

        .team-card-container {
            width: 280px;
            margin: 0 0 40px 0;
        }

        @media (max-width: 500px) {
            .outer-container {
                padding: 10px 20px 10px 20px;
            }

            .section-head-text {
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <?php
    include("navbar.php");
    ?>
    <div class="caraousel-container">
        <div class="caraousel">
        </div>
    </div>
    <div class="feactures">
        <div id="airtel">
            <div class="row">
                <div class="text-col">
                    <p class="heading">
                        Airtel
                    </p>
                    <p class="text" id="typewriteAirtel">
                        Embark on a digital journey like never before with Airtel, where speed becomes an experience. Our commitment to delivering the fastest network in India ensures that your connectivity is not just reliable but a force to reckon with. Elevate your internet experience with Airtel's seamless connectivity, setting new standards for unmatched speed. Discover a world where every click, download, and stream is a testament to the speed revolution – welcome to Airtel, where the future of connectivity unfolds.
                    </p>
                </div>
                <div class="container">
                    <div class="card" id="card1">
                        <div class="circle">
                            <img src="./images/airtellogo.jpg" style="height:43%">
                        </div>
                        <div class="content">
                            <h2>Price:300</h2>
                            <div class="left">
                                <p> Validity: 30 days</p>
                                <p style="margin-top: 7px;"> Data: 5GB</p>
                            </div>
                            <a href="airtel.php" class="view-more" onclick="openModal('modal1')">Click Here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="jio">
            <div class="row">
                <div class="container">
                    <div class="card" id="card2">
                        <div class="circle">
                            <img src="./images/jiologo.jpg">
                        </div>
                        <div class="content">
                            <h2>Price:300</h2>
                            <div class="left">
                                <p> Validity: 30 days</p>
                                <p style="margin-top: 7px;"> Data: 5GB</p>
                            </div>
                            <a href="jio.php" class="view-more" onclick="openModal('modal1')">Click Here</a>
                        </div>
                    </div>
                </div>
                <div class="text-col">
                    <p class="heading">
                        JIO
                    </p>
                    <p class="text" id="typewriteJio">
                        Step into a realm of limitless possibilities with Jio, where connectivity is redefined. Jio goes beyond being just a network – it's a powerhouse of innovation and speed. Unlock the potential of faster, stronger, and smarter connections that empower you in ways unimaginable. Whether you're streaming, gaming, or staying connected with loved ones, Jio is your gateway to a digital world where every connection is an exploration, and every moment is enhanced by the boundless power of connectivity.
                    </p>

                </div>
            </div>
        </div>
        <div id="bsnl">
            <div class="row">
                <div class="text-col">
                    <p class="heading">
                        Bsnl
                    </p>
                    <p class="text" id="typewriteBsnl">
                        BSNL, the backbone of India's connectivity, is not just a network; it's a symbol of trust and reliability. As your trusted network partner, BSNL connects the nation and empowers lives. Our heritage of delivering dependable and robust connectivity has stood the test of time. Experience the revolutionary spirit of BSNL, where every connection is a bridge that spans distances and connects dreams. Welcome to a network that has been an integral part of India's journey – connecting hearts and homes with unwavering commitment.
                    </p>
                </div>
                <div class="container">
                    <div class="card" id="card3">
                        <div class="circle">
                            <img src="./images/bsnllogo1.jpg" style="height:44%">
                        </div>
                        <div class="content">
                            <h2>Price:300</h2>
                            <div class="left">
                                <p> Validity: 30 days</p>
                                <p style="margin-top: 7px;"> Data: 5GB</p>
                            </div>
                            <a href="bsnl.php" class="view-more" onclick="openModal('modal1')">Click Here</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div id="vi">
            <div class="row">
                <div class="container">
                    <div class="card" id="card4">
                        <div class="circle">
                            <img src="./images/vilogo.webp" style="height:43%">
                        </div>
                        <div class="content">
                            <h2>Price:300</h2>
                            <div class="left">
                                <p> Validity: 30 days</p>
                                <p style="margin-top: 7px;"> Data: 5GB</p>
                            </div>
                            <a href="vi.php" class="view-more" onclick="openModal('modal1')">Click Here</a>
                        </div>
                    </div>
                </div>
                <div class="text-col">
                    <p class="heading">
                        VI
                    </p>
                    <p class="text" id="typewriteParagraph">
                        Experience vibrant connectivity tailored for the digital world with Vi. Vi, short for Vodafone Idea, brings you more than just a network – it's a transformative force in communication. Ignite the future of connectivity as Vi provides you with seamless, reliable, and robust solutions. Elevate your communication experience with Vi, where every connection reflects the commitment to innovation and quality. Discover the network that understands your lifestyle and caters to your digital needs.
                    </p>
                </div>
            </div>
        </div>
    </div>

<!-- ///////////////////////////////////Services/////////////////////////////////// -->
<div id="service">
<?php
    include("service.html");
    ?>
</div>



<!-- ////////////////////////////////Team Members//////////////////////////// -->
    <div class="responsive-container-block outer-container" id="ourteam">
        <div class="responsive-container-block inner-container">
            <p class="text-blk section-head-text">
                Our Team
            </p>
            <p class="text-blk section-subhead-text">
                Connecting Choices, Empowering Voices
            </p>
            <div class="responsive-container-block">
                <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
                    <div class="team-card">
                        <div class="img-wrapper">
                            <img class="team-img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/expert2.png">
                        </div>
                        <p class="text-blk name">
                            Abhishek Belagavi
                        </p>
                        <p class="text-blk position">
                            Team Leader
                        </p>
                        <div class="social-media-links">
                            <a href="http://www.twitter.com/" target="_blank">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg">
                            </a>
                            <a href="http://www.facebook.com/" target="_blank">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg">
                            </a>
                            <a href="http://www.instagram.com/" target="_blank">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
                            </a>
                            <a href="http://www.gmail.com/" target="_blank">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
                    <div class="team-card">
                        <div class="img-wrapper">
                            <img class="team-img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/expert1.png">
                        </div>
                        <p class="text-blk name">
                            Kavya Hegde
                        </p>
                        <p class="text-blk position">
                            Instructor
                        </p>
                        <div class="social-media-links">
                            <a href="http://www.twitter.com/" target="_blank">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg">
                            </a>
                            <a href="http://www.facebook.com/" target="_blank">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg">
                            </a>
                            <a href="http://www.instagram.com/" target="_blank">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
                            </a>
                            <a href="http://www.gmail.com/" target="_blank">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
                    <div class="team-card">
                        <div class="img-wrapper">
                            <img class="team-img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/expert1.png">
                        </div>
                        <p class="text-blk name">
                            Chinmayi R
                        </p>
                        <p class="text-blk position">
                            Instructor
                        </p>
                        <div class="social-media-links">
                            <a href="http://www.twitter.com/" target="_blank">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg">
                            </a>
                            <a href="http://www.facebook.com/" target="_blank">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg">
                            </a>
                            <a href="http://www.instagram.com/" target="_blank">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
                            </a>
                            <a href="http://www.gmail.com/" target="_blank">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
                    <div class="team-card">
                        <div class="img-wrapper">
                            <img class="team-img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/expert1.png">
                        </div>
                        <p class="text-blk name">
                            Chaitra R
                        </p>
                        <p class="text-blk position">
                            Instructor
                        </p>
                        <div class="social-media-links">
                            <a href="http://www.twitter.com/" target="_blank">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg">
                            </a>
                            <a href="http://www.facebook.com/" target="_blank">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg">
                            </a>
                            <a href="http://www.instagram.com/" target="_blank">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
                            </a>
                            <a href="http://www.gmail.com/" target="_blank">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
                    <div class="team-card">
                        <div class="img-wrapper">
                            <img class="team-img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/expert1.png">
                        </div>
                        <p class="text-blk name">
                            Spoorthi V
                        </p>
                        <p class="text-blk position">
                            Instructor
                        </p>
                        <div class="social-media-links">
                            <a href="http://www.twitter.com/" target="_blank">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg">
                            </a>
                            <a href="http://www.facebook.com/" target="_blank">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg">
                            </a>
                            <a href="http://www.instagram.com/" target="_blank">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
                            </a>
                            <a href="http://www.gmail.com/" target="_blank">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
                    <div class="team-card">
                        <div class="img-wrapper">
                            <img class="team-img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/expert1.png">
                        </div>
                        <p class="text-blk name">
                            Pallavi B L
                        </p>
                        <p class="text-blk position">
                            Instructor
                        </p>
                        <div class="social-media-links">
                            <a href="http://www.twitter.com/" target="_blank">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg">
                            </a>
                            <a href="http://www.facebook.com/" target="_blank">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg">
                            </a>
                            <a href="http://www.instagram.com/" target="_blank">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
                            </a>
                            <a href="http://www.gmail.com/" target="_blank">
                                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

















<!-- ////////////////////////////// Footer/////////////////////// -->
    <footer class="footer">
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
        <ul class="social-icon">
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                    <ion-icon name="logo-github"></ion-icon>
                </a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a></li>
        </ul>
        <ul class="menu">
            <li class="menu__item"><a class="menu__link" href="#">Home</a></li>

            <li class="menu__item"><a class="menu__link" href="#service">Services</a></li>
            <li class="menu__item"><a class="menu__link" href="#ourteam">Team</a></li>


        </ul>
        <p>&copy;2023 TELECOMPARE TEAM | All Rights Reserved</p>
    </footer>



    <!-- ////////js for card conternt////////// -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="landing.js"></script>
    
    <script>
        var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = document.getElementById(el);
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

            var that = this;
            var delta = 100 - Math.random() * 50; // Reduced delta for faster typing

            if (this.isDeleting) {
                delta /= 2;
            }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(function() {
                that.tick();
            }, delta);
        };

        window.onload = function() {
            new TxtType('typewriteParagraph', ["Experience vibrant connectivity tailored for the digital world with Vi.", "Vi, short for Vodafone Idea, brings you more than just a network – it's a transformative force in communication.", "Ignite the future of connectivity as Vi provides you with seamless, reliable, and robust solutions.", "Elevate your communication experience with Vi, where every connection reflects the commitment to innovation and quality.", "Discover the network that understands your lifestyle and caters to your digital needs."], 500); // Reduced period to 500 milliseconds for faster typing

            new TxtType('typewriteAirtel', ["Embark on a digital journey like never before with Airtel, where speed becomes an experience.", "Our commitment to delivering the fastest network in India ensures that your connectivity is not just reliable but a force to reckon with.", "Elevate your internet experience with Airtel's seamless connectivity, setting new standards for unmatched speed.", "Discover a world where every click, download, and stream is a testament to the speed revolution – welcome to Airtel, where the future of connectivity unfolds."], 500);

            new TxtType('typewriteJio', ["Step into a realm of limitless possibilities with Jio, where connectivity is redefined.", "Jio goes beyond being just a network – it's a powerhouse of innovation and speed.", "Unlock the potential of faster, stronger, and smarter connections that empower you in ways unimaginable.", "Whether you're streaming, gaming, or staying connected with loved ones, Jio is your gateway to a digital world where every connection is an exploration, and every moment is enhanced by the boundless power of connectivity."], 500);

            new TxtType('typewriteBsnl', ["BSNL, the backbone of India's connectivity, is not just a network; it's a symbol of trust and reliability.", "As your trusted network partner, BSNL connects the nation and empowers lives.", "Our heritage of delivering dependable and robust connectivity has stood the test of time.", "Experience the revolutionary spirit of BSNL, where every connection is a bridge that spans distances and connects dreams.", "Welcome to a network that has been an integral part of India's journey – connecting hearts and homes with unwavering commitment."], 500);
        };
    </script>

</body>

</html>