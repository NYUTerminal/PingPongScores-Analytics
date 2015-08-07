<?php
	echo "entered backend";
	$servername = "localhost";
	$username = "praveen";
	$password = "razorfish";
	$link = mysql_connect($servername, $username, $password);
	if (!$link) {
		echo "Couldnt not connect";
	    die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("pingpong_razorfish");
	echo "$first_player";
	echo "$second_player";
	$sql = "INSERT INTO `scores` (player1,player2,isDoubles,score1,score2,date_time) VALUES ('".$_POST['first_player']."', '".$_POST['second_player']."', 'FALSE', '".$_POST['first_score']."', '".$_POST['second_score']."','now()' )";
	$retval = mysql_query( $sql, $link );
	if(! $retval )
	{
		die('Could not enter data: ' . mysql_error());
	}
	echo "Entered data successfully\n";
	mysql_close($conn);
	header('Location:index.php');
	exit;
?>
