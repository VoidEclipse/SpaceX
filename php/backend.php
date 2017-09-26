<?php


$connection = mysqli_connect( 'localhost', 'root', '', 'database');

	//or die("Ошибка " . mysqli_connect_error($connection));
 
 if ($connection == false) {

 	echo "<br><br> Connection failed! <br><br>";
 	echo mysqli_connect_error();
 	exit();

 }else 	{
 	echo "Connection success!";
 }


 $result = mysqli_query($connection, "SELECT * FROM `articles` ");
?>

	<ul>
	<?php

	 while ( ($out = mysqli_fetch_assoc($result)) ) {
	 	echo ('<li>' . $out['title'] . '</li>');
	 }

	?>
	</ul>


<?php

exit();

?>