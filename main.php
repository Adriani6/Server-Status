<!DOCTYPE html>

<html>
	
	<head>
		
		<title>Adriani6</title>
		
<link rel="stylesheet" type="text/css" href="../css/reset.css">
		
<link rel="stylesheet" type="text/css" href="../css/maxmertkit.css">
		
<link rel="stylesheet" type="text/css" href="../css/maxmertkit-components.css">
		
<link rel="stylesheet" type="text/css" href="../css/maxmertkit-animation.css">
		
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
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

</style>
			
	</head>
	
<body STYLE="background-color:transparent">
      <?php
 require 'config.php';

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP); //Create the socket
$connected = socket_connect($socket, $host, $port); //Try and connect using the info provided above
 
if (!$connected)
    die(require 'offlinemessage.php'); //No connection could be established
 
socket_send($socket, "\xFE\x01", 2, 0); //Send the server list ping request (two bytes)
$retVal = socket_recv($socket, &$data, 1024, 0); //Get the info and store it in $data
socket_close($socket); //Close socket
 
if ($retVal != false && substr($data, 0, 1) == "\xFF") //Ensure we're getting a kick message as expected
{
    $data = substr($data, 9); //Remove packet, length and starting characters
    $data = explode("\x00\x00", $data); //0000 separated info
    $playersOnline = $data[3];
    $playersMax = $data[4];
}


$online = @fsockopen( $host, $port, $errno, $errstr, 200);
if($online >= 1) {

?>

<?php
// Edit this ->
define( 'MQ_SERVER_ADDR', $host );
define( 'MQ_SERVER_PORT', $port );
define( 'MQ_TIMEOUT', 1 );
// Edit this <-
// Display everything in browser, because some people can't look in logs for errors
Error_Reporting( E_ALL | E_STRICT );
Ini_Set( 'display_errors', true );

require 'MinecraftQuery.class.php';
$Timer = MicroTime( true );
$Query = new MinecraftQuery( );

try
{
$Query->Connect( MQ_SERVER_ADDR, MQ_SERVER_PORT, MQ_TIMEOUT );
}
catch( MinecraftQueryException $e )
{
$Error = $e->getMessage( );
}
?>
<tbody>
<?php if( ( $Players = $Query->GetPlayers( ) ) !== false ): ?>
<div class="box">
<center>
<div class="-dropdown -success-">
<div class="-dropdown-header">Online (<? echo ("$playersOnline/$playersMax"); ?>)</div>
<div class="-dropdown-content">



<table style="max-width:150px; word-wrap: break-word;">
<tr>
<td>
<?php foreach( $Players as $Player ): ?>

<img src="https://minotar.net/avatar/<?php echo htmlspecialchars( $Player ); ?>/32.png" title="<?php echo htmlspecialchars( $Player ); ?>">

<?php endforeach; ?>
</td>


<?php else: ?>
<div class="box">
<center>
<div class="-dropdown -success-">
<div class="-dropdown-header">Online</div>
<td>No players in our crib ! :(</td>
</tr>
</div></div>
<?php endif; ?>
</tbody>
</table>

<?
echo '</div></div></center>';
}
else {
?>
<div class="-dropdown -error-">
<div class="-dropdown-header">Offline</div>
<div class="-dropdown-content"><? require 'offlinemessage.php'; ?></div>
</div>
<?
}
?>
<center>



</div>
</div>

</body>
</html>
