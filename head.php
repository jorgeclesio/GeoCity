<meta charset="UTF-8">
<?php
	$con = mysqli_connect ("localhost","root","",'municipios') or die ("Err SERVER");
	//$mysqli->set_charset('utf8');
	date_default_timezone_set('America/Belem');

	$x = array("ã","ç","Ç","á","ó","'","´"); 
	$y = array("a","c","C","a","o","","");
	$amazonialegal=""	
	?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php print $_GET['m'].' '.$_GET['e'] . " GeoCity"; ?></title>
<meta name="description" content="Dados sobre o município de <?php print $_GET['m'].", ".$_GET['e'];?> - População, Área, Gentílico, <?php print $_GET['m'];?>, Região Frota, IDEB, Queimadas, Prefeito">
 <meta name="keywords" content="População, Área,  <?php print $_GET['m'];?>, Gentílico, Região Frota, <?php print $_GET['m'];?>, Desmatamento IDEB, Queimadas, Prefeito, <?php print $_GET['m'].", ".$_GET['e'];?> ">
 <meta name="author" content="Jorge Clésio - C&C Studio">
 <meta name="generator" content="Notepad++">
  <!--<base href="http://<?php //echo $_SERVER['SERVER_NAME'] ?>" target="_blank"> -->
  
  <meta property="og:locale" content="pt_BR">
  <meta property="og:title" content="Dados sobre o município de <?php print $_GET['m'].", ".$_GET['e'];?>">
  <meta property="og:site_name" content="GeoCity">
  <meta property="og:url" content="http://<?php echo $_SERVER['SERVER_NAME']."/?". $_SERVER['QUERY_STRING']; ?>">
  <meta property="og:description" content="Dados sobre o município de <?php print $_GET['m'].", ".$_GET['e'];?> - População, Área, Gentílico, <?php print $_GET['m'];?>, Região Frota, IDEB, Queimadas, Prefeito">
  <meta property="article:tag" content="População, Área,  <?php print $_GET['m'];?>, Gentílico, Região Frota, <?php print $_GET['m'];?>, Desmatamento IDEB, Queimadas, Prefeito, <?php print $_GET['m'].", ".$_GET['e'];?>">
  <meta property="article:author" content="Jorge Clésio - C&C Studio">
  <link rel="stylesheet" media="screen" href="style.css">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
