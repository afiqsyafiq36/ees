<?php


include "sambung.php";
include "kiraent.php";
include "kiraext.php";

session_start();
if (!$_SESSION['uname']) {
	header("location:adminlogin.php");
}


?>



<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Admin</title>

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
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->

<!--boxkecik-->
<link href="./style/boxkecil.css" rel="stylesheet">

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



<script>
  //fungsi butang print
function myFunction() {
  window.print();
}
</script>

        <div id="page-wrapper">
        <div class="graphs">
        <div class="graph_box">
          <!--title-->
            
            <!-- div untuk layout  pertama 
            <div class="grid_3 grid_5">
            -->

              <!--Welcome message-->
              <div class="alert alert-success" role="alert">
                           <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                           <strong>Selamat Datang!</strong> <?php echo $_SESSION['uname']; ?>
              </div>
               <div class="content_bottom">
                 <div class="col-md-13 span_7">
                      <div class="bs-example1" data-example-id="contextual-table">

  <!-- graf  bar-->
  <!-- tab kursus-->
    
                      <center>
                        <h3>Course Entrance And Exit Survey - Sistem Pengurusan Pangkalan Data Dan Aplikasi Web</h3>
                        <h3>Bahagian Pendidikan Teknik Dan Vokasional</h3>
                       </center><br>

         <div class="but_list">
           <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">

            <ul id="myTab" class="nav nav-tabs" role="tablist" >

              <li role="presentation" class="active">
                <a href="#dka4213" id="dka4213-tab" role="tab" data-toggle="tab" aria-controls="dka4213" aria-expanded="true"><?php echo $mata1['kodkursus']; ?></a>
              </li>

              <li role="presentation" >
                <a href="#dka4223" role="tab" id="dka4223-tab" data-toggle="tab" aria-controls="dka4223"><?php echo $mata2['kodkursus']; ?></a>
              </li>

              <li role="presentation">
                <a href="#dka4033" role="tab" id="dka4033-tab" data-toggle="tab" aria-controls="dka4033"><?php echo $mata3['kodkursus']; ?></a>
              </li>

              <li role="presentation">
                <a href="#dka4043" role="tab" id="dka4043-tab" data-toggle="tab" aria-controls="dka4043"><?php echo $mata4['kodkursus']; ?></a>
              </li>
              <li role="presentation">
                <a href="#dka4054" role="tab" id="dka4054-tab" data-toggle="tab" aria-controls="dka4054"><?php echo $mata5['kodkursus']; ?></a>
              </li>

            </ul>
         <!--tab content-->

        <div id="myTabContent" class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="dka4213" aria-labelledby="dka4213-tab">

            <!-- tab 4213-->
            <!-- kotak petunjuk-->
                <div class='box ent'>&nbspEntrance <br>
                              CLO1 : <?php echo $entk14213; ?><br>
                              CLO2 : <?php echo $entk24213; ?><br>
                              CLO3 : <?php echo $entk34213; ?>
                </div>
                <div class='box ext'>&nbspExit <br>
                              CLO1 : <?php echo $extk14213; ?><br>
                              CLO2 : <?php echo $extk24213; ?><br>
                              CLO3 : <?php echo $extk34213; ?>
                </div>
            <p>
                       <div class="graph_box1">
                          <div class="col-md-12 grid_2">
                            <div class="grid_1">
                            <h3>Analisis Entrance Dan Exit Survey <?php echo $mata1['kodkursus']; ?></h3>
                            <center>
                            <canvas id="bar" height="300" width="400" style="width: 800px; height: 200px;"></canvas>
                          </center>
                          </div>
                        </div>
                        </div>
                    

              </p>
              
              <p>


                  <table border="0">
                        <!--table maklumat kursus-->
                        <tr>
                            <medium>
                               <td>Program</td>
                               <td> : </td>
                               <td>Sistem Pengurusan Pangkalan Data Dan Aplikasi Web</td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Nama Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata1['namakursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Kod Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata1['kodkursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Jabatan</td>
                                <td> : </td>
                                <td>Teknologi Maklumat Dan Komunikasi</td>
                            </medium>
                        </tr>

                    </table><br><br>

                    <!-- Hasil Pembelajaran Kursus-->
                        <table border="0">
                            <tr>
                              <medium>
                                     <strong>Hasil Pembelajaran Kursus - Course Learning Outcome (CLO)</strong>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 1</td>
                                          <td>:</td>
                                          <td><?php echo $mata1['CLO1']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 2</td>
                                          <td>:</td>
                                          <td><?php echo $mata1['CLO2']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 3</td>
                                          <td>:</td>
                                          <td><?php echo $mata1['CLO3']; ?></td>
                              </medium>
                            </tr>
                      </table><br>

                        <!--Paparan table kiraan CLO-->
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                <tbody>
                                  
                                  <tr>
                                    <b>
                                    <th scope="row" rowspan="2"><center><br><br>CLO</center></th>
                                    <th scope="row" rowspan="2"><center><br><br>NO.</center></th>
                                    <th scope="row" rowspan="2"><center><br><br>ITEM</center></th>
                                    <th scope="row" colspan="2"><center><br>MIN</center></th>
                                    </b>
                                  </tr>
                                  
                                  <tr>
                                    <b>
                                    <th><center>Entrance</center></th>
                                    <th><center>Exit</center></th>
                                    </b>
                                  </tr>

                                  <!-- clo1-->
                                  <!-- 
                                  style="text-align: center; vertical-align: middle;" 
                                  digunakan untuk center data dan middle data dlm table
                                   -->


                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO1</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata1['C1S1']; ?></td>
                                    <td><center><?php echo $entA1S1; ?></center></td>
                                    <td><center><?php echo $extA1S1; ?></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata1['C1S2']; ?></td>
                                    <td><center><?php echo $entA1S2; ?></center></td>
                                    <td><center><?php echo $extA1S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td><center>3.</center></td>
                                    <td><?php echo $mata1['C1S3']; ?></td>
                                    <td><center><?php echo $entA1S3; ?></center></td>
                                    <td><center><?php echo $extA1S3; ?></center></td>
                                  </tr>

                                  <!--clo2-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO2</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata1['C2S1']; ?></td>
                                    <td><center><?php echo $entA2S1; ?></center></td>
                                    <td><center><?php echo $extA2S1; ?></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata1['C2S2']; ?></td>
                                    <td><center><?php echo $entA2S2; ?></center></td>
                                    <td><center><?php echo $extA2S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td><center>3.</center></td>
                                    <td><?php echo $mata1['C2S3']; ?></td>
                                    <td><center><?php echo $entA2S3; ?></center></td>
                                    <td><center><?php echo $extA2S3; ?></center></td>
                                  </tr>

                                  <!-- CLO3-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO3</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata1['C3S1']; ?></td>
                                    <td><center><?php echo $entA3S1; ?></center></td>
                                    <td><center><?php echo $extA3S1; ?></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata1['C3S2']; ?></td>
                                    <td><center><?php echo $entA3S2; ?></center></td>
                                    <td><center><?php echo $extA3S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td><center>3.</center></td>
                                    <td><?php echo $mata1['C3S3']; ?></td>
                                    <td><center><?php echo $entA3S3; ?></center></td>
                                    <td><center><?php echo $extA3S3; ?></center></td>
                                  </tr>


                                </tbody>
                              </table>
                            </div>
                            <button onclick="myFunction()" class="btn btn-primary">Print</button>
              </p>
              
            

          </div>
          <div role="tabpanel" class="tab-pane fade" id="dka4223" aria-labelledby="dka4223-tab">

            <!-- tab 4223-->
            <!-- kotak petunjuk-->
                <div class='box ent'>&nbspEntrance <br>
                              CLO1 : <?php echo $entk14223; ?><br>
                              CLO2 : <?php echo $entk24223; ?><br>
                              CLO3 : <?php echo $entk34223; ?>
                </div>
                <div class='box ext'>&nbspExit <br>
                              CLO1 : <?php echo $extk14223; ?><br>
                              CLO2 : <?php echo $extk24223; ?><br>
                              CLO3 : <?php echo $extk34223; ?>
                </div>
            <p>
                       <div class="graph_box1">
                          <div class="col-md-12 grid_2">
                            <div class="grid_1">
                            <h3>Analisis Entrance Dan Exit Survey <?php echo $mata2['kodkursus']; ?></h3>
                            <center>
                            <canvas id="bar2" height="300" width="400" style="width: 800px; height: 200px;"></canvas>
                          </center>
                          </div>
                        </div>
                        </div>
                    

              </p>
              <p>
                          <table border="0">
                        <!--table maklumat kursus-->
                        <tr>
                            <medium>
                               <td>Program</td>
                               <td> : </td>
                               <td>Sistem Pengurusan Pangkalan Data Dan Aplikasi Web</td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Nama Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata2['namakursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Kod Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata2['kodkursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Jabatan</td>
                                <td> : </td>
                                <td>Teknologi Maklumat Dan Komunikasi</td>
                            </medium>
                        </tr>

                    </table><br><br>

                    <!-- Hasil Pembelajaran Kursus-->
                        <table border="0">
                            <tr>
                              <medium>
                                     <strong>Hasil Pembelajaran Kursus - Course Learning Outcome (CLO)</strong>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 1</td>
                                          <td>:</td>
                                          <td><?php echo $mata2['CLO1']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 2</td>
                                          <td>:</td>
                                          <td><?php echo $mata2['CLO2']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 3</td>
                                          <td>:</td>
                                          <td><?php echo $mata2['CLO3']; ?></td>
                              </medium>
                            </tr>
                      </table><br>

                        <!--Paparan table kiraan CLO-->
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                <tbody>
                                  
                                  <tr>
                                    <b>
                                    <th scope="row" rowspan="2"><center><br><br>CLO</center></th>
                                    <th scope="row" rowspan="2"><center><br><br>NO.</center></th>
                                    <th scope="row" rowspan="2"><center><br><br>ITEM</center></th>
                                    <th scope="row" colspan="2"><center><br>MIN</center></th>
                                    </b>
                                  </tr>
                                  
                                  <tr>
                                    <b>
                                    <th><center>Entrance</center></th>
                                    <th><center>Exit</center></th>
                                    </b>
                                  </tr>

                                  <!-- clo1-->
                                  <!-- 
                                  style="text-align: center; vertical-align: middle;" 
                                  digunakan untuk center data dan middle data dlm table
                                   -->


                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO1</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata2['C1S1']; ?></td>
                                    <td><center><?php echo $entB1S1; ?></center></td>
                                    <td><center><?php echo $extB1S1; ?></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata2['C1S2']; ?></td>
                                    <td><center><?php echo $entB1S2; ?></center></td>
                                    <td><center><?php echo $extB1S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td><center>3.</center></td>
                                    <td><?php echo $mata2['C1S3']; ?></td>
                                    <td><center><?php echo $entB1S3; ?></center></td>
                                    <td><center><?php echo $extB1S3; ?></center></td>
                                  </tr>

                                  <!--clo2-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO2</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata2['C2S1']; ?></td>
                                    <td><center><?php echo $entB2S1; ?></center></td>
                                    <td><center><?php echo $extB2S1; ?></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata2['C2S2']; ?></td>
                                    <td><center><?php echo $entB2S2; ?></center></td>
                                    <td><center><?php echo $extB2S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td><center>3.</center></td>
                                    <td><?php echo $mata2['C2S3']; ?></td>
                                    <td><center><?php echo $entB2S3; ?></center></td>
                                    <td><center><?php echo $extB2S3; ?></center></td>
                                  </tr>

                                  <!-- CLO3-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO3</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata2['C3S1']; ?></td>
                                    <td><center><?php echo $entB3S1; ?></center></td>
                                    <td><center><?php echo $extB3S1; ?></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata2['C3S2']; ?></td>
                                    <td><center><?php echo $entB3S2; ?></center></td>
                                    <td><center><?php echo $extB3S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td><center>3.</center></td>
                                    <td><?php echo $mata2['C3S3']; ?></td>
                                    <td><center><?php echo $entB3S3; ?></center></td>
                                    <td><center><?php echo $extB3S3; ?></center></td>
                                  </tr>


                                </tbody>
                              </table>
                            </div>
                            <button onclick="myFunction()" class="btn btn-primary">Print</button>
              </p>
            

          </div>
          <div role="tabpanel" class="tab-pane fade" id="dka4033" aria-labelledby="dka4033-tab">
            <!-- tab 4033-->
            <!-- kotak petunjuk-->
                <div class='box ent'>&nbspEntrance <br>
                              CLO1 : <?php echo $entk14033; ?><br>
                              CLO2 : <?php echo $entk24033; ?><br>
                              CLO3 : <?php echo $entk34033; ?>
                </div>
                <div class='box ext'>&nbspExit <br>
                              CLO1 : <?php echo $extk14033; ?><br>
                              CLO2 : <?php echo $extk24033; ?><br>
                              CLO3 : <?php echo $extk34033; ?>
                </div>
            <p>
                       <div class="graph_box1">
                          <div class="col-md-12 grid_2">
                            <div class="grid_1">
                            <h3>Analisis Entrance Dan Exit Survey <?php echo $mata3['kodkursus']; ?></h3>
                            <center>
                            <canvas id="bar3" height="300" width="400" style="width: 800px; height: 200px;"></canvas>
                          </center>
                          </div>
                        </div>
                        </div>
                    

              </p>
            <p>
                    <table border="0">
                        <!--table maklumat kursus-->
                        <tr>
                            <medium>
                               <td>Program</td>
                               <td> : </td>
                               <td>Sistem Pengurusan Pangkalan Data Dan Aplikasi Web</td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Nama Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata3['namakursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Kod Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata3['kodkursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Jabatan</td>
                                <td> : </td>
                                <td>Teknologi Maklumat Dan Komunikasi</td>
                            </medium>
                        </tr>

                    </table><br><br>

                    <!-- Hasil Pembelajaran Kursus-->
                        <table border="0">
                            <tr>
                              <medium>
                                     <strong>Hasil Pembelajaran Kursus - Course Learning Outcome (CLO)</strong>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 1</td>
                                          <td>:</td>
                                          <td><?php echo $mata3['CLO1']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 2</td>
                                          <td>:</td>
                                          <td><?php echo $mata3['CLO2']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 3</td>
                                          <td>:</td>
                                          <td><?php echo $mata3['CLO3']; ?></td>
                              </medium>
                            </tr>
                      </table><br>

                        <!--Paparan table kiraan CLO-->
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                <tbody>
                                  
                                  <tr>
                                    <b>
                                    <th scope="row" rowspan="2"><center><br><br>CLO</center></th>
                                    <th scope="row" rowspan="2"><center><br><br>NO.</center></th>
                                    <th scope="row" rowspan="2"><center><br><br>ITEM</center></th>
                                    <th scope="row" colspan="2"><center><br>MIN</center></th>
                                    </b>
                                  </tr>
                                  
                                  <tr>
                                    <b>
                                    <th><center>Entrance</center></th>
                                    <th><center>Exit</center></th>
                                    </b>
                                  </tr>

                                  <!-- clo1-->
                                  <!-- 
                                  style="text-align: center; vertical-align: middle;" 
                                  digunakan untuk center data dan middle data dlm table
                                   -->


                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO1</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata3['C1S1']; ?></td>
                                    <td><center><?php echo $entC1S1; ?></center></td>
                                    <td><center><?php echo $extC1S1; ?></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata3['C1S2']; ?></td>
                                    <td><center><?php echo $entC1S2; ?></center></td>
                                    <td><center><?php echo $extC1S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td><center>3.</center></td>
                                    <td><?php echo $mata3['C1S3']; ?></td>
                                    <td><center><?php echo $entC1S3; ?></center></td>
                                    <td><center><?php echo $extC1S3; ?></center></td>
                                  </tr>

                                  <!--clo2-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO2</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata3['C2S1']; ?></td>
                                    <td><center><?php echo $entC2S1; ?></center></td>
                                    <td><center><?php echo $extC2S1; ?></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata3['C2S2']; ?></td>
                                    <td><center><?php echo $entC2S2; ?></center></td>
                                    <td><center><?php echo $extC2S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td><center>3.</center></td>
                                    <td><?php echo $mata3['C2S3']; ?></td>
                                    <td><center><?php echo $entC2S3; ?></center></td>
                                    <td><center><?php echo $extC2S3; ?></center></td>
                                  </tr>

                                  <!-- CLO3-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO3</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata3['C3S1']; ?></td>
                                    <td><center><?php echo $entC3S1; ?></center></td>
                                    <td><center><?php echo $extC3S1; ?></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata3['C3S2']; ?></td>
                                    <td><center><?php echo $entC3S2; ?></center></td>
                                    <td><center><?php echo $extC3S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td><center>3.</center></td>
                                    <td><?php echo $mata3['C3S3']; ?></td>
                                    <td><center><?php echo $entC3S3; ?></center></td>
                                    <td><center><?php echo $extC3S3; ?></center></td>
                                  </tr>


                                </tbody>
                              </table>
                            </div>
                            <button onclick="myFunction()" class="btn btn-primary">Print</button>
            </p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="dka4043" aria-labelledby="dka4043-tab">
            <!-- tab 4043-->
            <!-- kotak petunjuk-->
                <div class='box ent'>&nbspEntrance <br>
                              CLO1 : <?php echo $entk14043; ?><br>
                              CLO2 : <?php echo $entk24043; ?><br>
                              CLO3 : <?php echo $entk34043; ?>
                </div>
                <div class='box ext'>&nbspExit <br>
                              CLO1 : <?php echo $extk14043; ?><br>
                              CLO2 : <?php echo $extk24043; ?><br>
                              CLO3 : <?php echo $extk34043; ?>
                </div>
            <p>
                       <div class="graph_box1">
                          <div class="col-md-12 grid_2">
                            <div class="grid_1">
                            <h3>Analisis Entrance Dan Exit Survey <?php echo $mata4['kodkursus']; ?></h3>
                            <center>
                            <canvas id="bar4" height="300" width="400" style="width: 800px; height: 200px;"></canvas>
                          </center>
                          </div>
                        </div>
                        </div>
                    

              </p>
            <p>
                    <table border="0">
                        <!--table maklumat kursus-->
                        <tr>
                            <medium>
                               <td>Program</td>
                               <td> : </td>
                               <td>Sistem Pengurusan Pangkalan Data Dan Aplikasi Web</td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Nama Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata4['namakursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Kod Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata4['kodkursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Jabatan</td>
                                <td> : </td>
                                <td>Teknologi Maklumat Dan Komunikasi</td>
                            </medium>
                        </tr>

                    </table><br><br>

                    <!-- Hasil Pembelajaran Kursus-->
                        <table border="0">
                            <tr>
                              <medium>
                                     <strong>Hasil Pembelajaran Kursus - Course Learning Outcome (CLO)</strong>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 1</td>
                                          <td>:</td>
                                          <td><?php echo $mata4['CLO1']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 2</td>
                                          <td>:</td>
                                          <td><?php echo $mata4['CLO2']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 3</td>
                                          <td>:</td>
                                          <td><?php echo $mata4['CLO3']; ?></td>
                              </medium>
                            </tr>
                      </table><br>

                        <!--Paparan table kiraan CLO-->
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                <tbody>
                                  
                                  <tr>
                                    <b>
                                    <th scope="row" rowspan="2"><center><br><br>CLO</center></th>
                                    <th scope="row" rowspan="2"><center><br><br>NO.</center></th>
                                    <th scope="row" rowspan="2"><center><br><br>ITEM</center></th>
                                    <th scope="row" colspan="2"><center><br>MIN</center></th>
                                    </b>
                                  </tr>
                                  
                                  <tr>
                                    <b>
                                    <th><center>Entrance</center></th>
                                    <th><center>Exit</center></th>
                                    </b>
                                  </tr>

                                  <!-- clo1-->
                                  <!-- 
                                  style="text-align: center; vertical-align: middle;" 
                                  digunakan untuk center data dan middle data dlm table
                                   -->


                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO1</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata4['C1S1']; ?></td>
                                    <td><center><?php echo $entD1S1; ?></center></td>
                                    <td><center><?php echo $extD1S1; ?></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata4['C1S2']; ?></td>
                                    <td><center><?php echo $entD1S2; ?></center></td>
                                    <td><center><?php echo $extD1S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td><center>3.</center></td>
                                    <td><?php echo $mata4['C1S3']; ?></td>
                                    <td><center><?php echo $entD1S3; ?></center></td>
                                    <td><center><?php echo $extD1S3; ?></center></td>
                                  </tr>

                                  <!--clo2-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO2</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata4['C2S1']; ?></td>
                                    <td><center><?php echo $entD2S1; ?></center></td>
                                    <td><center><?php echo $extD2S1; ?></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata4['C2S2']; ?></td>
                                    <td><center><?php echo $entD2S2; ?></center></td>
                                    <td><center><?php echo $extD2S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td><center>3.</center></td>
                                    <td><?php echo $mata4['C2S3']; ?></td>
                                    <td><center><?php echo $entD2S3; ?></center></td>
                                    <td><center><?php echo $extD2S3; ?></center></td>
                                  </tr>

                                  <!-- CLO3-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO3</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata4['C3S1']; ?></td>
                                    <td><center><?php echo $entD3S1; ?></center></td>
                                    <td><center><?php echo $extD3S1; ?></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata4['C3S2']; ?></td>
                                    <td><center><?php echo $entD3S2; ?></center></td>
                                    <td><center><?php echo $extD3S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td><center>3.</center></td>
                                    <td><?php echo $mata4['C3S3']; ?></td>
                                    <td><center><?php echo $entD3S3; ?></center></td>
                                    <td><center><?php echo $extD3S3; ?></center></td>
                                  </tr>


                                </tbody>
                              </table>
                            </div>
                            <button onclick="myFunction()" class="btn btn-primary">Print</button>
            </p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="dka4054" aria-labelledby="dka4054-tab">
            <!-- tab 4054-->
            <!-- kotak petunjuk-->
                <div class='box ent'>&nbspEntrance <br>
                              CLO1 : <?php echo $entk14054; ?><br>
                              CLO2 : <?php echo $entk24054; ?><br>
                              CLO3 : <?php echo $entk34054; ?>
                </div>
                <div class='box ext'>&nbspExit <br>
                              CLO1 : <?php echo $extk14054; ?><br>
                              CLO2 : <?php echo $extk24054; ?><br>
                              CLO3 : <?php echo $extk34054; ?>
                </div>
            <p>
                       <div class="graph_box1">
                          <div class="col-md-12 grid_2">
                            <div class="grid_1">
                            <h3>Analisis Entrance Dan Exit Survey <?php echo $mata5['kodkursus']; ?></h3>
                            <center>
                            <canvas id="bar5" height="300" width="400" style="width: 800px; height: 200px;"></canvas>
                          </center>
                          </div>
                        </div>
                        </div>
                    

              </p>
            <p>
                    <table border="0">
                        <!--table maklumat kursus-->
                        <tr>
                            <medium>
                               <td>Program</td>
                               <td> : </td>
                               <td>Sistem Pengurusan Pangkalan Data Dan Aplikasi Web</td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Nama Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata5['namakursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Kod Kursus</td>
                                <td> : </td>
                                <td><?php echo $mata5['kodkursus']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Jabatan</td>
                                <td> : </td>
                                <td>Teknologi Maklumat Dan Komunikasi</td>
                            </medium>
                        </tr>

                    </table><br><br>

                    <!-- Hasil Pembelajaran Kursus-->
                        <table border="0">
                            <tr>
                              <medium>
                                     <strong>Hasil Pembelajaran Kursus - Course Learning Outcome (CLO)</strong>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 1</td>
                                          <td>:</td>
                                          <td><?php echo $mata5['CLO1']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 2</td>
                                          <td>:</td>
                                          <td><?php echo $mata5['CLO2']; ?></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 3</td>
                                          <td>:</td>
                                          <td><?php echo $mata5['CLO3']; ?></td>
                              </medium>
                            </tr>
                      </table><br>

                        <!--Paparan table kiraan CLO-->
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                <tbody>
                                  
                                  <tr>
                                    <b>
                                    <th scope="row" rowspan="2"><center><br><br>CLO</center></th>
                                    <th scope="row" rowspan="2"><center><br><br>NO.</center></th>
                                    <th scope="row" rowspan="2"><center><br><br>ITEM</center></th>
                                    <th scope="row" colspan="2"><center><br>MIN</center></th>
                                    </b>
                                  </tr>
                                  
                                  <tr>
                                    <b>
                                    <th><center>Entrance</center></th>
                                    <th><center>Exit</center></th>
                                    </b>
                                  </tr>

                                  <!-- clo1-->
                                  <!-- 
                                  style="text-align: center; vertical-align: middle;" 
                                  digunakan untuk center data dan middle data dlm table
                                   -->


                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO1</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata5['C1S1']; ?></td>
                                    <td><center><?php echo $entE1S1; ?></center></td>
                                    <td><center><?php echo $extE1S1; ?></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata5['C1S2']; ?></td>
                                    <td><center><?php echo $entE1S2; ?></center></td>
                                    <td><center><?php echo $extE1S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td><center>3.</center></td>
                                    <td><?php echo $mata5['C1S3']; ?></td>
                                    <td><center><?php echo $entE1S3; ?></center></td>
                                    <td><center><?php echo $extE1S3; ?></center></td>
                                  </tr>

                                  <!--clo2-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO2</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata5['C2S1']; ?></td>
                                    <td><center><?php echo $entE2S1; ?></center></td>
                                    <td><center><?php echo $extE2S1; ?></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata5['C2S2']; ?></td>
                                    <td><center><?php echo $entE2S2; ?></center></td>
                                    <td><center><?php echo $extE2S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td><center>3.</center></td>
                                    <td><?php echo $mata5['C2S3']; ?></td>
                                    <td><center><?php echo $entE2S3; ?></center></td>
                                    <td><center><?php echo $extE2S3; ?></center></td>
                                  </tr>

                                  <!-- CLO3-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO3</center></td>
                                    <td><center>1.</center></td>
                                    <td><?php echo $mata5['C3S1']; ?></td>
                                    <td><center><?php echo $entE3S1; ?></center></td>
                                    <td><center><?php echo $extE3S1; ?></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td><?php echo $mata5['C3S2']; ?></td>
                                    <td><center><?php echo $entE3S2; ?></center></td>
                                    <td><center><?php echo $extE3S2; ?></center></td>
                                  </tr>
                                  <tr>
                                    <td><center>3.</center></td>
                                    <td><?php echo $mata5['C3S3']; ?></td>
                                    <td><center><?php echo $entE3S3; ?></center></td>
                                    <td><center><?php echo $extE3S3; ?></center></td>
                                  </tr>


                                </tbody>
                              </table>
                            </div>
                            <button onclick="myFunction()" class="btn btn-primary">Print</button>
            </p>
          </div>
      
        </div>
   </div>
   <script>
   
                  
     //Papar grafdka4213
                              var yg1 = "<?php echo $entk14213 ?>";
                              var yg2 = "<?php echo $entk24213 ?>";
                              var yg3 = "<?php echo $entk34213 ?>";

                              var yg4 = "<?php echo $extk14213 ?>";
                              var yg5 = "<?php echo $extk24213 ?>";
                              var yg6 = "<?php echo $extk34213 ?>";

                              //nilai x adalah auto 
                               var barChartData = {
                                labels : ["CLO1","CLO2","CLO3"],//nilai y
                                datasets : [
                                  {
                                    fillColor : "#ef553a",
                                    strokeColor : "#ef553a",
                                    data : [yg1,yg2,yg3]
                                  },
                                  {
                                    fillColor : "#030ffc",
                                    strokeColor : "#030ffc",
                                    data : [yg4,yg5,yg6]
                                  }
                                ]
                                
                              };
                            //call graf
                            new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);

    //Papar grafdka4223
                              var sg1 = "<?php echo $entk14223 ?>";
                              var sg2 = "<?php echo $entk24223 ?>";
                              var sg3 = "<?php echo $entk34223 ?>";

                              var sg4 = "<?php echo $extk14223 ?>";
                              var sg5 = "<?php echo $extk24223 ?>";
                              var sg6 = "<?php echo $extk34223 ?>";

                              //nilai x adalah auto 
                               var barChartData = {
                                labels : ["CLO1","CLO2","CLO3"],//nilai y
                                datasets : [
                                  {
                                    fillColor : "#ef553a",
                                    strokeColor : "#ef553a",
                                    data : [sg1,sg2,sg3]
                                  },
                                  {
                                    fillColor : "#030ffc",
                                    strokeColor : "#030ffc",
                                    data : [sg4,sg5,sg6]
                                  }
                                ]
                                
                              };
                            //call graf
                            new Chart(document.getElementById("bar2").getContext("2d")).Bar(barChartData);
    //Papar grafdka4033
                              var vp1 = "<?php echo $entk14033 ?>";
                              var vp2 = "<?php echo $entk24033 ?>";
                              var vp3 = "<?php echo $entk34033 ?>";

                              var vp4 = "<?php echo $extk14033 ?>";
                              var vp5 = "<?php echo $extk24033 ?>";
                              var vp6 = "<?php echo $extk34033 ?>";

                              //nilai x adalah auto 
                               var barChartData = {
                                labels : ["CLO1","CLO2","CLO3"],//nilai y
                                datasets : [
                                  {
                                    fillColor : "#ef553a",
                                    strokeColor : "#ef553a",
                                    data : [vp1,vp2,vp3]
                                  },
                                  {
                                    fillColor : "#030ffc",
                                    strokeColor : "#030ffc",
                                    data : [vp4,vp5,vp6]
                                  }
                                ]
                                
                              };
                            //call graf
                            new Chart(document.getElementById("bar3").getContext("2d")).Bar(barChartData);
    //Papar grafdka4043
                              var st1 = "<?php echo $entk14043 ?>";
                              var st2 = "<?php echo $entk24043 ?>";
                              var st3 = "<?php echo $entk34043 ?>";

                              var st4 = "<?php echo $extk14043 ?>";
                              var st5 = "<?php echo $extk24043 ?>";
                              var st6 = "<?php echo $extk34043 ?>";

                              //nilai x adalah auto 
                               var barChartData = {
                                labels : ["CLO1","CLO2","CLO3"],//nilai y
                                datasets : [
                                  {
                                    fillColor : "#ef553a",
                                    strokeColor : "#ef553a",
                                    data : [st1,st2,st3]
                                  },
                                  {
                                    fillColor : "#030ffc",
                                    strokeColor : "#030ffc",
                                    data : [st4,st5,st6]
                                  }
                                ]
                                
                              };
                            //call graf
                            new Chart(document.getElementById("bar4").getContext("2d")).Bar(barChartData);
      //Papar grafdka4054
                              var sp1 = "<?php echo $entk14054 ?>";
                              var sp2 = "<?php echo $entk24054 ?>";
                              var sp3 = "<?php echo $entk34054 ?>";

                              var sp4 = "<?php echo $extk14054 ?>";
                              var sp5 = "<?php echo $extk24054 ?>";
                              var sp6 = "<?php echo $extk34054 ?>";

                              //nilai x adalah auto 
                               var barChartData = {
                                labels : ["CLO1","CLO2","CLO3"],//nilai y
                                datasets : [
                                  {
                                    fillColor : "#ef553a",
                                    strokeColor : "#ef553a",
                                    data : [sp1,sp2,sp3]
                                  },
                                  {
                                    fillColor : "#030ffc",
                                    strokeColor : "#030ffc",
                                    data : [sp4,sp5,sp6]
                                  }
                                ]
                                
                              };
                            //call graf
                            new Chart(document.getElementById("bar5").getContext("2d")).Bar(barChartData);
            
</script>

                        
                        
                        

                </div>
            </div>
         

            <div class="clearfix"> </div>
      </div>
    
            

        
  <div class="col_1">
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
    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>