<?php
include('pdo_connection.php');
include('database_config.php');
$db_user = $database_user;
$db_pass = $databse_pass;
$db_name = $database_name;
$dbcon = $connection_object->connection('localhost', $db_user, $db_pass, $db_name);

if (isset($_POST['submit'])) {
    $Id = $_POST['id'];
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = md5($_POST['password']);
    $Role = $_POST['role'];
    $Gender = $_POST['gender'];
    $Date = $_POST['date'];
    $Blood = $_POST['blood'];
    $Address = $_POST['address'];
    $Contact = $_POST['contact'];
    $File = $_POST['file'];
//        $Deprt =$_POST['deprt'];
//        $Desig =$_POST['desig'];
//        $Status =$_POST['status'];
//        $Salary =$_POST['salary'];
//        $Leave =$_POST['leave'];
//        $Time =$_POST['time'];

    $sql = "INSERT INTO employee_detail(e_id,name,email,Password,user_role,gender,date_of_birth,blood_group,address,contact,image) VALUES('$Id','$Name','$Email','$Password','$Role','$Gender','$Date','$Blood','$Address','$Contact','$File')";
//        $data = $dbcon->query($sql);


    if ($dbcon->query($sql)) {
        echo("<script>alert('data inserted')</script>");
    } else {
        $string = ' Sorry! Try again.\n';
        echo "<script>alert(\"$string\")</script>";
        echo("<script>location.href='login.php'</script>");
    }
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>add employ</title>
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
        <section id="cv">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-md-offset-4">
                        <form class="form-inline" action="" method="post">
<!--                            <input name="name" type="text" placeholder="Name"/><br/>
                            <input name="email" type="email" placeholder="Email"/><br/>
                            <input name="password" type="password" placeholder="Password"/><br/>
                            <input name="submit" type="submit" value="Submit"/><br/>-->
                            Employ ID : <input type="number" name="id" class="form-control"><br>
                            Name :<input type="text" name="name" class="form-control"><br>
                            Email :<input type="email" name="email" class="form-control"><br>
                            Password :<input type="password" name="password" class="form-control"><br>
                            User role :<input type="text" name="role" class="form-control"><br>
                            Gender :
                            <input type="radio" name="gender" value="male" checked> Male
                            <input type="radio" name="gender" value="female"> Female
                            <input type="radio" name="gender" value="other"> Other<br>
                            Date of Birth :<input type="date" name="date" class="form-control"><br>
                            Blood Group :
                            <select name="blood">
                                <option>Blood Group</option>
                                <option>A+</option>
                                <option>B+</option>
                                <option>AB+</option>
                                <option>AB-</option>
                                <option>A-</option>
                                <option>B-</option>
                            </select><br>
                            Address : <textarea rows="2" cols="30" name="address" class="form-control"></textarea><br>
                            Contact :<input type="number" name="contact" class="form-control"><br>
                            Image :<input type="file" name="file" class="form-control"><br>
                            <!--                            Department :
                                                        <select name="deprt">
                                                            <option>Manager</option>
                                                            <option>Accounting</option>
                                                            <option>Marketing</option>
                                                        </select><br>
                                                        Designation :
                                                        <select name="desig">
                                                            <option>Senior Manager</option>
                                                            <option>AC Manager</option>
                                                            <option>Filled Officer</option>
                                                        </select><br>
                                                        Status :
                                                        <select name="status">
                                                            <option>Active</option>
                                                            <option>Inactive</option>
                                                        </select><br>
                                                        Salary :<input type="number" name="salary" class="form-control"><br>
                                                        Leave Remain :
                                                        <textarea rows="2" cols="30" name="leave" class="form-control"></textarea><br>
                                                        Working Hour :
                                                        <input type="time" name="time" class="form-control"><br>-->
                            <input name="submit" type="submit" value="Submit"/><br/>
                        </form>
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