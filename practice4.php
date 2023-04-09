<table border="1">
<!--PHP file to take inputed integer and create a multiplication table of num*num -->
	<?php
	$num = $_POST[size];

	for ($r = 1; $r <= $num; $r++)
	{
		echo "<tr>";
			for( $c=1; $c<=$num; $c++)
			{
			($c==$r) ? $bg = "gray" : $bg = "white";
			echo "<td class='$bg'><a href='#' title='$r x $c = ". $r * $c . " ' >" . $r*$c . "</a></td>" ;
			}
		echo  "</tr>";
	}
	?>

</table>
