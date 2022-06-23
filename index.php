<?php
    require 'functions.php';
    $connection = dbconnect();
     
    $result = $connection->query("SELECT * FROM `programmeurs`")


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time()?>">
    <title>Web-shop</title>
</head>

<body>
    <header>
        <div class="container">

            <div class="navbar">
                <a class="logo" href="index.php"><img src="img/noBorder.png" alt="" width="145rem"></a>
                <nav class="nav">
                    <ul id="menuItems">
                        <li><a href="">About</a></li>
                        <li><a href="#search">search</a></li>
                        <li><a class="cta" target="blanck" href="contact.php">Contact</a></li>
                    </ul>
                </nav>

                <img src="img/menu.png" alt="" class="menu-icon" onclick="menutoggle()">
            </div>

            <div class="row">
                <div class="col-2">
                    <h1>Find the perfect person, <br> for your business!</h1>
                    <p>OpenHire aims to make it easier for businesses to look for freelancers they can hire for their
                        projects</p>
                    <a href="#devs" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2"><img src="img/laptop.png" alt=""></div>
            </div>
        </div>
    </header>

    <main>
        <!--Languages-->
        <section class="categories">
            <div class="small-container">
                <div class="row">
                    <div class="col-3"><img src="img/3icons.png" alt=""></div>
                    <div class="col-3"><img src="img/3cons.png" alt=""></div>
                    <div class="col-3"><img src="img/icons3.png" alt=""></div>
                </div>
            </div>

        </section>
        <h2 class="titel">Categories</h2>
        <section class="section-3">

            <button class="arrow"><</button>
                    <ul class="reviews">

                        <li class="review">
                            <a href="logo-design.html" target="_blank">
                                <img src="img/logo-design-2.webp" width="100%" alt="">
                                <div class="cat-1">
                                    <h3>Logo designers</h3>
                                    <p>Let us make a logo for you</p>
                                </div>
                            </a>
                        </li>

                        

                        <li class="review">
                            <a href="Backend.html" target="_blank">
                                <img src="img/translation-2x.webp" width="100%" alt="">
                                <div class="cat-1">
                                    <h3>Backend developers</h3>
                                    <p>Let us handle the backend for you</p>
                                </div>
                            </a>
                        </li>


                        
                        <li class="review">
                            <a href="web-developer.html" target="_blank">
                                <img src="img/seo-2x.webp" width="100%" alt="">
                                <div class="cat-1">
                                    <h3>Web developers</h3>
                                    <p>Let us make a site for you</p>
                                </div>
                            </a>
                        </li>


                        
                        <li class="review">
                            <a href="web-design.html" target="_blank">
                                <img src="img/wordpress-2x.webp" width="100%" alt="">
                                <div class="cat-1">
                                    <h3>Web designers</h3>
                                    <p>Let us design a site for you</p>
                                </div>
                            </a>
                        </li>



                            <li class="review">
                                <a href="illustration.html" target="_blank">
                                    <img src="img/illustration-2x.webp" width="100%" alt="">
                                    <div class="cat-1">
                                        <h3>illustrations</h3>
                                        <p>Let us design illustrations for you</p>
                                    </div>
                                </a>
                            </li>


                    
                        <li class="review">
                            <a href="data-entry.html" target="_blank">
                                <img src="img/data-entry-2x.webp" width="100%" alt="">
                                <div class="cat-1">
                                    <h3>Data Gathering</h3>
                                    <p>Let us gather data for you</p>
                                </div>
                            </a>
                        </li>

                    </ul>
                    <button class="arrow">></button>
        </section>
        <!--Programmers-->
        <div class="title_padding"><h2 id="devs" class="titel">Our top Developpers</h2></div>
        
        <div class="inputs">
            <div>
                <input id="checkbox-Back-end" type="checkbox" checked class="filter">
                <label for="checkbox-Back-end" class="label">Back-end</label>
            </div>

            <div>
                <input id="checkbox-front-end" type="checkbox" checked class="filter">
                <label for="checkbox-front-end" class="label">front-end</label>
            </div>

            <div>
                <input id="checkbox-Logo-design" type="checkbox" checked class="filter">
                <label for="checkbox-Logo-design" class="label">Logo-design</label>
            </div>


        </div>

        <section class="small-container">
            <div class="row">
                <div data-category="Logo-design" class="col-4">
                    <a href="Dion.html" target="_blank">
                        <img src="img/Dion.webp" class="img_dev"  alt="">
                        <div class="cat-2">
                            <h3>Dion ahiyabor</h3>
                            <p>A pro in Design</p>
                        </div>
                    </a>

                </div>
                <div data-category="front-end" class="col-4">
                    <a href="Bilal.html" target="_blank">
                        <img src="img/Bilal.webp" class="img_dev" alt="">
                        <div class="cat-2">
                            <h3>Bilal el Koudadi</h3>
                            <p>A pro in Development</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!--Exclusive products-->
        <section class="offer">
            <div class="small-container">
                <div class="row">
                    <div class="col-2">
                        <img src="img/background.jpg" class="offer-img">
                    </div>
                    <div class="col-2">
                        <h1>Our couse</h1>
                        <h2>Easy to have contact</h2>
                        <p>Using our site makes it easier, <br> to make and have contact with the developers that we hire out</p>
                    </div>
                </div>
            </div>

        </section>


        <!--testimonial-->
            <section class="testimonial">
                <div class="small-container">
                    <div class="row">
                    <?php foreach($result as $row): ?>
                        <div class="col-3">
                            <i class="fa fa-quote-left"></i>
                            <p class="text"><?php echo $row['beschrijving'] ?></p>
                            
                            <figure class="programmers-img" style="background-image: url(/f2m4WEB-SHOP/Web-shop/img/<?php echo $row['foto'];?>)" > </figure>
                            <h3><?php echo $row['titel']?></h3>
                            <a target="blanck" href="details.php?id=<?php echo $row['id']; ?>" class="btn">More info</a>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </section>
        
        <!--brands-->

        <section class="brands">
            <div class="small-container">
                <div class="row">
                    <div class="col-5">
                        <img src="img/logo-godrej.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="img/logo-oppo.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="img/logo-coca-cola.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="img/logo-paypal.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="img/logo-philips.png" alt="">
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download our App</h3>
                    <p>Download our app for android and ios mobile phone.</p>
                    <div class="app-logo"><img src="img/play-store.png" alt=""> <img src="img/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="img/noBorder.png" alt="">
                    <p>Our purpose is to sustainably make the pleasure and benefits of hiring Programmers accessible to
                        the many.
                    </p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>contacts</li>
                        <li>Blog Post</li>
                        <li>return Policy</li>
                        <li>Join our cause</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2022 - Bilal/Dion</p>
        </div>
    </footer>

    <script src="js/main.js"></script>
    <script src="js/filter.js"></script>
</body>

</html>