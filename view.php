<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>view</title>
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
                                 <li><a href="admin.html">Attendance</a></li>
                                <li><a href="view.html">My Profile</a></li>
                                <li><a href="add_employ.html">Add Employee</a></li>
                                <li><a href="employ_states.html">Employee Status</a></li>
                                <li><a href="leave_management.html">Leave Management</a></li>
                                <li><a href="wrk_history.html">Working H.</a></li>
                                <li><a href="#">Logout</a></li>
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
                    <h2>My carryculam vita </h2>
                    <img src="images/me.png">
                    <h6>My all information is blew</h6>
                </div>
            </div>
        </section>
        <section id="cv" class="text-center">
            <div class="container">
                <div class="col-md-12">
                    <h4>Name : <span>Burhan Uddin Talukder</span></h4>
                    <h4>Father Name :  <span>Abdul Karim Talukder </span></h4>
                    <h4>Mother Name :  <span>Bilkis akhter </span></h4>
                    <h4>Present address : <span>Fatulla, Narayangonj</span></h4>
                    <h4>Permanent address : <span>Hajigonj, Chandpur</span></h4>
                    <h4>Date of Birth : <span>10/8/1986</span></h4>
                    <h4>Nationality  : <span>Bangladeshi</span></h4>
                    <h4>Religion  : <span>Islam(Sunni)</span></h4>
                    <h4>National ID : <span>012801259714035</span></h4>
                    <h4>Contact No :<span>012597426984</span></h4>
                    <h4>Email Address :<span>but@gmail.com</span></h4>
                    <h4>Accademic bacground: </h4>
                    <h6>BBS: National University sub:Accounting Result :(0.000)</h6>
                    <h6>HSC: Dhaka Board  sub:Accounting Result :(GPA-0.000)</h6>
                    <h6>SSC: Dhaka Board  sub:Accounting Result :(GPA-0.000)</h6>
                    <h4>Other experience:</h4>
                    <p>Opens document in an editor in a new window.
                        If window is already floating, the Dock Window option appears instead.</p>
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