<?php


include "sambung.php";

session_start();
if (!$_SESSION['uname']) {
  header("location:userlogin.php");
}


if(isset($_POST['kursus'])) {

    
    // variable
     $kursus = $_POST['kursus'];
     $nama = $_SESSION['fullname'];
     $c1s1 =$_POST['c1s1'];
     $c1s2 =$_POST['c1s2'];
     $c1s3 =$_POST['c1s3'];

     $c2s1 =$_POST['c2s1'];
     $c2s2 =$_POST['c2s2'];
     $c2s3 =$_POST['c2s3'];

     $c3s1 =$_POST['c3s1'];
     $c3s2 =$_POST['c3s2'];
     $c3s3 =$_POST['c3s3'];

     $tarikh = date("d/m/Y");

     //insert table kursus

     $tambah = "INSERT INTO entrance (kodkursus,fullname,ent_C1S1,ent_C1S2,ent_C1S3,ent_C2S1,ent_C2S2,ent_c2S3,ent_C3S1,ent_C3S2,ent_C3S3,ent_tarikh) VALUES 
     ('$kursus','$nama','$c1s1','$c1s2','$c1s3','$c2s1','$c2s2','$c2s3','$c3s1','$c3s2','$c3s3','$tarikh')";
      //kursus
     $hasil = mysqli_query($hubung,$tambah);
     
     echo "<script>alert('Tahniah anda telah melengkapkan Entrance Survey');
        window.location='borangent.php'</script>";

}

//data daripada table kursus
//DKA4213
$data1 = mysqli_query($hubung,"SELECT * FROM kursus WHERE kodkursus = 'DKA4213' ");
$infoA = mysqli_fetch_array($data1);

//DKA4223
$data2 = mysqli_query($hubung,"SELECT * FROM kursus WHERE kodkursus = 'DKA4223' ");
$infoB = mysqli_fetch_array($data2);

//DKA4033
$data3 = mysqli_query($hubung,"SELECT * FROM kursus WHERE kodkursus = 'DKA4033' ");
$infoC = mysqli_fetch_array($data3);

//DKA4043
$data4 = mysqli_query($hubung,"SELECT * FROM kursus WHERE kodkursus = 'DKA4043' ");
$infoD = mysqli_fetch_array($data4);

//DKA4054
$data5 = mysqli_query($hubung,"SELECT * FROM kursus WHERE kodkursus = 'DKA4054' ");
$infoE = mysqli_fetch_array($data5);

//update
$id = $_SESSION['id'];
$gapo = mysqli_query($hubung,"SELECT * FROM user WHERE id = '$id'");

$gapoA = mysqli_fetch_array($gapo);

?>



<!DOCTYPE html>
<html>
<head>
  <title>Entrance Survey</title>

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
                        <ol class="breadcrumb">
                          <li class="active">Borang</li>
                          <li><a href="borangent.php">Entrance Survey</a></li>
                        </ol>
                        <h2>Entrance Survey</h2>
                        <br>

                        <center>
                        <h3>Course Entrance Survey - Sistem Pengurusan Pangkalan Data Dan Aplikasi Web</h3>
                        <h3>Bahagian Pendidikan Teknik Dan Vokasional</h3>
  
  <!-- start form action -->
  <form action="borangent.php" method="POST">

                          <medium>
                          <center>
                          <!--pilih dropdown kursus by data in table-->
                            <?php
                              include "sambung.php";
                               //query
                              $sql = mysqli_query($hubung,"SELECT * FROM kursus");
                              if(mysqli_num_rows($sql)){
                              $select = 
                              '<select  name="kursus" id="mySelect" onchange="showCourse()">

                                    <option value="">SILA PILIH KURSUS ANDA</option>';//default menu

                              while($rs = mysqli_fetch_array($sql)){
                                    $select.='<option value="'.$rs['kodkursus'].'">'.$rs['kodkursus'].' '.$rs['namakursus'].'</option>';
                                }
                              }
                              $select.='</select>';
                              echo $select;

                              ?>
                        </center>
                        </medium>

                        </center><br>

<!-- script menu onchange dropdown menu kursus-->
<script>
function showCourse() {

  var x = document.getElementById("mySelect").value;
  document.getElementById("demo").innerHTML = x;

  if ( x == "DKA4213") {
      document.getElementById("kur").innerHTML="<?php echo $infoA['namakursus'] ?>";
      document.getElementById("co1").innerHTML="<?php echo $infoA['CLO1'] ?>";
      document.getElementById("co2").innerHTML="<?php echo $infoA['CLO2'] ?>";
      document.getElementById("co3").innerHTML="<?php echo $infoA['CLO3'] ?>";

      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="<?php echo $infoA['C1S1'] ?>";
      document.getElementById("c1s2").innerHTML="<?php echo $infoA['C1S2'] ?>";
      document.getElementById("c1s3").innerHTML="<?php echo $infoA['C1S3'] ?>";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="<?php echo $infoA['C2S1'] ?>";
      document.getElementById("c2s2").innerHTML="<?php echo $infoA['C2S2'] ?>";
      document.getElementById("c2s3").innerHTML="<?php echo $infoA['C2S3'] ?>";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="<?php echo $infoA['C3S1'] ?>";
      document.getElementById("c3s2").innerHTML="<?php echo $infoA['C3S2'] ?>";
      document.getElementById("c3s3").innerHTML="<?php echo $infoA['C3S3'] ?>";
  }
  else if (x == "DKA4223") {
      document.getElementById("kur").innerHTML="<?php echo $infoB['namakursus'] ?>";
      document.getElementById("co1").innerHTML="<?php echo $infoB['CLO1'] ?>";
      document.getElementById("co2").innerHTML="<?php echo $infoB['CLO2'] ?>";
      document.getElementById("co3").innerHTML="<?php echo $infoB['CLO3'] ?>";

      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="<?php echo $infoB['C1S1'] ?>";
      document.getElementById("c1s2").innerHTML="<?php echo $infoB['C1S2'] ?>";
      document.getElementById("c1s3").innerHTML="<?php echo $infoB['C1S3'] ?>";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="<?php echo $infoB['C2S1'] ?>";
      document.getElementById("c2s2").innerHTML="<?php echo $infoB['C2S2'] ?>";
      document.getElementById("c2s3").innerHTML="<?php echo $infoB['C2S3'] ?>";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="<?php echo $infoB['C3S1'] ?>";
      document.getElementById("c3s2").innerHTML="<?php echo $infoB['C3S2'] ?>";
      document.getElementById("c3s3").innerHTML="<?php echo $infoB['C3S3'] ?>";
  }
  else if (x == "DKA4033") {
      document.getElementById("kur").innerHTML="<?php echo $infoC['namakursus'] ?>";
      document.getElementById("co1").innerHTML="<?php echo $infoC['CLO1'] ?>";
      document.getElementById("co2").innerHTML="<?php echo $infoC['CLO2'] ?>";
      document.getElementById("co3").innerHTML="<?php echo $infoC['CLO3'] ?>";

      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="<?php echo $infoC['C1S1'] ?>";
      document.getElementById("c1s2").innerHTML="<?php echo $infoC['C1S2'] ?>";
      document.getElementById("c1s3").innerHTML="<?php echo $infoC['C1S3'] ?>";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="<?php echo $infoC['C2S1'] ?>";
      document.getElementById("c2s2").innerHTML="<?php echo $infoC['C2S2'] ?>";
      document.getElementById("c2s3").innerHTML="<?php echo $infoC['C2S3'] ?>";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="<?php echo $infoC['C3S1'] ?>";
      document.getElementById("c3s2").innerHTML="<?php echo $infoC['C3S2'] ?>";
      document.getElementById("c3s3").innerHTML="<?php echo $infoC['C3S3'] ?>";
  }
  else if (x == "DKA4043") {
      document.getElementById("kur").innerHTML="<?php echo $infoD['namakursus'] ?>";
      document.getElementById("co1").innerHTML="<?php echo $infoD['CLO1'] ?>";
      document.getElementById("co2").innerHTML="<?php echo $infoD['CLO2'] ?>";
      document.getElementById("co3").innerHTML="<?php echo $infoD['CLO3'] ?>";

      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="<?php echo $infoD['C1S1'] ?>";
      document.getElementById("c1s2").innerHTML="<?php echo $infoD['C1S2'] ?>";
      document.getElementById("c1s3").innerHTML="<?php echo $infoD['C1S3'] ?>";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="<?php echo $infoD['C2S1'] ?>";
      document.getElementById("c2s2").innerHTML="<?php echo $infoD['C2S2'] ?>";
      document.getElementById("c2s3").innerHTML="<?php echo $infoD['C2S3'] ?>";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="<?php echo $infoD['C3S1'] ?>";
      document.getElementById("c3s2").innerHTML="<?php echo $infoD['C3S2'] ?>";
      document.getElementById("c3s3").innerHTML="<?php echo $infoD['C3S3'] ?>";
  }
  else if (x == "DKA4054") {
      document.getElementById("kur").innerHTML="<?php echo $infoE['namakursus'] ?>";
      document.getElementById("co1").innerHTML="<?php echo $infoE['CLO1'] ?>";
      document.getElementById("co2").innerHTML="<?php echo $infoE['CLO2'] ?>";
      document.getElementById("co3").innerHTML="<?php echo $infoE['CLO3'] ?>";

      //CLO 1 S1,2,3
      document.getElementById("c1s1").innerHTML="<?php echo $infoE['C1S1'] ?>";
      document.getElementById("c1s2").innerHTML="<?php echo $infoE['C1S2'] ?>";
      document.getElementById("c1s3").innerHTML="<?php echo $infoE['C1S3'] ?>";

      //CLO 2 S1,2,3
      document.getElementById("c2s1").innerHTML="<?php echo $infoE['C2S1'] ?>";
      document.getElementById("c2s2").innerHTML="<?php echo $infoE['C2S2'] ?>";
      document.getElementById("c2s3").innerHTML="<?php echo $infoE['C2S3'] ?>";

      //CLO 3 S1,2,3
      document.getElementById("c3s1").innerHTML="<?php echo $infoE['C3S1'] ?>";
      document.getElementById("c3s2").innerHTML="<?php echo $infoE['C3S2'] ?>";
      document.getElementById("c3s3").innerHTML="<?php echo $infoE['C3S3'] ?>";
  }
  else {
      
      document.getElementById("kur").innerHTML="";
      document.getElementById("co1").innerHTML="";
      document.getElementById("co2").innerHTML="";
      document.getElementById("co3").innerHTML="";

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
  }

}
</script>

<!-- //script-->
                        
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
                                <td id="kur"></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                                <td>Kod Kursus</td>
                                <td> : </td>
                                <td id="demo"></td>
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

                    <table border="0">
                        <!--table maklumat pelajar-->



                        <tr>
                            <medium>
                               <td>Nama Pelajar</td>
                               <td> : </td>
                               <td><?php echo $_SESSION['fullname']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                               <td>Sesi</td>
                               <td> : </td>
                               <td><?php echo $_SESSION['sesi']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                               <td>No. Matrik</td>
                               <td> : </td>
                               <td><?php echo $_SESSION['nomatrik']; ?></td>
                            </medium>
                        </tr>
                        <tr>
                            <medium>
                               <td>Tarikh</td>
                               <td> : </td>
                               <td><?php echo date("d/m/Y"); ?></td>
                            </medium>
                        </tr>
                    </table>


                        <br><br><br>
                        <!--nota pringatan-->

                        <medium>Sila lengkapkan inventori ini dengan menanda cari logo pada skala yang dinyatakan.</medium><br>
                        <medium>1 = Sangat Tidak Setuju&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp2 = Tidak Setuju&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp3 = Tidak Pasti&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp4 = Setuju&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp5 = Sangat Setuju</medium><br><br><br>

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
                                          <td id="co1"></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 2</td>
                                          <td>:</td>
                                          <td id="co2"></td>
                              </medium>
                            </tr>
                            <tr>
                              <medium>
                                          <td>CLO 3</td>
                                          <td>:</td>
                                          <td id="co3"></td>
                              </medium>
                            </tr>
                      </table>

                      <br><br>
                        <medium><b>Soalan :</b></medium><br>

                        
                        
                        
                        <div class="table-responsive">
                              <table class="table table-bordered">
                                
                                <tbody>
                                  
                                  <tr>
                                    <b>
                                    <th rowspan="2" scope="row"><center><br>CLO</center></th>
                                    <th rowspan="2" scope="row"><center><br>No.</center></th>
                                    <th rowspan="2" scope="row"><center><br>Item</center></th>
                                    <th colspan="5" scope="row"><center>Skala</center></th>
                                    </b>
                                  </tr>

                                  <tr>
                                    <th scope="row"><center>1</center></th>
                                    <th scope="row"><center>2</center></th>
                                    <th scope="row"><center>3</center></th>
                                    <th scope="row"><center>4</center></th>
                                    <th scope="row"><center>5</center></th>
                                  </tr>

                                  <!-- clo1-->

                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO1</center></td>
                                    <td><center>1.</center></td>
                                    <td id="c1s1"></td>
                                    <td><center><input type="radio" name="c1s1" value="1" required></center></td>
                                    <td><center><input type="radio" name="c1s1" value="2" required></center></td>
                                    <td><center><input type="radio" name="c1s1" value="3" required></center></td>
                                    <td><center><input type="radio" name="c1s1" value="4" required></center></td>
                                    <td><center><input type="radio" name="c1s1" value="5" required></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td id="c1s2"></td>
                                    <td><center><input type="radio" name="c1s2" value="1" required></center></td>
                                    <td><center><input type="radio" name="c1s2" value="2" required></center></td>
                                    <td><center><input type="radio" name="c1s2" value="3" required></center></td>
                                    <td><center><input type="radio" name="c1s2" value="4" required></center></td>
                                    <td><center><input type="radio" name="c1s2" value="5" required></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>3.</center></td>
                                    <td id="c1s3"></td>
                                    <td><center><input type="radio" name="c1s3" value="1" required></center></td>
                                    <td><center><input type="radio" name="c1s3" value="2" required></center></td>
                                    <td><center><input type="radio" name="c1s3" value="3" required></center></td>
                                    <td><center><input type="radio" name="c1s3" value="4" required></center></td>
                                    <td><center><input type="radio" name="c1s3" value="5" required></center></td>
                                  </tr>

                                  <!-- //clo1-->
                                  <!-- clo2-->

                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO2</center></td>
                                    <td><center>1.</center></td>
                                    <td id="c2s1"></td>
                                    <td><center><input type="radio" name="c2s1" value="1" required></center></td>
                                    <td><center><input type="radio" name="c2s1" value="2" required></center></td>
                                    <td><center><input type="radio" name="c2s1" value="3" required></center></td>
                                    <td><center><input type="radio" name="c2s1" value="4" required></center></td>
                                    <td><center><input type="radio" name="c2s1" value="5" required></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td id="c2s2"></td>
                                    <td><center><input type="radio" name="c2s2" value="1" required></center></td>
                                    <td><center><input type="radio" name="c2s2" value="2" required></center></td>
                                    <td><center><input type="radio" name="c2s2" value="3" required></center></td>
                                    <td><center><input type="radio" name="c2s2" value="4" required></center></td>
                                    <td><center><input type="radio" name="c2s2" value="5" required></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>3.</center></td>
                                    <td id="c2s3"></td>
                                    <td><center><input type="radio" name="c2s3" value="1" required></center></td>
                                    <td><center><input type="radio" name="c2s3" value="2" required></center></td>
                                    <td><center><input type="radio" name="c2s3" value="3" required></center></td>
                                    <td><center><input type="radio" name="c2s3" value="4" required></center></td>
                                    <td><center><input type="radio" name="c2s3" value="5" required></center></td>
                                  </tr>

                                  <!-- //clo2-->
                                  <!--clo 3-->

                                  <tr>
                                    <td rowspan="3"><center><br><br>CLO3</center></td>
                                    <td><center>1.</center></td>
                                    <td id="c3s1"></td>
                                    <td><center><input type="radio" name="c3s1" value="1" required></center></td>
                                    <td><center><input type="radio" name="c3s1" value="2" required></center></td>
                                    <td><center><input type="radio" name="c3s1" value="3" required></center></td>
                                    <td><center><input type="radio" name="c3s1" value="4" required></center></td>
                                    <td><center><input type="radio" name="c3s1" value="5" required></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>2.</center></td>
                                    <td id="c3s2"></td>
                                    <td><center><input type="radio" name="c3s2" value="1" required></center></td>
                                    <td><center><input type="radio" name="c3s2" value="2" required></center></td>
                                    <td><center><input type="radio" name="c3s2" value="3" required></center></td>
                                    <td><center><input type="radio" name="c3s2" value="4" required></center></td>
                                    <td><center><input type="radio" name="c3s2" value="5" required></center></td>
                                  </tr>

                                  <tr>
                                    <td><center>3.</center></td>
                                    <td id="c3s3"></td>
                                    <td><center><input type="radio" name="c3s3" value="1" required></center></td>
                                    <td><center><input type="radio" name="c3s3" value="2" required></center></td>
                                    <td><center><input type="radio" name="c3s3" value="3" required></center></td>
                                    <td><center><input type="radio" name="c3s3" value="4" required></center></td>
                                    <td><center><input type="radio" name="c3s3" value="5" required></center></td>
                                  </tr>
                                  <!-- //clo3-->

                                </tbody>
                              </table>
                            </div>

                        <div class="form-group" align="right">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
</form>
<!-- //close form action-->
                </div>
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