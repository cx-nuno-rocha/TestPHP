<?php
/** Exemplo de vulnerabilidade de  */ 
header('X-Frame-Options: DENY'); 
header("Strict-Transport-Security: max-age=31536000; includeSubDomains");
echo "<b>HSTS Enabled!</b>";
//*/

header("Content-type: text/plain");

  header( "Set-Cookie: name=value; httpOnly" );
  ini_set( 'session.cookie_httponly', 1 );


//header("Content-Security-Policy: default-src 'none';");//para tratar vulnerabilidade : Potential_Clickjacking_on_Legacy_Browsers
header("Content-Security-Policy: default-src 'self';");//para tratar vulnerabilidade : Potential_Clickjacking_on_Legacy_Browsers
//header("Content-Security-Policy-Report-Only: default-src 'none';"); // check out https://www.projectseven.net/php-content-security-policy.php
header('X-Frame-Options: SAMEORIGIN');//para tratar vulnerabilidade : Potential_Clickjacking_on_Legacy_Browsers


session_destroy(); // limpar sessão anterior para evitar reutilização por parte de Attackers

session_start();

//$_SESSION["wsahljashdkl"]=   $_POST["firstname"];// exemplo de vulnerabilidade de acesso sem delimitação - requer sanitizer/validação
//$_SESSION["wsahljashdkl"]=  strval("" . $_POST["firstname"]);// exemplo de vulnerabilidade de acesso sem delimitação com BAD sanitizer
$aux_post= filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);// exemplo de vulnerabilidade de acesso sem delimitação com sanitizer


echo"" . $var ;

echo aaa();

function aaa($param){
	$a = htmlentities($param);

	//$aux_get=htmlspecialchars( $_GET['query'] ); // unsufficient usage
 	$aux_get= htmlspecialchars($_GET['query'], ENT_QUOTES, 'UTF-8');
  	
  	echo("<p>Search results for query: " .   $aux_get. ".</p>");

/* // Unchecked Error Condition 

  	try {
		doExchange();
		}
		catch (IOException e) {
			logger.error("doExchange failed", e);
		}
		catch (InvocationTargetException e) {

			logger.error("doExchange failed", e);
		}
		catch (SQLException e) {

			logger.error("doExchange failed", e);
		}
*/
	return $a;
}
?>

<head>
    <meta http-equiv="Content-Security-Policy" content="default-src 'none' ; ">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Discusses Techniques for Using Content Security Policy">
    <meta name="author" content="Glaser">

    <!-- Theme CSS -->
    <link href="img/secure-PHP.png" rel="icon" type="image/x-icon">
    <link href="css/bundle.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Lora:' rel='stylesheet' type='text/css'>

    <title>PHP and Content Security Policy</title>
</head>

<script>
fucntion aaa(){
	console.log(<?=$var?>);
}

aaa();
</script>

hello


<form action="" method="post">
  First name:<br>
  <input type="text" name="firstname" value="Mickey">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="Mouse">
  <br><br>
  <input type="submit" value="Submit">
</form> 
