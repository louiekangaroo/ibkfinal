﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Itty Bitty Kids Expo Brisbane Australia">
    <meta name="author" content="Aviso.Manalastas.Llagas.Pablo">
    <title>Contact Us | Itty Bitty Kids Expo</title>

    <!--CSS-->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/font.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/scrolling-nav.css" rel="stylesheet">
    <link href="../css/sectioncontainer.css" rel="stylesheet">
    <link href="../css/navigation.css" rel="stylesheet">
    <link href="../css/admin_main.css" rel="stylesheet">


    <!--Javascript-->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/scrolling-nav.js"></script>
    <script src="../js/jquery.slides.min.js"></script>
    
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

        <div class="container">

            <div class="navbar-header page-scroll">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand page-scroll" href="#page-top"></a>
            </div>


            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right" id="ul-menu">
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html">Home</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container-fluid divContainer">
            <img src="../images/ibklogo.png" alt="IBK Logo" id="ibkLogo">
        </div>
    </section>

    <!-- LOGS-->
    <section id="logs" class="logs-section">
        <div class="container divContainer">
            <h1>LOGS</h1>

            <div class="row">
                <div class="col-sm-12" style="visibility: visible; margin-bottom: 25px;">
                    <h4 class="column-title"></h4>
                    <div class="column-div">
                        <p>No available content at this time.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- NEWSLETTER-->
    <section id="newsletter" class="newsletter-section">
        <div class="container divContainer">
            <h1>NEWSLETTER</h1>

            <div class="row">
                <div class="col-sm-12" style="visibility: visible; margin-bottom: 25px;">
                    <h4 class="column-title"></h4>
                    <div class="column-div">
                        <p>No available content at this time.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- PHOTO GALLERY-->
    <section id="photogallery" class="photogallery-section">
        <div class="container divContainer">
            <h1>MANAGE PHOTO GALLERY</h1>

            <div class="row">
                <div class="col-sm-12" style="visibility: visible; margin-bottom: 25px;">
                    <h4 class="column-title"></h4>
                    <div class="column-div">
                        <p>No available content at this time.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--FOOTER-->
    <footer id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6" id="footer-info">
                    &copy; 2015 Itty Bitty Kids Expo.
                </div>
                <div class="col-sm-6" id="social-for-mobile">
                    <ul class="social-icons">
                        <li><a href="www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6" style="color: darkgray;">
                    Web Design by : <!--Aviso, Manalastas, Llagas, Pablo-->
                </div>
            </div>
            
        </div>
    </footer><!--/#footer-->
    
    <div id="back-to-top">
        <a class="page-scroll" href="#page-top">
            <img src="../images/backtotop.png" />
        </a>
    </div>

    <script>

        $(document).ready(function() {
            var userValid = sessionStorage.getItem("isSuccessLogin");

            if (userValid == "false" || userValid == null) {
                location.href = "admin_login.html";
            }
        })

    </script>

</body>

</html>