<!DOCTYPE html>
<html lang="esp">

<head>
    <meta charset="utf-8">
    <title>Instituci&oacute;n Educativa Alberto Hidalgo | Contacto</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>
        function onSubmit() {
            document.getElementById("demo-form").submit();
        }
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">


    <link rel="stylesheet" href="css/style.css">
    <!-- ---------------------------------------------- -->
    <!-- NEW Template Main CSS File -->
    <link href="css/styleFinal.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <!-- ---------------------------------------------- -->


</head>

<body>
    <nav class="navbar navbar-expand-lg  id=" ftco-nav ">
	    <div class="container d-flex align-items-center ">
	    	<a class="navbar-brand " href="index.html "> <img src="images/logo-institucion-alberto-hidalgo.png " alt="logo-institucion-alberto-hidalgo "  height="85"></a>
				<button class="navbar-toggler " type="button " data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav " aria-expanded="false " aria-label="Toggle navigation ">
	        <span class="oi oi-menu "></span> Menu
	      </button>
	      <div class="collapse navbar-collapse navbar-light " id="ftco-nav">
	        <ul class="navbar-nav ml-auto justify-content-center ">
	        	<li class="nav-item "><a href="index.html ">Inicio</a></li>
	        	<li class="nav-item "><a href="about.html " >Misi&oacute;n y Visi&oacute;n</a></li>
	        	<li class="nav-item "><a href="https://albertohidalgo.edu.pe/intranet/login.php " >Intranet</a></li>
                <li class="nav-item "><a href="https://albertohidalgo.smiledu.com/ " >Plataforma</a></li>
                
				<li class="nav-item active"><a href="contact.html " >Contacto</a></li>
				<!--	<li class="nav-item dropdown  ">
                    <a class=" dropdown-toggle glow " href="# " id="navbarDropdownMenuLink " role="button " data-toggle="dropdown " aria-haspopup="true " aria-expanded="false ">
                      Matrícula 2021
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink ">
                      <a class="dropdown-item " href="formatoMatricula.html ">Formato para Matrícula</a>
                      <a class="dropdown-item " href="listaUtililesEscolares.html ">Lista de Útiles </a>
                    </div>
                  </li>-->
                  
                  <div class="w3-dropdown-hover" style="margin-top: -8px;">
                    <button class="w3-button"><a class="glow">Matr&iacute;cula 2021</a></button>
                    <div class="w3-dropdown-content w3-bar-block w3-border">
                      <a href="listaUtililesEscolares.html" class="w3-bar-item w3-button">Lista de &uacute;tiles</a>
                      <a href="formatoMatricula.html" class="w3-bar-item w3-button">Formatos para matr&iacute;cula</a>
                    </div>
          </ul>
	      </div>
	    </div>
	  </nav>
  
    <!-- END nav -->

<?php
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'Consultas A.H. Mensajes'; 
    $to =  'jhoncanoc@gmail.com'; // $to =  'jhoncanoc@gmail.com';
    $subject = 'Consultas Online';

function get_client_ip_env() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';

    return $ipaddress;
}

function get_client_ip_server() {
    $ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';

    return $ipaddress;
}

// Get the client ip address
$ipaddress = $_SERVER['REMOTE_ADDR'];

    $body = "Nombre: \n
    $name   \n
    Apellido: \n
    $lastname \n
    Telefono: $phone \n
    E-Mail: $email \n
    Message: \n $message \n 
    ipaddress: $ipaddress";

if ($_POST['enviar']) {
    
    if (mail ($to, $subject, $body, $from)) { 
        echo '
        

 <center>  <IMG SRC="albertogif.gif"></center>
 
       ';
        
        
        
    } else { 
        echo '<p>Algo salio mal intentelo de nuevo!</p>'; 
    }
}
?>

<?php

// Function to get the client ip address

// Function to get the client ip address

//echo 'Your IP address (using $_SERVER[\'REMOTE_ADDR\']) is ' . $ipaddress . '<br />';
//echo 'Your IP address (using get_client_ip_env function) is ' . get_client_ip_env() . '<br />';
//echo 'Your IP address (using get_client_ip_server function) is ' . get_client_ip_server() . '<br />';
?>
	<!-- </div>-->
	<div class="clear"></div>
<!--	<footer id="footer">
		<div id="footer-inside">
			
					</div>
	</footer>
	
	
					


	
    <!-- ======= Footer ======= -->
    <footer class="footer2 ">
        <div class="footer-top ">

            <div class="container ">
                <div class="row ">
                    <div class="col-md-6 col-sm-12 ">
                        <div class="row ">
                            <div class="contacto ">
                                <div class="titulo ">
                                    <h4>Instituci&oacute;n Educativa Alberto Hidalgo <br><span style="font-size:16px "></span></h4>
                                </div>
                                <div class="contenido ">
                                    <div class="telefono "><a href="https://wa.me/51 946 870 012" class="icofont-whatsapp icono big"></a>946 870 012   </div>
                                    <div class="email "> <i class="icofont-envelope icono "></i>secretaria.iep@albertohidalgo.edu.pe</div>
                                    <div class="direcci&oacute;n "> <i class="icofont-google-map icono "></i>Perales Tiabaya, Arequipa 04013,Per&uacute; </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-12 ">                        
                    </div>

                    <div class="col-md-4 col-sm-12 ">
                        <div class="contact ">
                            <h3>Social Profiles</h3>
                            <div class="social-links ">                               
                                <a href="https://www.facebook.com/iep.alberto.hidalgo/ " target="_blank " class="facebook "><i class="icofont-facebook "></i></a>
                                <a href="# " target="_blank " class="linkedin "><i class="icofont-youtube "></i></a>

								                
                            </div>
                        </div>
                    </div>

                </div>				
				
            </div>
        </div>


        <div class="container d-md-flex footer-bottom ">
            <!-- py-4   -->
            <div class="mr-md-auto text-center text-md-left ">
                <div class="copyright ">
                    Copyright &copy; 2020 - 2021 <strong><span>Instituci&oacute;n Educativa Alberto Hidalgo</span></strong> - Todos los Derechos Reservados
                </div>
            </div>
            <div class="credits text-center text-md-right pt-3 pt-md-0 ">
                Dise&ntilde;ado y Desarrollado por <a href="https://datasoftteam.com" target="_blank"> dataSoftTEAM </a>
            </div>
        </div>

    </footer>
    <!-- End Footer -->
	
    </div>
 


  <script src="js/jquery.min.js "></script>
  <script src="js/jquery-migrate-3.0.1.min.js "></script>
  <script src="js/popper.min.js "></script>
  <script src="js/bootstrap.min.js "></script>
  <script src="js/jquery.easing.1.3.js "></script>
  <script src="js/jquery.waypoints.min.js "></script>
  <script src="js/jquery.stellar.min.js "></script>
  <script src="js/owl.carousel.min.js "></script>
  <script src="js/jquery.magnific-popup.min.js "></script>
  <script src="js/aos.js "></script>
  <script src="js/jquery.animateNumber.min.js "></script>
  <script src="js/scrollax.min.js "></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false "></script>
  <script src="js/google-map.js "></script>
  <script src="js/main.js "></script>
    
  </body>
</html>
	
	
	
	
	

	<!-- Quantcast Tag -->
	<script type="text/javascript">
	var _qevents = _qevents || [];
	(function() {
		var elem = document.createElement('script');
		elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
		elem.async = true;
		elem.type = "text/javascript";
		var scpt = document.getElementsByTagName('script')[0];
		scpt.parentNode.insertBefore(elem, scpt);
	})();
	_qevents.push({
		qacct:"p-dgZ4_09vZKC4w"
	});
	</script>
	<noscript>
		<div style="display:none;">
			<img src="//pixel.quantserve.com/pixel/p-dgZ4_09vZKC4w.gif" border="0" height="1" width="1" alt="Quantcast"/>
		</div>
	</noscript>
	<!-- End Quantcast tag -->
	<script>
	jQuery('#article_link').on('click', function() {
		ga('send', 'event', 'article', 'http://www.virendrachandak.com/techtalk/getting-real-client-ip-address-in-php-2/', 'go-to-article', 1);
		_gaq.push(['_trackEvent', 'article', 'http://www.virendrachandak.com/techtalk/getting-real-client-ip-address-in-php-2/', 'go-to-article', 1, true]);
	});
	jQuery('#source_link').on('click', function() {
		ga('send', 'event', 'download', 'http://www.virendrachandak.com/demos/getting-real-client-ip-address-in-php.zip', 'download-source', 1);
		_gaq.push(['_trackEvent', 'download', 'http://www.virendrachandak.com/demos/getting-real-client-ip-address-in-php.zip', 'download-source', 1, true]);
	});
	</script>
	<!-- Footer -->
		

	

	
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>