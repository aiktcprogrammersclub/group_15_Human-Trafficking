<?php

include_once("db.php")	?>

<?php

session_start();

session_unset();

session_destroy();

if (!$_SESSION['userName'])
{
	echo "successfully logout<br />";
	echo "<br /><a href ='index.html'>back to home</a>";
}
else
{
	echo "error occured!!<br />";
		echo "<br /><a href ='index.html'>back to home</a>";
}
		
		
?>
