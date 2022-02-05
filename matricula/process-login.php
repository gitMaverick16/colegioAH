<!DOCTYPE html>
  <link rel="icon" href="Logof.gif" type="image/gif" sizes="16x16">

<style>
.container11{
  width: 425px;
  margin: 0 auto;
    
}

.triangle-isosceles{
  position: relative;
  padding: 15px;
  margin: 1em 0 3em;
  color: #000;
  background: linear-gradient(#39b8f7,#39b8f7);
  border-radius: 50px;  
}

.triangle-isosceles:after{
  content: "";
  position: absolute;
  bottom: -15px;
  left: 50px;
  display:block;
  width:0;
  height: 0;
  
  border-top: 15px solid #f3921c;
  
  border-left: 15px solid transparent;
  border-right: 15px solid transparent;
  
}

.triangle-isosceles.top{
  background: linear-gradient(#f3921c, #f9d835);
}

.triangle-isosceles.top:after{
  top: -15px;
  right: 50px;
  bottom: auto;
  left: auto;
  
  border-bottom: 15px solid #f3921c;
  border-left: 15px solid transparent;
  border-right: 15px solid transparent;
  border-top: 0;
}



.oval-thought{
  position: relative;
  width: 270px;
  padding: 50px 40px;
  margin: 1em auto 20px;
  text-align: center;
  color: white;
  background: linear-gradient(#2e88c4, #075698);
  border-radius: 220px / 120px;     
}

.oval-thought:before{
  content: "";
  position: absolute;
  bottom: -20px;
  left: 50px;
  width: 30px;
  height: 30px;
  background: #075698;
  border-radius: 30px;
}

.oval-thought:after{
  content: "";
  position: absolute;
  bottom: -30px;
  left: 30px;
  width: 15px;
  height: 15px;
  border-radius: 15px;
  background: #075698;
}

.oval-quotes{
  position: relative;
  width: 400px;
  height: 350px;
  margin: 2em auto 10px;
  color: black;
  background: #ffed26;
  border-radius: 400px / 350px;
}

.oval-quotes:before{
  content: "\201C";
  position: absolute;
  z-index: 1;
  top: 20px;
  left: 20px;
  font: 80px/1 Georgia, serif;
  color: #ffed26;
}

.oval-quotes:after{
  content: "\201D";
  position: absolute;
  z-index: 1;
  bottom: 0;
  right: 20px;
  font: 80px/0.25 Georgia, serif;
  color: #ffed26;
}

.oval-quotes p{
  width: 250px;
  height: 250px;
  padding: 50px 0 0;
  margin: 0 auto;
  text-align: center;
  font-size: 35px;
}

.oval-quotes p:before{
  content: "";
  position: absolute;
  z-index: -1;
  bottom: -30px;
  right: 55%;
  width: 180px;
  height: 60px;
  background: white;
  border-bottom-right-radius: 40px 50px;
  -webkit-transform: translate(-30px, -2px);
}

.oval-quotes p:after{
  content: "";
  position: absolute;
  z-index: -2;
  bottom: -30px;
  right: 25%;
  height: 80px;
  border-right: 200px solid #ffed26;
  background: #ffed26;
  border-bottom-right-radius: 200px 100px;
  -webkit-transform: translate(0, -2px);
  transform: translate(0, -2px);
  display: block;
  width: 0;
}

.oval-quotes + p{
  position: relative;
  width: 150px;
  margin: 0 0 2em;
  font-size: 18px;
  font-weight: bold;
}

.rectangle-speech-border{
  position: relative;
  padding: 50px 15px;
  margin: 1em 0 3em;
  border: 10px solid #5a8f00;
  text-align: center;
  border-radius: 20px;
}

.rectangle-speech-border:before{
  content:"";
  z-index: 10;
  bottom: -40px;
  left: 50px;
  width: 50px;
  height: 30px;
  border-style: solid;
  border-color: #5a8f00;
  border-width: 0 10px 10px 0;
  background: transparent;
  display: block;
  border-bottom-right-radius: 80px 50px;
}

.rectangle-speech-border:after{
  content: "";
  bottom: -40px;
  left: 50px;
  width: 20px;
  height: 30px;
  z-index: 10;
  border-style: solid;
  border-width: 0 10px 10px 0;
  border-color: #5a8f00;
  background: transparent;
  display: block;
  border-bottom-right-radius: 40px 50px;
}

.rectangle-speech-border > :first-child:before{
  content: "";
  bottom: -40px;
  left: 45px;
  width: 10px;
  height: 10px;
  background: #5a8f00;
  border-radius: 10px;
}

.rectangle-speech-border > :first-child:after{
  content: "";
  background: white;
  position: absolute;
  bottom: -10px;
  left: 76px;
  width: 24px;
  height: 15px;
}

.oval-thought-border{
  position: relative;
  padding: 70px 30px;
  margin: 1em auto 80px;
  background: white;
  border: 10px solid #c81e2b;
  text-align: center;
  border-radius: 240px / 140px;
}

.oval-thought-border:before{
  content: "";
  display: block;
  border: 10px solid #c81e2b;
  position: absolute;
  z-index: 10;
  border-radius: 50px;
  width: 50px;
  height: 50px;
  bottom: -40px;
  right: 100px;
  background: white;  
}

.oval-thought-border:after{
  content: "";
  border: 10px solid #c81e2b;
  border-radius: 25px;
  width: 25px;
  height: 25px;
  z-index: 10;
  position: absolute;
  bottom: -60px;
  right: 50px;
  display: block;
  
}


</style>
  <link rel="icon" href="Logof.gif" type="image/gif" sizes="16x16">
  <link rel="icon" href="Logof.gif" type="image/gif" sizes="16x16">

    
<?php 

// This section processes submissions from the login form
// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //connect to database
try {
    require ('mysqli_connect.php');
    // Validate the email address
// Check for an email address:
	    $email = filter_var( $_POST['email'], FILTER_SANITIZE_EMAIL);	
	if  ((empty($email)) || (filter_var($email, FILTER_VALIDATE_EMAIL))) {
		$errors[] = '<div class="container11">
<p class="oval-thought">Olvidaste ingresar tu user o usuario incorrecto</p>

</div>';
	}
    // Validate the password
	    $password = filter_var( $_POST['password'], FILTER_SANITIZE_STRING);	
	if (empty($password)) {
		$errors[] = '<div class="container">
<p class="oval-thought">Olvidaste ingresar tu contraseña.</p></div>';
	}
   if (empty($errors)) { // If everything's OK.         #1
// Retrieve the user_id, psword, first_name and user_level for that
// email/password combination
 $query = "SELECT userid, password, first_name, user_level FROM users WHERE email=?";
      $q = mysqli_stmt_init($dbcon);
      mysqli_stmt_prepare($q, $query);

        // bind $id to SQL Statement
	  mysqli_stmt_bind_param($q, "s", $email); 

       // execute query
	   
       mysqli_stmt_execute($q);

$result = mysqli_stmt_get_result($q);

$row = mysqli_fetch_array($result, MYSQLI_NUM);
if (mysqli_num_rows($result) == 1) {
//if one database row (record) matches the input:-
// Start the session, fetch the record and insert the 
// values in an array 
if (password_verify($password, $row[1])) {          //#2

$_SESSION['user_level'] = (int) $row[3];

switch ($_SESSION['user_level']) {
    case 1:
        echo '<script type="text/javascript" language="javascript">
            window.open("https://albertohidalgo.edu.pe/matricula/members-page.php");
            </script>';

        break;
    case 2:
      echo '<script type="text/javascript" language="javascript">
            window.open("https://albertohidalgo.edu.pe/matricula/members-primer.php");
            </script>';

        break;
    case 3:
         echo '<script type="text/javascript" language="javascript">
            window.open("https://albertohidalgo.edu.pe/matricula/members-segundo.php");
            </script>';
        break;
      case 4:
        echo '<script type="text/javascript" language="javascript">
            window.open("https://albertohidalgo.edu.pe/matricula/members-tercer.php");
            </script>';
        break;
      case 5:
       echo '<script type="text/javascript" language="javascript">
            window.open("https://albertohidalgo.edu.pe/matricula/members-cuarto.php");
            </script>';
        break;
      case 6:
       echo '<script type="text/javascript" language="javascript">
            window.open("https://albertohidalgo.edu.pe/matricula/members-quinto.php");
            </script>';
        break;
      case 7:
       echo '<script type="text/javascript" language="javascript">
            window.open("https://albertohidalgo.edu.pe/matricula/members-sexto.php");
            </script>';
        break;
      case 9:
       echo '<script type="text/javascript" language="javascript">
            window.open("https://albertohidalgo.edu.pe/matricula/members-4anios.php");
            </script>';
        break;
      case 10:
        echo '<script type="text/javascript" language="javascript">
            window.open("https://albertohidalgo.edu.pe/matricula/members-5anios.php");
            </script>';
        break;
    case 11:
        echo '<script type="text/javascript" language="javascript">
            window.open("https://albertohidalgo.edu.pe/matricula/members-3anios.php");
            </script>';
        break;

    default:
       }


} else { // No password match was made.

$errors[] = '<div class="container">
<p class="oval-thought">Usuario/Password no están en los registros. Pida ser agregado en el registro</div></p>';
$errors[] = '';
$errors[] = '';
}
} else { // No e-mail match was made.
$errors[] = '<div class="container">
<p class="oval-thought">Usuario/Password no están en los registros. Pida ser agregado en el registro </div></p>';
$errors[] = '';
$errors[] = '';
}
} 
if (!empty($errors)) {                     
		$errorstring = "";
		foreach ($errors as $msg) { // Print each error.
			$errorstring .= " $msg<br>\n";
		}
		$errorstring .= "";
		echo "<p class=' text-center col-sm-2' style='color:red'>$errorstring</p>";
		}// End of if (!empty($errors)) IF.
mysqli_stmt_free_result($q);
mysqli_stmt_close($q);
}
 catch(Exception $e) // We finally handle any problems here   
   {
     // print "An Exception occurred. Message: " . $e->getMessage();
     print "The system is busy please try later";
   }
   catch(Error $e)
   {
      //print "An Error occurred. Message: " . $e->getMessage();
      print "The system is busy please try again later.";
   }
} // no else to allow user to enter values
?>