<?php
$con = mysqli_connect("localhost","root","","bookmark") or die(mysqli_error($con));
session_start();
if(!isset($_SESSION['name'])){
    header("Location: ../PHP/login.php");

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The BookMark</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../CSS/home.css">
</head>

<body>
    <!-- header section -->
    <header class="header">
        <div class="header-1">
        <a href="../PHP/home.php" class="logo"><i class="fa-solid fa-book"></i>The BookMark</a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="Search here" id="search-box">
                <label for="search-box" class="fa-solid fa-magnifying-glass"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fa-solid fa-magnifying-glass"></div>
                <a href="#" class="fa-solid fa-cart-shopping"></a>
                <a href="../PHP/profile.php" class="fa-solid fa-user"></a>
                <a href="../PHP/logout.php" class="fa-solid fa-sign-out"></a>
            </div>
        </div>
        <div class="header-2">
            <nav class="navbar">
                <a href="../PHP/home.php">Home</a>
                <a href="#featured">Featured</a>
                <a href="#deal">Deal</a>
                <a href="../PHP/aboutus.php">About us</a>
                <a href="../PHP/contactus.php">Contact us</a>
            </nav>
        </div>

    </header>



    <!-- header section end -->


    <h1 style="margin-left:30px"><?php echo "Hello ".$_SESSION['name']."!"; ?></h1>

    <!-- home section starts  -->
    <section class="home" id="home">

        <div class="row">

            <div class="content">
                
                <h3>Upto 75% off</h3>
                <p>Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Magnam Deserunt Nostrum Accusamus. Nam Alias
                    Sit Necessitatibus, Aliquid Ex Minima At!</p>
                <a href="#featured" class="btn">Shop Now</a>
            </div>

            <div class="swiper books-slider">
                <div class="swiper-wrapper">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <a class="item active">
                                <img src="https://s26162.pcdn.co/wp-content/uploads/2015/12/bookseller-picks-2015.png"
                                    alt="" style="width:100%; height: 480px; margin: auto;">
                            </a>

                            <a class="item">
                                <img src="https://i.guim.co.uk/img/media/77e3e93d6571da3a5d77f74be57e618d5d930430/0_0_2560_1536/master/2560.jpg?width=1200&height=900&quality=85&auto=format&fit=crop&s=c99740fab952ee29d238d75272b98a61"
                                    alt="" style="width:100%; height: 480px; margin: auto;">
                            </a>

                            <a class="item">
                                <img src="https://i.pinimg.com/originals/ba/f2/c1/baf2c1631c86fc403a7879818af99267.jpg"
                                    alt="" style="width:100%; height: 480px; margin: auto;">
                            </a>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>

        </div>

    </section>

    <!-- home section ends  -->

    <!-- icons section starts  -->

    <section class="icons-container">


        <div class="icons">
            <i class="fas fa-shipping-fast"></i>
            <div class="content">
                <h3>free shipping</h3>
                <p>order over $100</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-lock"></i>
            <div class="content">
                <h3>secure payment</h3>
                <p>100 secure payment</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-redo-alt"></i>
            <div class="content">
                <h3>easy returns</h3>
                <p>10 days returns</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-headset"></i>
            <div class="content">
                <h3>24/7 support</h3>
                <p>call us anytime</p>
            </div>
        </div>

    </section>

    <!-- icons section ends -->


    <!-- featured section starts  -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>featured books</span> </h1>

    </section>


    <section>
        <div class="container-fluid">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="https://img.freepik.com/free-psd/book-table_123684-2.jpg?w=2000" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://img.freepik.com/free-psd/red-hard-cover-book-mockup_23-2149169385.jpg?w=2000" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://img.freepik.com/free-vector/creative-corporate-annual-report-book-cover-design-template_548438-25.jpg?w=2000" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://img.freepik.com/free-vector/creative-corporate-annual-report-book-cover-design-template_548438-25.jpg?w=2000" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://img.freepik.com/free-vector/creative-corporate-annual-report-book-cover-design-template_548438-25.jpg?w=2000" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://img.freepik.com/free-vector/creative-corporate-annual-report-book-cover-design-template_548438-25.jpg?w=2000" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://img.freepik.com/free-vector/creative-corporate-annual-report-book-cover-design-template_548438-25.jpg?w=2000" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>  
    </section>

    <!-- deal section starts  -->

    <section class="deal" id="deal">

        <div class="content">
            <h3>deal of the day</h3>
            <h1>upto 50% off</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis in atque dolore tempora
                quaerat at fuga dolorum natus velit.</p>
            <a href="#featured" class="btn">shop now</a>
        </div>

        <div class="image">
            <img src="https://storage.googleapis.com/kaggle-datasets-images/1724630/2820372/29aa847032183d94339fbbe3ed3650e7/dataset-cover.jpg?t=2021-11-16-19-28-50"
                alt="">
        </div>

    </section>

    <!-- deal section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>our locations</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> france </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> japan </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> africa </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> arrivals </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> blogs </a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> account info </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> ordered items </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> privacy policy </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> payment method </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> our serivces </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"> <i class="fas fa-envelope"></i> bhagyashreejena@gmail.com </a>
            </div>

        </div>

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="credit"> © 2022, <span>NFC Solutions, Inc. or its affiliates</span> | all rights reserved! </div>

    </section>

    <!-- footer section ends -->





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="thebookmark.js"></script>

</body>

</html>
