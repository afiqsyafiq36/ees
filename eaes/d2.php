<?php


include "sambung.php";

session_start();
if (!$_SESSION['uname']) {
	header("location:userlogin.php");
}

//update
$id = $_SESSION['id'];
$gapo = mysqli_query($hubung,"SELECT * FROM user WHERE id = '$id'");

$gapoA = mysqli_fetch_array($gapo);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Pelajar</title>

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

<!-- custom for panel-->
<link href="./style/panel.css" rel="stylesheet">

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
                <a class="navbar-brand" href="dashboardpelajar.php">Pelajar</a>
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
						<li class="m_2"><a href="profilepelajar.php"><i class="fa fa-user"></i> User</a></li>
            <li class="m_2"><a href="kemaskinipelajar.php?id_edit=<?php echo $gapoA['id']; ?>"><i class="fa fa-wrench"></i> Update Detail</a></li>
            <li class="m_2"><a href="logoutuser.php"><i class="fa fa-lock"></i> Logout</a></li>	
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

                         <!-- menu dashbaord pelajar-->
                        <li>
                            <a href="dashboardpelajar.php"><i class="fa fa-dashboard"></i>&nbsp Dashboard</a>
                        </li>

                        <li>
                          <!-- entrance survey-->
                            <a href="#"><i class="far fa-file-alt"></i>&nbsp&nbsp Borang<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="borangent.php">Entrance Survey</a>
                                </li>
                                <li>
                                    <a href="borangexit.php">Exit Survey</a>
                                </li>
                            </ul>
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
                        <!--Welcome message-->
              <div class="alert alert-success" role="alert">
                           <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                           <strong>Selamat Datang!</strong> <?php echo $_SESSION['fullname']; ?>
              </div>
                        
                </div><br>
                <h3>Exit Survey</h3>

          <!--table ent submitted-->
         <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
           <div class="panel-body no-padding">
             <table class="table table-striped">
                                     <thead>
                                        <tr class="warning">
                                          <td>Kod Kursus</td>
                                          <td>Nama</td>
                                          <td>Tarikh Dihantar</td>
                                        </tr>
                                      </thead>
<?php

    //Buat paparan Entrance yang telah disubmit
   $no = 1; //untuk bilangan data dalam DB
   $ent = mysqli_query($hubung,"SELECT kodkursus,fullname,ext_tarikh FROM ext");
   $kira = mysqli_num_rows($ent);

while($info = mysqli_fetch_array($ent)) {
     

?>
                                        <tbody>
                                        <tr>
                                          <td><?php echo $info['kodkursus']; ?></td>
                                          <td><?php echo $info['fullname']; ?></td>
                                          <td><?php echo $info['ext_tarikh']; ?></td>
                                        </tr>


<?php
$no++;
}
?>
                                        <tr> 
                                          <td>Jumlah Borang Diterima : <?php echo $kira; ?></td>
                                        </tr>  

                                      </tbody>
                                    </table>
                               </div>
          </div>

                <!-- pagination-->
                    <ul class="pagination pagination-sm" >
                          <li><a href="dashboardpelajar.php"><i class="fa fa-angle-left"></i></a></li>
                          <li><a href="dashboardpelajar.php">1</a></li>
                          <li class="active"><a href="d2.php">2</a></li>
                          <li class="disabled"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
            </div>

            <div class="clearfix"> </div>
      </div>
    
            

        
  <div class="col_1">
</div>

    <div class="content_bottom">
     
      
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