<?php
session_start();
include("../classes/pdosetup.php");
include ("../server/redirect.php");
$id=$_SESSION['activeuser'];
$sel=$db->query("SELECT * from admin where username='$id'");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>::Digital Library|Admin Panel</title>
     <link rel="stylesheet" href="../scripts_lib/css/bootstrap-theme.min.css" /><!-- bootstrap theme file -->
     <link href="../scripts_lib/css/bootstrap.css" rel="stylesheet"><!-- Bootstrap Core CSS -->
  <link type="text/css" href="../scripts_lib/jquery-ui/jquery-ui.css" rel="stylesheet" />
  <link href="../scripts_lib/metisMenu/dist/metisMenu.min.css" rel="stylesheet" /><!--sidebar css file -->
  <link href="../css/admin_style.css" rel="stylesheet" /><!-- Custom side bar css file-->
  <link href="../scripts_lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- Custom Fonts -->
<link href="../css/styles.css" rel="stylesheet" /><!-- custom css file -->
    <!-- Custom CSS -->
    <!--<link href="../scripts_lib/css/sb-admin.css" rel="stylesheet">
     -->
    

<link rel="stylesheet" href="../scripts_lib/PgwModal/pgwmodal.css" />
<link rel="stylesheet" href="../scripts_lib/jquery-ui/jquery-ui.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="margin-bottom: 0; background:#03F">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="" style="color:#FFF">WEB BASED DIGITAL LIBRARY</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-top-links navbar-right">
                           
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#FFF"><b class="fa fa-user"></b> <?php
					while($rows=$sel-> fetch (PDO::FETCH_ASSOC)){
		$name=$rows["name"];
		
					
					
					 echo $name;} ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                                             
                        <li id='change_pword_uname'>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Change Password and Username</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../server/logout_admin.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
             <div class="navbar-default sidebar" role="navigation" style="height:680px; color:#FFF; background:#03F">
            <div class="sidebar-nav navbar-collapse" style="color:#FFF;">
                <ul class="nav" id="side-menu" style="color:#FFF;">
                    <li>
					<a href="admin_profile.php"><i class="fa fa-fw fa-dashboard"></i>Admin Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-gear"></i> Administrator Setup</a>
                        <ul class="nav nav-second-level">
                        <li id="newadmin">
                        <a href="#">Add Admin</a>
                        </li>
                        <li class="divider"></li>
                        <li id='delete_admin'>
                        <a href="#">Delete Admin</a>
                        </li>
                        </ul>
                    </li>
                    <li>
                        <a href=""  class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-gear"></i> Student Setup</a>
                        <ul class="nav nav-second-level">
                        <li id='add_student'>
                        <a href="#">Add new Student</a>
                        </li>
                        <li id="edit_student">
                        <a href="#">Edit Student Data</a>
                        </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-gear"></i> Resource Setup</a>
                        <ul class="nav nav-second-level">
                        <li id='upload_ebook'>
                        <a href="#">Upload E-book/video</a>
                        </li>
                        <li class="divider"></li>
                        <li id='delete_ebook'>
                        <a href="#">Delete E-book</a>
                        </li>
                        <li class="divider"></li>
                        <li id='delete_video'>
                        <a href="#">Delete Video</a>
                        </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12" style="height:600px;">
                        <h1 class="page-header">
                            Dashboard <small></small>
                        </h1>
                       	
                        	<div class="well col-lg-12" id="content_pane" style="height:480px; overflow:hidden; box-shadow:2px 2px 2px 2px #000">
                            	Hello World!!!
                            </div>
                            
                        
                        </ol>
                    </div>                      
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>
    <!-- jQuery -->
    <script src="../scripts_lib/jquery/jquery-2.1.0.min.js"></script>
	<script src="../scripts_lib/jquery-ui/jquery-ui.js"></script>
    <script src="../scripts_lib/jquery/jquery.form.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../scripts_lib/js/bootstrap.min.js"></script>
    <!-- Metismenu Scrip -->
    <script src="../scripts_lib/metisMenu/dist/metisMenu.min.js"></script>
<script src="../scripts_lib/js/panel_script.js"></script>
     <script src="../js/admin_js.js"></script>
	 
     <script src="../scripts_lib/PgwModal/pgwmodal.min.js"></script>

     <script src="../validate/admin_script.js"></script>
    
  

    <script>
	$(function() {
		$("#datepicker").datepicker();
		$("#dob").datepicker();
	});
</script>
    


</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>