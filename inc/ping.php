<?php 


/*
define('RCON_PASSWD','cheddar welder tornado plankton');
define('RCON_PORT','25575');
define('RCON_SERVER','m.neffy.me');
*/

require_once('query.php');

$Query = new MinecraftQuery( );

try
{
    $Query->Connect( 'm.neffy.me', 25565 );
    
	$Timer = MicroTime( true );
    
    $info = ($Query->GetInfo());
    
    $Timer = Number_Format( MicroTime( true ) - $Timer, 4, '.', '' );

    if ($_GET['data'] == 'players') {
    	if ($info['Players'] != 0) {
    		echo $Query->GetPlayers();
    	}
    	else {
	    	echo 'No one online';
    	}
	}
	
	if ($_GET['data'] == 'status') {
		echo $info['Players'] ." of ".$info['MaxPlayers'] ." players online";
	}
	
	if ($_GET['data'] == 'numplayers') {
		echo $info['Players'];
	}
	
	/*
else {
		if (isset($info)) {
			json_encode(echo "Online (Queried in ".$Timer." seconds)");
		}
		else {
			echo json_encode("Server could not be reached!");
		}
	}
*/
}
catch( MinecraftQueryException $e )
{
    echo $e->getMessage( );
}

?>