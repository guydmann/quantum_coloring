<?php

	$basis_columns = 5;
	$basis_column_width = 4;
	$basis_rows = 5;
	$basis_row_height = 1;
	$basis_row_display_height = 3;

	$basis = array( array(1,2,3,4,31,42,51,16,22,60,39,28,57,23,27,40,44,29,15,52),
		array(5,6,7,8,38,24,58,25,18,47,33,55,36,53,20,46,59,26,37,21),
		array(9,10,11,12,56,45,17,35,13,32,50,41,43,49,30,14,34,19,48,54),
		array(13,14,15,16,43,54,3,28,34,12,51,40,9,35,39,52,56,41,27,4),
		array(17,18,19,20,50,36,10,37,30,59,45,7,48,5,32,58,11,38,49,33),
		array(21,22,23,24,8,57,29,47,25,44,2,53,55,1,42,26,46,31,60,6),
		array(25,26,27,28,55,6,15,40,46,24,3,52,21,47,51,4,8,53,39,16),
		array(29,30,31,32,2,48,22,49,42,11,57,19,60,17,44,10,23,50,1,45),
		array(33,34,35,36,20,9,41,59,37,56,14,5,7,13,54,38,58,43,12,18),
		array(37,38,39,40,7,18,27,52,58,36,15,4,33,59,3,16,20,5,51,28),
		array(41,42,43,44,14,60,34,1,54,23,9,31,12,29,56,22,35,2,13,57),
		array(49,50,51,52,19,30,39,4,10,48,27,16,45,11,15,28,32,17,3,40),
		array(53,54,55,56,26,12,46,13,6,35,21,43,24,41,8,34,47,14,25,9),
		array(57,58,59,60,44,33,5,23,1,20,38,29,31,37,18,2,22,7,36,42));

	$line_columns = 10;
	$line_column_width = 2;
	$line_rows = 10;
	$line_row_height = 3;
	$line_row_display_height = 3;
	$line = array( array(3,16,2,13,1,14,4,15,25,28,35,36,31,29,32,30,33,34,27,26),
		array(8,17,7,18,5,20,6,19,45,47,42,43,38,37,39,40,41,44,46,48),
		array(10,24,12,22,9,23,11,21,51,50,58,57,56,54,55,53,60,59,49,52),
		array(2,25,3,28,4,27,1,26,24,22,17,20,16,15,13,14,18,19,23,21),
		array(6,31,5,32,7,30,8,29,42,41,38,40,45,48,47,46,39,37,43,44),
		array(9,35,11,33,10,36,12,34,56,55,51,49,58,59,60,57,50,52,53,54),
		array(1,38,4,39,3,40,2,37,17,18,16,14,24,21,22,23,13,15,20,19),
		array(7,42,8,41,6,43,5,44,31,32,25,27,35,34,33,36,28,26,30,29),
		array(11,45,9,47,12,46,10,48,58,60,56,53,51,52,50,49,55,54,57,59),
		array(4,51,1,50,2,49,3,52,16,13,24,23,17,19,18,20,22,21,14,15),
		array(5,56,6,55,8,53,7,54,35,33,31,30,25,26,28,27,32,29,36,34),
		array(12,58,10,60,11,57,9,59,38,39,45,46,42,44,41,43,47,48,40,37),
		array(15,28,14,25,13,26,16,27,3,2,10,9,8,6,7,5,12,11,1,4),
		array(20,29,19,30,17,32,18,31,37,40,47,48,43,41,44,42,45,46,39,38),
		array(22,36,24,34,21,35,23,33,57,59,54,55,50,49,51,52,53,56,58,60),
		array(14,37,15,40,16,39,13,38,8,7,3,1,10,11,12,9,2,4,5,6),
		array(18,43,17,44,19,42,20,41,36,34,29,32,28,27,25,26,30,31,35,33),
		array(21,47,23,45,22,48,24,46,54,53,50,52,57,60,59,58,51,49,55,56),
		array(13,50,16,51,15,52,14,49,10,12,8,5,3,4,2,1,7,6,9,11),
		array(19,54,20,53,18,55,17,56,29,30,28,26,36,33,34,35,25,27,32,31),
		array(23,57,21,59,24,58,22,60,43,44,37,39,47,46,45,48,40,38,42,41),
		array(27,40,26,37,25,38,28,39,9,11,6,7,2,1,3,4,5,8,10,12),
		array(32,41,31,42,29,44,30,43,15,14,22,21,20,18,19,17,24,23,13,16),
		array(34,48,36,46,33,47,35,45,49,52,59,60,55,53,56,54,57,58,51,50),
		array(26,49,27,52,28,51,25,50,6,5,2,4,9,12,11,10,3,1,7,8),
		array(30,55,29,56,31,54,32,53,20,19,15,13,22,23,24,21,14,16,17,18),
		array(33,59,35,57,34,60,36,58,45,46,41,44,40,39,37,38,42,43,47,45),
		array(39,52,38,49,37,50,40,51,1,4,11,12,7,5,8,6,9,10,3,2),
		array(44,53,43,54,41,56,42,55,21,23,18,19,14,13,15,16,17,20,22,24),
		array(46,60,48,58,45,59,47,57,27,26,34,33,32,30,31,29,36,35,25,28) );

	$pentagon_columns = 6;
	$pentagon_column_width = 2;
	$pentagon_rows = 6;
	$pentagon_row_height = 5;
	$pentagon_row_display_height = 5;
	$pentagon = array( array(1,4,2,3,5,7,6,8,9,10,11,12),
		array(15,14,16,13,18,20,17,19,24,23,22,21),
		array(56,55,54,53,59,58,57,60,50,52,51,49),
		array(47,45,46,48,38,37,39,40,44,41,43,42),
		array(30,29,32,31,36,33,34,35,27,25,26,28),
		array(2,3,1,4,6,8,5,7,11,12,9,10),
		array(43,44,41,42,47,46,45,48,40,38,37,39),
		array(33,35,36,34,26,25,27,28,29,32,30,31),
		array(17,18,19,20,24,21,22,23,13,15,16,14),
		array(52,49,51,50,53,55,54,56,58,57,60,59),
		array(5,6,7,8,9,12,10,11,13,2,4),
		array(21,23,24,22,13,14,15,16,17,20,19,18),
		array(31,32,29,30,34,35,33,36,28,26,27,25),
		array(50,51,49,52,56,54,53,55,59,60,58,57),
		array(40,37,39,38,43,41,42,44,46,45,47,48),
		array(7,8,5,6,10,11,9,12,2,4,1,3),
		array(26,27,25,28,32,30,29,31,36,35,33,34),
		array(16,13,15,14,19,17,18,20,21,22,24,23),
		array(41,42,43,44,45,48,46,47,39,37,40,38),
		array(57,59,60,58,49,50,51,52,56,53,54,55),
		array(9,11,10,12,1,2,3,4,5,8,6,7),
		array(19,20,18,17,22,23,21,24,16,14,13,15),
		array(38,39,40,37,44,42,41,43,47,48,45,46),
		array(28,25,26,27,31,29,30,32,34,33,36,35),
		array(53,54,56,55,57,60,58,59,49,51,52,50),
		array(10,12,9,11,3,4,1,2,6,7,5,8),
		array(34,36,33,35,27,28,25,26,30,31,29,32),
		array(58,60,57,59,51,52,49,50,54,55,53,56),
		array(22,24,21,23,15,16,13,14,18,19,17,20),
		array(46,48,45,47,39,40,37,38,42,43,41,44));

	?>
<style type="text/css">
table.coloring_subsub {
	width: 100%;
	border-width: 0px;
	border-spacing: 2px;
	border-style: solid;
	border-color: white;
	border-collapse: separate;
	background-color: black;
}
table.coloring_subsub th {
	border-width: 0px;
	padding: 1px;
	border-style: inset;
	border-color: gray;
	background-color: black;
	-moz-border-radius: 0px 0px 0px 0px;
}
table.coloring_subsub td {
	border-width: 0px;
	padding: 2px;
	border-style: inset;
	border-color: gray;
	background-color: black;
	-moz-border-radius: 0px 0px 0px 0px;
}

table.coloring_sub {
	width: 100%;
	border-width: 1px;
	border-spacing: 2px;
	border-style: solid;
	border-color: white;
	border-collapse: separate;
	background-color: black;
}
table.coloring_sub th {
	border-width: 0px;
	padding: 1px;
	border-style: inset;
	border-color: gray;
	background-color: black;
	-moz-border-radius: 0px 0px 0px 0px;
}
table.coloring_sub td {
	border-width: 0px;
	padding: 2px;
	border-style: inset;
	border-color: gray;
	background-color: black;
	-moz-border-radius: 0px 0px 0px 0px;
}

table.coloring {
	border-width: 1px;
	border-spacing: 2px;
	border-style: solid;
	border-color: white;
	border-collapse: separate;
	background-color: black;
}
table.coloring th {
	border-width: 0px;
	padding: 2px;
	border-style: inset;
	border-color: gray;
	background-color: black;
	-moz-border-radius: 0px 0px 0px 0px;
}
table.coloring td {
	border-width: 0px;
	padding: 1px;
	border-style: inset;
	border-color: gray;
	background-color: black;
	-moz-border-radius: 0px 0px 0px 0px;
}
</style>

<div style="float:center">
<p>Basis Table</p
<table class="coloring">
<?php
	for ($i=0; $i<$basis_rows; $i++) {
		echo "<tr>";
		for ($j=0; $j<$basis_columns; $j++) {
			echo "<td><table class='coloring_sub'>";
			for ($k=0; $k<$basis_row_display_height; $k++) {
				echo "<tr>";
				echo "<td><table class='coloring_subsub'><tr>";
				for ($m=0; $m<$basis_column_width; $m++) {
					echo "<td>";
						echo $basis[($i*$basis_row_height)+$k][($j*$basis_column_width)+$m];
					echo "</td>";

				}
				echo "</tr></table></td></tr>";
			}
			echo "</table></td>";

		}
		echo "</tr>";
	}

?>
</table>
</div>

<div style="float:center">
<p>Line Table</p
<table class="coloring">
<?php
	for ($i=0; $i<$line_rows; $i++) {
		echo "<tr>";
		for ($j=0; $j<$line_columns; $j++) {
			echo "<td><table class='coloring_sub'>";
			for ($k=0; $k<$line_row_height; $k++) {
				echo "<tr>";
				for ($m=0; $m<$line_column_width; $m++) {
					echo "<td>";
						echo $line[($i*$line_row_height)+$k][($j*$line_column_width)+$m];
					echo "</td>";

				}
				echo "</tr>";
			}
			echo "</table></td>";

		}
		echo "</tr>";
	}

?>
</table>
</div>


<div style="">
<p>Pentagon Table</p
<table class="coloring">
<?php
	for ($i=0; $i<$pentagon_rows; $i++) {
		echo "<tr>";
		for ($j=0; $j<$pentagon_columns; $j++) {
			echo "<td><table class='coloring_sub'>";
			for ($k=0; $k<$pentagon_row_height; $k++) {
				echo "<tr>";
				for ($m=0; $m<$pentagon_column_width; $m++) {
					echo "<td>";
						echo $pentagon[($i*$pentagon_row_height)+$k][($j*$pentagon_column_width)+$m];
					echo "</td>";

				}
				echo "</tr>";
			}
			echo "</table></td>";

		}
		echo "</tr>";
	}

?>
</table>
</div>


<div>
<?php

	echo "done";

?>
</div>
