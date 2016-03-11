<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>admin</title>
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
            <div class="col-md-7 hm_left">
                <div class="slider_section theme-default">
                    <div id="slider" class="nivoSlider nevo">
                        <img src="images/sd_one.jpg" data-thumb="images/sd_one.jpg" alt="" />
                        <img src="images/sd_two.jpg" data-thumb="images/sd_two.jpg" alt=""/>
                        <img src="images/sd_four.jpeg" data-thumb="images/sd_four.jpeg" alt=""/>
                    </div>
                </div>
            </div>
            <div class="col-md-5 hm_right admin">
                <div class="b">
                    <form action="#" method="post">
                        <div class="form-group"> 
                            <select>
                                <option>Department</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                            <span>
                                <button type="button" class="btn btn-success">search</button>
                            </span>
                        </div> 
                    </form>
                    <table class="table">
                        <tr>
                            <th>SL#</th>
                            <th>E-ID</th>
                            <th>Department</th>
                            <th>Designation</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>14360</td>
                            <td>Marketing</td>
                            <td>Manager</td>
                            <td>Active</td>
                            <td>View|Edit</td>
                        </tr>
                    </table>
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