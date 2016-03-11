<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/nivo-slider.css">
        <link rel="stylesheet" href="themes/default/default.css">
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <section id="manubar">
            <div class="row">
                <nav class="navbar navbar-inverse">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#hm">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><i>EMS</i></a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right"> 
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="login.html">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </section>
        <section>
            <div class="col-md-8 hm_left">
                <div class="slider_section theme-default">
                    <div id="slider" class="nivoSlider">
                        <img src="images/sd_one.jpg" data-thumb="images/sd_one.jpg" alt="" />
                        <img src="images/sd_two.jpg" data-thumb="images/sd_two.jpg" alt=""/>
                        <img src="images/sd_four.jpeg" data-thumb="images/sd_four.jpeg" alt=""/>
                    </div>
                </div>
            </div>
            <div class="col-md-4 hm_right">
                <div class="b">
                    <h6><i>Well Come To Our Site</i></h6>
                    <h2>Our Home Page</h2>
                    <p>
                        Cras vel neque eu erat placerat feugiat. Nunc ornare lacus tincidunt
                        velit fermentum, quis tristique libero aliquam. Quisque non mauris
                        scelerisque erat eleifend elementum. Duis eros diam, porttitor ac luctus vitae,
                        mattis vel odio. Nullam tempus leo sapien, feugiat molestie ipsum tincidunt non.
                        Sed sed suscipit orci, non rhoncus ipsum. Duis a est diam. Nam ac egestas neque. 
                        Donec id ex ac elit accumsan auctor.
                    </p>
                    <a href="#">Know More</a>
                </div>
            </div>
        </section>
        <section id="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>EMPLOY MANAGEMENT SERVICE</h3>
                        <p>Opens a menu from which you can view the changes you made to the file or revert those changes.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <i class="fa fa-cart-plus fa-3x"></i>
                        <h3>service</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Minima maxime quam architecto quo inventore harum ex magni,
                            dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <i class="fa fa-eye fa-3x"></i>
                        <h3>Management</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Minima maxime quam architecto quo inventore harum ex magni,
                            dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                         <i class="fa fa-cogs fa-3x"></i>
                        <h3>Lability</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Minima maxime quam architecto quo inventore harum ex magni,
                            dicta impedit.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="footer">
            <div class="container">
                <div class="col-md-12">
                    <p>@copy right <i>BURHAN UDDIN</i></p>
                    <h5>WEB PAGE DESIGNER</h5>
                </div>
            </div>
        </section>
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.nivo.slider.js"></script>
        <script>
            $(document).ready(function () {
                $('#slider').nivoSlider()
            })
        </script>

    </body>
</html>