<?php


include "sambung.php";

session_start();
if (!$_SESSION['uname']) {
	header("location:adminlogin.php");
}

if(isset($_POST['fname'])) {

  // variable
     $fullname = $_POST['fname'];
     $nomatrik = $_POST['matrik'];
     $email = $_POST['email'];
     $sesi = $_POST['sesi'];
     $username = $_POST['uname'];
     $password = $_POST['pass'];
     $level = $_POST['level'];

     $tambah = "INSERT INTO user (username,password,level,fullname,nomatrik,email,sesi) VALUES 
     ('$username','$password','$level','$fullname','$nomatrik','$email','$sesi')";

     $hasil = mysqli_query($hubung,$tambah);

     echo "<script>alert('Pelajar berjaya ditambah');
        window.location='addPelajar.php'</script>";

}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Tambah Pelajar</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />


      <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

 <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
      <link href="css/style.css" rel='stylesheet' type='text/css' />
      <link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
      <script src="js/jquery.min.js"></script>
<!----webfonts--->
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  

<!--bootstrap 4 icon analisis-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- icon add user-->
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<!-- icon dashboard-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="js/d3.v3.js"></script>
<script src="js/rickshaw.js"></script>

</head>
<body>

<div id="wrapper">
	<!--navigasi-->
	<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboardadmin.php">Administrator</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				<!-- dropdown account-->
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/user.png" alt=""/></a>
                    <!-- account box -->
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
						<li class="m_2"><a href="profileadmin.php"><i class="fa fa-user"></i> Profile</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
						<li class="m_2"><a href="logoutadmin.php"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>


            <!-- search bar-->
			<form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form>


            <!--navigasi menu sidebar-->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <!-- menu dashbaord admin-->
                        <li>
                            <a href="dashboardadmin.php"><i class="fa fa-dashboard"></i>&nbsp Dashboard</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart"></i>&nbsp Analisis<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="ent.php">Entrance Survey</a>
                                </li>
                                <li>
                                    <a href="ext.php">Exit Survey</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fas fa-user-plus"></i>&nbspTambah Pengguna<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="addPensyarah.php">Pensyarah</a>
                                </li>
                                <li>
                                    <a href="addPelajar.php">Pelajar</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                        <li>
                            <a href="addCourse.php"><i class="fas fa-folder-open"></i>&nbsp Tambah Kursus</a>
                        </li>


                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


        <div id="page-wrapper">
        <div class="graphs">
        <div class="col_3">
          <!--title-->
            <div class="grid_3 grid_5">
                <div class="but_list">
                        <ol class="breadcrumb">
                          <li class="active">Tambah Pengguna</li>
                          <li><a href="addPelajar.php">Pelajar</a></li>
                        </ol>
               </div>

               <!-- Borang Tambah Pelajar-->

                <div class="content_bottom">
                 <div class="col-md-13 span_7">
                      <div class="bs-example1" data-example-id="contextual-table">

                        <form action="addPelajar.php" method="POST">
                      <fieldset> 
                    
                        <div class="form-group">
                          <h2>Pelajar</h2><br>
                          <label class="control-label">Nama Penuh</label>
                          <input type="text" name="fname" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label">Nombor Matrik</label>
                          <input type="text" name="matrik" class="form-control1 ng-invalid ng-invalid-required ng-valid-pattern ng-touched" ng-model="model.number" ng-pattern="/[0-9]/" required>
                          <p class="help-block hint-block"> Tanpa (-) </p>
                        </div>

                        <div class="form-group">
                          <label class="control-label">Email</label>
                          <input type="email" name="email" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" ng-model="model.email" required>
                        </div>
                        
                        <!--dropdown menu-->
                        <div class="form-group filled">
                          <label class="control-label">Sesi Pengajian</label>
                            <?php
                              include "sambung.php";
                               //query
                              $sql = mysqli_query($hubung,"SELECT DISTINCT(sesi) FROM user");
                              if(mysqli_num_rows($sql)){
                              $select = 
                              '<select class="form-control1 ng-invalid ng-invalid-required" name="sesi" ng-model="model.select" required>

                                    <option value="">Sila pilih sesi pengajian</option>';//default menu

                              while($rs = mysqli_fetch_array($sql)){
                                    $select.='<option value="'.$rs['sesi'].'">'.$rs['sesi'].'</option>';
                                }
                              }
                              $select.='</select>';
                              echo $select;

                              ?>
                           </div>

                        <div class="form-group">
                          <label class="control-label">Username</label>
                          <input type="text" name="uname" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required>
                        </div>

                        <div class="form-group">
                          <label class="control-label">Password</label>
                          <input type="password" name="pass" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.password" required>
                        </div>

                        <!-- data input for pensyarah-->
                        <input type="hidden" name="level" value="1">

            <!-- submit and reset-->
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">Submit</button>
                          <button type="reset" class="btn btn-default">Reset</button>
                        </div>

                          </fieldset> 
                        </form>
                       </div>

            <div class="clearfix"> </div>
      </div>
    
            

        
  <div class="col_1">
</div>

<!-- borang form -->
    
       </div>
      
        <div class="clearfix"> </div>
        </div>
        <div class="copy">
            <p>Copyright &copy; Modern Admin Panel. All Rights Reserved  </p>
        </div>
        </div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>