<?php
session_start();

if( isset($_SESSION['akses']) )
{
  header('location:'.$_SESSION['akses']);
  exit();
}

$error = '';
if( isset($_SESSION['error']) ) {

  $error = $_SESSION['error']; 

  unset($_SESSION['error']);
} ?>

<?php echo $error;?>
<!DOCTYPE html>
<html>
<head>
	<title>PT Pura Nusa Persada</title>
	<link rel="shortcut icon" href="images/icon.ico">
	<meta name="description" content="Customized bootstrap login forms with multiple variants. Easy to customize.">
	<meta name="keywords" content="Bootstrap Modal, Login Form, Modal Login, Registration Form, Form, Bootstrap, Login, Registration">
	<!--Import Google Icon Font-->
      <link href="fonts/material.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
       <meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<title>Card</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style type="text/css">
	body{
		font-family: "Lato", sans-serif;

	}
	.mySlides {display: none
	}
  	.h1{
		  font-size: 32px;
		  color : black;
  	}
  	.footer{
		  font-size: 14px;
		  color : black;
	  }
	.h2{
		font-size : 25px;
		color : black;
	  }
	.h3{
		font-size : 25px;
		color : black;
	  }

  </style>

</head>
<body>
	<div class="w3-top">
		<div class="w3-bar w3-transparant w3-card ">
			<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large " href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
			<a href="#contact" class="w3-bar-item  w3-button w3-padding-large w3-hide-small w3-right">CONTACT</a>
			<a href="#login" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right">LOGIN</a>
			<a href="#profil" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right ">PROFIL</a>
			<a href="#" class="w3-bar-item w3-button w3-padding-large w3-right">HOME</a>
			</div>
			<a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"></a>
		</div>
	</div>

	<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
	<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
	<a href="#profil" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BAND</a>
	<a href="#login" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">LOGIN</a>
	<a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
	<a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
	</div>
	

	<!-- Page content -->
	<div class="w3-content" style="max-width:2000px;margin-top:46px">
	  
			<!-- Automatic Slideshow Images -->
			<div class="mySlides w3-display-container w3-center">
				<img src="../tugasakhir/home.jpg" style="width:100%">
				<div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
				<h3>PT Pura Nusa Persada</h3>
				<p><b>Kantor Pusat Pura Group Jl. AKBP. Agil Kusumadya 203 Kudus 59346, Indonesia</b></p>   
				</div>
			</div>
			<div class="mySlides w3-display-container w3-center">
				<img src="../tugasakhir/profil1.jpg" style="width:100%">
				<div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
				</div>
			</div>
			<div class="mySlides w3-display-container w3-center">
				<img src="../tugasakhir/profil2.jpg" style="width:100%">
				<div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
				</div>
			</div>
			<div class="mySlides w3-display-container w3-center">
				<img src="../tugasakhir/profil.jpg" style="width:100%">
				<div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
				</div>
			</div>

			<!-- The Band Section -->
			<div class="w3-row w3-content w3-center w3-padding-64" style="max-width:800px" id="profil">
				<h2 class="w3-wide">PT Pura Nusa Persada</h2>
				<p class="w3-opacity"><i>Pura Group is divided into several production units, among them PT Pura Barutama which produces Paper Mill, converting, printing & packaging, hologram hot stamping foll, anti counterfeiting, Smart Cart & label, Enginering & Industrial. At PT Pura Nusa Persada produces Peper Mills and Holography, PT Dekorindo Temple produces Impregnating Paper and Melamine Paper and PT Pura Binaka Mandiri produce Paper Mills and Security Printing.</p>
				
				<!-- The Tour Section -->
				<div class="w3-row w3-content w3-padding-64" style="max-width:800px">
					<h2 class="w3-wide w3-center"> PRODUCT</h2>
					<p class="w3-opacity w3-center"><i>"PURA GROUP memproduksi beragam produk handal dan inovatif untuk hidup yang berkualitas."</i></p><br>

					<img  src="../tugasakhir/pasport.jpg" alt="Total Security System" style="width:100%" class="w3-hover-opacity">
					<div class="w3-row row w3-white">
						<p><b>Total Security System</b></p>
					</div>
					
				
					<img src="../tugasakhir/profil1.jpg" alt="Pura Smart Technology" style="width:100%" class="w3-hover-opacity">
					<div class="w3-row row w3-white">
						<p><b>Pura Smart Technology</b></p>
					</div>
				
					<img src="../tugasakhir/profil2.jpg" alt="Pabrik Kertas" style="width:100%" class="w3-hover-opacity">
					<div class="w3-row row w3-white">
						<p><b>Paper Mill</b></p>
					</div>
				</div>
			</div>
	</div>
			<!-- The Tour Section -->
			<div class="w3-white" id="login">
					<div class="container" style="margin-top:-10%;">
					<div class="container">
						<!--Form Login-->
						<form method="POST" action="check-login.php">
							<div id="card">
							<div id="card-content">
							<div id="card-title">
								<img src="../tugasakhir/pura.jpg" width="100" height="100" class="center	">
								<div class="h3" align="center" font="21"> PT PURA NUSA PERSADA UNIT HOLOGRAFI</div>
								<div class="h4" align="center" font="13"> LOGIN</div>
							</div>
						</form>
			</div>
					<i class="material-icons left">person</i>
							<label for="icon_prefix">Nama Pengguna</label>
							<input type="text" name="username" id="icon_prefix" class="validate">
							<i class="material-icons left">lock</i>
							<label for="icon_prefix">Kata Sandi </label>
							<input type="password" name="password" id="icon_prefix" class="validate">
							<div class="row">
								<div class="col s12 m12 l12 center">
									<input name="login" type="submit" value="Login" class="modal-action modal-close waves-effect waves-light btn blue lighten+10">
								</div>
							</div>		
		</div>

		<!-- The Contact Section -->
		<div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
			<h2 class="w3-wide w3-center">CONTACT US</h2>
			<div class="w3-row w3-padding-32">
			<div class="w3-col m6 w3-large w3-margin-bottom">
				<i class="fa fa-map-marker" style="width:30px"></i> KUDUS<br>
				<p class="w3-opacity"><i>Kantor Pusat Pura Group </i></p>
				<p class="w3-opacity"><i>Jl. AKBP. Agil Kusumadya 203 Kudus 59346, Indonesia</i></p>
				<i class="fa fa-phone" style="width:30px"></i> Phone:+62 291 444361 / 444363 (30 lines)<br>
				<i class="fa fa-fax" style="width:30px"></i> fax:+62 291 444361 / 444363 (30 lines)<br>
				<i class="fa fa-envelope" style="width:30px"> </i> Email: marketing@puragroup.com	<br>
			</div>
			</div>
		</div>
  
		<!-- End Page Content -->
	</div>


<!-- Image of location/map -->

	<!-- Footer -->
<footer class="w3-container w3-padding-29 w3-center w3-opacity w3-transparant w3-xlarge">

  <div class="footer" class="w3-medium" align="center">
                  	<?php
		$etdy = '2019';
		echo sprintf('Copyright &copy; %s <a href="%s">%s</a>PT Pura Nusa Persada',
		(date("Y")==$etdy) ? $etdy : $etdy.' - '.date("Y"),
		'',
		'' );
		?> All rights reserved.
	</div>	
	
</footer>

	<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        $( document ).ready(function(){
          Materialize.updateTextFields();
          $('.modal').modal();
        })
	  </script>
	  <script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>