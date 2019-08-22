<?php


include "sambung.php";
include "kiraext.php";

session_start();
if (!$_SESSION['uname']) {
	header("location:adminlogin.php");
}

$nilai1 = mysqli_query($hubung,"SELECT * FROM kursus WHERE idkursus = '9' ");
$nilai2 = mysqli_query($hubung,"SELECT * FROM kursus WHERE idkursus = '10' ");
$nilai3 = mysqli_query($hubung,"SELECT * FROM kursus WHERE idkursus = '11' ");
$nilai4 = mysqli_query($hubung,"SELECT * FROM kursus WHERE idkursus = '12' ");
$nilai5 = mysqli_query($hubung,"SELECT * FROM kursus WHERE idkursus = '13' ");

$sembilan = mysqli_fetch_array($nilai1);
$sepuluh = mysqli_fetch_array($nilai2);
$sebelas = mysqli_fetch_array($nilai3);
$duabelas = mysqli_fetch_array($nilai4);
$tigabelas = mysqli_fetch_array($nilai5);


?>



<!DOCTYPE html>
<html>
<head>
	<title>Analisis Exit</title>

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
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->


<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="js/d3.v3.js"></script>
<script src="js/rickshaw.js"></script>

<!-- css table middle td-->
<link href="style/table.css" rel="stylesheet">

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
        <div class="graph_box">
          <div class="col_3">
          <!--title-->
            <div class="grid_3 grid_5">
                <div class="but_list">
                        <ol class="breadcrumb">
                          <li class="active">Analisis</li>
                          <li><a href="ent.php">Exit Survey</a></li>
                        </ol>
               </div>

               <!-- Analisis Graf-->

                <div class="content_bottom">
                 <div class="col-md-13 span_7">
                      <div class="bs-example1" data-example-id="contextual-table">

  <!-- graf  bar-->
  <!-- tab kursus-->
  <div class="alert alert-info" role="alert">
        <strong><h3>Arahan</h3></strong>
        <p><medium>
        1. Tekan tab kursus yang ingin dipaparkan.<br>
        2. Pilih menu dropdown yang ingin dipaparkan.<br>
        3. Tekan butang "Print" untuk mencetak Laporan EES.<br>
        </medium></p>
       </div>
       
    <h3>Tab Kursus.</h3>

         <div class="but_list">
           <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">

            <ul id="myTab" class="nav nav-tabs" role="tablist" >

              <li role="presentation">
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
          <div role="tabpanel" class="tab-pane fade" id="dka4213" aria-labelledby="dka4213-tab">

            <!-- tab 4213-->
              <p>
                       <div class="graph_box1">
                          <div class="col-md-12 grid_2">
                            <div class="grid_1">
                            <h3>Carta Exit Survey <?php echo $mata1['kodkursus']; ?></h3>
                            <center>
                            <canvas id="bar" height="300" width="400" style="width: 800px; height: 200px;"></canvas>
                          </center>
                          </div>
                        </div>
                        </div>
              </p>
            

          </div>
          <div role="tabpanel" class="tab-pane fade" id="dka4223" aria-labelledby="dka4223-tab">

            <!-- tab 4223-->
              <p>
                          <div class="graph_box1">
                          <div class="col-md-12 grid_2">
                            <div class="grid_1">
                            <h3>Carta Exit Survey <?php echo $mata2['kodkursus']; ?></h3>
                            <center>
                            <canvas id="bar2" height="300" width="400" style="width: 800px; height: 200px;"></canvas>
                          </center>
                          </div>
                        </div>
                        </div>
              </p>
            

          </div>
          <div role="tabpanel" class="tab-pane fade" id="dka4033" aria-labelledby="dka4033-tab">
            <!-- tab 4033-->
            <p>
                    <div class="graph_box1">
                          <div class="col-md-12 grid_2">
                            <div class="grid_1">
                            <h3>Carta Exit Survey <?php echo $mata3['kodkursus']; ?></h3>
                            <center>
                            <canvas id="bar3" height="300" width="400" style="width: 800px; height: 200px;"></canvas>
                          </center>
                          </div>
                        </div>
                        </div>
            </p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="dka4043" aria-labelledby="dka4043-tab">
            <!-- tab 4033-->
            <p>
                    <div class="graph_box1">
                          <div class="col-md-12 grid_2">
                            <div class="grid_1">
                            <h3>Carta Exit Survey <?php echo $mata4['kodkursus']; ?></h3>
                            <center>
                            <canvas id="bar4" height="300" width="400" style="width: 800px; height: 200px;"></canvas>
                            </center>
                          </div>
                        </div>
                        </div>
            </p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="dka4054" aria-labelledby="dka4054-tab">
            <!-- tab 4033-->
            <p>
                    <div class="graph_box1">
                          <div class="col-md-12 grid_2">
                            <div class="grid_1">
                            <h3>Carta Exit Survey <?php echo $mata5['kodkursus']; ?></h3>
                            <center>
                            <canvas id="bar5" height="300" width="400" style="width: 800px; height: 200px;"></canvas>
                          </center>
                          </div>
                        </div>
                        </div>
            </p>
          </div>

        </div>
   </div>
   
 </div>

   <script>
   
                  
     //Papar grafdka4213
                              var yg = "<?php echo $c14213 ?>";
                              var yg2 = "<?php echo $c24213 ?>";
                              var yg3 = "<?php echo $c34213 ?>";
                              //nilai x adalah auto 
                               var barChartData = {
                                labels : ["CLO1","CLO2","CLO3"],//nilai y
                                datasets : [
                                  {
                                    fillColor : "#030ffc",
                                    strokeColor : "#030ffc",
                                    data : [yg,yg2,yg3]
                                  },
                                ]
                                
                              };
                            //call graf
                            new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
          //graf dka4223

              var y1 = "<?php echo $c14223 ?>";
                var y2 = "<?php echo $c24223 ?>";
                var y3 = "<?php echo $c34223 ?>";
                //nilai x adalah auto 
                 var barChartData = {
                  labels : ["CLO1","CLO2","CLO3"],//nilai y
                  datasets : [
                    {
                      fillColor : "#030ffc",
                      strokeColor : "#030ffc",
                      data : [y1,y2,y3]
                    },
                  ]
                  
                };
              //call graf
              new Chart(document.getElementById("bar2").getContext("2d")).Bar(barChartData);

          //graf dka4033
          //Papar graf
            var s1 = "<?php echo $c14033 ?>";
            var s2 = "<?php echo $c24033 ?>";
            var s3 = "<?php echo $c34033 ?>";
            //nilai x adalah auto 
             var barChartData = {
              labels : ["CLO1","CLO2","CLO3"],//nilai y
              datasets : [
                {
                  fillColor : "#030ffc",
                  strokeColor : "#030ffc",
                  data : [s1,s2,s3]
                },
              ]
              
            };
          //call graf
          new Chart(document.getElementById("bar3").getContext("2d")).Bar(barChartData);
          //graf dka4043
          //Papar graf
            var lg1 = "<?php echo $c14043 ?>";
            var lg2 = "<?php echo $c24043 ?>";
            var lg3 = "<?php echo $c34043 ?>";
            //nilai x adalah auto 
             var barChartData = {
              labels : ["CLO1","CLO2","CLO3"],//nilai y
              datasets : [
                {
                  fillColor : "#030ffc",
                  strokeColor : "#030ffc",
                  data : [lg1,lg2,lg3]
                },
              ]
              
            };
          //call graf
          new Chart(document.getElementById("bar4").getContext("2d")).Bar(barChartData);
          //graf dka4054
          //Papar graf
            var d1 = "<?php echo $c14054 ?>";
            var d2 = "<?php echo $c24054 ?>";
            var d3 = "<?php echo $c34054 ?>";
            //nilai x adalah auto 
             var barChartData = {
              labels : ["CLO1","CLO2","CLO3"],//nilai y
              datasets : [
                {
                  fillColor : "#030ffc",
                  strokeColor : "#030ffc",
                  data : [d1,d2,d3]
                },
              ]
              
            };
          //call graf
          new Chart(document.getElementById("bar5").getContext("2d")).Bar(barChartData);


            
</script>

                        <!-- table kiraan min & avg-->
                        <h3>Analisis Exit Survey</h3>
                        <form action="ext.php" method="post">
                        
                         <!--pilih dropdown kursus by data in table-->
                            <?php
                              include "sambung.php";
                               //query
                              $sql = mysqli_query($hubung,"SELECT * FROM kursus");
                              if(mysqli_num_rows($sql)){
                              $select = 
                              '<select  name="kursus" id="mySelect" onchange="showCourse()">

                                    <option value="">Pilih Kursus Anda</option>';//default menu

                              while($rs = mysqli_fetch_array($sql)){
                                    $select.='<option value="'.$rs['kodkursus'].'">'.$rs['kodkursus'].' '.$rs['namakursus'].'</option>';
                                }
                              }
                              $select.='</select>';
                              echo $select;

                              ?>
                        <br><br>

<!-- script menu onchange dropdown menu kursus-->
<script>
function showCourse() {

  var x = document.getElementById("mySelect").value;
  document.getElementById("demo").innerHTML = x;

  if ( x == "<?php echo $sembilan['kodkursus']; ?>") {

      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="<?php echo $mata1['C1S1'] ?>";
      document.getElementById("c1s2").innerHTML="<?php echo $mata1['C1S2'] ?>";
      document.getElementById("c1s3").innerHTML="<?php echo $mata1['C1S3'] ?>";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="<?php echo $mata1['C2S1'] ?>";
      document.getElementById("c2s2").innerHTML="<?php echo $mata1['C2S2'] ?>";
      document.getElementById("c2s3").innerHTML="<?php echo $mata1['C2S3'] ?>";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="<?php echo $mata1['C3S1'] ?>";
      document.getElementById("c3s2").innerHTML="<?php echo $mata1['C3S2'] ?>";
      document.getElementById("c3s3").innerHTML="<?php echo $mata1['C3S3'] ?>";
      
      //untuk min dan avg
      document.getElementById("avg1").innerHTML="<?php echo $c14213 ?>";
      document.getElementById("min1").innerHTML="<?php echo $A1S1 ?>";
      document.getElementById("min2").innerHTML="<?php echo $A1S2 ?>";
      document.getElementById("min3").innerHTML="<?php echo $A1S3 ?>";

      document.getElementById("avg2").innerHTML="<?php echo $c24213 ?>";
      document.getElementById("min4").innerHTML="<?php echo $A2S1 ?>";
      document.getElementById("min5").innerHTML="<?php echo $A2S2 ?>";
      document.getElementById("min6").innerHTML="<?php echo $A2S3 ?>";

      document.getElementById("avg3").innerHTML="<?php echo $c34213 ?>";
      document.getElementById("min7").innerHTML="<?php echo $A3S1 ?>";
      document.getElementById("min8").innerHTML="<?php echo $A3S2 ?>";
      document.getElementById("min9").innerHTML="<?php echo $A3S3 ?>";

      
  }
  else if (x == "<?php echo $sepuluh['kodkursus']; ?>") {
     
      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="<?php echo $mata2['C1S1'] ?>";
      document.getElementById("c1s2").innerHTML="<?php echo $mata2['C1S2'] ?>";
      document.getElementById("c1s3").innerHTML="<?php echo $mata2['C1S3'] ?>";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="<?php echo $mata2['C2S1'] ?>";
      document.getElementById("c2s2").innerHTML="<?php echo $mata2['C2S2'] ?>";
      document.getElementById("c2s3").innerHTML="<?php echo $mata2['C2S3'] ?>";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="<?php echo $mata2['C3S1'] ?>";
      document.getElementById("c3s2").innerHTML="<?php echo $mata2['C3S2'] ?>";
      document.getElementById("c3s3").innerHTML="<?php echo $mata2['C3S3'] ?>";

      //untuk min dan avg
      document.getElementById("avg1").innerHTML="<?php echo $c14223 ?>";
      document.getElementById("min1").innerHTML="<?php echo $B1S1 ?>";
      document.getElementById("min2").innerHTML="<?php echo $B1S2 ?>";
      document.getElementById("min3").innerHTML="<?php echo $B1S3 ?>";

      document.getElementById("avg2").innerHTML="<?php echo $c24223 ?>";
      document.getElementById("min4").innerHTML="<?php echo $B2S1 ?>";
      document.getElementById("min5").innerHTML="<?php echo $B2S2 ?>";
      document.getElementById("min6").innerHTML="<?php echo $B2S3 ?>";

      document.getElementById("avg3").innerHTML="<?php echo $c34223 ?>";
      document.getElementById("min7").innerHTML="<?php echo $B3S1 ?>";
      document.getElementById("min8").innerHTML="<?php echo $B3S2 ?>";
      document.getElementById("min9").innerHTML="<?php echo $B3S3 ?>";




  }
  else if (x == "<?php echo $sebelas['kodkursus']; ?>") {
      
      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="<?php echo $mata3['C1S1'] ?>";
      document.getElementById("c1s2").innerHTML="<?php echo $mata3['C1S2'] ?>";
      document.getElementById("c1s3").innerHTML="<?php echo $mata3['C1S3'] ?>";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="<?php echo $mata3['C2S1'] ?>";
      document.getElementById("c2s2").innerHTML="<?php echo $mata3['C2S2'] ?>";
      document.getElementById("c2s3").innerHTML="<?php echo $mata3['C2S3'] ?>";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="<?php echo $mata3['C3S1'] ?>";
      document.getElementById("c3s2").innerHTML="<?php echo $mata3['C3S2'] ?>";
      document.getElementById("c3s3").innerHTML="<?php echo $mata3['C3S3'] ?>";

      //untuk min dan avg
      document.getElementById("avg1").innerHTML="<?php echo $c14033 ?>";
      document.getElementById("min1").innerHTML="<?php echo $C1S1 ?>";
      document.getElementById("min2").innerHTML="<?php echo $C1S2 ?>";
      document.getElementById("min3").innerHTML="<?php echo $C1S3 ?>";

      document.getElementById("avg2").innerHTML="<?php echo $c24033 ?>";
      document.getElementById("min4").innerHTML="<?php echo $C2S1 ?>";
      document.getElementById("min5").innerHTML="<?php echo $C2S2 ?>";
      document.getElementById("min6").innerHTML="<?php echo $C2S3 ?>";

      document.getElementById("avg3").innerHTML="<?php echo $c34033 ?>";
      document.getElementById("min7").innerHTML="<?php echo $C3S1 ?>";
      document.getElementById("min8").innerHTML="<?php echo $C3S2 ?>";
      document.getElementById("min9").innerHTML="<?php echo $C3S3 ?>";

      
  }
  else if (x == "<?php echo $duabelas['kodkursus']; ?>") {
     
      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="<?php echo $mata4['C1S1'] ?>";
      document.getElementById("c1s2").innerHTML="<?php echo $mata4['C1S2'] ?>";
      document.getElementById("c1s3").innerHTML="<?php echo $mata4['C1S3'] ?>";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="<?php echo $mata4['C2S1'] ?>";
      document.getElementById("c2s2").innerHTML="<?php echo $mata4['C2S2'] ?>";
      document.getElementById("c2s3").innerHTML="<?php echo $mata4['C2S3'] ?>";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="<?php echo $mata4['C3S1'] ?>";
      document.getElementById("c3s2").innerHTML="<?php echo $mata4['C3S2'] ?>";
      document.getElementById("c3s3").innerHTML="<?php echo $mata4['C3S3'] ?>";

      //untuk min dan avg
      document.getElementById("avg1").innerHTML="<?php echo $c14043 ?>";
      document.getElementById("min1").innerHTML="<?php echo $D1S1 ?>";
      document.getElementById("min2").innerHTML="<?php echo $D1S2 ?>";
      document.getElementById("min3").innerHTML="<?php echo $D1S3 ?>";

      document.getElementById("avg2").innerHTML="<?php echo $c24043 ?>";
      document.getElementById("min4").innerHTML="<?php echo $D2S1 ?>";
      document.getElementById("min5").innerHTML="<?php echo $D2S2 ?>";
      document.getElementById("min6").innerHTML="<?php echo $D2S3 ?>";

      document.getElementById("avg3").innerHTML="<?php echo $c34043 ?>";
      document.getElementById("min7").innerHTML="<?php echo $D3S1 ?>";
      document.getElementById("min8").innerHTML="<?php echo $D3S2 ?>";
      document.getElementById("min9").innerHTML="<?php echo $D3S3 ?>";

      
  }
  else if (x == "<?php echo $tigabelas['kodkursus']; ?>") {
      
      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="<?php echo $mata5['C1S1'] ?>";
      document.getElementById("c1s2").innerHTML="<?php echo $mata5['C1S2'] ?>";
      document.getElementById("c1s3").innerHTML="<?php echo $mata5['C1S3'] ?>";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="<?php echo $mata5['C2S1'] ?>";
      document.getElementById("c2s2").innerHTML="<?php echo $mata5['C2S2'] ?>";
      document.getElementById("c2s3").innerHTML="<?php echo $mata5['C2S3'] ?>";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="<?php echo $mata5['C3S1'] ?>";
      document.getElementById("c3s2").innerHTML="<?php echo $mata5['C3S2'] ?>";
      document.getElementById("c3s3").innerHTML="<?php echo $mata5['C3S3'] ?>";

      //untuk min dan avg
      document.getElementById("avg1").innerHTML="<?php echo $c14054 ?>";
      document.getElementById("min1").innerHTML="<?php echo $E1S1 ?>";
      document.getElementById("min2").innerHTML="<?php echo $E1S2 ?>";
      document.getElementById("min3").innerHTML="<?php echo $E1S3 ?>";

      document.getElementById("avg2").innerHTML="<?php echo $c24054 ?>";
      document.getElementById("min4").innerHTML="<?php echo $E2S1 ?>";
      document.getElementById("min5").innerHTML="<?php echo $E2S2 ?>";
      document.getElementById("min6").innerHTML="<?php echo $E2S3 ?>";

      document.getElementById("avg3").innerHTML="<?php echo $c34054 ?>";
      document.getElementById("min7").innerHTML="<?php echo $E3S1 ?>";
      document.getElementById("min8").innerHTML="<?php echo $E3S2 ?>";
      document.getElementById("min9").innerHTML="<?php echo $E3S3 ?>";

      
  }
  else {

      //By default 
      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="";
      document.getElementById("c1s2").innerHTML="";
      document.getElementById("c1s3").innerHTML="";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="";
      document.getElementById("c2s2").innerHTML="";
      document.getElementById("c2s3").innerHTML="";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="";
      document.getElementById("c3s2").innerHTML="";
      document.getElementById("c3s3").innerHTML="";

      //untuk min dan avg
      document.getElementById("avg1").innerHTML="";
      document.getElementById("min1").innerHTML="";
      document.getElementById("min2").innerHTML="";
      document.getElementById("min3").innerHTML="";

      document.getElementById("avg2").innerHTML="";
      document.getElementById("min4").innerHTML="";
      document.getElementById("min5").innerHTML="";
      document.getElementById("min6").innerHTML="";

      document.getElementById("avg3").innerHTML="";
      document.getElementById("min7").innerHTML="";
      document.getElementById("min8").innerHTML="";
      document.getElementById("min9").innerHTML="";

      
  }

}
</script>

<!-- //script-->

                        <!--Paparan table kiraan CLO-->
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                Kursus :<p id="demo"></p>
                                <tbody>
                                  
                                  <tr>
                                    <b>
                                    <th scope="row"><center><br>CLO</center></th>
                                    <th scope="row"><center><br>No.</center></th>
                                    <th scope="row"><center><br>Item</center></th>
                                    <th scope="row"><center><br>Min</center></th>
                                    <th scope="row"><center><br>Avg</center></th>
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
                                    <td id="c1s1"></td>
                                    <td id="min1"><center></center></td>
                                    <td rowspan="3" id="avg1" style="text-align: center; vertical-align: middle;"></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td id="c1s2"></td>
                                    <td id="min2"><center></center></td>
                                  </tr>
                                  <tr>
                                    <td scope="row"><center>3.</center></td>
                                    <td id="c1s3"></td>
                                    <td id="min3"><center></center></td>
                                  </tr>

                                  <!--clo2-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO2</center></td>
                                    <td><center>1.</center></td>
                                    <td id="c2s1"></td>
                                    <td id="min4"><center></center></td>
                                    <td rowspan="3" id="avg2" style="text-align: center; vertical-align: middle;"></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td id="c2s2"></td>
                                    <td id="min5"><center></center></td>
                                  </tr>
                                  <tr>
                                    <td scope="row"><center>3.</center></td>
                                    <td id="c2s3"></td>
                                    <td id="min6"><center></center></td>
                                  </tr>

                                  <!-- CLO3-->
                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO3</center></td>
                                    <td><center>1.</center></td>
                                    <td id="c3s1"></td>
                                    <td id="min7"><center></center></td>
                                    <td rowspan="3" id="avg3" style="text-align: center; vertical-align: middle;"></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td id="c3s2"></td>
                                    <td id="min8"><center></center></td>
                                  </tr>
                                  <tr>
                                    <td scope="row"><center>3.</center></td>
                                    <td id="c3s3"></td>
                                    <td id="min9"><center></center></td>
                                  </tr>


                                </tbody>
                              </table>
                            </div>
                      </form>
                      <button onclick="myFunction()" class="btn btn-primary">Print</button>

<script>
function myFunction() {
  window.print();
}
</script>

             
                       </div>
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
    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>