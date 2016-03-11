<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>employ_states</title>
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
            <div class="row">
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
            </div>
        </section>
        <section id="cv" class="text-center">
            <div class="container">
               <div class="col-md-4 col-md-offset-4">
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" name="id" class="form-control"  placeholder="Enter Your ID"/>
                            <span class="input-group-btn"><button type="submit" class="btn btn-primary">Search</button></span>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered text-center">
                                <tr class="active">
                                    <th style="text-align: center; width: 80px;">SL</th>
                                    <th style="text-align: center; width: 120px;">E-ID</th>
                                    <th style="text-align: center; width: auto;">Name</th>
                                    <th style="text-align: center; width: auto;">Department</th>
                                    <th style="text-align: center; width: auto;">Designation</th>
                                    <th style="text-align: center; width: auto;">Salary</th>
                                    <th style="text-align: center; width: 120px;">working hour/week</th>
                                    <th style="text-align: center; width: 80px;">Leave remain</th>
                                    <th style="text-align: center; width: 120px;">Action</th>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>00001</td>
                                    <td>ABC</td>
                                    <td>Marketing</td>
                                    <td>SR</td>
                                    <td>50000</td>
                                    <td>40</td>
                                    <td>21 days</td>
                                    <td>
                                        <a href="view.html"><span class="glyphicon glyphicon-user"></span> View</a>/ <a href="add_employ.html"><span class="glyphicon glyphicon-edit"></span> edit</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
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