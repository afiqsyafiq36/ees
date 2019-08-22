
<!DOCTYPE HTML>
<html>
<head>
<title>User Login</title>
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
<!-- Bootstrap Core JavaScript -->
</head>


<body id="login">
  <div class="login-logo">
    <img src="img/logo.jpg" height="151px" width="151px" alt="Kolej Vokasional Datuk Seri Abu Zahar Isnin"/>
  </div>
  <h2 class="form-heading">login</h2>
  <div class="app-cam">
    <form action="proseslogin.php" method="post">
    <input class="input-field" type="text" placeholder="Username" name="uname" required>
    <input class="input-field" type="password" placeholder="Password" name="pass" required>

    <label for="Pengguna">Level Pengguna </label>
                    <select id="pengguna" name="level" class="form-control1 ng-invalid ng-invalid-required" required>
                    <option value="">SILA PILIH KATEGORI PENGGUNA</option>
                    <option value="1">     Pelajar                 </option>
                    <option value="2">     Pensyarah               </option>
                 </select><br><br>

    <div class="submit"><input type="submit" value="Login"></div>
    
    <ul class="new">
      <li class="new_left"><p><a href="contact.php">Forgot Password ?</a></p></li>
      <li class="new_right"><p><a href="index.php">Back</a></p></li>
      <div class="clearfix"></div>
    </ul>
  </form>
  <div class="copy_layout login">
      <p>Projek Sistem EAES Dikemukakan kepada KVDSAZI</p>
   </div>
  </div>

   
</body>

</html>
