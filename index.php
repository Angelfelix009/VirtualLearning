<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>::Digital Library</title>
<link href="scripts_lib/css/bootstrap.css" rel="stylesheet" />
<link href="scripts_lib/css/bootstrap-theme.css" rel="stylesheet" />
<link href="css/info.css" rel="stylesheet" />
</head>
<body>

<div class="container-fluid">
<div class="navbar navbar-default navbar-fixed-top" style="padding-left:20px;" id="topbar">
<h3>
 <i class="fa fa-pencil-square-o"></i>
Online Digital Library
</h3>
</div>
<div id="body-content" style="padding-top:5.5%;">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>


                <section class="carousel-inner">
                    <div class="active item">
                        <img src="image/banner1.jpg" alt="Payroll" style="height: 400px; width:100%" />
                        <div class="carousel-caption">
                            
                        </div>
                    </div>
                    <div class="item">
                        <img src="image/banner2.jpg" alt="Payroll" style="height: 400px; width:100%" />
                        <div class="carousel-caption">
                            
                        </div>
                    </div>

                    <div class="item">
                        <img src="image/banner3.jpg" alt="Payroll" style="height: 400px; width:100%" />
                        <div class="carousel-caption">
                            
                        </div>
                    </div>
                </section>

                <a href="#myCarousel" class="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a href="#myCarousel" class="right carousel-control" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>

        </div>

        <div class="col-lg-12" style="padding-top:15px;">
            <div class="col-lg-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        News
                    </div>
                    <div class="panel-body">
                        <p>
                            Here Goes the Panel Body
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                       About the Project
                    </div>
                    <div class="panel-body">
                        <p>
                            Here Goes the Panel Body
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Heading Goes here
                    </div>
                    <div class="panel-body">
                        <p>
                            Here Goes the Panel Body
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                    <form action="server/login.php" method="post" id='lgn_form'>
                      <i class="fa fa-keyboard-o"></i> <label>Login Here</label>
                    </div>
                    <div class="panel-body">
                    
                        <div>
                            <div class="form-group">
                                <label>Username:</label>
                                <input type="text" class="form-control" name="lgn_uname" id="lgn_uname" placeholder="Username" />
                            </div>

                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" class="form-control" name="lgn_pword" id="lgn_pword" placeholder="Password" />
                            </div>
                            <div class="form-group">
                            <label>Select Account Type:</label>
                            <select id="lgn_type" name="lgn_type" class="form-control">
                            <option>Select account type</option>
                            <option>Admin</option>
                            <option>Student</option>
                            </select>
                            </div>
                            <div align="center">
                                <input type="button" class="btn btn-primary" value="Login" id="login_button" />
                               
                            </div>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
    </div>

</body>
<script src="scripts_lib/jquery/jquery-2.1.0.min.js"></script>
<script src="scripts_lib/js/bootstrap.min.js"></script>
<script src="scripts_lib/js/npm.js"></script>
<script src="scripts_lib/jquery/jquery.form.js"></script>
<script src="js/utility_script.js"></script>
<script src="js/form_validate.js"></script>
<script>
    $(function(){
       
    });
</html>