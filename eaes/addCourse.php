<?php


include "sambung.php";

session_start();
if (!$_SESSION['uname']) {
	header("location:adminlogin.php");
}



if(isset($_POST['kodkursus'])) {

  // variable
     $kodkursus = $_POST['kodkursus'];
     $namakursus = $_POST['namakursus'];
     $semester = $_POST['semester'];
     $keterangan = $_POST['keterangan'];
     $clo1 = $_POST['clo1'];
     $c1s1 = $_POST['c1s1'];
     $c1s2 = $_POST['c1s2'];
     $c1s3 = $_POST['c1s3'];

     $clo2 = $_POST['clo2'];
     $c2s1 = $_POST['c2s1'];
     $c2s2 = $_POST['c2s2'];
     $c2s3 = $_POST['c2s3'];

     $clo3 = $_POST['clo3'];
     $c3s1 = $_POST['c3s1'];
     $c3s2 = $_POST['c3s2'];
     $c3s3 = $_POST['c3s3'];


     //insert table kursus

     $tambah = "INSERT INTO kursus (kodkursus,namakursus,semester,keterangan,CLO1,CLO2,CLO3,C1S1,C1S2,C1S3,C2S1,C2S2,C2S3,C3S1,C3S2,C3S3) VALUES 
     ('$kodkursus','$namakursus','$semester','$keterangan','$clo1','$clo2','$clo3','$c1s1','$c1s2','$c1s3','$c2s1','$c2s2','$c2s3','$c3s1','$c3s2','$c3s3')";
      //kursus
     $hasil = mysqli_query($hubung,$tambah);
     
     //ent untuk tambah course
     $dataEnt = "INSERT INTO ent (kodkursus) VALUES ('$kodkursus')";
     $hasilEnt = mysqli_query($hubung,$dataEnt);

     //ext untuk tambah course
     $dataExt = "INSERT INTO ext (kodkursus) VALUES ('$kodkursus')"; 
     $hasilExt = mysqli_query($hubung,$dataExt);
     
     echo "<script>alert('Kursus berjaya ditambah');
        window.location='addCourse.php'</script>";

}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Tambah Kursus</title>

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
						<li class="m_2"><a href="profileadmin.php"><i class="fa fa-user"></i> Admin</a></li>
						<li class="m_2"><a href="managedata.php"><i class="fa fa-wrench"></i> Manage Data</a></li>
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
                          <li class="active">Tambah Kursus</li>
                        </ol>
               </div>

               <!-- Table tambah kursus-->
                <div class="content_bottom">
                 <div class="col-md-13 span_7">
                      <div class="bs-example1" data-example-id="contextual-table">

        <div class="alert alert-info" role="alert">
        <strong><h3>Arahan</h3></strong>
        <p>
        Sila lengkapkan borang pada bahagian Course Detail dan kemudian borang pada bahagian Course Outcome.<br>
        </p>
       </div>


    <form action="addCourse.php" method="POST">

         <div class="but_list">
           <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">

            <ul id="myTab" class="nav nav-tabs" role="tablist" >

              <li role="presentation" class="active">
                <a href="#dka4213" id="dka4213-tab" role="tab" data-toggle="tab" aria-controls="dka4213" aria-expanded="true">Course Detail</a>
              </li>

              <li role="presentation" >
                <a href="#dka4223" role="tab" id="dka4223-tab" data-toggle="tab" aria-controls="dka4223">Course Outcome</a>
              </li>

            </ul>
         <!--tab content-->

        <div id="myTabContent" class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="dka4213" aria-labelledby="dka4213-tab">

            <!-- tab 4213-->
              <p>
                       <fieldset> 
                    
                        <div class="form-group">
                          <h2>Maklumat Kursus</h2><br>
                          <label class="control-label">Kod Kursus <small>*Tanpa jarak</small></label>
                          <input type="text" name="kodkursus" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Nama Kursus</label>
                          <input type="text" name="namakursus" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required>
                        </div>

                        <div class="form-group">
                          <label for="semester">Semester</label>
                            <select id="Semester" name="semester" class="form-control1 ng-invalid ng-invalid-required" required>
                            <option value="">Sila pilih semester</option>
                            <option value="DVM1">1 Diploma</option>
                            <option value="DVM2">2 Diploma</option>
                            <option value="DVM3">3 Diploma</option>
                            <option value="DVM4">4 Diploma</option>
                         </select>
                        </div>

                        <!-- text area-->

                        <div class="form-group">
                          <label for="Keterangan" class="control-label">Keterangan</label>
                          <input type="text" name="keterangan" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Maklumat atau penerangan ringkas tentang kursus tersebut." required>
                        </div><br><br>
                        <b>* Sila isi borang Course Detail dan Course Outcome</b>

                        
              </p>
            

          </div>
          <div role="tabpanel" class="tab-pane fade" id="dka4223" aria-labelledby="dka4223-tab">

            <!-- tab 4223-->
              <p>
                          <!-- sini-->
                          <div class="form-group">
                            <h2>Hasil Pembelajaran Kursus</h2><br>
                          <label class="control-label"><strong>CLO 1</strong></label>
                          <input type="text" name="clo1" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Course Learning Outcome 1" required><br><br>

                          <input type="text" name="c1s1" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Soalan 1" required><br><br>

                          <input type="text" name="c1s2" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Soalan 2" required><br><br>

                          <input type="text" name="c1s3" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Soalan 3" required>
                        </div>

                        <!-- SOALAN -->
                        

                        <div class="form-group">
                          <label class="control-label"><strong>CLO 2</strong></label>
                          <input type="text" name="clo2" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Course Learning Outcome 2" required><br><br>

                          <input type="text" name="c2s1" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Soalan 1" required><br><br>

                          <input type="text" name="c2s2" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Soalan 2" required><br><br>

                          <input type="text" name="c2s3" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Soalan 3" required>
                        </div>


                        <!-- SOALAN-->

                        <div class="form-group">
                          <label class="control-label"><strong>CLO 3</strong></label>
                          <input type="text" name="clo3" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Course Learning Outcome 3" required><br><br>

                          <input type="text" name="c3s1" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Soalan 1" required><br><br>

                          <input type="text" name="c3s2" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Soalan 2" required><br><br>

                          <input type="text" name="c3s3" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" placeholder="Soalan 3" required>
                        </div>

                        <!--submit-->

                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">Submit</button>
                          <button type="reset" class="btn btn-default">Reset</button>
                        </div>

                          </fieldset> 
              </p>
            

          </div>
          


        </div>
   </div>
   </div>

       <!-- AKHIR FORM-->               
          </form>
          </div>

            <div class="clearfix"> </div>
      </div>
    
            

        
  
</div>
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