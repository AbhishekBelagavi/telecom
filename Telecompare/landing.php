<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="./styles/landing.css">
    <link rel="stylesheet" href="./styles/card.css">
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
                    <h2>
                        Airtel
                    </h2>
                    <p>
                        airtel is speed network in india
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
                                <span> Validity:30</span>
                                <span> Truly Unlimited:90</span>
                            </div>
                            <a href="airtel.php" class="view-more" onclick="openModal('modal1')">View All Plans</a>
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
                                <span> Validity:30</span>
                                <span> Truly unlimited:90</span>
                            </div>
                            <a href="jio.php" class="view-more" onclick="openModal('modal1')">View All Plans</a>
                        </div>
                    </div>
                </div>
                <div class="text-col">
                    <h2>
                        JIO
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ipsam ad repellat, eveniet excepturi tempore quas esse doloremque laudantium doloribus veritatis officiis facere temporibus error totam impedit quam ut consequuntur.
                    </p>

                </div>
            </div>
        </div>
        <div id="bsnl">
            <div class="row">
                <div class="text-col">
                    <h2>
                        Bsnl
                    </h2>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi enim porro eaque est perspiciatis assumenda ipsam autem eius in cum a, soluta omnis, dolorum sint dolor quo deserunt architecto itaque.
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
                                <span> Validity:30</span>
                                <span> Truly unlimited:90</span>
                            </div>
                            <a href="bsnl.php" class="view-more" onclick="openModal('modal1')">View All Plans</a>
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
                                <span> Validity:30</span>
                                <span> Truly unlimited:90</span>
                            </div>
                            <a href="vi.php" class="view-more" onclick="openModal('modal1')">View All Plans</a>
                        </div>
                    </div>
                </div>
                <div class="text-col">
                    <h2>
                        VI
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio repellendus animi fugiat aliquid rerum sit? Voluptas, excepturi est iste quisquam magni laudantium doloribus repudiandae sequi quam possimus tenetur fugiat deleniti?
                    </p>
                </div>
            </div>

        </div>
    </div>
    <footer>
        <div class="footer-content">
            <div class="footerNav">
                <ul>
                    <li><a href=""> Home</a></li>
                    <li><a href=""> About</a></li>
                    <li><a href=""> Contact Us</a></li>
                    <li><a href=""> Our Team</a></li>
                </ul>
            </div>

        </div>
        <div class="footerBottom">
            <p>Designed by<span class="designer">TELECOM</span></p>
        </div>
    </footer>
    <script src="landing.js"></script>
</body>

</html>