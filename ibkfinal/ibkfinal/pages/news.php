<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Itty Bitty Kids Expo Brisbane Australia">
    <meta name="author" content="Aviso.Manalastas.Llagas.Pablo">
    <title>News | Itty Bitty Kids Expo</title>

    <!--CSS-->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/font.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/scrolling-nav.css" rel="stylesheet">
    <link href="../css/sectioncontainer.css" rel="stylesheet" />
    <link href="../css/navigation.css" rel="stylesheet">
    <link href="../css/news.css" rel="stylesheet">
    <link href="../css/gallery.css" rel="stylesheet">


 <!--Javascript-->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/scrolling-nav.js"></script>
    <script src="../js/jquery.slides.min.js"></script>
    <script  src="../js/jssor.js"></script>
    <script  src="../js/jssor.slider.js"></script>
    <script  src="../js/news-slider.js"></script>
  
    <script src="../js/newsdetail.js"></script>
    <script  src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/ajaxloader.js"></script>

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
                    <li>
                        <a class="page-scroll" href="about.html">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="getinvolved.html">Get Involved</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="eventinfo.html">Event Info</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="competitions.html">Competitions</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contactus.html">Contact Us</a>
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
            <img src="../images/page headers/news_page_art.png" alt="IBK Header" id="newsHeader">

        </div>
    </section>

    <!-- NEWS ARTICLES -->
    <section id="articles" class="articles-section">
        <div class="container divContainer">
            <h1>NEWS ARTICLES</h1>

            <div class="row">
                <div class="col-sm-12" style="visibility: visible; margin-bottom: 25px;">
                    <h4 class="column-title"></h4>
                    
                    <div class="column-div">
                        <?php include('newsdetails.php') ?>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- REGISTER NEWLETTERS -->
    <section id="newsletters" class="newsletters-section">
        <div class="container divContainer">
            <h1>REGISTER TO RECEIVE NEWLETTERS</h1>

            <div class="row">
                <div class="col-sm-12" style="visibility: visible; margin-bottom: 25px;">
                    <h4 class="column-title"></h4>
                    <div class="column-div">
                        <p>Stay up to date with the Itty Bitty Kids Expo, by subscribing to our newsletter.</p>
                      <form class="form-horizontal" id="reg-form" method="post" action="registernewsletter.php">
                            <fieldset>

                                <!-- Form Name -->
                                <legend></legend>


                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="txtFName">Full Name <span class="error">*</span></label>
                                    <div class="col-md-4">
                                        <input id="txtFName" name="fname" type="text" class="form-control input-md" required>


                                    </div>
                                </div>
                            
                                <!-- Email-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="txtEmail">Email Address<span class="error">* </span></label>
                                    <div class="col-md-4">
                                        <input id="txtEmail" name="eadd" type="email" class="form-control input-md" required>

                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="btnSubmit"></label>
                                    <div class="col-md-4">
                                        <button id="btnSubmit" name="btnSubmit" class="btn btn-primary" onclick = "alert ('Thanks for becoming a friend of Itty Bitty Kids Expo.')">Submit</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
    </section>

    <!-- IMAGE GALLERY -->
    <section id="gallery" class="gallery-section">
        <div class="container divContainer">
            <h1>IMAGE GALLERY</h1>

            <div class="row">
                <div class="col-sm-12" style="visibility: visible; margin-bottom: 25px;">
                    <h4 class="column-title"></h4>
                    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 800px;
        height: 456px; background: #191919; overflow: hidden; margin:10px auto;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 800px; height: 356px; overflow: hidden;">
                            <?php
                 include("Photo_Gallery_Dtls.php");
               
              ?>   
                        </div>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 158px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 158px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
        
        <!-- Thumbnail Navigator Skin Begin -->
        <div u="thumbnavigator" class="jssort01" style="position: absolute; width: 800px; height: 100px; left:0px; bottom: 0px;">
            <!-- Thumbnail Item Skin Begin -->
            
            <div u="slides" style="cursor: move;">
                <div u="prototype" class="p" style="position: absolute; width: 72px; height: 72px; top: 0; left: 0;">
                    <div class=w><div u="thumbnailtemplate" style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></div></div>
                    <div class=c>
                    </div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Thumbnail Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">Image Slider</a>
    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- PRESS KIT -->
    <section id="presskit" class="presskit-section">
        <div class="container divContainer">
            <h1>PRESS KIT</h1>

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

    <!-- BLOGS -->
    <section id="blogs" class="blogs-section">
        <div class="container divContainer">
            <h1>BLOGS AND DISCUSSION</h1>

            <div class="row">
                <div class="col-sm-12" style="visibility: visible; margin-bottom: 25px;">
                    <h4 class="column-title"></h4>
                    <div id="disqus_thread" class="column-div">
                        <script type="text/javascript">
                            /* * * CONFIGURATION VARIABLES * * */
                            var disqus_shortname = 'ittybitty-au';

                            /* * * DON'T EDIT BELOW THIS LINE * * */
                            (function () {
                                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                            })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

                        <script type="text/javascript">
                            /* * * CONFIGURATION VARIABLES * * */
                            var disqus_shortname = 'ittybitty-au';

                            /* * * DON'T EDIT BELOW THIS LINE * * */
                            (function () {
                                var s = document.createElement('script'); s.async = true;
                                s.type = 'text/javascript';
                                s.src = '//' + disqus_shortname + '.disqus.com/count.js';
                                (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
                            }());
                        </script>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!--LEFT AND RIGHT BOXES-->
    <div id="div-left">
        <h4></h4>
    </div>

    <div id="div-right-one">
        <h4></h4>
    </div>

    <div id="div-right-two">
        <h4></h4>
    </div>


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

</body>

</html>