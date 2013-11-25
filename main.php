<!DOCTYPE html>

<html>
	
	<head>
		
		<title>Adriani6</title>
		
<link rel="stylesheet" type="text/css" href="css/reset.css">
		
<link rel="stylesheet" type="text/css" href="css/maxmertkit.css">
		
<link rel="stylesheet" type="text/css" href="css/maxmertkit-components.css">
		
<link rel="stylesheet" type="text/css" href="css/maxmertkit-animation.css">
		
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  
  <script>
  $(function() {
    $( document ).tooltip();
  });
  </script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
<style>
body{
font-family: 'Ubuntu', sans-serif;
}
.box
{
position:absolute;
right:2%;
bottom:2%;


}
.show_hide {
    display:none;
}
a {
  color: inherit; /* blue colors for links too */
  text-decoration: inherit; /* no underline */
}
</style>
		<script type="text/javascript">

$(document).ready(function(){

        $(".slidingDiv").hide();
        $(".show_hide").show();

    $('.show_hide').click(function(){
    $(".slidingDiv").slideToggle();
    });

});

</script>	
	</head>
	
<body>
<?php
require "MinecraftQuery.class.php";
require "config.php";
$Query = new MinecraftQuery();
$Query->Connect($ip, $port, 1);
$info = ($Query->GetInfo());
$players = ($Query->GetPlayers());
$player_array = implode("", $players);
?>
 

<tbody>
<div class="box">
<center><a href="#" class="show_hide">
<div class="-dropdown -success-">

<div class="-dropdown-header">Online (<?php print $info["Players"]; ?>/<?php print $info["MaxPlayers"]; ?>)</div>
Server Version: <?php echo  $info['Version']; ?>
<div class="slidingDiv">
<div class="-dropdown-content">

<table style="max-width:150px; word-wrap: break-word;">
<tr>
<td>
<?php 
foreach($players as $element): 
?>
<?php
if (strtolower($headsurl) === "minotar") {
$wwwurl = 'https://www.minotar.net/avatar';
} elseif (strtolower($headsurl) === "cravatar") {
$wwwurl = 'http://cravatar.eu/helmhead';
}
?>
 <img src="<? echo $wwwurl; ?>/<?php echo htmlspecialchars( $element ); ?>/<?php echo $headsize; ?>.png" title="<?php echo htmlspecialchars( $element ); ?>">
<?php endforeach; ?> 
</td>
</div></a>

</body>
</html>
