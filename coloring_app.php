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
		array(45,46,47,48,32,21,53,11,49,8,26,17,19,25,6,50,10,55,24,30),
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
		array(33,59,35,57,34,60,36,58,48,46,41,44,40,39,37,38,42,43,47,45),
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
		array(5,6,7,8,9,12,10,11,1,3,2,4),
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
<body onload='update_examples(0);'>

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
<script type="text/javascript" language="JavaScript">
//need loops in php here to build the arrays
//need an array that stores the specific values[0], the cell index row[2], cell index column[3], and a selection value initialized to zero[1]
	var TableElementArray = new Array();
	TableElementArray[0] = new Array();
	for (var i=0; i<<?php echo count($basis); ?>; i++) {
		TableElementArray[0][i] = new Array();
		for (var j=0; j<<?php echo count($basis[0]); ?>; j++) {
			TableElementArray[0][i][j] = new Array();
		}
	}
<?php
	for ($i=0; $i<$basis_rows; $i++) {
		for ($j=0; $j<$basis_columns; $j++) { // echo "<td>\n<table class='coloring_sub'>\n";
			for ($k=0; $k<$basis_row_display_height; $k++) {
				for ($m=0; $m<$basis_column_width; $m++) {
					echo "\tTableElementArray[0][" . (($i*$basis_row_display_height)+$k) . "][" . (($j*$basis_column_width)+$m) . "][0]=" . $basis[($i*$basis_row_display_height)+$k][($j*$basis_column_width)+$m] . ";\t";
					echo "\tTableElementArray[0][" . (($i*$basis_row_display_height)+$k) . "][" . (($j*$basis_column_width)+$m) . "][1]=0;\t";
					echo "\tTableElementArray[0][" . (($i*$basis_row_display_height)+$k) . "][" . (($j*$basis_column_width)+$m) . "][2]=" . (($i*$basis_row_display_height)+$k)  . ";\t";
					echo "\tTableElementArray[0][" . (($i*$basis_row_display_height)+$k) . "][" . (($j*$basis_column_width)+$m) . "][3]=" . $j  . ";\n";
				}
			}
		}
	}

?>
//need an array that store the values in a cell
//a selection value[0] initialized to zero
	var TableCellRowHeight = new Array();
	var TableCellColumnWidth = new Array();
	TableCellRowHeight[0] = <?php echo $basis_row_height; ?>;
	TableCellColumnWidth[0]= <?php echo $basis_column_width; ?>;
	var TableCellArray = new Array();
	TableCellArray[0] = new Array();
	for (var i=0; i<<?php echo $basis_rows*$basis_row_display_height; ?>; i++) {
		TableCellArray[0][i] = new Array();
		for (var j=0; j<<?php echo $basis_rows; ?>; j++) {
			TableCellArray[0][i][j] = new Array();
			TableCellArray[0][i][j][0]=0;
		}
	}
//need loops in php here to build the arrays
//need an array that stores the specific values[0], the cell index row[2], cell index column[3], and a selection value initialized to zero[1]
	TableElementArray[1] = new Array();
	for (var i=0; i<<?php echo count($line); ?>; i++) {
		TableElementArray[1][i] = new Array();
		for (var j=0; j<<?php echo count($line[0]); ?>; j++) {
			TableElementArray[1][i][j] = new Array();
		}
	}
<?php
	for ($i=0; $i<$line_rows; $i++) {
		for ($j=0; $j<$line_columns; $j++) { // echo "<td>\n<table class='coloring_sub'>\n";
			for ($k=0; $k<$line_row_height; $k++) {
				for ($m=0; $m<$line_column_width; $m++) {
					echo "\tTableElementArray[1][" . (($i*$line_row_height)+$k) . "][" . (($j*$line_column_width)+$m) . "][0]=" . $line[($i*$line_row_height)+$k][($j*$line_column_width)+$m] . ";\t";
					echo "\tTableElementArray[1][" . (($i*$line_row_height)+$k) . "][" . (($j*$line_column_width)+$m) . "][1]=0;\t";
					echo "\tTableElementArray[1][" . (($i*$line_row_height)+$k) . "][" . (($j*$line_column_width)+$m) . "][2]=" . $i  . ";\t";
					echo "\tTableElementArray[1][" . (($i*$line_row_height)+$k) . "][" . (($j*$line_column_width)+$m) . "][3]=" . $j  . ";\t";
				}
			}
		}
	}
?>
//need an array that store the values in a cell
//a selection value[0] initialized to zero
	TableCellRowHeight[1] = <?php echo $line_row_height; ?>;
	TableCellColumnWidth[1] = <?php echo $line_column_width; ?>;
	TableCellArray[1]= new Array();
	for (var i=0; i<<?php echo $line_rows; ?>; i++) {
		TableCellArray[1][i] = new Array();
		for (var j=0; j<<?php echo $line_columns; ?>; j++) {
			TableCellArray[1][i][j] = new Array();
			TableCellArray[1][i][j][0]=0;
			TableCellArray[1][i][j][0]=0;
		}
	}
//need loops in php here to build the arrays
//need an array that stores the specific values[0], the cell index row[2], cell index column[3], and a selection value initialized to zero[1]
	TableElementArray[2] = new Array();
	for (var i=0; i<<?php echo count($pentagon); ?>; i++) {
		TableElementArray[2][i] = new Array();
		for (var j=0; j<<?php echo count($pentagon[0]); ?>; j++) {
			TableElementArray[2][i][j] = new Array();
		}
	}
<?php
	for ($i=0; $i<$pentagon_rows; $i++) {
		for ($j=0; $j<$pentagon_columns; $j++) { 
			for ($k=0; $k<$pentagon_row_height; $k++) {
				for ($m=0; $m<$pentagon_column_width; $m++) {
					echo "\tTableElementArray[2][" . (($i*$pentagon_row_height)+$k) . "][" . (($j*$pentagon_column_width)+$m) . "][0]=" . $pentagon[($i*$pentagon_row_height)+$k][($j*$pentagon_column_width)+$m] . ";\t";
					echo "\tTableElementArray[2][" . (($i*$pentagon_row_height)+$k) . "][" . (($j*$pentagon_column_width)+$m) . "][1]=0;\t";
					echo "\tTableElementArray[2][" . (($i*$pentagon_row_height)+$k) . "][" . (($j*$pentagon_column_width)+$m) . "][2]=" . $i  . ";\t";
					echo "\tTableElementArray[2][" . (($i*$pentagon_row_height)+$k) . "][" . (($j*$pentagon_column_width)+$m) . "][3]=" . $j  . ";\n";
				}
			}
		}
	}

?>
//need an array that store the values in a cell
//a selection value[0] initialized to zero
	TableCellRowHeight[2] = <?php echo $pentagon_row_height; ?>;
	TableCellColumnWidth[2] = <?php echo $pentagon_column_width; ?>;
	TableCellArray[2] = new Array();
	for (var i=0; i<<?php echo $pentagon_rows; ?>; i++) {
		TableCellArray[2][i] = new Array();
		for (var j=0; j<<?php echo $pentagon_columns; ?>; j++) {
			TableCellArray[2][i][j] = new Array();
			TableCellArray[2][i][j][0]=0;
		}
	}
	var NumColoringArray = new Array();
	for (var i=1; i<=60; i++) {
		NumColoringArray[i] = new Array();
		//green
		NumColoringArray[i][1] = 0;
		//red
		NumColoringArray[i][-1] = 0;
		//blue
		NumColoringArray[i][2] = 0;
	}

	function update_examples(type) {
		var ex_dd = "<select id='example_group' onchange='update_examples(1);'>";
		ex_dd += "<option value='0'>None</option>";
		ex_dd += "<option value='1'>26-13</option>";
		ex_dd += "<option value='2'>30-15</option>";
		ex_dd += "<option value='3'>32-17</option>";
		ex_dd += "<option value='4'>33-17</option>";
		ex_dd += "<option value='5'>34-17</option>";
		ex_dd += "<option value='6'>36-19</option>";
		ex_dd += "<option value='7'>37-19</option>";
		ex_dd += "<option value='8'>38-19</option>";
		ex_dd += "<option value='9'>38-21</option>";
		ex_dd += "<option value='10'>39-21</option>";
		ex_dd += "<option value='11'>40-21</option>";
		ex_dd += "<option value='12'>41-21</option>";
		ex_dd += "<option value='13'>42-21</option>";
		ex_dd += "<option value='14'>43-23</option>";
		ex_dd += "<option value='15'>44-23</option>";
		ex_dd += "<option value='16'>45-23</option>";
		ex_dd += "<option value='17'>46-23</option>";
		ex_dd += "<option value='18'>48-25</option>";
		ex_dd += "<option value='19'>49-25</option>";
		ex_dd += "<option value='20'>50-25</option>";
		ex_dd += "<option value='21'>53-27</option>";
		ex_dd += "<option value='22'>54-27</option>";
		ex_dd += "<option value='23'>40-23</option>";
		ex_dd += "<option value='24'>41-23</option>";
		ex_dd += "<option value='25'>42-23</option>";
		ex_dd += "<option value='26'>42-25</option>";
		ex_dd += "<option value='27'>43-25</option>";
		ex_dd += "<option value='28'>44-25</option>";
		ex_dd += "<option value='29'>45-25</option>";
		ex_dd += "<option value='30'>46-25</option>";
		ex_dd += "<option value='31'>47-25</option>";
		ex_dd += "<option value='32'>44-27</option>";
		ex_dd += "<option value='33'>45-27</option>";
		ex_dd += "<option value='34'>46-27</option>";
		ex_dd += "<option value='35'>47-27</option>";
		ex_dd += "<option value='36'>48-27</option>";
		ex_dd += "<option value='37'>49-27</option>";
		ex_dd += "<option value='38'>50-27</option>";
		ex_dd += "<option value='39'>51-27</option>";
		ex_dd += "<option value='40'>52-27</option>";
		ex_dd += "<option value='41'>46-29</option>";
		ex_dd += "<option value='42'>47-29</option>";
		ex_dd += "<option value='43'>48-29</option>";
		ex_dd += "<option value='44'>49-29</option>";
		ex_dd += "<option value='45'>50-29</option>";
		ex_dd += "<option value='46'>51-29</option>";
		ex_dd += "<option value='47'>52-29</option>";
		ex_dd += "<option value='48'>53-29</option>";
		ex_dd += "<option value='49'>54-29</option>";
		ex_dd += "<option value='50'>55-29</option>";
		ex_dd += "<option value='51'>56-29</option>";
		ex_dd += "<option value='52'>48-31</option>";
		ex_dd += "<option value='53'>49-31</option>";
		ex_dd += "<option value='54'>50-31</option>";
		ex_dd += "<option value='55'>51-31</option>";
		ex_dd += "<option value='56'>52-31</option>";
		ex_dd += "<option value='57'>53-31</option>";
		ex_dd += "<option value='58'>54-31</option>";
		ex_dd += "<option value='59'>55-31</option>";
		ex_dd += "<option value='60'>56-31</option>";
		ex_dd += "<option value='61'>57-31</option>";
		ex_dd += "<option value='62'>58-31</option>";
		ex_dd += "<option value='63'>51-33</option>";
		ex_dd += "<option value='64'>52-33</option>";
		ex_dd += "<option value='65'>53-33</option>";
		ex_dd += "<option value='66'>54-33</option>";
		ex_dd += "<option value='67'>55-33</option>";
		ex_dd += "<option value='68'>56-33</option>";
		ex_dd += "<option value='69'>57-33</option>";
		ex_dd += "<option value='70'>58-33</option>";
		ex_dd += "<option value='71'>59-33</option>";
		ex_dd += "<option value='72'>60-33</option>";
		ex_dd += "<option value='73'>53-35</option>";
		ex_dd += "<option value='74'>54-35</option>";
		ex_dd += "<option value='75'>55-35</option>";
		ex_dd += "<option value='76'>56-35</option>";
		ex_dd += "<option value='77'>57-35</option>";
		ex_dd += "<option value='78'>58-35</option>";
		ex_dd += "<option value='79'>59-35</option>";		
		ex_dd += "<option value='80'>60-35</option>";
		ex_dd += "<option value='81'>55-37</option>";
		ex_dd += "<option value='82'>56-37</option>";
		ex_dd += "<option value='83'>57-37</option>";
		ex_dd += "<option value='84'>58-37</option>";
		ex_dd += "<option value='85'>59-37</option>";
		ex_dd += "<option value='86'>60-37</option>";
		ex_dd += "<option value='87'>58-39</option>";
		ex_dd += "<option value='88'>59-39</option>";
		ex_dd += "<option value='89'>60-39</option>";
		ex_dd += "<option value='90'>60-41</option>";
		ex_dd += "</select>";
	
		if (type == 0) {
			document.getElementById('example_area').innerHTML = ex_dd;
			return;
		}

		var example_group = parseInt(document.getElementById('example_group').value);
		if (example_group==0 ) {
			document.getElementById('example_area').innerHTML = ex_dd;
			return;
		}

		ex_dd += "<select id='example'>";
		switch(example_group) {
			case 1:
				//26-13
				ex_dd += "<option value='1,10,15,18,26,28,35,39,50,54,63,71,73'>1</option>";
				break;
			case 2:
				//30-15
				ex_dd += "<option value='1,8,9,21,24,26,28,33,47,55,57,66,67,71,74'>1</option>";
				ex_dd += "<option value='1,4,5,21,24,26,28,32,49,53,55,59,61,71,72'>2</option>";
				ex_dd += "<option value='1,15,17,25,26,28,32,43,49,54,55,63,71,72,74'>3</option>";
				ex_dd += "<option value='1,15,17,26,27,28,33,44,48,55,57,59,65,67,71'>4</option>";
				ex_dd += "<option value='1,4,8,12,14,18,21,22,26,28,63,66,67,71,73'>5</option>";
				ex_dd += "<option value='1,10,15,17,26,28,33,42,44,48,57,59,62,71,73'>6</option>";
				break;
			case 3:
				//32-17
				ex_dd += "<option value='1,4,11,15,17,21,26,28,38,48,49,55,59,61,65,71,74'>1</option>";
				break;
			case 4:
				//33-17
				ex_dd += "<option value='1,4,8,9,11,24,26,27,28,38,44,47,49,55,61,66,71'>1</option>";
				ex_dd += "<option value='1,4,24,26,28,38,42,45,49,51,53,55,59,61,65,71,72'>2</option>";
				ex_dd += "<option value='1,4,14,18,21,25,26,28,32,35,43,53,55,61,63,67,71'>3</option>";
				break;
			case 5:
				//34-17
				ex_dd += "<option value='1,4,11,18,21,26,32,35,40,53,55,56,59,69,71,72,75'>1</option>";
				ex_dd += "<option value='1,4,11,17,20,26,38,40,42,44,53,55,57,59,62,65,71'>2</option>";
				ex_dd += "<option value='1,3,4,5,25,26,28,30,34,35,46,49,53,55,58,70,71'>3</option>";
				ex_dd += "<option value='1,3,4,5,18,21,24,26,28,31,32,55,56,58,59,71,72'>4</option>";
				ex_dd += "<option value='1,3,15,26,27,28,32,33,44,55,57,59,67,69,71,72,74'>5</option>";
				ex_dd += "<option value='1,4,5,18,25,26,28,30,31,34,35,46,55,56,61,70,71'>6</option>";
				ex_dd += "<option value='1,3,8,9,16,20,24,26,28,31,33,38,39,55,56,70,71'>7</option>";
				ex_dd += "<option value='1,2,4,5,18,21,22,26,28,31,32,34,35,55,56,70,71'>8</option>";
				ex_dd += "<option value='1,2,3,8,21,26,30,34,41,44,48,52,53,54,65,71,73'>9</option>";
				break;
			case 6:
				//36-19
				ex_dd += "<option value='1,4,6,12,13,18,26,29,33,42,43,46,52,53,56,59,61,71,73'>1</option>";
				ex_dd += "<option value='1,4,11,18,20,26,33,35,38,39,40,48,50,53,54,55,63,65,71'>2</option>";
				ex_dd += "<option value='1,4,11,17,21,26,31,35,40,48,49,55,58,59,61,65,71,74,75'>3</option>";
				ex_dd += "<option value='1,4,5,8,9,21,24,26,30,32,40,41,50,53,55,59,63,71,72'>4</option>";
				ex_dd += "<option value='1,4,5,8,9,21,24,26,29,33,40,42,48,55,57,66,69,71,74'>5</option>";
				ex_dd += "<option value='1,4,6,8,16,24,26,27,28,30,31,38,49,55,59,61,67,70,71'>6</option>";
				ex_dd += "<option value='1,4,9,10,25,26,28,35,36,45,46,47,55,57,60,61,66,68,71'>7</option>";
				ex_dd += "<option value='1,3,4,7,9,21,26,27,31,39,40,43,50,55,56,62,67,71,74'>8</option>";
				ex_dd += "<option value='1,4,5,8,9,21,23,26,28,31,40,42,50,52,55,60,62,70,71'>9</option>";
				ex_dd += "<option value='1,4,6,8,9,21,23,26,30,32,40,42,50,53,55,60,62,71,72'>10</option>";
				ex_dd += "<option value='1,4,5,7,9,21,24,26,28,31,40,42,48,55,56,64,69,71,74'>11</option>";
				ex_dd += "<option value='1,2,4,5,8,24,25,26,28,30,37,46,49,55,59,61,66,71,73'>12</option>";
				ex_dd += "<option value='1,4,14,22,26,28,30,39,42,43,44,46,48,53,55,62,63,67,71'>13</option>";
				ex_dd += "<option value='1,3,4,5,13,25,26,28,34,35,45,46,49,53,55,61,65,68,71'>14</option>";
				ex_dd += "<option value='1,3,4,18,24,26,28,31,38,42,45,51,55,56,58,59,65,71,72'>15</option>";
				ex_dd += "<option value='1,4,12,15,18,19,26,28,31,32,37,53,55,56,61,63,69,71,72'>16</option>";
				ex_dd += "<option value='1,4,9,12,20,21,25,26,28,35,36,43,55,57,60,61,66,67,71'>17</option>";
				ex_dd += "<option value='1,3,4,9,21,24,26,27,31,40,43,50,52,55,56,64,67,70,71'>18</option>";
				ex_dd += "<option value='1,4,5,9,21,26,28,31,39,40,42,48,52,55,56,62,69,70,71'>19</option>";
				ex_dd += "<option value='1,4,6,10,15,17,22,23,26,28,32,41,44,48,55,60,63,71,74'>20</option>";
				ex_dd += "<option value='1,4,9,12,13,16,21,23,26,28,35,36,55,57,61,66,67,71,75'>21</option>";
				break;
			case 7:
				//37-19
				ex_dd += "<option value='1,4,6,12,17,26,35,38,40,41,44,48,55,63,65,66,71,74,75'>1</option>";
				ex_dd += "<option value='1,2,4,10,19,26,31,38,40,42,44,50,55,62,63,65,71,73,75'>2</option>";
				ex_dd += "<option value='1,4,6,11,17,23,24,26,36,38,40,41,44,47,55,63,65,66,71'>3</option>";
				ex_dd += "<option value='1,2,4,11,20,26,33,38,40,42,44,50,53,54,55,62,63,65,71'>4</option>";
				ex_dd += "<option value='1,4,8,10,13,15,26,27,28,34,36,44,55,57,60,61,65,69,71'>5</option>";
				ex_dd += "<option value='1,4,8,10,11,26,28,37,38,42,44,55,59,61,62,65,66,71,73'>6</option>";
				ex_dd += "<option value='1,4,7,14,18,21,23,25,26,28,31,32,35,36,42,55,61,63,71'>7</option>";
				ex_dd += "<option value='1,3,4,9,11,14,19,24,26,28,31,37,38,47,55,56,61,71,72'>8</option>";
				ex_dd += "<option value='1,2,4,9,12,13,21,23,26,28,31,35,36,47,55,57,61,70,71'>9</option>";
				ex_dd += "<option value='1,10,11,12,16,26,28,30,35,39,44,46,52,54,55,63,64,66,71'>10</option>";
				ex_dd += "<option value='1,10,11,12,18,26,28,29,34,38,43,48,52,53,55,62,64,65,71'>11</option>";
				ex_dd += "<option value='1,4,7,8,24,26,28,29,30,33,34,46,49,55,57,61,66,70,71'>12</option>";
				ex_dd += "<option value='1,4,5,6,7,22,24,26,28,31,32,42,44,46,48,55,59,71,74'>13</option>";
				ex_dd += "<option value='1,4,6,10,13,15,17,26,28,30,34,39,44,48,55,56,57,61,71'>14</option>";
				ex_dd += "<option value='1,4,6,21,23,26,28,32,41,42,49,53,55,60,61,62,63,71,72'>15</option>";
				break;
			case 8:
				//38-19
				ex_dd += "<option value='1,2,4,5,10,26,31,34,38,40,42,44,55,62,65,69,70,71,75'>1</option>";
				ex_dd += "<option value='1,4,8,12,14,26,27,32,35,38,40,44,55,56,63,66,69,71,75'>2</option>";
				ex_dd += "<option value='1,4,7,10,13,25,26,31,34,38,40,44,55,57,62,65,69,71,75'>3</option>";
				ex_dd += "<option value='1,3,4,6,12,26,32,35,38,40,41,44,55,63,66,69,71,72,75'>4</option>";
				ex_dd += "<option value='1,2,4,14,21,26,27,28,31,32,35,44,50,55,56,58,63,69,71'>5</option>";
				ex_dd += "<option value='1,4,6,13,17,25,26,28,31,34,35,44,46,55,57,58,65,69,71'>6</option>";
				ex_dd += "<option value='1,5,14,20,21,24,26,32,33,39,40,49,50,53,55,61,63,67,71'>7</option>";
				ex_dd += "<option value='1,8,13,21,22,24,26,32,33,34,40,47,48,49,55,66,67,69,71'>8</option>";
				ex_dd += "<option value='1,4,7,13,18,21,22,25,26,28,31,32,34,35,42,55,56,57,71'>9</option>";
				ex_dd += "<option value='1,4,7,13,22,24,26,28,30,42,46,49,53,55,57,59,70,71,72'>10</option>";
				ex_dd += "<option value='1,2,4,7,13,18,26,28,30,31,34,35,42,46,55,56,57,61,71'>11</option>";
				ex_dd += "<option value='1,2,3,4,7,13,26,28,30,34,35,42,46,49,53,55,57,58,71'>12</option>";
				break;
			case 9:
				//38-21
				ex_dd += "<option value='1,4,6,7,9,12,19,23,25,26,29,35,37,40,41,44,48,55,66,69,74'>1</option>";
				ex_dd += "<option value='1,4,6,11,15,19,23,26,27,33,37,38,40,45,47,55,58,61,63,65,68'>2</option>";
				ex_dd += "<option value='1,2,4,8,11,19,23,26,28,29,31,40,42,43,50,53,56,63,64,66,75'>3</option>";
				ex_dd += "<option value='1,4,6,9,19,22,23,26,28,31,33,35,42,44,51,55,59,63,68,73,75'>4</option>";
				ex_dd += "<option value='1,2,4,12,15,19,22,23,26,29,32,38,40,42,50,55,58,63,69,73,75'>5</option>";
				ex_dd += "<option value='1,4,6,11,13,19,23,26,27,31,40,45,50,54,58,59,61,67,68,70,75'>6</option>";
				ex_dd += "<option value='1,4,6,7,14,19,22,23,26,28,29,34,41,48,52,59,63,64,66,67,74'>7</option>";
				ex_dd += "<option value='1,4,6,9,13,19,22,23,26,28,29,31,34,35,37,44,51,55,63,68,75'>8</option>";
				ex_dd += "<option value='1,2,4,8,10,19,23,26,28,29,35,39,42,48,55,56,58,63,65,66,73'>9</option>";
				ex_dd += "<option value='1,4,8,9,15,19,21,23,26,28,29,31,34,40,42,44,52,55,63,66,73'>10</option>";
				ex_dd += "<option value='1,4,6,7,9,15,19,23,26,28,29,34,37,40,46,48,49,52,55,63,74'>11</option>";
				ex_dd += "<option value='1,4,5,11,19,23,25,26,30,33,40,43,45,50,53,58,61,63,65,68,75'>12</option>";
				ex_dd += "<option value='1,4,10,13,15,16,19,23,24,26,33,34,40,49,50,54,60,69,70,71,75'>13</option>";
				ex_dd += "<option value='1,2,4,11,14,19,22,23,26,29,31,37,40,42,50,56,59,61,67,73,75'>14</option>";
				ex_dd += "<option value='1,4,6,8,13,14,19,22,23,26,28,31,33,34,41,44,49,56,59,63,67'>15</option>";
				ex_dd += "<option value='1,2,4,9,12,19,23,26,28,29,31,34,35,40,42,44,50,52,55,63,73'>16</option>";
				ex_dd += "<option value='1,2,4,7,11,15,19,23,26,28,31,33,35,38,42,43,50,53,57,58,63'>17</option>";
				ex_dd += "<option value='1,2,4,9,12,13,19,23,26,28,31,33,35,37,40,44,50,52,55,59,63'>18</option>";
				break;
			case 10:
				//39-21
				ex_dd += "<option value='1,4,7,11,17,19,23,26,28,29,40,42,45,47,51,53,56,63,64,67,72'>1</option>";
				ex_dd += "<option value='1,4,5,8,16,17,19,22,23,26,28,31,33,34,42,45,51,57,59,63,69'>2</option>";
				ex_dd += "<option value='1,2,4,9,10,16,18,19,23,26,28,29,34,39,42,48,58,63,65,66,75'>3</option>";
				ex_dd += "<option value='1,4,6,8,16,18,19,22,23,26,28,31,33,34,42,44,51,56,59,63,68'>4</option>";
				ex_dd += "<option value='1,2,4,7,10,16,17,19,23,26,28,29,34,39,40,48,59,63,64,66,75'>5</option>";
				ex_dd += "<option value='1,2,4,7,14,16,19,20,22,23,26,28,29,34,39,43,48,57,66,67,75'>7</option>";
				ex_dd += "<option value='1,3,4,12,15,18,19,21,23,25,26,28,29,35,42,43,49,56,58,63,69'>8</option>";
				ex_dd += "<option value='1,4,13,15,17,19,22,23,25,26,34,35,38,40,43,54,57,58,69,72,75'>9</option>";
				ex_dd += "<option value='1,2,4,11,13,19,22,23,26,29,31,33,34,40,45,47,50,51,54,61,67'>10</option>";
				ex_dd += "<option value='1,4,7,13,17,19,23,25,26,28,31,34,38,43,46,51,54,58,68,69,72'>11</option>";
				ex_dd += "<option value='1,4,7,10,16,19,23,26,28,29,33,34,39,40,48,50,54,57,64,66,75'>12</option>";
				ex_dd += "<option value='1,4,8,13,14,19,21,22,23,26,28,31,33,41,44,46,49,52,63,64,67'>13</option>";
				ex_dd += "<option value='1,4,15,19,20,23,26,28,29,31,34,40,41,43,46,48,52,57,62,66,74'>14</option>";
				ex_dd += "<option value='1,4,13,19,21,23,26,28,29,31,34,41,42,43,46,48,53,57,61,66,74'>15</option>";
				ex_dd += "<option value='1,4,5,9,14,19,22,23,26,28,29,31,39,44,47,48,50,55,62,69,73'>16</option>";
				ex_dd += "<option value='1,4,6,7,19,22,23,26,28,33,37,41,42,43,44,49,57,59,66,72,73'>17</option>";
				ex_dd += "<option value='1,4,5,14,19,23,26,28,29,31,32,34,39,40,47,48,50,52,55,62,73'>18</option>";
				ex_dd += "<option value='1,4,6,11,14,19,23,26,27,29,30,31,40,45,47,50,51,56,59,65,67'>19</option>";
				ex_dd += "<option value='1,3,4,11,13,16,19,20,23,26,27,31,33,36,40,44,49,57,60,63,69'>20</option>";
				ex_dd += "<option value='1,4,10,11,13,16,19,22,23,25,26,28,31,36,43,54,57,59,60,67,72'>21</option>";
				ex_dd += "<option value='1,4,6,7,10,17,19,20,23,26,28,29,34,40,41,43,48,52,57,66,74'>22</option>";
				ex_dd += "<option value='1,2,4,11,15,19,22,23,26,28,31,33,35,42,43,46,50,51,53,63,68'>23</option>";
				ex_dd += "<option value='1,3,4,9,11,19,23,26,28,29,31,45,47,49,51,59,61,63,65,67,72'>24</option>";
				ex_dd += "<option value='1,4,8,13,16,19,23,25,26,28,31,34,38,45,46,50,54,58,68,69,70'>25</option>";
				ex_dd += "<option value='1,4,8,11,16,19,23,26,28,29,40,42,43,47,50,53,56,63,64,67,70'>26</option>";
				ex_dd += "<option value='1,4,10,11,12,17,19,22,23,26,32,36,40,54,58,59,60,65,66,67,75'>27</option>";
				ex_dd += "<option value='1,4,6,12,19,23,26,27,29,31,32,33,40,51,54,59,65,67,68,69,75'>28</option>";
				ex_dd += "<option value='1,4,7,8,9,16,19,23,25,26,31,32,40,45,48,49,50,51,54,70,74'>29</option>";
				ex_dd += "<option value='1,2,3,4,11,16,19,22,23,26,33,34,40,41,42,50,51,53,58,68,75'>30</option>";
				ex_dd += "<option value='1,4,8,12,16,17,18,19,23,26,31,34,37,40,48,49,54,56,73,74,75'>31</option>";
				ex_dd += "<option value='1,3,4,8,11,19,22,23,24,26,28,29,31,45,51,53,55,63,65,66,73'>32</option>";
				ex_dd += "<option value='1,2,4,11,13,19,22,23,26,28,29,30,31,34,35,37,51,55,59,63,68'>33</option>";
				ex_dd += "<option value='1,3,4,9,10,19,23,26,29,30,31,40,41,44,50,53,55,62,65,66,73'>34</option>";
				ex_dd += "<option value='1,2,4,9,10,19,23,26,29,30,31,40,42,43,46,53,54,60,66,69,71'>35</option>";
				ex_dd += "<option value='1,4,9,14,17,19,23,25,26,30,31,36,39,40,41,43,48,49,54,60,72'>36</option>";
				ex_dd += "<option value='1,3,4,7,10,14,19,23,26,29,31,32,34,39,40,43,47,65,69,70,74'>37</option>";
				ex_dd += "<option value='1,4,14,15,19,20,23,26,29,34,35,39,40,43,46,47,48,51,68,70,75'>38</option>";
				ex_dd += "<option value='1,4,6,7,14,15,19,23,24,26,29,34,40,43,46,47,48,52,64,72,74'>39</option>";
				ex_dd += "<option value='1,4,8,10,11,19,21,22,23,26,28,31,32,33,36,38,57,60,63,65,67'>40</option>";
				ex_dd += "<option value='1,2,3,4,14,19,20,23,26,28,29,39,41,48,51,58,63,66,67,68,75'>41</option>";
				ex_dd += "<option value='1,4,6,14,19,23,26,29,30,34,39,40,47,48,50,53,55,62,70,72,73'>42</option>";
				ex_dd += "<option value='1,4,6,9,14,19,22,23,26,29,30,31,37,40,42,44,50,56,61,67,73'>43</option>";
				ex_dd += "<option value='1,3,4,7,10,19,23,26,29,30,31,34,36,40,41,43,47,60,65,69,70'>44</option>";
				ex_dd += "<option value='1,4,6,7,9,13,19,23,26,29,30,34,37,40,43,44,50,53,57,63,73'>45</option>";
				ex_dd += "<option value='1,2,4,9,14,19,23,25,26,28,31,32,33,40,48,49,50,57,64,67,74'>46</option>";
				ex_dd += "<option value='1,4,6,15,19,23,26,28,29,34,39,40,46,47,48,59,62,63,64,67,70'>47</option>";
				ex_dd += "<option value='1,11,12,13,19,20,21,23,26,34,37,38,39,40,50,53,56,58,59,63,73'>48</option>";
				ex_dd += "<option value='1,4,5,6,9,17,19,23,25,26,40,43,44,45,53,54,57,58,61,65,68'>49</option>";
				ex_dd += "<option value='1,2,3,4,6,11,19,23,26,27,29,31,40,41,42,50,53,59,66,67,75'>50</option>";
				ex_dd += "<option value='1,4,13,15,19,20,23,25,26,27,29,38,40,43,47,50,62,63,69,70,75'>51</option>";
				ex_dd += "<option value='1,3,4,7,8,9,14,19,23,26,27,29,32,40,43,44,48,56,66,69,74'>52</option>";
				ex_dd += "<option value='1,2,3,4,6,14,19,23,26,28,29,35,39,41,48,58,62,63,66,67,72'>53</option>";
				ex_dd += "<option value='1,2,4,12,13,19,22,23,26,28,31,32,33,34,35,37,50,55,59,63,69'>54</option>";
				ex_dd += "<option value='1,3,4,7,11,19,23,26,29,30,33,40,41,43,50,54,57,63,65,66,75'>55</option>";
				ex_dd += "<option value='1,4,14,15,19,21,23,26,29,39,40,43,47,48,52,56,59,62,64,70,72'>56</option>";
				break;
			case 11:
				//40-21
				ex_dd += "<option value='1,4,14,17,18,22,26,28,30,33,35,43,46,50,53,54,55,57,59,67,71'>1</option>";
				ex_dd += "<option value='1,3,4,7,9,11,17,24,25,26,28,31,38,45,51,55,61,69,71,72,75'>2</option>";
				ex_dd += "<option value='1,2,4,8,11,12,17,26,28,35,38,48,49,50,55,59,61,65,66,71,74'>3</option>";
				ex_dd += "<option value='1,4,5,9,11,12,14,21,26,35,40,47,53,55,56,59,63,69,71,72,75'>4</option>";
				ex_dd += "<option value='1,4,6,9,10,12,13,21,26,31,37,40,42,45,50,55,62,68,70,71,73'>5</option>";
				ex_dd += "<option value='1,4,11,13,17,21,26,28,31,35,40,44,52,55,57,58,59,61,65,71,75'>6</option>";
				ex_dd += "<option value='1,4,8,11,18,20,24,26,38,39,40,41,45,48,50,53,55,63,65,68,71'>7</option>";
				ex_dd += "<option value='1,4,6,8,9,13,15,17,26,27,28,30,31,47,55,57,61,65,66,70,71'>8</option>";
				ex_dd += "<option value='1,4,5,8,12,21,26,27,29,35,40,42,44,47,54,55,63,65,66,69,71'>9</option>";
				ex_dd += "<option value='1,4,11,24,25,26,29,38,40,42,43,47,49,53,54,55,63,65,67,69,71'>10</option>";
				ex_dd += "<option value='1,4,11,18,20,23,24,26,38,40,41,45,53,55,56,60,63,65,68,69,71'>11</option>";
				ex_dd += "<option value='1,4,6,10,13,20,22,25,26,31,34,35,40,44,46,55,58,65,69,71,72'>12</option>";
				ex_dd += "<option value='1,3,4,7,9,17,18,21,25,26,31,32,35,40,42,49,55,56,65,71,72'>13</option>";
				ex_dd += "<option value='1,4,5,8,9,17,20,21,26,27,32,40,42,47,55,57,62,65,66,71,72'>14</option>";
				ex_dd += "<option value='1,3,4,6,12,16,17,26,34,35,40,43,44,46,48,55,65,66,71,74,75'>15</option>";
				ex_dd += "<option value='1,2,4,5,10,16,18,26,34,35,38,39,40,47,48,55,65,66,67,69,71'>16</option>";
				ex_dd += "<option value='1,8,20,26,30,33,37,40,42,43,44,46,48,50,55,59,61,62,66,71,73'>17</option>";
				ex_dd += "<option value='1,13,21,24,26,32,33,34,37,40,47,48,49,53,55,61,67,69,71,72,73'>18</option>";
				ex_dd += "<option value='1,4,5,11,14,18,26,29,35,38,40,42,47,53,54,55,59,65,69,71,72'>19</option>";
				ex_dd += "<option value='1,4,6,7,11,17,22,26,35,40,42,44,46,53,55,58,59,65,71,72,75'>20</option>";
				ex_dd += "<option value='1,3,20,21,26,27,32,33,40,42,48,49,53,55,59,61,62,67,69,71,72'>21</option>";
				ex_dd += "<option value='1,2,20,21,25,26,32,33,40,42,43,44,48,50,53,55,59,61,62,71,72'>22</option>";
				ex_dd += "<option value='1,4,8,10,11,23,24,26,28,31,34,38,49,50,55,60,61,65,69,70,71'>23</option>";
				ex_dd += "<option value='1,4,7,16,17,22,23,26,28,31,34,38,43,44,55,60,62,65,69,71,72'>24</option>";
				ex_dd += "<option value='1,4,7,8,9,10,12,17,21,22,26,27,40,43,55,58,62,66,67,71,72'>25</option>";
				ex_dd += "<option value='1,2,3,4,11,24,26,27,29,38,40,42,44,47,50,53,54,55,63,65,71'>26</option>";
				ex_dd += "<option value='1,4,5,6,11,17,20,23,24,26,38,40,41,44,53,55,57,60,63,65,71'>27</option>";
				ex_dd += "<option value='1,4,5,6,7,9,13,17,21,25,26,28,31,35,40,42,45,52,55,68,71'>28</option>";
				ex_dd += "<option value='1,4,8,22,23,26,28,31,34,38,44,45,50,51,55,60,62,65,69,70,71'>29</option>";
				ex_dd += "<option value='1,4,5,8,11,12,14,18,24,26,27,28,32,38,44,49,55,61,63,66,71'>30</option>";
				ex_dd += "<option value='1,4,7,22,24,26,28,42,45,46,49,53,55,57,58,59,61,65,68,71,72'>31</option>";
				ex_dd += "<option value='1,2,4,5,12,17,18,23,24,26,38,39,40,55,59,60,65,66,71,74,75'>32</option>";
				ex_dd += "<option value='1,3,4,6,10,23,24,26,40,43,44,46,47,55,59,60,65,66,67,69,71'>33</option>";
				ex_dd += "<option value='1,3,4,6,26,27,28,30,34,35,37,38,47,49,53,55,58,70,71,73,75'>34</option>";
				ex_dd += "<option value='1,2,4,5,18,20,24,26,28,31,32,38,39,55,57,58,59,71,72,74,75'>35</option>";
				ex_dd += "<option value='1,4,6,18,26,27,28,30,31,34,35,37,38,47,55,56,61,70,71,73,75'>36</option>";
				ex_dd += "<option value='1,3,4,6,12,20,21,23,24,26,40,44,45,55,59,60,65,66,68,69,71'>37</option>";
				ex_dd += "<option value='1,2,4,6,17,21,22,26,28,31,32,34,35,44,45,55,57,68,69,70,71'>38</option>";
				ex_dd += "<option value='1,2,4,5,10,23,24,26,37,38,40,49,50,55,59,60,65,66,71,73,75'>39</option>";
				ex_dd += "<option value='1,2,4,6,16,18,26,27,28,30,34,35,37,38,55,56,61,66,67,71,73'>40</option>";
				ex_dd += "<option value='1,4,6,17,25,26,28,30,31,34,35,44,45,46,55,57,61,68,69,70,71'>41</option>";
				ex_dd += "<option value='1,4,10,12,19,21,22,26,28,37,42,44,53,55,58,61,62,63,65,71,72'>42</option>";
				ex_dd += "<option value='1,4,7,17,18,26,28,29,30,31,35,37,46,50,54,55,56,61,63,71,73'>43</option>";
				ex_dd += "<option value='1,3,4,8,14,21,23,26,27,28,32,42,49,53,55,56,60,61,62,63,71'>44</option>";
				ex_dd += "<option value='1,2,4,5,6,7,21,24,25,26,28,30,31,42,44,48,55,59,61,71,74'>45</option>";
				ex_dd += "<option value='1,3,4,5,8,14,24,26,27,28,32,34,41,46,49,52,53,55,61,64,71'>46</option>";
				ex_dd += "<option value='1,2,4,6,7,13,18,21,26,28,30,31,35,42,52,55,57,59,61,64,71'>47</option>";
				ex_dd += "<option value='1,4,8,11,14,15,26,27,28,32,34,38,41,46,49,52,55,61,64,69,71'>48</option>";
				ex_dd += "<option value='1,4,7,9,11,13,18,21,26,28,31,35,42,44,52,55,57,61,64,71,75'>49</option>";
				ex_dd += "<option value='1,4,12,17,19,20,21,26,37,40,42,44,53,55,57,58,61,62,63,65,71'>50</option>";
				ex_dd += "<option value='1,4,10,24,26,27,28,39,40,41,44,46,47,48,50,55,63,64,65,66,71'>51</option>";
				ex_dd += "<option value='1,4,9,12,14,25,26,28,30,31,32,34,35,46,47,55,56,61,63,70,71'>52</option>";
				ex_dd += "<option value='1,4,7,8,13,24,26,28,30,37,42,46,49,55,57,59,61,66,70,71,73'>53</option>";
				ex_dd += "<option value='1,4,20,21,23,26,28,32,35,41,42,49,51,53,55,60,61,63,68,71,75'>54</option>";
				ex_dd += "<option value='1,4,7,8,11,15,17,19,26,28,38,41,42,46,49,55,59,61,65,71,73'>55</option>";
				ex_dd += "<option value='1,2,4,7,9,12,13,21,26,28,35,42,43,47,53,55,57,61,67,70,71'>56</option>";
				ex_dd += "<option value='1,4,5,6,8,18,21,24,26,27,28,30,31,36,39,55,58,59,60,71,74'>57</option>";
				ex_dd += "<option value='1,4,7,18,21,22,25,26,28,29,31,32,33,35,37,55,56,57,59,71,73'>58</option>";
				ex_dd += "<option value='1,2,4,5,11,17,18,26,35,36,38,39,40,47,48,55,59,60,65,66,71'>59</option>";
				ex_dd += "<option value='1,3,4,6,11,17,18,26,34,35,40,46,48,52,53,55,64,65,71,74,75'>60</option>";
				ex_dd += "<option value='1,4,7,10,15,25,26,28,30,34,35,44,45,55,57,61,62,68,69,70,71'>61</option>";
				ex_dd += "<option value='1,4,9,11,14,19,20,26,27,28,29,31,33,37,38,55,56,61,62,71,72'>62</option>";
				ex_dd += "<option value='1,4,6,7,8,9,14,21,26,31,39,40,41,43,50,55,62,67,71,72,74'>63</option>";
				ex_dd += "<option value='1,2,3,4,5,9,13,21,26,35,40,48,53,55,57,58,61,69,70,71,74'>64</option>";
				ex_dd += "<option value='1,4,6,8,9,14,21,24,26,31,40,41,43,50,52,55,64,67,70,71,72'>65</option>";
				ex_dd += "<option value='1,4,5,7,9,13,21,24,26,31,40,42,44,49,52,55,56,57,64,69,71'>66</option>";
				ex_dd += "<option value='1,4,8,9,14,17,21,26,27,30,39,40,41,42,53,55,62,65,71,72,74'>67</option>";
				ex_dd += "<option value='1,4,5,9,13,21,26,31,39,40,42,44,49,55,56,57,62,69,70,71,74'>68</option>";
				ex_dd += "<option value='1,2,4,5,16,18,25,26,28,30,34,35,46,47,55,56,61,66,67,71,75'>69</option>";
				ex_dd += "<option value='1,2,4,5,13,14,18,21,23,26,28,31,32,35,36,55,57,61,63,70,71'>70</option>";
				ex_dd += "<option value='1,3,4,8,11,14,15,16,26,27,28,32,43,49,52,55,61,63,64,69,71'>71</option>";
				ex_dd += "<option value='1,4,7,9,12,20,21,23,25,26,28,31,35,42,53,55,57,60,61,66,71'>72</option>";
				ex_dd += "<option value='1,2,4,8,11,14,15,16,25,26,28,32,44,50,52,55,61,63,64,67,71'>73</option>";
				ex_dd += "<option value='1,4,13,14,16,18,20,21,23,26,28,32,35,53,55,60,61,63,67,71,75'>74</option>";
				break;
			case 12:
				//41-21
				ex_dd += "<option value='1,10,12,13,21,24,26,31,33,34,39,40,47,49,50,55,56,58,65,67,71'>1</option>";
				ex_dd += "<option value='1,10,11,14,20,22,26,33,38,39,40,42,44,50,53,55,62,63,65,67,71'>2</option>";
				ex_dd += "<option value='1,2,5,14,20,22,24,25,26,30,33,39,40,46,49,50,53,55,63,67,71'>3</option>";
				ex_dd += "<option value='1,14,17,18,19,22,26,31,33,35,38,40,48,55,57,59,65,67,71,73,75'>4</option>";
				ex_dd += "<option value='1,8,20,23,24,26,30,31,33,34,40,43,46,48,49,55,60,61,69,70,71'>5</option>";
				ex_dd += "<option value='1,13,21,24,26,28,30,33,40,41,44,47,48,50,52,55,61,63,66,67,71'>6</option>";
				ex_dd += "<option value='1,4,7,10,11,17,18,26,28,32,34,38,52,53,55,58,62,64,69,71,72'>7</option>";
				ex_dd += "<option value='1,4,8,11,12,22,24,26,28,32,34,38,49,50,55,58,61,66,69,70,71'>8</option>";
				ex_dd += "<option value='1,3,4,5,6,7,17,22,24,26,28,31,42,44,46,55,59,65,69,71,72'>9</option>";
				ex_dd += "<option value='1,4,14,22,25,26,27,28,30,31,35,44,46,50,55,56,58,61,63,69,71'>10</option>";
				ex_dd += "<option value='1,2,4,11,15,20,26,28,32,39,49,55,56,57,59,61,69,71,72,74,75'>11</option>";
				ex_dd += "<option value='1,4,14,17,21,26,27,28,39,42,49,50,53,55,61,62,63,65,71,72,74'>12</option>";
				ex_dd += "<option value='1,4,7,8,16,17,24,26,28,38,42,43,49,50,53,55,59,61,65,70,71'>13</option>";
				ex_dd += "<option value='1,12,13,16,22,24,26,28,32,33,34,38,48,49,50,55,58,66,69,70,71'>14</option>";
				ex_dd += "<option value='1,2,4,6,12,17,18,26,38,39,40,41,42,55,62,63,65,66,71,74,75'>15</option>";
				ex_dd += "<option value='1,2,4,6,10,26,37,38,40,41,42,49,50,55,62,63,65,66,71,73,75'>16</option>";
				ex_dd += "<option value='1,4,6,8,20,26,28,33,38,41,42,49,53,54,55,59,61,62,65,71,75'>17</option>";
				ex_dd += "<option value='1,3,8,13,24,26,27,30,33,34,40,43,44,46,47,48,50,55,61,66,71'>18</option>";
				ex_dd += "<option value='1,2,8,13,24,25,26,30,33,34,40,46,47,48,49,55,61,66,67,69,71'>19</option>";
				ex_dd += "<option value='1,4,5,6,9,10,14,25,26,28,29,46,47,53,54,55,56,61,62,71,72'>20</option>";
				ex_dd += "<option value='1,4,7,8,9,10,13,26,27,28,30,46,47,55,57,61,62,65,66,70,71'>21</option>";
				ex_dd += "<option value='1,3,4,14,21,26,27,28,32,39,42,48,49,50,53,55,61,62,63,69,71'>22</option>";
				ex_dd += "<option value='1,3,4,7,18,22,24,26,28,31,42,45,46,55,56,57,59,65,68,71,72'>23</option>";
				ex_dd += "<option value='1,2,3,4,6,8,20,26,28,29,30,33,38,49,55,59,61,62,66,71,75'>24</option>";
				ex_dd += "<option value='1,7,13,14,15,17,24,26,27,28,33,39,43,49,55,62,63,65,70,71,72'>25</option>";
				ex_dd += "<option value='1,2,3,4,11,15,17,20,26,28,39,48,49,55,56,57,59,61,65,71,75'>26</option>";
				ex_dd += "<option value='1,13,21,22,23,24,26,32,33,34,39,40,47,49,50,55,56,60,66,67,71'>27</option>";
				ex_dd += "<option value='1,14,19,20,21,24,26,32,33,34,39,40,49,53,55,61,67,69,70,71,73'>28</option>";
				ex_dd += "<option value='1,4,14,22,26,28,30,34,35,38,41,47,49,55,56,58,61,66,70,71,75'>29</option>";
				ex_dd += "<option value='1,4,13,18,20,25,26,28,31,32,38,42,52,55,58,59,62,64,71,72,75'>30</option>";
				ex_dd += "<option value='1,3,22,24,25,26,31,32,33,34,38,40,43,49,50,55,57,70,71,74,75'>31</option>";
				ex_dd += "<option value='1,2,20,21,26,27,31,32,33,35,39,40,44,55,56,58,59,67,69,71,72'>32</option>";
				ex_dd += "<option value='1,4,5,6,7,26,28,32,34,39,46,49,53,55,56,61,62,70,71,72,74'>33</option>";
				ex_dd += "<option value='1,17,22,24,26,27,33,40,41,43,44,46,47,48,55,57,63,65,66,71,72'>34</option>";
				ex_dd += "<option value='1,16,17,18,26,27,33,38,39,40,42,47,55,57,58,59,62,65,66,70,71'>35</option>";
				ex_dd += "<option value='1,4,6,8,21,22,24,26,28,31,32,34,41,44,50,55,59,63,69,70,71'>36</option>";
				ex_dd += "<option value='1,4,7,8,13,23,26,28,30,31,34,44,46,50,55,57,60,61,62,69,71'>37</option>";
				break;
			case 13:
				//42-21
				ex_dd += "<option value='1,6,7,25,26,27,28,29,30,32,34,38,47,49,53,70,71,72,73,74,75'>1</option>";
				ex_dd += "<option value='1,3,4,5,8,13,20,21,22,26,27,28,32,34,42,47,49,55,62,66,71'>2</option>";
				ex_dd += "<option value='1,4,6,7,10,11,20,26,28,35,42,44,46,53,55,57,58,59,65,71,75'>3</option>";
				ex_dd += "<option value='1,3,10,12,13,18,21,24,26,33,34,39,40,47,50,53,55,61,65,67,71'>4</option>";
				ex_dd += "<option value='1,2,10,11,14,18,20,22,26,33,35,38,40,48,50,53,55,63,65,67,71'>5</option>";
				ex_dd += "<option value='1,6,7,26,30,33,35,38,40,42,43,44,48,50,53,55,57,58,59,71,75'>6</option>";
				ex_dd += "<option value='1,5,14,16,20,22,24,26,27,30,33,34,38,39,40,41,44,53,55,69,71'>7</option>";
				ex_dd += "<option value='1,2,4,5,6,12,14,18,24,26,27,32,38,40,41,50,55,59,66,71,75'>8</option>";
				ex_dd += "<option value='1,2,3,4,6,10,13,20,24,25,26,31,40,44,46,55,59,65,69,70,71'>9</option>";
				ex_dd += "<option value='1,3,4,6,12,17,18,20,21,26,40,41,42,55,56,57,62,63,65,66,71'>10</option>";
				ex_dd += "<option value='1,2,4,5,10,25,26,27,40,41,42,46,47,49,50,55,62,63,65,66,71'>11</option>";
				ex_dd += "<option value='1,4,8,12,14,17,18,20,21,26,27,40,42,55,57,62,63,65,66,71,72'>12</option>";
				ex_dd += "<option value='1,4,7,10,13,26,27,40,41,46,47,49,50,55,57,62,63,65,66,70,71'>13</option>";
				ex_dd += "<option value='1,2,4,5,6,8,11,21,24,26,32,40,41,44,50,53,55,63,71,72,75'>14</option>";
				ex_dd += "<option value='1,3,4,5,6,11,13,17,24,25,26,34,40,44,46,53,55,57,65,71,75'>15</option>";
				ex_dd += "<option value='1,3,4,7,8,20,26,27,28,30,34,46,47,49,55,57,61,62,66,70,71'>16</option>";
				ex_dd += "<option value='1,2,4,5,7,11,13,17,20,25,26,38,40,44,53,55,59,62,65,70,71'>17</option>";
				break;
			case 14:
				//43-23
				ex_dd += "<option value='1,2,4,11,13,15,16,24,26,27,28,35,41,44,45,50,55,61,63,65,67,68,71'>1</option>";
				ex_dd += "<option value='1,4,5,9,10,13,21,26,27,28,29,32,33,34,47,53,55,59,61,62,65,71,72'>2</option>";
				ex_dd += "<option value='1,4,5,8,10,12,18,24,25,26,28,30,33,39,46,54,55,57,61,63,66,71,74'>3</option>";
				ex_dd += "<option value='1,2,4,6,8,12,24,26,38,40,44,45,48,50,55,57,59,65,66,68,71,74,75'>4</option>";
				ex_dd += "<option value='1,3,4,5,10,13,16,20,24,26,27,37,38,40,44,55,59,65,66,67,69,71,73'>5</option>";
				ex_dd += "<option value='1,2,4,5,12,14,18,21,23,26,27,40,45,50,51,55,60,62,63,65,66,71,75'>6</option>";
				ex_dd += "<option value='1,3,4,6,7,10,17,18,20,21,24,26,31,34,40,42,45,52,55,64,65,68,71'>7</option>";
				ex_dd += "<option value='1,4,5,7,12,14,17,18,21,25,26,35,40,42,47,53,55,58,61,63,65,71,72'>8</option>";
				ex_dd += "<option value='1,3,4,8,10,13,17,26,27,34,38,40,45,47,49,51,55,57,62,65,66,71,72'>9</option>";
				ex_dd += "<option value='1,2,4,6,8,11,23,26,35,36,38,40,44,45,47,50,55,57,59,65,66,68,71'>10</option>";
				ex_dd += "<option value='1,2,4,6,7,11,17,18,22,26,39,40,46,48,53,55,58,59,62,65,71,72,75'>11</option>";
				ex_dd += "<option value='1,3,4,6,12,13,17,20,23,25,26,34,35,40,44,46,48,55,60,65,66,71,74'>12</option>";
				ex_dd += "<option value='1,2,4,5,8,10,16,18,23,26,34,35,38,40,47,50,55,56,60,65,66,67,71'>13</option>";
				ex_dd += "<option value='1,3,4,5,8,10,23,26,34,35,38,40,49,50,53,55,58,60,61,65,70,71,75'>14</option>";
				ex_dd += "<option value='1,2,4,6,12,13,26,28,33,35,38,40,41,49,50,52,54,55,59,65,66,71,75'>15</option>";
				ex_dd += "<option value='1,4,6,8,9,10,12,17,20,21,26,27,35,38,40,43,46,55,57,66,67,71,75'>16</option>";
				ex_dd += "<option value='1,3,4,8,11,12,17,26,28,32,33,35,38,49,54,55,57,61,63,66,69,71,72'>17</option>";
				ex_dd += "<option value='1,2,4,11,12,14,21,25,26,28,31,32,35,44,47,52,55,61,63,64,70,71,75'>18</option>";
				ex_dd += "<option value='1,4,7,9,11,14,24,25,26,28,29,31,32,38,47,48,54,55,56,61,65,71,74'>19</option>";
				ex_dd += "<option value='1,4,6,8,17,24,26,27,28,30,33,38,47,49,50,54,55,57,61,63,66,71,75'>20</option>";
				ex_dd += "<option value='1,5,8,13,20,21,22,24,26,32,33,34,36,40,48,49,53,55,57,60,67,69,71'>21</option>";
				ex_dd += "<option value='1,5,8,14,20,21,22,24,26,32,33,37,39,40,49,50,55,63,66,67,71,72,73'>22</option>";
				ex_dd += "<option value='1,2,4,6,13,17,21,24,26,28,30,31,33,44,48,50,54,55,61,63,70,71,74'>23</option>";
				ex_dd += "<option value='1,3,4,12,14,15,20,26,28,30,32,39,45,47,48,49,55,61,63,65,68,69,71'>24</option>";
				ex_dd += "<option value='1,4,9,10,17,18,20,21,25,26,28,34,35,44,52,53,55,57,59,61,64,69,71'>25</option>";
				ex_dd += "<option value='1,2,4,7,8,17,24,26,28,29,30,34,46,49,50,54,55,59,61,63,66,70,71'>26</option>";
				ex_dd += "<option value='1,4,8,12,13,15,17,18,26,27,28,43,52,53,55,57,59,61,64,65,66,67,71'>27</option>";
				ex_dd += "<option value='1,4,5,12,17,20,21,23,24,26,31,40,49,53,55,57,58,59,60,61,65,66,71'>28</option>";
				ex_dd += "<option value='1,4,5,9,14,21,23,24,26,29,30,32,33,36,40,41,42,50,55,56,57,66,71'>29</option>";
				ex_dd += "<option value='1,4,6,9,13,21,25,26,27,31,32,35,40,43,45,50,55,65,67,68,70,71,72'>30</option>";
				ex_dd += "<option value='1,2,4,5,6,11,20,23,24,26,33,38,40,41,44,50,53,54,55,59,60,65,71'>31</option>";
				ex_dd += "<option value='1,2,4,8,17,26,28,35,38,41,42,49,50,51,53,55,57,61,63,65,68,71,72'>32</option>";
				ex_dd += "<option value='1,2,3,4,6,13,17,26,27,28,31,34,35,43,46,49,50,55,57,58,65,67,71'>33</option>";
				ex_dd += "<option value='1,2,4,10,11,12,21,26,31,37,40,42,44,50,55,58,59,61,62,65,71,73,75'>34</option>";
				ex_dd += "<option value='1,3,4,10,11,12,18,24,26,27,28,34,38,39,40,47,48,50,52,53,55,65,71'>35</option>";
				ex_dd += "<option value='1,3,10,12,20,21,25,26,33,35,37,40,43,48,49,53,55,59,61,65,69,71,73'>36</option>";
				ex_dd += "<option value='1,2,10,12,20,21,26,27,33,35,37,40,44,48,50,53,55,59,61,65,67,71,73'>37</option>";
				ex_dd += "<option value='1,3,4,7,8,11,15,16,17,19,26,28,34,42,43,49,55,59,61,63,65,71,73'>38</option>";
				ex_dd += "<option value='1,4,8,11,15,17,19,22,26,28,41,42,49,51,55,57,58,59,61,65,68,71,73'>39</option>";
				ex_dd += "<option value='1,4,7,9,10,12,16,21,26,27,38,40,45,46,50,55,57,62,66,67,68,70,71'>40</option>";
				ex_dd += "<option value='1,3,4,9,13,14,21,24,25,26,31,32,33,40,43,50,54,55,56,65,67,70,71'>41</option>";
				ex_dd += "<option value='1,4,7,9,13,14,16,21,25,26,31,35,40,41,48,51,55,56,67,68,69,71,74'>42</option>";
				ex_dd += "<option value='1,3,4,8,19,24,26,27,28,30,34,37,43,44,46,55,59,61,63,66,67,70,71'>43</option>";
				ex_dd += "<option value='1,4,13,20,21,24,26,28,30,39,41,43,44,47,48,52,55,61,63,64,66,67,71'>44</option>";
				ex_dd += "<option value='1,2,4,14,19,26,27,28,29,30,31,33,35,37,38,44,51,55,56,59,61,68,71'>45</option>";
				ex_dd += "<option value='1,3,4,7,8,16,17,18,24,26,28,31,38,42,43,50,55,56,58,59,65,70,71'>46</option>";
				ex_dd += "<option value='1,4,9,10,11,12,23,24,25,26,28,45,46,48,55,57,60,61,66,68,71,74,75'>47</option>";
				ex_dd += "<option value='1,4,6,9,10,14,20,25,26,28,29,36,46,54,55,56,57,60,61,62,66,71,72'>48</option>";
				ex_dd += "<option value='1,2,4,6,13,16,18,26,27,28,29,30,33,35,38,42,55,56,59,61,66,67,71'>49</option>";
				ex_dd += "<option value='1,4,17,21,25,26,28,30,31,35,44,45,52,55,56,57,59,61,64,68,69,70,71'>50</option>";
				ex_dd += "<option value='1,4,7,8,9,10,11,14,16,17,19,21,26,40,52,53,55,62,64,67,71,72,73'>51</option>";
				ex_dd += "<option value='1,4,7,8,9,11,12,13,16,21,23,25,26,29,31,33,35,36,40,55,67,69,71'>52</option>";
				ex_dd += "<option value='1,2,4,8,21,24,26,27,28,30,34,38,46,47,49,52,55,56,61,64,66,71,75'>53</option>";
				ex_dd += "<option value='1,4,11,12,14,20,21,24,26,28,30,39,42,47,48,49,51,53,55,61,63,68,71'>54</option>";
				ex_dd += "<option value='1,4,6,8,16,22,25,26,28,30,31,34,35,38,43,44,50,55,58,61,69,71,72'>55</option>";
				ex_dd += "<option value='1,2,4,7,17,26,28,31,32,35,38,44,45,51,52,55,56,58,59,64,69,70,71'>56</option>";
				ex_dd += "<option value='1,4,6,11,14,17,23,24,26,30,32,38,39,40,44,47,55,60,63,65,66,71,74'>57</option>";
				ex_dd += "<option value='1,2,4,11,13,21,22,24,26,30,31,32,34,40,45,49,55,58,65,68,69,71,75'>58</option>";
				ex_dd += "<option value='1,3,4,10,11,17,18,21,25,26,28,30,35,38,39,46,53,55,59,61,69,71,74'>59</option>";
				ex_dd += "<option value='1,4,10,11,13,14,18,19,26,27,28,29,33,34,37,38,53,55,58,62,65,71,72'>60</option>";
				ex_dd += "<option value='1,2,3,4,5,18,25,26,28,30,35,38,41,43,47,55,56,61,63,66,67,71,75'>61</option>";
				ex_dd += "<option value='1,2,3,4,5,8,13,21,22,24,26,28,30,32,33,34,41,49,53,54,55,65,71'>62</option>";
				ex_dd += "<option value='1,4,6,14,17,22,23,25,26,28,31,35,36,44,46,55,56,58,61,63,65,69,71'>63</option>";
				ex_dd += "<option value='1,2,4,7,12,15,20,22,26,28,32,34,35,43,44,47,55,57,62,67,69,70,71'>64</option>";
				ex_dd += "<option value='1,2,4,7,8,16,24,26,28,33,38,42,43,49,53,54,55,57,61,63,65,70,71'>65</option>";
				ex_dd += "<option value='1,4,6,7,8,13,16,22,24,26,27,28,31,45,46,49,51,55,57,59,65,67,71'>66</option>";
				ex_dd += "<option value='1,4,5,6,8,9,17,21,26,27,32,35,40,42,47,51,55,57,65,66,68,71,75'>67</option>";
				ex_dd += "<option value='1,2,3,4,7,9,17,21,25,26,31,32,39,40,44,48,49,55,56,62,65,71,72'>68</option>";
				ex_dd += "<option value='1,4,9,10,14,17,19,22,26,28,35,36,37,38,55,56,58,60,61,66,69,71,75'>69</option>";
				ex_dd += "<option value='1,4,9,11,13,17,21,22,26,28,31,32,34,35,55,57,58,59,61,65,69,71,75'>70</option>";
				ex_dd += "<option value='1,4,8,11,12,14,18,21,24,26,27,28,42,44,45,49,51,55,61,63,65,66,71'>71</option>";
				ex_dd += "<option value='1,2,4,17,19,21,22,26,28,32,34,35,37,41,45,49,55,57,66,68,69,70,71'>72</option>";
				ex_dd += "<option value='1,3,4,8,9,12,19,26,28,30,31,32,35,37,38,41,50,55,61,69,71,72,75'>73</option>";
				ex_dd += "<option value='1,4,6,7,11,15,17,24,26,28,34,38,39,46,48,49,55,56,61,62,65,70,71'>74</option>";
				ex_dd += "<option value='1,4,9,12,20,21,22,23,26,27,28,31,36,37,42,55,57,58,61,62,71,72,73'>75</option>";
				ex_dd += "<option value='1,2,4,6,8,10,13,15,23,26,28,30,33,34,44,54,55,59,60,61,63,69,71'>76</option>";
				ex_dd += "<option value='1,2,13,22,24,26,27,28,31,32,33,34,38,40,48,49,52,55,67,69,70,71,75'>77</option>";
				ex_dd += "<option value='1,3,6,20,22,24,26,27,31,32,33,39,40,44,46,52,55,59,64,67,69,70,71'>78</option>";
				ex_dd += "<option value='1,2,4,5,7,24,26,27,28,30,35,36,37,46,49,55,58,59,60,62,66,71,73'>79</option>";
				ex_dd += "<option value='1,2,4,7,8,20,26,27,28,30,31,38,41,43,49,55,57,61,62,63,67,71,75'>80</option>";
				ex_dd += "<option value='1,4,5,6,7,10,12,23,24,26,28,42,44,46,48,55,58,59,60,65,66,71,74'>81</option>";
				ex_dd += "<option value='1,2,3,4,8,13,25,26,27,28,30,34,36,42,46,49,53,55,57,60,61,62,71'>82</option>";
				ex_dd += "<option value='1,2,3,4,5,8,13,21,26,28,29,32,33,35,42,49,55,58,59,66,70,71,72'>83</option>";
				ex_dd += "<option value='1,2,3,4,8,10,11,26,28,29,30,37,38,41,44,53,54,55,59,61,62,71,73'>84</option>";
				ex_dd += "<option value='1,4,9,10,17,18,26,27,28,35,36,37,38,44,55,56,60,61,66,69,71,73,75'>85</option>";
				ex_dd += "<option value='1,4,5,7,9,12,17,26,28,30,31,32,35,37,45,46,50,51,55,61,71,73,75'>86</option>";
				ex_dd += "<option value='1,3,4,6,8,17,21,26,28,39,41,42,49,50,53,55,56,61,62,63,65,71,74'>87</option>";
				ex_dd += "<option value='1,4,11,12,22,23,24,26,28,32,34,38,39,48,49,55,56,58,60,61,66,70,71'>88</option>";
				ex_dd += "<option value='1,2,4,8,20,23,26,27,28,30,36,38,41,42,49,53,55,57,61,62,63,71,75'>89</option>";
				ex_dd += "<option value='1,3,4,7,20,22,26,27,28,30,34,37,46,47,49,53,55,57,62,70,71,72,73'>90</option>";
				ex_dd += "<option value='1,2,4,8,13,14,16,17,18,26,28,35,38,50,53,55,57,61,63,65,67,71,72'>91</option>";
				ex_dd += "<option value='1,2,4,6,14,26,27,28,29,30,33,35,38,41,49,51,55,56,59,61,66,68,71'>92</option>";
				ex_dd += "<option value='1,3,13,14,15,17,18,25,26,28,32,34,38,42,46,51,54,55,67,68,71,72,74'>93</option>";
				ex_dd += "<option value='1,2,3,4,10,15,24,25,26,28,30,38,44,45,46,51,55,59,61,62,69,71,72'>94</option>";
				ex_dd += "<option value='1,4,5,8,13,14,18,23,26,27,28,30,31,38,51,55,60,61,62,63,68,70,71'>95</option>";
				ex_dd += "<option value='1,4,7,9,10,14,18,19,26,28,37,44,45,46,47,53,55,57,61,62,68,71,72'>96</option>";
				ex_dd += "<option value='1,3,4,10,12,18,19,21,24,26,28,34,37,39,48,53,55,59,61,63,65,70,71'>97</option>";
				ex_dd += "<option value='1,4,7,10,14,15,22,23,25,26,28,35,36,44,55,56,58,61,62,63,65,69,71'>98</option>";
				ex_dd += "<option value='1,4,6,7,9,12,21,24,25,26,28,31,35,36,41,47,55,59,60,61,62,63,71'>99</option>";
				ex_dd += "<option value='1,4,7,12,16,17,18,21,22,26,34,35,40,42,43,55,56,58,65,66,71,72,75'>100</option>";
				ex_dd += "<option value='1,4,10,14,22,25,26,34,35,39,40,41,46,47,48,49,55,58,65,66,69,70,71'>101</option>";
				ex_dd += "<option value='1,4,5,9,10,12,13,21,26,34,40,41,42,44,45,49,55,62,63,66,68,69,71'>102</option>";
				ex_dd += "<option value='1,4,8,9,10,11,14,16,17,19,21,24,26,39,40,53,55,67,70,71,72,73,74'>103</option>";
				ex_dd += "<option value='1,2,3,4,8,12,14,18,21,24,26,29,40,42,47,50,54,55,59,65,66,71,72'>104</option>";
				ex_dd += "<option value='1,4,9,11,12,13,16,21,23,25,26,28,35,36,40,55,56,57,64,66,67,69,71'>105</option>";
				ex_dd += "<option value='1,2,3,4,7,10,13,26,27,31,34,38,40,43,49,50,55,57,62,65,67,71,75'>106</option>";
				ex_dd += "<option value='1,3,4,5,10,22,24,26,31,35,38,40,42,44,55,58,59,62,65,69,71,72,75'>107</option>";
				ex_dd += "<option value='1,2,4,10,19,23,24,26,34,37,38,40,49,55,59,60,63,65,66,69,70,71,75'>108</option>";
				ex_dd += "<option value='1,4,7,10,12,14,26,28,30,31,35,39,45,46,47,49,51,55,61,63,71,74,75'>109</option>";
				ex_dd += "<option value='1,2,4,16,22,26,28,35,41,42,43,45,46,49,51,53,55,58,61,63,65,70,71'>110</option>";
				ex_dd += "<option value='1,4,8,10,13,26,27,31,34,35,36,38,40,44,55,57,58,60,61,65,69,71,75'>111</option>";
				ex_dd += "<option value='1,3,4,7,10,19,23,25,26,27,36,38,40,49,53,55,62,63,65,69,71,73,75'>112</option>";
				ex_dd += "<option value='1,2,4,6,8,24,25,26,28,30,31,34,41,44,46,50,55,59,61,63,69,70,71'>113</option>";
				ex_dd += "<option value='1,3,4,6,13,16,18,26,27,28,33,35,38,41,53,54,55,56,59,61,65,67,71'>114</option>";
				ex_dd += "<option value='1,4,8,14,20,21,23,24,26,28,29,32,33,42,47,49,53,55,56,60,61,63,71'>115</option>";
				ex_dd += "<option value='1,2,4,9,11,17,25,26,28,31,34,35,45,46,55,57,59,61,68,69,70,71,75'>116</option>";
				ex_dd += "<option value='1,4,6,11,13,17,26,28,31,34,35,40,44,46,55,56,57,58,61,64,65,71,75'>117</option>";
				ex_dd += "<option value='1,4,5,8,11,18,23,26,33,35,36,38,40,47,54,55,56,57,63,65,66,69,71'>118</option>";
				ex_dd += "<option value='1,4,7,8,9,10,12,14,17,18,19,21,26,40,43,44,55,62,66,67,71,72,73'>119</option>";
				ex_dd += "<option value='1,4,5,6,8,11,12,14,18,19,24,26,27,28,31,32,37,38,41,55,61,63,71'>120</option>";
				ex_dd += "<option value='1,4,8,10,12,13,19,21,26,28,30,42,44,45,55,61,62,63,66,68,70,71,73'>121</option>";
				ex_dd += "<option value='1,4,7,8,9,10,12,13,16,17,20,21,26,31,35,37,40,42,43,55,71,73,75'>122</option>";
				ex_dd += "<option value='1,4,5,7,8,11,12,19,24,26,28,32,46,49,51,55,57,61,63,66,68,71,73'>123</option>";
				ex_dd += "<option value='1,4,8,12,17,19,20,21,22,26,40,42,44,55,57,58,62,63,65,66,71,72,73'>124</option>";
				ex_dd += "<option value='1,4,9,10,12,13,20,21,26,31,35,37,40,42,45,50,51,55,70,71,72,73,75'>125</option>";
				ex_dd += "<option value='1,4,9,12,25,26,28,31,34,35,36,39,41,46,47,55,56,60,61,63,70,71,74'>126</option>";
				ex_dd += "<option value='1,4,9,11,12,14,18,21,24,26,27,30,40,41,42,44,45,50,51,55,65,66,71'>127</option>";
				ex_dd += "<option value='1,2,4,14,17,18,21,26,27,28,35,44,48,49,50,53,55,61,63,65,71,72,74'>128</option>";
				ex_dd += "<option value='1,4,10,13,22,26,27,38,40,41,47,49,50,51,55,58,62,63,65,66,68,70,71'>129</option>";
				ex_dd += "<option value='1,2,4,5,7,16,21,26,28,32,35,41,43,49,51,53,55,57,61,63,68,70,71'>130</option>";
				ex_dd += "<option value='1,2,4,5,8,13,16,17,24,25,26,28,38,43,49,50,53,55,57,59,61,65,71'>131</option>";
				ex_dd += "<option value='1,4,6,8,9,10,13,16,26,28,33,42,43,46,53,54,55,59,61,62,63,71,75'>132</option>";
				ex_dd += "<option value='1,4,12,14,24,26,27,32,33,38,40,41,44,45,54,55,56,63,66,68,69,71,75'>133</option>";
				ex_dd += "<option value='1,4,7,10,25,26,29,31,33,37,38,40,42,44,55,57,59,62,65,69,71,73,75'>134</option>";
				ex_dd += "<option value='1,3,4,5,10,12,18,21,24,26,28,37,39,48,50,53,55,59,61,65,69,71,73'>135</option>";
				ex_dd += "<option value='1,4,14,16,20,25,26,28,32,35,38,39,43,47,49,55,57,58,63,66,70,71,74'>136</option>";
				ex_dd += "<option value='1,4,6,8,10,11,17,24,26,27,28,30,31,34,36,38,49,55,60,61,69,70,71'>137</option>";
				ex_dd += "<option value='1,2,4,5,8,19,21,24,25,26,28,30,31,34,41,44,52,55,56,61,64,71,73'>138</option>";
				ex_dd += "<option value='1,2,4,8,12,14,18,20,21,26,27,33,40,42,50,54,55,59,62,65,66,71,72'>139</option>";
				ex_dd += "<option value='1,3,4,7,10,13,16,26,27,34,38,40,43,47,49,50,55,57,62,65,66,70,71'>140</option>";
				ex_dd += "<option value='1,3,4,6,14,26,27,28,33,35,38,42,49,51,53,54,55,56,59,61,65,68,71'>141</option>";
				ex_dd += "<option value='1,2,4,8,21,24,25,26,28,30,31,41,44,50,52,55,56,61,63,64,69,70,71'>142</option>";
				ex_dd += "<option value='1,4,6,14,18,26,27,28,29,30,31,34,35,37,38,45,51,54,55,61,70,71,73'>143</option>";
				ex_dd += "<option value='1,2,4,5,8,23,26,27,28,30,38,41,42,47,49,55,60,61,62,63,66,71,75'>144</option>";
				ex_dd += "<option value='1,4,7,8,16,20,26,27,28,30,38,41,43,47,49,55,57,61,62,63,66,70,71'>145</option>";
				ex_dd += "<option value='1,4,6,16,23,24,25,26,28,30,35,38,42,43,49,53,55,58,59,60,62,70,71'>146</option>";
				ex_dd += "<option value='1,2,3,4,5,12,18,23,24,26,32,38,39,40,48,55,59,60,66,69,71,72,75'>147</option>";
				ex_dd += "<option value='1,3,4,5,6,10,20,22,24,26,31,38,40,42,44,51,55,58,59,65,68,69,71'>148</option>";
				ex_dd += "<option value='1,2,4,7,8,9,14,17,19,21,25,26,27,32,37,39,40,48,55,62,65,66,71'>149</option>";
				ex_dd += "<option value='1,4,6,7,8,9,13,16,17,21,25,26,27,31,32,35,40,51,55,65,67,68,71'>150</option>";
				ex_dd += "<option value='1,4,8,10,11,14,25,26,27,28,29,32,34,38,44,52,54,55,61,62,64,66,71'>151</option>";
				ex_dd += "<option value='1,4,7,11,12,13,26,28,29,31,35,38,44,52,54,55,56,57,61,63,64,65,71'>152</option>";
				ex_dd += "<option value='1,2,3,4,5,10,18,22,24,26,31,38,39,40,48,55,58,59,65,69,71,72,75'>153</option>";
				ex_dd += "<option value='1,13,14,20,24,26,30,33,38,39,40,42,49,50,51,53,55,58,63,67,68,70,71'>154</option>";
				ex_dd += "<option value='1,13,14,21,22,23,24,26,30,33,34,36,40,41,47,49,50,55,56,66,67,71,74'>155</option>";
				ex_dd += "<option value='1,2,3,4,5,12,18,20,21,23,24,26,33,40,50,54,55,56,60,63,65,66,71'>156</option>";
				ex_dd += "<option value='1,2,3,4,6,10,17,20,21,26,31,34,35,40,44,45,48,55,65,68,70,71,74'>157</option>";
				ex_dd += "<option value='1,2,3,4,12,18,21,23,24,26,33,36,40,47,50,53,54,55,56,57,63,65,71'>158</option>";
				ex_dd += "<option value='1,4,5,6,10,18,20,26,31,34,38,39,40,48,51,55,62,65,68,69,70,71,72'>159</option>";
				ex_dd += "<option value='1,2,3,4,11,14,24,26,27,38,40,42,44,45,50,51,53,55,56,63,65,71,75'>160</option>";
				ex_dd += "<option value='1,4,5,6,11,13,16,17,24,25,26,38,40,41,43,44,53,55,57,63,65,71,75'>161</option>";
				ex_dd += "<option value='1,4,22,26,28,32,34,35,36,38,39,47,49,55,56,58,60,61,66,70,71,74,75'>162</option>";
				ex_dd += "<option value='1,2,4,5,6,8,20,24,26,27,28,30,36,38,49,53,55,57,59,60,61,71,75'>163</option>";
				ex_dd += "<option value='1,3,4,7,8,21,25,26,28,30,35,41,42,48,49,50,53,55,58,63,69,71,74'>164</option>";
				ex_dd += "<option value='1,4,8,10,11,20,21,22,23,26,28,32,33,42,44,53,54,55,60,62,63,71,75'>165</option>";
				ex_dd += "<option value='1,2,3,4,5,11,18,26,32,35,36,38,39,40,47,55,59,60,66,69,71,72,74'>166</option>";
				ex_dd += "<option value='1,3,4,5,6,11,20,26,31,38,40,42,45,49,55,58,59,61,62,65,68,69,71'>167</option>";
				ex_dd += "<option value='1,3,4,6,8,22,25,26,28,30,31,35,41,44,46,50,55,58,61,63,69,71,72'>168</option>";
				ex_dd += "<option value='1,2,4,5,7,17,21,26,28,31,35,42,44,52,55,56,58,59,64,65,69,70,71'>169</option>";
				ex_dd += "<option value='1,2,4,5,8,11,23,26,38,40,44,45,50,51,53,55,59,60,62,65,71,72,75'>170</option>";
				ex_dd += "<option value='1,3,4,6,11,13,18,21,24,25,26,40,45,52,53,55,59,64,65,68,69,71,75'>171</option>";
				ex_dd += "<option value='1,8,10,12,13,20,22,24,26,32,33,34,40,43,45,46,48,49,55,66,68,69,71'>172</option>";
				ex_dd += "<option value='1,5,10,11,14,20,21,22,26,32,33,39,40,44,45,50,51,53,55,62,63,67,71'>173</option>";
				ex_dd += "<option value='1,4,8,9,11,12,14,16,18,19,21,24,26,37,40,49,50,53,55,67,70,71,72'>174</option>";
				ex_dd += "<option value='1,4,5,9,11,12,13,16,18,21,23,24,26,36,40,49,55,56,57,66,67,69,71'>175</option>";
				ex_dd += "<option value='1,3,14,18,20,24,26,31,33,38,39,40,42,45,50,51,55,56,58,63,65,67,71'>176</option>";
				ex_dd += "<option value='1,2,5,18,24,26,30,31,33,36,38,39,40,41,50,55,57,58,60,63,67,71,75'>177</option>";
				ex_dd += "<option value='1,4,6,12,14,17,26,30,32,35,36,38,39,40,44,48,55,60,63,65,66,71,75'>178</option>";
				ex_dd += "<option value='1,2,4,10,13,21,26,30,31,32,34,40,44,51,55,58,61,62,65,68,69,71,75'>179</option>";
				ex_dd += "<option value='1,6,7,11,14,25,26,28,30,31,32,38,39,48,49,54,55,59,62,65,67,71,74'>180</option>";
				ex_dd += "<option value='1,4,6,8,10,12,13,21,26,28,29,31,33,34,41,49,55,58,59,62,63,65,71'>181</option>";
				ex_dd += "<option value='1,4,5,7,10,13,19,25,26,31,38,40,44,50,55,57,62,63,65,70,71,73,75'>182</option>";
				ex_dd += "<option value='1,3,4,8,12,14,17,26,27,35,38,40,44,48,55,56,63,65,66,71,72,74,75'>183</option>";
				ex_dd += "<option value='1,2,3,4,6,21,23,26,28,29,30,32,49,54,55,60,61,62,63,65,66,71,72'>184</option>";
				ex_dd += "<option value='1,4,5,6,8,14,16,18,25,26,27,28,30,31,35,38,43,55,61,63,70,71,72'>185</option>";
				ex_dd += "<option value='1,4,5,7,13,14,21,26,28,32,39,43,44,48,53,55,57,61,62,63,67,70,71'>186</option>";
				ex_dd += "<option value='1,5,7,20,21,23,24,26,30,31,33,40,41,42,43,49,50,55,60,61,63,71,74'>187</option>";
				ex_dd += "<option value='1,6,14,20,21,24,26,28,30,31,33,39,40,49,50,52,55,61,63,67,70,71,72'>188</option>";
				ex_dd += "<option value='1,4,5,7,8,9,14,21,23,24,26,28,30,31,32,36,40,41,42,50,55,64,71'>189</option>";
				ex_dd += "<option value='1,3,4,7,8,9,13,16,20,21,25,26,27,31,40,48,55,62,67,69,71,74,75'>190</option>";
				ex_dd += "<option value='1,2,4,7,8,21,25,26,28,30,31,39,41,44,50,55,56,61,62,63,69,71,74'>191</option>";
				ex_dd += "<option value='1,4,13,19,21,24,26,28,29,32,33,37,42,49,50,53,55,61,63,69,70,71,72'>192</option>";
				ex_dd += "<option value='1,4,6,10,16,17,18,26,34,38,40,42,45,47,55,56,57,62,65,66,67,68,71'>193</option>";
				ex_dd += "<option value='1,2,4,12,17,18,21,22,23,26,34,35,36,40,47,53,55,56,58,65,70,71,72'>194</option>";
				ex_dd += "<option value='1,3,4,7,8,17,22,26,28,29,30,35,46,49,50,54,55,58,61,63,66,71,72'>195</option>";
				ex_dd += "<option value='1,4,7,10,11,26,28,29,30,34,35,38,39,41,44,52,54,55,58,64,66,71,74'>196</option>";
				ex_dd += "<option value='1,4,6,8,21,26,28,32,39,41,42,48,49,50,53,55,56,61,62,63,69,71,72'>197</option>";
				ex_dd += "<option value='1,3,4,14,21,26,27,28,29,30,33,39,41,49,55,57,59,61,62,66,71,72,74'>198</option>";
				ex_dd += "<option value='1,4,8,10,12,14,25,26,27,28,30,32,35,39,44,46,48,55,61,63,65,66,71'>199</option>";
				ex_dd += "<option value='1,3,4,16,23,26,28,34,35,36,43,45,46,47,49,55,57,61,65,66,68,71,75'>200</option>";
				ex_dd += "<option value='1,3,4,8,10,16,18,21,23,26,34,35,36,39,40,50,53,55,65,67,71,74,75'>201</option>";
				ex_dd += "<option value='1,2,4,12,13,19,20,21,26,29,34,40,44,50,53,54,55,58,61,62,65,71,73'>202</option>";
				ex_dd += "<option value='1,2,3,4,11,17,20,26,31,35,38,39,40,48,49,55,56,57,58,59,61,65,71'>203</option>";
				ex_dd += "<option value='1,3,5,20,22,24,26,27,28,30,33,39,40,44,46,53,55,59,64,67,69,71,72'>204</option>";
				ex_dd += "<option value='1,2,14,19,20,22,24,25,26,30,33,34,39,40,46,49,53,55,67,69,70,71,73'>205</option>";
				ex_dd += "<option value='1,4,6,9,11,14,16,24,26,28,34,43,44,46,47,49,55,56,61,63,66,71,72'>206</option>";
				ex_dd += "<option value='1,2,4,6,13,17,21,22,26,28,30,31,32,34,35,44,55,57,58,61,65,69,71'>207</option>";
				ex_dd += "<option value='1,3,4,6,8,12,20,21,24,26,39,40,44,45,48,50,55,56,59,65,66,68,71'>208</option>";
				ex_dd += "<option value='1,2,4,5,10,13,20,21,26,28,34,35,40,44,52,53,55,58,61,65,69,70,71'>209</option>";
				ex_dd += "<option value='1,4,8,14,16,18,26,28,30,31,35,37,43,46,47,55,61,63,70,71,72,73,75'>210</option>";
				ex_dd += "<option value='1,4,6,20,23,26,28,36,38,41,45,47,49,51,55,57,61,62,63,65,66,71,72'>211</option>";
				ex_dd += "<option value='1,4,8,13,19,20,26,28,29,31,34,38,44,53,54,55,61,62,65,66,71,73,75'>212</option>";
				ex_dd += "<option value='1,4,8,10,23,24,26,27,28,40,41,44,46,47,55,56,60,63,64,65,66,69,71'>213</option>";
				ex_dd += "<option value='1,4,7,12,20,21,25,26,29,40,42,44,53,54,55,57,58,61,62,63,65,69,71'>214</option>";
				ex_dd += "<option value='1,4,7,8,9,14,18,21,23,25,26,30,31,32,35,36,40,41,42,49,50,55,71'>215</option>";
				ex_dd += "<option value='1,4,7,8,9,13,16,17,20,21,25,26,27,31,32,40,55,62,65,67,71,72,75'>216</option>";
				ex_dd += "<option value='1,2,3,16,18,20,24,26,29,33,38,39,40,42,50,54,55,58,63,65,66,70,71'>217</option>";
				ex_dd += "<option value='1,2,3,20,22,26,29,33,40,41,43,44,46,48,50,54,55,59,62,65,66,71,72'>218</option>";
				ex_dd += "<option value='1,8,14,21,23,24,26,32,33,36,40,47,48,49,55,56,57,61,63,66,67,69,71'>219</option>";
				ex_dd += "<option value='1,5,13,19,21,24,26,32,33,37,40,47,48,49,50,53,55,61,63,67,70,71,72'>220</option>";
				ex_dd += "<option value='1,3,4,6,11,14,18,21,24,26,27,32,33,40,45,53,54,55,59,68,69,71,75'>221</option>";
				ex_dd += "<option value='1,2,4,5,7,11,16,17,23,26,38,40,43,44,53,55,59,60,62,65,70,71,75'>222</option>";
				ex_dd += "<option value='1,4,6,7,8,11,17,26,35,37,40,42,44,46,55,58,59,61,65,66,71,73,75'>223</option>";
				ex_dd += "<option value='1,4,5,11,13,14,18,26,33,34,35,37,38,40,47,53,54,55,65,69,71,72,73'>224</option>";
				ex_dd += "<option value='1,4,7,8,10,17,20,26,33,35,40,41,42,46,49,53,54,55,58,59,61,65,71'>225</option>";
				ex_dd += "<option value='1,4,7,8,11,17,19,26,31,35,40,41,42,46,49,55,58,59,61,65,71,73,75'>226</option>";
				ex_dd += "<option value='1,4,12,13,14,18,21,26,33,35,40,47,50,53,54,55,58,59,61,65,70,71,72'>227</option>";
				ex_dd += "<option value='1,3,4,6,8,18,20,26,28,31,33,38,41,42,54,55,56,58,59,62,65,71,75'>228</option>";
				ex_dd += "<option value='1,4,8,19,20,26,28,31,33,37,38,42,44,53,54,55,59,61,62,65,66,71,75'>229</option>";
				ex_dd += "<option value='1,3,4,6,14,16,18,25,26,28,32,35,38,41,52,53,55,56,59,61,64,67,71'>230</option>";
				ex_dd += "<option value='1,4,8,13,22,23,26,28,30,31,34,38,44,50,51,55,58,60,61,62,68,69,71'>231</option>";
				ex_dd += "<option value='1,5,8,14,20,21,23,24,26,32,33,40,48,49,53,55,56,60,61,63,67,69,71'>232</option>";
				ex_dd += "<option value='1,6,7,13,20,21,26,28,30,31,33,40,43,44,48,50,52,55,57,59,61,62,71'>233</option>";
				ex_dd += "<option value='1,4,5,7,11,13,20,25,26,33,38,40,44,50,53,54,55,57,62,63,65,70,71'>234</option>";
				ex_dd += "<option value='1,3,4,8,11,14,17,23,24,26,27,36,38,40,44,47,55,56,63,65,66,71,72'>235</option>";
				ex_dd += "<option value='1,4,6,21,22,26,28,31,32,33,34,35,44,45,50,54,55,59,63,68,69,70,71'>236</option>";
				ex_dd += "<option value='1,2,4,7,8,14,21,25,26,28,31,32,36,44,50,55,56,60,61,62,63,69,71'>237</option>";
				break;
			case 15:
				//44-23
				ex_dd += "<option value='1,2,4,5,8,10,12,17,18,24,25,26,28,30,39,46,50,55,59,61,66,71,74'>1</option>";
				ex_dd += "<option value='1,3,4,7,9,11,14,17,24,25,26,28,29,31,38,47,54,55,56,61,69,71,72'>2</option>";
				ex_dd += "<option value='1,2,4,6,9,12,13,17,21,26,27,28,30,31,35,47,50,55,57,61,65,70,71'>3</option>";
				ex_dd += "<option value='1,3,5,8,11,13,18,25,26,28,30,31,33,35,38,41,43,48,55,56,63,70,71'>4</option>";
				ex_dd += "<option value='1,21,22,26,30,33,34,35,40,42,43,44,48,50,51,52,53,55,56,64,68,71,75'>5</option>";
				ex_dd += "<option value='1,16,19,20,25,26,28,30,33,34,35,38,39,40,41,49,53,55,58,64,69,71,73'>6</option>";
				ex_dd += "<option value='1,2,4,8,11,13,15,17,26,27,28,31,44,47,55,57,59,61,65,66,70,71,75'>7</option>";
				ex_dd += "<option value='1,4,6,9,12,13,16,17,21,26,27,28,30,35,50,55,57,61,65,66,67,71,75'>8</option>";
				ex_dd += "<option value='1,2,4,6,14,16,21,24,26,28,30,43,47,49,52,55,61,63,64,66,71,72,75'>9</option>";
				ex_dd += "<option value='1,3,4,10,12,13,14,18,20,21,24,26,28,34,47,53,55,59,61,63,65,71,72'>10</option>";
				ex_dd += "<option value='1,3,4,8,10,11,12,16,18,21,24,26,34,39,40,47,48,50,53,55,65,67,71'>11</option>";
				ex_dd += "<option value='1,2,4,10,11,12,13,21,26,29,31,33,34,40,44,50,55,58,61,62,65,71,75'>12</option>";
				ex_dd += "<option value='1,3,4,6,7,9,10,12,14,17,21,22,26,40,41,43,55,56,58,62,66,67,71'>13</option>";
				ex_dd += "<option value='1,3,4,5,7,9,11,12,13,16,21,24,26,40,42,43,55,57,58,61,66,69,71'>14</option>";
				ex_dd += "<option value='1,2,3,4,6,7,17,24,25,26,28,30,31,38,44,45,51,55,59,61,69,71,72'>15</option>";
				ex_dd += "<option value='1,2,3,4,6,8,16,24,25,26,28,30,31,38,43,44,50,55,59,61,69,70,71'>16</option>";
				ex_dd += "<option value='1,4,9,10,11,12,16,17,20,21,25,26,28,34,35,43,55,57,59,61,66,69,71'>17</option>";
				ex_dd += "<option value='1,4,10,11,12,15,18,20,26,28,32,33,37,54,55,56,61,63,69,71,72,73,75'>18</option>";
				ex_dd += "<option value='1,4,6,10,12,14,17,25,26,28,32,35,36,44,46,55,56,60,61,63,66,69,71'>19</option>";
				ex_dd += "<option value='1,4,8,14,17,18,23,24,26,28,30,31,36,38,41,42,45,50,51,55,58,59,71'>20</option>";
				ex_dd += "<option value='1,4,6,10,11,12,15,17,22,24,26,28,32,35,36,41,44,47,55,60,63,71,75'>21</option>";
				ex_dd += "<option value='1,4,9,10,11,12,13,17,21,23,26,28,34,35,55,57,59,60,61,66,69,71,75'>22</option>";
				ex_dd += "<option value='1,4,8,11,14,15,25,26,28,31,32,44,47,50,52,55,61,63,64,66,70,71,75'>23</option>";
				ex_dd += "<option value='1,4,7,9,11,13,17,20,26,28,31,32,38,52,55,56,61,62,64,65,69,71,72'>24</option>";
				ex_dd += "<option value='1,3,4,8,10,11,12,21,23,26,35,37,40,49,53,55,59,60,65,69,71,73,75'>25</option>";
				ex_dd += "<option value='1,2,4,10,11,12,13,20,26,28,35,37,38,40,44,50,52,53,55,59,65,71,73'>26</option>";
				ex_dd += "<option value='1,4,6,7,13,17,18,21,26,28,30,31,33,35,42,50,52,54,55,61,63,64,71'>27</option>";
				ex_dd += "<option value='1,4,6,8,17,24,25,26,28,30,31,33,34,41,44,46,54,55,57,61,69,70,71'>28</option>";
				ex_dd += "<option value='1,3,4,5,6,8,9,11,12,21,26,27,35,40,41,47,53,55,59,63,69,71,75'>29</option>";
				ex_dd += "<option value='1,4,7,14,19,20,26,28,30,31,34,37,44,46,47,55,56,57,61,62,70,71,72'>30</option>";
				ex_dd += "<option value='1,2,11,13,17,18,26,28,33,34,35,36,37,38,39,55,60,65,66,67,69,71,73'>31</option>";
				ex_dd += "<option value='1,4,5,6,7,14,17,18,25,26,27,28,30,31,35,38,45,50,51,55,61,63,71'>32</option>";
				ex_dd += "<option value='1,2,4,5,6,10,11,16,23,26,28,35,43,44,46,53,55,58,59,60,65,70,71'>33</option>";
				ex_dd += "<option value='1,5,11,12,14,19,20,24,26,32,33,37,38,39,40,49,50,53,55,58,59,67,71'>34</option>";
				ex_dd += "<option value='1,6,7,10,11,20,21,22,24,26,30,31,33,40,43,44,45,50,51,55,59,71,74'>35</option>";
				ex_dd += "<option value='1,2,3,11,13,14,18,26,28,30,33,34,35,37,38,41,48,55,66,67,71,72,73'>36</option>";
				ex_dd += "<option value='1,4,5,13,14,19,20,21,22,26,28,31,32,34,37,42,44,47,55,56,62,71,72'>37</option>";
				ex_dd += "<option value='1,2,4,5,12,14,17,18,23,24,26,30,32,36,38,40,41,55,59,65,66,71,75'>38</option>";
				ex_dd += "<option value='1,3,4,6,7,10,24,26,31,36,40,42,44,46,47,53,55,59,60,65,66,69,71'>39</option>";
				ex_dd += "<option value='1,2,4,6,7,11,12,23,25,26,28,30,38,48,49,55,58,59,60,62,66,71,74'>40</option>";
				ex_dd += "<option value='1,2,3,4,7,8,24,26,28,33,34,41,42,46,49,53,54,55,57,61,65,70,71'>41</option>";
				ex_dd += "<option value='1,2,4,8,14,18,22,23,25,26,27,28,30,31,42,46,55,58,60,61,62,63,71'>42</option>";
				ex_dd += "<option value='1,3,4,6,11,13,14,15,16,17,26,28,41,44,55,56,57,59,61,65,67,71,72'>43</option>";
				ex_dd += "<option value='1,4,7,8,17,21,25,26,28,30,32,35,41,42,49,50,53,55,58,63,65,71,72'>44</option>";
				ex_dd += "<option value='1,4,11,12,17,18,24,26,28,31,34,37,38,48,50,55,56,61,65,70,71,73,74'>45</option>";
				ex_dd += "<option value='1,2,4,13,14,19,26,27,28,30,31,34,35,38,42,44,51,55,56,61,68,71,73'>46</option>";
				ex_dd += "<option value='1,4,17,21,26,27,28,29,31,32,33,35,44,45,47,51,55,57,58,59,69,71,75'>47</option>";
				ex_dd += "<option value='1,4,5,10,11,17,18,21,22,26,28,32,35,36,47,55,56,59,60,66,69,71,75'>48</option>";
				ex_dd += "<option value='1,4,10,12,13,14,18,21,26,27,28,29,33,34,53,55,59,61,62,63,65,71,72'>49</option>";
				ex_dd += "<option value='1,4,6,8,13,14,18,24,26,27,28,30,31,38,41,42,51,55,59,61,68,70,71'>50</option>";
				ex_dd += "<option value='1,3,6,7,8,13,15,17,24,26,28,33,39,41,43,49,55,56,62,63,65,70,71'>51</option>";
				ex_dd += "<option value='1,3,4,10,11,12,21,26,35,37,39,40,48,49,50,53,55,56,59,65,71,73,75'>52</option>";
				ex_dd += "<option value='1,2,4,10,11,12,21,23,24,26,34,40,49,55,58,60,61,65,66,69,70,71,75'>53</option>";
				ex_dd += "<option value='1,10,12,17,22,23,26,27,32,33,35,38,40,44,48,55,57,59,60,66,67,71,75'>54</option>";
				ex_dd += "<option value='1,3,4,8,10,13,14,15,17,26,27,28,30,34,39,41,44,48,55,57,61,71,72'>55</option>";
				ex_dd += "<option value='1,4,6,20,24,26,28,32,34,36,46,47,49,52,55,56,57,60,61,64,66,71,72'>56</option>";
				ex_dd += "<option value='1,4,8,10,13,14,15,18,20,22,26,28,47,50,53,55,58,61,63,65,66,70,71'>57</option>";
				ex_dd += "<option value='1,3,4,11,15,17,18,20,26,28,35,42,44,49,55,56,57,59,61,62,65,71,75'>58</option>";
				ex_dd += "<option value='1,4,18,19,26,27,28,30,34,35,38,41,44,47,49,55,56,61,66,70,71,73,75'>59</option>";
				ex_dd += "<option value='1,3,4,11,12,13,16,17,21,25,26,28,35,43,49,55,57,59,61,65,66,69,71'>60</option>";
				ex_dd += "<option value='1,3,4,6,8,10,15,17,20,26,27,28,30,31,34,47,49,55,57,61,66,70,71'>61</option>";
				ex_dd += "<option value='1,4,7,9,11,14,16,20,22,24,26,28,39,41,42,46,48,53,55,57,67,70,71'>62</option>";
				ex_dd += "<option value='1,4,6,7,12,13,14,17,24,26,31,38,40,47,49,51,52,55,63,64,65,68,71'>63</option>";
				ex_dd += "<option value='1,2,4,8,10,13,14,16,18,20,22,26,35,38,40,50,53,55,61,63,65,67,71'>64</option>";
				ex_dd += "<option value='1,3,4,9,12,14,16,25,26,28,30,31,32,35,38,41,43,47,55,56,61,70,71'>65</option>";
				ex_dd += "<option value='1,4,8,10,13,15,17,19,24,26,28,30,41,42,44,55,57,59,61,62,70,71,73'>66</option>";
				ex_dd += "<option value='1,4,7,14,25,26,27,28,30,31,35,38,44,50,51,55,56,57,61,63,68,69,71'>67</option>";
				ex_dd += "<option value='1,2,4,5,6,17,23,26,28,34,35,36,43,44,46,53,55,58,65,67,69,70,71'>68</option>";
				ex_dd += "<option value='1,8,13,16,17,20,22,24,26,31,33,34,38,39,40,49,55,56,57,65,70,71,72'>69</option>";
				ex_dd += "<option value='1,8,13,21,25,26,27,32,33,35,40,43,44,47,48,50,55,58,59,66,70,71,72'>70</option>";
				ex_dd += "<option value='1,3,4,5,6,9,14,17,20,21,26,32,40,41,42,47,55,56,57,62,65,66,71'>71</option>";
				ex_dd += "<option value='1,4,5,6,7,9,13,19,21,24,26,37,40,41,42,52,55,56,57,64,66,69,71'>72</option>";
				ex_dd += "<option value='1,2,3,4,12,13,14,18,21,22,24,26,33,34,40,47,50,53,54,55,61,65,71'>73</option>";
				ex_dd += "<option value='1,4,5,6,10,13,14,18,19,26,31,34,37,38,40,47,51,55,62,65,68,69,71'>74</option>";
				ex_dd += "<option value='1,4,6,9,10,12,13,17,18,21,26,34,40,41,42,49,55,56,57,62,63,66,71'>75</option>";
				ex_dd += "<option value='1,4,7,9,10,11,14,22,25,26,27,31,33,38,40,54,55,56,57,61,62,69,71'>76</option>";
				ex_dd += "<option value='1,2,4,8,11,20,24,26,35,38,40,41,42,44,45,50,53,55,62,63,65,68,71'>77</option>";
				ex_dd += "<option value='1,4,6,7,11,17,24,26,31,38,40,41,42,43,44,47,53,55,63,65,66,67,71'>78</option>";
				ex_dd += "<option value='1,2,4,5,11,14,17,18,26,30,32,35,38,40,41,47,48,55,59,65,66,71,74'>79</option>";
				ex_dd += "<option value='1,3,4,6,7,11,17,18,24,26,34,35,39,40,46,48,53,55,62,65,70,71,75'>80</option>";
				ex_dd += "<option value='1,4,5,18,26,27,28,30,35,38,41,44,47,49,50,55,56,61,63,66,69,71,75'>81</option>";
				ex_dd += "<option value='1,2,12,16,21,24,25,26,28,33,34,38,45,46,48,49,50,55,65,66,68,69,71'>82</option>";
				ex_dd += "<option value='1,3,4,5,6,11,13,21,26,28,35,40,45,49,52,53,55,59,65,68,69,71,75'>83</option>";
				ex_dd += "<option value='1,2,4,5,6,8,11,20,23,26,35,38,40,44,45,50,53,55,59,60,65,68,71'>84</option>";
				ex_dd += "<option value='1,5,22,26,30,33,36,40,42,43,44,46,47,48,50,55,57,59,60,62,66,71,72'>85</option>";
				ex_dd += "<option value='1,3,4,6,12,23,24,26,32,36,38,40,42,44,47,51,53,55,57,59,68,69,71'>86</option>";
				ex_dd += "<option value='1,2,4,5,10,22,24,26,38,39,40,48,49,53,55,56,59,61,65,69,71,72,75'>87</option>";
				ex_dd += "<option value='1,2,5,10,11,20,22,24,25,26,33,38,40,43,48,49,50,53,55,59,65,71,72'>88</option>";
				ex_dd += "<option value='1,10,11,17,18,19,24,26,30,33,38,39,40,41,47,55,57,58,59,66,67,71,73'>89</option>";
				ex_dd += "<option value='1,10,12,20,24,26,28,33,40,41,43,44,46,48,50,52,55,58,63,65,66,70,71'>90</option>";
				ex_dd += "<option value='1,3,6,11,12,16,20,21,24,26,30,33,39,40,44,50,55,56,58,59,66,70,71'>91</option>";
				ex_dd += "<option value='1,3,4,6,8,12,24,26,32,33,38,40,44,45,54,55,63,66,68,69,71,72,75'>92</option>";
				ex_dd += "<option value='1,2,4,5,10,13,26,29,31,33,37,38,40,44,55,59,62,65,69,70,71,73,75'>93</option>";
				ex_dd += "<option value='1,2,4,11,12,17,23,26,28,35,38,39,49,55,56,59,60,61,65,66,69,71,74'>94</option>";
				ex_dd += "<option value='1,4,8,11,12,17,18,26,28,38,39,42,44,49,50,55,59,61,62,65,66,71,74'>95</option>";
				ex_dd += "<option value='1,2,4,9,13,14,15,17,26,28,29,31,42,47,53,54,55,56,57,61,70,71,72'>96</option>";
				ex_dd += "<option value='1,4,7,11,12,14,25,26,27,28,29,31,32,33,35,38,44,55,56,57,61,63,71'>97</option>";
				ex_dd += "<option value='1,2,4,7,8,9,13,17,20,21,25,26,27,32,40,47,55,62,65,66,70,71,72'>98</option>";
				ex_dd += "<option value='1,4,6,7,8,9,14,17,18,21,25,26,27,31,32,35,40,41,42,49,55,65,71'>99</option>";
				ex_dd += "<option value='1,2,3,4,6,12,17,26,31,34,35,40,43,44,46,47,48,55,65,67,70,71,74'>100</option>";
				ex_dd += "<option value='1,2,4,5,6,10,18,23,26,27,28,35,40,46,47,50,55,59,60,64,65,66,71'>101</option>";
				ex_dd += "<option value='1,18,22,23,26,27,32,33,34,35,36,38,40,43,48,52,53,55,57,64,69,71,75'>102</option>";
				ex_dd += "<option value='1,16,26,27,28,30,31,33,34,35,36,39,40,44,46,55,57,58,60,64,69,71,75'>103</option>";
				ex_dd += "<option value='1,2,3,4,6,8,13,20,26,28,30,34,37,38,42,49,55,61,62,66,71,73,75'>104</option>";
				ex_dd += "<option value='1,4,5,16,25,26,28,30,34,39,42,44,46,47,48,55,56,61,62,66,67,71,75'>105</option>";
				ex_dd += "<option value='1,4,6,7,8,12,17,19,21,26,35,38,40,42,44,46,55,63,65,66,71,73,75'>106</option>";
				ex_dd += "<option value='1,2,4,7,8,10,21,26,31,38,40,41,44,46,48,50,55,62,63,65,71,74,75'>107</option>";
				ex_dd += "<option value='1,4,8,12,18,20,24,26,38,39,40,42,45,50,51,55,57,59,65,66,71,72,74'>108</option>";
				ex_dd += "<option value='1,4,10,13,20,21,22,25,26,31,35,40,44,52,55,56,58,59,64,65,69,71,72'>109</option>";
				ex_dd += "<option value='1,2,4,6,12,14,18,21,24,26,27,40,41,42,45,50,51,55,59,65,66,71,75'>110</option>";
				ex_dd += "<option value='1,3,4,5,7,10,23,25,26,27,34,36,38,40,49,50,53,55,62,65,70,71,75'>111</option>";
				ex_dd += "<option value='1,5,6,8,12,13,21,25,26,28,30,31,33,35,43,44,48,53,55,59,66,70,71'>112</option>";
				ex_dd += "<option value='1,4,7,11,12,14,22,24,26,28,30,31,35,39,44,46,47,55,62,63,71,74,75'>113</option>";
				ex_dd += "<option value='1,4,7,11,17,21,22,26,34,35,40,42,44,52,53,55,56,58,64,65,71,72,75'>114</option>";
				ex_dd += "<option value='1,4,11,14,18,20,26,29,35,36,38,40,42,54,55,57,59,60,65,66,69,71,72'>115</option>";
				ex_dd += "<option value='1,2,4,8,13,16,19,20,26,28,30,31,42,43,44,46,55,61,62,63,71,73,75'>116</option>";
				ex_dd += "<option value='1,2,4,6,9,10,17,20,25,26,28,39,42,46,48,53,55,56,57,61,62,69,71'>117</option>";
				ex_dd += "<option value='1,2,17,18,25,26,33,35,38,40,43,48,50,53,55,56,57,59,61,65,69,71,75'>118</option>";
				ex_dd += "<option value='1,3,17,18,26,27,33,35,38,40,44,48,49,53,55,56,57,59,61,65,67,71,75'>119</option>";
				ex_dd += "<option value='1,4,12,13,24,25,26,38,40,41,44,45,52,55,56,63,64,65,66,68,69,71,75'>120</option>";
				ex_dd += "<option value='1,4,10,14,22,25,26,38,40,42,43,44,53,55,56,61,62,63,65,67,69,71,75'>121</option>";
				ex_dd += "<option value='1,4,12,14,20,21,23,26,27,33,35,40,44,54,55,56,59,60,65,66,69,71,72'>122</option>";
				ex_dd += "<option value='1,4,7,10,20,21,25,26,28,34,35,40,42,44,52,53,55,57,58,61,65,69,71'>123</option>";
				ex_dd += "<option value='1,5,17,20,22,24,26,27,33,36,40,41,43,44,46,48,53,55,60,63,65,71,72'>124</option>";
				ex_dd += "<option value='1,14,16,22,24,25,26,30,31,33,36,39,40,46,49,50,55,57,60,63,70,71,75'>125</option>";
				ex_dd += "<option value='1,4,9,12,14,26,27,28,30,32,35,38,41,44,49,50,55,56,61,66,69,71,75'>126</option>";
				ex_dd += "<option value='1,4,5,7,9,11,13,17,26,28,31,34,35,42,45,46,55,59,61,68,69,71,75'>127</option>";
				ex_dd += "<option value='1,4,6,11,12,14,16,25,26,28,32,34,35,44,46,55,56,59,61,63,66,67,71'>128</option>";
				ex_dd += "<option value='1,2,4,5,8,17,20,23,24,26,28,38,49,50,53,55,57,59,60,61,65,71,75'>129</option>";
				ex_dd += "<option value='1,2,4,11,17,18,21,22,24,26,34,40,48,53,55,56,58,65,70,71,72,74,75'>130</option>";
				ex_dd += "<option value='1,5,6,13,14,15,19,22,26,28,30,33,44,48,55,56,59,61,67,69,70,71,73'>131</option>";
				ex_dd += "<option value='1,4,8,13,19,20,26,28,30,42,43,44,46,47,55,61,62,63,66,67,70,71,73'>132</option>";
				ex_dd += "<option value='1,3,4,5,8,9,10,15,25,26,27,28,29,30,41,43,47,50,54,61,62,71,73'>133</option>";
				ex_dd += "<option value='1,2,4,6,8,11,24,26,38,40,41,42,44,45,50,51,53,55,63,65,71,72,75'>134</option>";
				ex_dd += "<option value='1,4,5,10,18,20,21,22,24,26,31,40,48,55,56,57,58,59,65,69,71,72,74'>135</option>";
				ex_dd += "<option value='1,2,5,20,26,27,28,30,33,34,35,39,40,44,46,53,55,58,64,67,69,70,71'>136</option>";
				ex_dd += "<option value='1,2,3,17,22,24,26,27,31,33,34,38,40,44,48,55,57,65,67,70,71,72,75'>137</option>";
				ex_dd += "<option value='1,2,3,17,26,27,33,38,39,40,42,49,53,55,56,57,59,61,62,65,67,71,75'>138</option>";
				ex_dd += "<option value='1,2,4,12,13,14,21,22,24,26,31,33,34,40,47,49,50,54,55,56,58,65,71'>139</option>";
				ex_dd += "<option value='1,4,6,10,13,14,18,26,31,37,38,40,47,50,51,55,62,63,65,68,70,71,73'>140</option>";
				ex_dd += "<option value='1,4,7,8,16,20,25,26,28,30,31,34,43,44,46,50,55,57,61,62,69,71,75'>141</option>";
				ex_dd += "<option value='1,7,8,20,24,26,30,33,34,36,40,42,46,48,49,53,55,60,61,67,69,70,71'>142</option>";
				ex_dd += "<option value='1,13,14,21,24,26,30,33,40,41,43,44,47,48,50,52,55,59,61,64,66,71,72'>143</option>";
				ex_dd += "<option value='1,4,14,20,21,24,26,28,29,32,33,39,42,47,48,49,50,53,55,61,63,69,71'>144</option>";
				ex_dd += "<option value='1,4,5,7,20,26,28,32,34,35,39,46,49,51,53,55,56,61,68,70,71,74,75'>145</option>";
				ex_dd += "<option value='1,2,4,10,20,26,35,37,38,40,41,42,49,50,51,55,63,65,66,68,71,72,73'>146</option>";
				ex_dd += "<option value='1,4,6,7,12,16,17,18,24,26,31,38,40,41,42,47,52,55,63,64,65,67,71'>147</option>";
				ex_dd += "<option value='1,2,4,8,10,20,22,26,35,38,40,41,42,49,50,51,53,55,61,63,65,68,71'>148</option>";
				ex_dd += "<option value='1,3,5,6,26,27,33,35,38,40,45,48,49,53,55,59,61,65,67,68,69,71,75'>149</option>";
				ex_dd += "<option value='1,3,4,6,12,13,16,21,24,25,26,40,43,44,45,55,59,65,66,68,69,71,75'>150</option>";
				ex_dd += "<option value='1,2,4,5,8,10,24,26,37,38,39,40,48,49,55,56,59,65,66,69,71,73,75'>151</option>";
				ex_dd += "<option value='1,2,3,4,5,8,12,18,20,21,24,26,33,39,40,48,54,55,63,65,66,69,71'>152</option>";
				ex_dd += "<option value='1,2,3,4,6,10,13,16,26,29,33,40,43,46,49,50,55,59,62,65,66,71,75'>153</option>";
				ex_dd += "<option value='1,4,6,13,18,26,27,28,29,30,31,33,35,38,42,47,55,56,59,61,70,71,75'>154</option>";
				ex_dd += "<option value='1,4,5,6,11,12,16,18,24,26,28,32,34,43,44,46,49,55,56,61,66,71,72'>155</option>";
				ex_dd += "<option value='1,2,3,8,13,21,22,24,25,26,27,32,33,34,40,43,44,47,48,50,55,66,71'>156</option>";
				ex_dd += "<option value='1,3,8,20,21,22,23,24,26,27,31,32,33,34,40,44,48,50,55,60,67,70,71'>157</option>";
				ex_dd += "<option value='1,4,6,12,17,20,21,26,31,40,41,42,49,53,55,57,58,61,62,63,65,66,71'>158</option>";
				ex_dd += "<option value='1,2,3,4,5,10,16,25,26,27,34,38,40,42,43,47,49,50,55,62,65,66,71'>159</option>";
				ex_dd += "<option value='1,2,14,20,21,25,26,28,32,33,40,42,44,48,50,53,55,61,62,63,64,67,71'>160</option>";
				ex_dd += "<option value='1,3,14,20,21,26,27,28,32,33,40,42,43,48,49,53,55,61,62,63,64,69,71'>161</option>";
				ex_dd += "<option value='1,2,7,20,21,23,25,26,31,32,33,36,40,44,48,50,55,59,61,62,67,71,72'>162</option>";
				ex_dd += "<option value='1,5,13,20,21,22,23,24,26,32,33,34,36,39,40,49,50,53,55,56,57,67,71'>163</option>";
				ex_dd += "<option value='1,8,14,19,20,21,22,24,26,32,33,34,37,39,40,49,55,66,67,69,70,71,72'>164</option>";
				ex_dd += "<option value='1,3,6,7,11,14,20,24,26,28,29,30,31,38,39,43,44,47,55,57,63,71,72'>165</option>";
				ex_dd += "<option value='1,2,6,7,12,13,21,22,26,28,29,30,31,34,35,43,44,48,55,57,61,71,72'>166</option>";
				ex_dd += "<option value='1,6,8,12,13,14,25,26,28,32,33,34,35,44,46,48,55,56,59,63,66,67,71'>167</option>";
				ex_dd += "<option value='1,5,7,11,13,14,26,27,28,32,33,38,39,43,48,49,53,55,62,63,70,71,74'>168</option>";
				ex_dd += "<option value='1,4,6,12,13,14,17,22,24,26,31,40,46,47,49,52,55,57,58,63,64,65,71'>169</option>";
				ex_dd += "<option value='1,2,4,10,13,14,16,18,20,26,35,37,38,40,50,55,63,65,66,67,71,72,73'>170</option>";
				ex_dd += "<option value='1,13,18,26,27,28,32,33,35,38,40,48,52,53,55,56,59,61,67,69,71,72,75'>171</option>";
				ex_dd += "<option value='1,8,17,23,25,26,33,38,40,42,43,44,48,53,55,57,59,60,61,62,65,71,75'>172</option>";
				ex_dd += "<option value='1,2,4,6,12,14,17,18,26,30,32,36,38,40,42,55,60,62,63,65,66,71,75'>173</option>";
				ex_dd += "<option value='1,7,13,14,20,22,24,26,30,33,39,40,42,46,49,50,53,55,57,63,67,70,71'>174</option>";
				ex_dd += "<option value='1,2,4,6,10,13,20,21,26,30,31,32,34,35,40,44,55,58,61,65,69,71,72'>175</option>";
				ex_dd += "<option value='1,3,4,6,12,20,21,26,33,35,39,40,41,44,48,50,54,55,56,59,65,66,71'>176</option>";
				ex_dd += "<option value='1,2,4,5,10,20,21,26,34,35,40,48,49,53,55,57,58,61,65,69,70,71,74'>177</option>";
				ex_dd += "<option value='1,2,3,8,14,19,20,21,26,32,33,35,37,39,40,49,55,58,59,66,67,69,71'>178</option>";
				ex_dd += "<option value='1,2,3,7,13,21,22,24,26,31,33,34,40,43,45,49,50,51,55,65,71,74,75'>179</option>";
				ex_dd += "<option value='1,3,5,19,20,21,22,24,26,27,31,32,33,39,40,44,50,55,56,63,67,71,73'>180</option>";
				ex_dd += "<option value='1,2,8,20,21,22,23,24,25,26,31,32,33,34,40,43,48,49,55,60,69,70,71'>181</option>";
				ex_dd += "<option value='1,3,4,6,8,17,20,26,28,29,30,38,49,50,54,55,57,61,62,63,66,71,75'>182</option>";
				ex_dd += "<option value='1,7,8,9,13,14,16,24,25,26,28,29,31,32,33,38,47,54,55,56,65,71,74'>183</option>";
				ex_dd += "<option value='1,2,4,12,13,14,17,18,21,26,35,40,47,53,55,57,58,61,63,65,70,71,72'>184</option>";
				ex_dd += "<option value='1,4,6,10,13,14,17,26,34,38,40,41,45,47,49,51,55,56,57,62,65,66,71'>185</option>";
				ex_dd += "<option value='1,4,5,7,8,11,17,25,26,27,35,38,40,42,44,47,55,58,59,61,65,66,71'>186</option>";
				ex_dd += "<option value='1,4,6,11,13,14,17,22,24,26,34,38,40,41,44,47,55,56,57,61,65,66,71'>187</option>";
				ex_dd += "<option value='1,5,7,13,20,21,26,32,33,40,43,44,48,50,53,55,57,59,61,62,70,71,72'>188</option>";
				ex_dd += "<option value='1,6,8,14,20,21,26,32,33,40,41,42,48,49,53,55,56,59,61,62,67,69,71'>189</option>";
				ex_dd += "<option value='1,4,6,7,8,11,13,17,26,29,33,34,35,40,44,46,55,58,61,65,66,71,75'>190</option>";
				ex_dd += "<option value='1,4,7,11,13,25,26,33,36,38,40,44,47,50,54,55,60,62,63,65,66,70,71'>191</option>";
				ex_dd += "<option value='1,7,8,19,24,26,30,33,40,42,46,47,48,49,50,55,57,61,63,66,67,71,73'>192</option>";
				ex_dd += "<option value='1,13,14,19,24,26,30,31,33,34,37,40,43,46,47,48,49,50,55,56,61,71,72'>193</option>";
				ex_dd += "<option value='1,5,6,12,13,16,22,24,26,28,31,32,33,37,38,41,44,48,55,58,63,71,73'>194</option>";
				ex_dd += "<option value='1,3,4,6,8,10,24,26,39,40,43,44,46,47,48,50,55,56,59,65,66,67,71'>195</option>";
				ex_dd += "<option value='1,2,4,5,12,13,20,21,26,29,40,44,53,54,55,58,61,62,63,65,69,70,71'>196</option>";
				ex_dd += "<option value='1,12,13,16,26,28,29,30,31,38,39,41,44,48,55,56,57,58,61,62,63,71,74'>197</option>";
				break;
			case 16:
				//45-23
				ex_dd += "<option value='1,4,8,10,12,13,18,20,24,26,27,28,41,46,47,52,53,55,61,63,64,65,71'>1</option>";
				ex_dd += "<option value='1,4,8,10,12,13,17,18,26,28,30,42,46,50,52,55,57,59,61,62,64,66,71'>2</option>";
				ex_dd += "<option value='1,2,3,4,5,14,19,24,25,26,27,28,30,31,44,46,55,56,59,61,71,72,73'>3</option>";
				ex_dd += "<option value='1,2,3,4,8,13,19,20,26,28,30,31,34,38,41,42,44,55,61,62,71,73,75'>4</option>";
				ex_dd += "<option value='1,4,5,6,13,14,18,20,25,26,28,29,31,34,46,47,54,55,58,62,65,71,72'>5</option>";
				ex_dd += "<option value='1,4,7,9,11,14,17,20,25,26,27,28,31,33,38,54,55,56,61,62,69,71,72'>6</option>";
				ex_dd += "<option value='1,4,6,9,12,13,17,22,25,26,27,28,31,32,35,46,47,50,55,57,65,70,71'>7</option>";
				ex_dd += "<option value='1,2,4,5,6,14,21,26,27,28,32,34,35,37,41,49,55,56,58,66,70,71,73'>8</option>";
				ex_dd += "<option value='1,4,8,11,12,22,24,25,26,27,28,31,32,41,44,46,47,55,58,61,63,71,75'>9</option>";
				ex_dd += "<option value='1,4,7,9,10,14,17,19,25,26,27,28,38,53,55,56,61,62,69,71,72,73,75'>10</option>";
				ex_dd += "<option value='1,4,6,7,14,17,18,21,25,26,27,28,30,31,32,35,42,50,55,61,63,65,71'>11</option>";
				ex_dd += "<option value='1,6,7,13,26,28,30,33,35,38,40,42,43,49,50,52,53,55,58,59,71,74,75'>12</option>";
				ex_dd += "<option value='1,5,8,14,20,21,22,24,26,28,30,33,34,39,40,41,44,52,53,55,67,69,71'>13</option>";
				ex_dd += "<option value='1,3,4,7,8,20,25,26,28,30,31,38,41,44,50,55,57,61,62,63,69,71,75'>14</option>";
				ex_dd += "<option value='1,3,4,5,7,22,23,24,26,27,28,30,31,36,42,44,46,50,55,59,69,71,72'>15</option>";
				ex_dd += "<option value='1,3,4,13,21,23,24,26,27,28,31,32,36,44,50,55,57,59,61,69,70,71,72'>16</option>";
				ex_dd += "<option value='1,4,6,7,14,20,26,28,30,34,41,46,47,49,55,56,57,61,62,66,70,71,72'>17</option>";
				ex_dd += "<option value='1,4,6,7,14,21,25,26,27,28,29,32,33,35,41,49,55,56,57,58,59,66,71'>18</option>";
				ex_dd += "<option value='1,4,5,6,7,9,12,17,21,25,26,27,28,30,31,35,42,47,50,55,61,65,71'>19</option>";
				ex_dd += "<option value='1,4,6,7,8,9,11,17,24,25,26,27,28,29,31,38,41,47,54,55,61,69,71'>20</option>";
				ex_dd += "<option value='1,17,22,24,25,26,31,33,34,38,40,43,48,49,50,55,57,65,69,70,71,72,75'>21</option>";
				ex_dd += "<option value='1,3,5,6,13,22,24,25,26,30,33,34,38,40,43,44,48,50,53,55,71,72,75'>22</option>";
				ex_dd += "<option value='1,7,13,21,22,24,25,26,27,31,33,34,40,44,45,51,55,65,67,69,71,74,75'>23</option>";
				ex_dd += "<option value='1,5,6,13,18,26,27,30,31,33,35,38,40,48,55,56,59,61,67,69,70,71,75'>24</option>";
				ex_dd += "<option value='1,5,6,8,17,24,25,26,33,38,40,41,43,44,48,53,55,57,61,63,65,71,75'>25</option>";
				ex_dd += "<option value='1,4,5,7,8,11,15,17,25,26,27,28,31,42,44,47,55,59,61,65,66,71,75'>26</option>";
				ex_dd += "<option value='1,4,6,8,10,12,13,17,18,21,26,28,30,34,42,50,55,56,57,61,62,66,71'>27</option>";
				ex_dd += "<option value='1,7,13,21,26,32,33,36,40,43,44,47,48,50,55,59,60,61,62,66,70,71,72'>28</option>";
				ex_dd += "<option value='1,8,14,20,26,32,33,34,40,41,42,46,48,49,52,53,55,61,62,64,67,69,71'>29</option>";
				ex_dd += "<option value='1,7,18,22,26,27,31,32,33,34,35,38,40,42,48,52,55,57,64,67,69,71,75'>30</option>";
				ex_dd += "<option value='1,8,20,22,24,26,28,31,32,33,39,40,41,43,44,46,52,55,56,63,69,70,71'>31</option>";
				ex_dd += "<option value='1,2,4,6,8,10,22,26,38,40,41,42,49,50,53,55,61,62,63,65,71,72,75'>32</option>";
				ex_dd += "<option value='1,2,4,6,7,12,17,18,24,26,38,40,41,42,52,55,63,64,65,66,70,71,75'>33</option>";
				ex_dd += "<option value='1,5,7,8,24,26,30,33,34,40,42,46,47,48,49,55,57,61,66,67,69,70,71'>34</option>";
				ex_dd += "<option value='1,6,13,14,24,26,30,33,34,40,41,43,44,46,47,48,50,55,56,61,66,71,72'>35</option>";
				ex_dd += "<option value='1,7,8,11,18,26,28,30,33,34,35,42,46,47,48,55,56,57,66,67,70,71,75'>36</option>";
				break;
			case 17:
				//46-23
				ex_dd += "<option value='1,4,11,12,13,17,21,26,27,28,31,35,44,47,50,55,57,59,61,65,70,71,75'>1</option>";
				ex_dd += "<option value='1,2,5,6,13,22,24,26,27,30,33,34,38,40,48,49,53,55,67,69,71,72,75'>2</option>";
				ex_dd += "<option value='1,3,5,6,8,16,21,26,30,33,35,40,44,53,55,57,58,59,69,70,71,74,75'>3</option>";
				ex_dd += "<option value='1,11,12,13,14,16,25,26,28,30,32,33,35,39,42,44,46,62,63,66,67,71,73'>4</option>";
				ex_dd += "<option value='1,4,6,9,10,12,13,16,17,21,26,28,30,35,42,50,57,61,62,66,71,73,75'>5</option>";
				ex_dd += "<option value='1,4,5,7,8,14,17,22,24,26,27,28,31,41,42,44,46,55,56,59,65,69,71'>6</option>";
				ex_dd += "<option value='1,3,5,6,8,16,17,24,25,26,33,34,40,44,46,48,53,55,57,61,65,71,75'>7</option>";
				ex_dd += "<option value='1,2,3,8,11,12,14,20,26,32,33,35,38,39,40,49,55,61,63,66,67,69,71'>8</option>";
				ex_dd += "<option value='1,2,3,5,11,12,13,22,26,32,33,34,35,38,40,47,48,49,50,53,55,67,71'>9</option>";
				ex_dd += "<option value='1,2,4,6,11,12,14,26,27,28,32,35,38,41,49,50,55,56,59,61,66,69,71'>10</option>";
				ex_dd += "<option value='1,4,6,10,11,13,14,20,24,26,28,34,38,41,44,47,55,56,61,65,66,71,72'>11</option>";
				ex_dd += "<option value='1,2,5,7,8,16,17,20,25,26,33,38,40,44,48,53,55,59,61,62,65,70,71'>12</option>";
				ex_dd += "<option value='1,3,6,13,14,16,18,21,26,27,32,33,35,40,41,48,53,55,59,61,69,71,75'>13</option>";
				ex_dd += "<option value='1,5,12,13,14,18,21,22,24,26,28,30,33,34,41,48,50,55,61,66,67,69,71'>14</option>";
				ex_dd += "<option value='1,6,10,11,12,16,17,18,21,26,28,30,33,34,42,48,50,55,56,57,62,66,71'>15</option>";
				breal;
			case 18:
				//48-25
				ex_dd += "<option value='1,3,4,14,17,24,25,26,27,28,30,31,33,34,44,46,54,55,56,57,61,69,70,71,72'>1</option>";
				ex_dd += "<option value='1,2,3,4,6,7,9,13,14,17,20,21,25,26,32,40,41,47,55,56,62,65,66,70,71'>2</option>";
				ex_dd += "<option value='1,3,4,5,7,8,9,13,14,19,21,24,26,27,37,40,42,52,55,57,64,66,69,71,72'>3</option>";
				ex_dd += "<option value='1,4,5,6,7,10,17,20,24,26,28,29,33,35,38,41,43,44,58,63,66,69,71,73,75'>4</option>";
				ex_dd += "<option value='1,4,6,8,10,12,13,18,20,21,24,26,27,28,34,41,47,53,55,56,59,61,63,65,71'>5</option>";
				ex_dd += "<option value='1,2,3,4,6,8,9,13,15,17,26,27,28,29,31,41,42,47,53,54,55,57,61,70,71'>6</option>";
				ex_dd += "<option value='1,4,6,7,13,14,21,25,26,27,28,32,34,35,37,41,42,49,55,56,57,58,66,71,73'>7</option>";
				ex_dd += "<option value='1,3,4,8,11,12,20,22,25,26,28,29,31,32,33,41,44,46,55,58,61,62,63,71,75'>8</option>";
				ex_dd += "<option value='1,3,4,5,10,11,12,13,14,16,18,20,21,22,24,26,40,55,61,63,65,66,67,69,71'>9</option>";
				ex_dd += "<option value='1,2,4,6,7,8,10,11,12,26,40,46,48,49,50,55,58,59,61,62,65,66,71,74,75'>10</option>";
				ex_dd += "<option value='1,4,6,10,11,12,14,18,23,24,26,28,34,38,40,41,47,52,53,55,60,65,69,71,72'>11</option>";
				ex_dd += "<option value='1,4,5,6,10,13,14,16,20,22,24,26,38,40,41,44,53,55,56,59,61,65,67,69,71'>12</option>";
				ex_dd += "<option value='1,4,7,8,10,11,14,16,21,22,24,26,27,28,39,42,43,44,53,55,63,65,70,71,74'>13</option>";
				ex_dd += "<option value='1,2,6,14,18,24,26,33,38,40,44,45,48,49,50,53,55,61,63,65,67,68,71,72,75'>14</option>";
				ex_dd += "<option value='1,2,3,4,5,6,12,17,21,26,35,36,39,40,41,44,47,48,53,55,56,60,63,65,71'>15</option>";
				ex_dd += "<option value='1,2,3,4,5,6,10,18,20,26,31,35,40,46,48,52,55,57,59,64,65,69,70,71,74'>16</option>";
				ex_dd += "<option value='1,4,6,7,8,13,14,15,18,25,26,30,31,32,35,37,42,50,52,57,61,63,66,67,71'>17</option>";
				ex_dd += "<option value='1,6,11,14,16,17,18,21,26,28,31,32,33,36,42,45,48,50,55,60,62,63,68,70,71'>18</option>";
				ex_dd += "<option value='1,4,6,10,12,20,22,26,28,29,30,32,33,35,38,42,44,50,53,55,59,65,69,71,75'>19</option>";
				ex_dd += "<option value='1,2,10,12,22,24,26,27,32,33,38,39,40,41,44,45,55,56,63,66,67,68,69,71,75'>20</option>";
				ex_dd += "<option value='1,3,10,11,25,26,33,34,35,36,38,40,43,47,48,49,50,55,57,58,60,65,66,70,71'>21</option>";
				ex_dd += "<option value='1,8,10,12,17,23,25,26,32,33,36,40,44,46,48,51,55,59,61,62,66,67,68,71,75'>22</option>";
				ex_dd += "<option value='1,2,3,4,8,13,17,20,24,26,27,28,31,36,38,44,55,59,60,61,65,69,70,71,75'>23</option>";
				ex_dd += "<option value='1,3,4,6,7,17,21,26,28,32,35,41,43,44,45,47,51,55,58,63,66,67,69,71,75'>24</option>";
				ex_dd += "<option value='1,4,6,7,12,13,14,17,20,21,22,26,34,40,41,43,49,55,56,58,62,65,66,67,71'>25</option>";
				ex_dd += "<option value='1,5,8,9,10,12,13,14,24,26,28,32,33,39,41,43,46,47,53,55,58,61,65,70,71'>26</option>";
				ex_dd += "<option value='1,2,4,5,7,11,12,17,21,25,26,27,28,31,35,42,44,47,50,55,59,61,65,71,75'>27</option>";
				ex_dd += "<option value='1,2,4,6,8,10,12,13,17,18,22,25,26,28,32,34,42,46,50,55,56,57,62,66,71'>28</option>";
				ex_dd += "<option value='1,4,5,8,10,11,13,14,21,26,28,32,33,34,42,44,47,54,55,56,61,62,66,71,75'>29</option>";
				ex_dd += "<option value='1,3,4,5,6,8,9,11,12,21,23,24,26,27,36,40,42,51,55,57,66,68,69,71,72'>30</option>";
				ex_dd += "<option value='1,2,4,5,6,7,9,10,12,17,18,21,25,26,34,40,41,49,55,56,62,63,66,70,71'>31</option>";
				ex_dd += "<option value='1,3,6,8,11,12,17,26,28,33,34,35,40,43,46,48,49,52,55,57,61,65,66,71,75'>32</option>";
				ex_dd += "<option value='1,4,7,13,17,18,26,28,29,33,35,38,43,47,50,53,55,56,59,61,65,67,70,71,75'>33</option>";
				ex_dd += "<option value='1,4,14,16,20,26,27,28,31,32,34,35,39,41,43,44,46,50,55,57,58,69,71,74,75'>34</option>";
				ex_dd += "<option value='1,2,5,10,11,13,18,23,26,33,34,35,38,40,47,48,50,55,56,60,61,65,66,67,71'>35</option>";
				ex_dd += "<option value='1,4,7,11,12,14,17,21,22,26,27,28,29,30,31,35,38,44,46,50,54,55,56,59,71'>36</option>";
				ex_dd += "<option value='1,3,4,7,10,11,13,14,16,26,28,31,41,44,46,55,56,57,59,61,62,65,67,71,72'>37</option>";
				ex_dd += "<option value='1,4,6,11,12,17,25,26,28,29,31,32,33,34,35,44,45,46,50,51,55,57,61,70,71'>38</option>";
				ex_dd += "<option value='1,2,4,5,14,19,20,25,26,28,29,30,31,33,44,46,47,55,56,59,61,62,71,72,73'>39</option>";
				ex_dd += "<option value='1,2,4,5,6,8,10,12,18,23,24,25,26,27,28,36,39,46,55,59,61,65,66,71,74'>40</option>";
				ex_dd += "<option value='1,4,5,6,8,9,10,11,12,17,18,24,25,26,28,39,44,46,50,55,61,66,71,74,75'>41</option>";
				ex_dd += "<option value='1,2,3,5,13,14,24,26,28,32,33,38,40,44,48,50,52,53,55,56,61,63,67,71,75'>42</option>";
				ex_dd += "<option value='1,2,3,6,7,8,23,26,30,31,33,38,40,43,48,49,55,57,59,60,61,62,69,71,75'>43</option>";
				ex_dd += "<option value='1,2,5,7,8,18,24,26,30,33,38,40,41,42,43,48,53,55,56,57,58,63,69,71,75'>44</option>";
				ex_dd += "<option value='1,4,7,8,10,11,14,24,25,26,27,28,29,32,34,38,39,44,54,55,61,66,70,71,74'>45</option>";
				ex_dd += "<option value='1,3,5,7,13,20,22,26,27,30,33,40,46,48,49,53,55,57,59,62,67,69,70,71,72'>46</option>";
				ex_dd += "<option value='1,2,6,8,14,17,26,33,38,39,40,41,42,49,53,55,57,59,61,62,65,67,71,72,75'>47</option>";
				ex_dd += "<option value='1,5,7,10,11,12,14,16,18,26,27,28,30,32,33,46,48,55,57,62,63,65,66,70,71'>48</option>";
				ex_dd += "<option value='1,3,4,7,8,9,10,17,23,24,25,26,28,34,38,42,50,53,55,59,60,61,70,71,75'>49</option>";
				ex_dd += "<option value='1,2,4,8,17,23,24,25,26,27,28,31,34,36,41,44,46,55,59,61,63,65,69,70,71'>50</option>";
				ex_dd += "<option value='1,6,13,17,20,22,24,26,27,30,33,34,38,39,40,42,45,49,51,53,55,56,57,67,71'>51</option>";
				ex_dd += "<option value='1,3,5,7,13,17,25,26,27,33,38,39,40,49,53,55,56,59,61,62,65,67,70,71,75'>52</option>";
				ex_dd += "<option value='1,2,6,8,14,17,22,24,26,31,33,34,38,40,41,44,48,55,56,57,65,67,70,71,75'>53</option>";
				ex_dd += "<option value='1,4,14,17,20,26,27,28,32,33,38,42,48,49,53,54,55,56,59,61,62,69,71,74,75'>54</option>";
				ex_dd += "<option value='1,8,10,12,13,14,16,17,21,22,23,26,30,33,35,36,39,40,41,49,55,59,66,71,75'>55</option>";
				ex_dd += "<option value='1,7,8,10,12,13,20,24,26,32,33,34,38,40,43,45,48,49,51,55,57,58,66,69,71'>56</option>";
				ex_dd += "<option value='1,3,4,7,8,10,11,14,17,18,21,26,27,28,32,38,41,46,53,55,58,59,62,69,71'>57</option>";
				ex_dd += "<option value='1,2,4,6,7,11,12,13,17,21,26,28,29,31,33,34,35,38,44,46,50,55,61,65,71'>58</option>";
				ex_dd += "<option value='1,4,5,7,9,10,14,17,18,20,24,26,27,28,29,33,41,44,46,55,58,66,69,71,72'>59</option>";
				ex_dd += "<option value='1,4,5,7,9,10,12,13,14,17,20,21,25,26,31,34,35,40,42,47,55,56,63,71,72'>60</option>";
				ex_dd += "<option value='1,2,4,6,8,12,13,20,21,22,26,29,31,34,40,41,49,50,54,55,58,62,65,71,72'>61</option>";
				ex_dd += "<option value='1,4,6,7,8,13,14,17,22,24,26,27,28,29,33,46,49,50,55,56,63,65,66,70,71'>62</option>";
				ex_dd += "<option value='1,5,7,8,9,11,13,14,15,25,26,28,30,32,33,41,42,55,56,67,69,70,71,74,75'>63</option>";
				ex_dd += "<option value='1,2,4,7,9,11,14,20,25,26,27,28,31,38,50,55,56,57,59,61,62,63,69,71,72'>64</option>";
				ex_dd += "<option value='1,4,5,7,9,10,14,17,25,26,27,28,34,38,50,53,55,56,61,62,63,70,71,72,75'>65</option>";
				ex_dd += "<option value='1,2,3,4,5,8,13,20,26,28,30,31,38,41,42,44,50,55,61,62,63,69,70,71,75'>66</option>";
				ex_dd += "<option value='1,6,7,8,20,21,22,23,24,26,30,33,34,40,42,43,44,53,55,60,69,70,71,72,74'>67</option>";
				ex_dd += "<option value='1,5,13,14,23,26,30,33,35,38,39,40,41,49,50,53,55,58,59,60,67,70,71,72,75'>68</option>";
				ex_dd += "<option value='1,5,19,20,22,26,28,32,33,37,40,41,42,43,46,48,49,50,52,55,59,62,66,70,71'>69</option>";
				ex_dd += "<option value='1,6,16,18,20,21,24,26,28,31,33,39,40,41,42,45,50,51,52,55,58,63,65,71,72'>70</option>";
				ex_dd += "<option value='1,8,10,11,13,14,21,26,30,31,32,33,34,35,39,40,41,49,55,58,65,67,69,71,75'>71</option>";
				ex_dd += "<option value='1,5,10,12,13,14,24,26,29,31,32,33,34,38,39,40,42,49,50,54,55,58,67,71,75'>72</option>";
				ex_dd += "<option value='1,3,7,8,14,17,19,20,21,22,26,33,34,37,40,48,49,52,55,62,64,65,66,67,71'>73</option>";
				ex_dd += "<option value='1,3,25,26,32,33,38,39,40,42,43,44,48,50,53,55,56,57,59,61,62,71,72,74,75'>74</option>";
				ex_dd += "<option value='1,2,26,27,32,33,38,39,40,42,48,49,53,55,56,57,59,61,62,67,69,71,72,74,75'>75</option>";
				ex_dd += "<option value='1,2,3,11,12,14,20,23,26,32,33,35,38,40,48,49,50,55,56,60,61,63,66,67,71'>76</option>";
				ex_dd += "<option value='1,2,3,7,10,11,21,26,28,31,33,34,40,43,48,49,50,52,55,57,61,62,65,71,75'>77</option>";
				ex_dd += "<option value='1,4,6,7,11,12,13,17,22,25,26,28,29,30,31,32,33,34,35,38,44,50,55,65,71'>78</option>";
				ex_dd += "<option value='1,6,7,9,11,12,14,17,20,26,27,28,29,30,31,32,33,35,38,39,43,54,55,69,71'>79</option>";
				ex_dd += "<option value='1,3,10,12,14,18,19,20,21,24,26,33,34,37,40,48,50,53,55,61,65,67,70,71,72'>80</option>";
				ex_dd += "<option value='1,4,14,16,17,24,26,28,30,33,34,43,46,47,49,50,54,55,56,57,61,66,71,72,75'>81</option>";
				ex_dd += "<option value='1,3,6,9,11,12,13,17,25,26,27,28,30,31,33,35,38,43,47,55,65,69,70,71,74'>82</option>";
				ex_dd += "<option value='1,3,4,5,6,8,12,21,24,26,33,40,42,44,51,54,55,63,65,66,68,69,71,72,75'>83</option>";
				ex_dd += "<option value='1,2,4,5,6,10,13,19,26,29,33,38,40,41,49,55,59,62,65,66,69,70,71,73,75'>84</option>";
				ex_dd += "<option value='1,4,7,8,10,12,13,18,20,26,27,28,39,41,46,47,53,55,61,62,63,65,70,71,74'>85</option>";
				ex_dd += "<option value='1,2,4,5,8,11,14,17,21,23,24,26,27,39,40,44,53,55,60,63,65,71,72,74,75'>86</option>";
				ex_dd += "<option value='1,3,4,6,7,11,13,24,26,29,37,40,44,46,50,53,54,55,57,63,65,70,71,73,75'>87</option>";
				ex_dd += "<option value='1,5,6,7,13,21,26,32,33,35,40,43,44,48,50,51,53,55,57,59,61,68,70,71,75'>88</option>";
				ex_dd += "<option value='1,5,6,8,14,20,26,33,38,40,41,45,48,49,51,53,55,56,59,61,62,65,67,69,71'>89</option>";
				ex_dd += "<option value='1,4,5,6,10,13,14,16,21,26,28,30,32,33,39,44,47,48,54,59,61,66,71,73,75'>90</option>";
				ex_dd += "<option value='1,2,4,14,20,26,27,28,32,38,42,48,49,50,53,55,56,57,61,62,63,69,71,74,75'>91</option>";
				ex_dd += "<option value='1,4,5,9,11,13,14,20,26,27,28,31,38,42,50,55,56,59,61,62,63,69,70,71,72'>92</option>";
				ex_dd += "<option value='1,4,7,8,11,14,15,22,25,26,28,29,30,33,34,41,47,49,55,56,57,69,70,71,75'>93</option>";
				ex_dd += "<option value='1,3,4,7,8,10,15,20,25,26,27,28,29,30,34,41,44,47,54,55,57,61,69,70,71'>94</option>";
				ex_dd += "<option value='1,3,7,13,17,21,22,24,25,26,27,31,32,33,34,40,44,45,48,51,55,67,71,72,75'>95</option>";
				ex_dd += "<option value='1,2,3,4,6,11,12,13,21,24,26,28,29,31,44,51,54,55,61,63,65,68,70,71,72'>96</option>";
				ex_dd += "<option value='1,2,3,7,9,11,12,14,21,24,26,28,30,31,43,47,48,51,54,55,56,57,65,68,71'>97</option>";
				ex_dd += "<option value='1,3,7,13,14,20,21,24,26,27,32,33,39,40,42,43,44,53,55,57,61,63,69,70,71'>98</option>";
				ex_dd += "<option value='1,2,6,13,14,21,22,24,25,26,32,33,34,40,41,43,44,47,48,50,55,56,66,71,72'>99</option>";
				ex_dd += "<option value='1,3,4,6,7,11,12,13,16,21,26,28,30,39,43,48,49,55,56,57,58,59,62,66,71'>100</option>";
				ex_dd += "<option value='1,8,11,12,14,15,16,17,20,26,28,33,39,47,48,49,55,58,61,63,65,70,71,72,74'>101</option>";
				ex_dd += "<option value='1,8,11,12,13,14,21,22,23,26,30,33,34,35,39,40,41,49,55,60,66,67,69,71,75'>102</option>";
				ex_dd += "<option value='1,5,7,18,21,22,26,27,31,33,34,35,40,45,48,51,52,55,57,64,65,67,69,71,75'>103</option>";
				ex_dd += "<option value='1,4,7,8,10,11,14,16,17,18,21,26,27,28,32,34,43,53,55,58,59,62,63,69,71'>104</option>";
				ex_dd += "<option value='1,5,6,9,10,12,13,16,17,18,24,25,26,28,33,39,44,46,48,50,55,66,71,74,75'>105</option>";
				ex_dd += "<option value='1,2,4,5,10,19,20,26,34,35,37,38,40,41,42,49,51,55,65,66,68,69,70,71,72'>106</option>";
				ex_dd += "<option value='1,4,7,10,14,25,26,34,35,38,39,40,41,47,48,49,51,55,57,65,66,68,69,70,71'>107</option>";
				ex_dd += "<option value='1,3,4,6,12,19,21,26,34,35,40,41,42,44,45,50,51,55,65,66,70,71,72,73,75'>108</option>";
				ex_dd += "<option value='1,5,6,8,10,12,13,15,16,18,21,25,26,27,28,33,39,46,47,50,55,59,65,71,75'>109</option>";
				ex_dd += "<option value='1,5,7,8,10,11,14,15,16,18,24,25,26,27,28,32,34,54,55,58,61,62,69,71,74'>110</option>";
				ex_dd += "<option value='1,2,6,8,10,11,17,26,30,33,40,41,42,43,46,48,49,53,55,57,61,62,63,71,75'>111</option>";
				ex_dd += "<option value='1,3,5,11,12,13,18,24,26,31,32,33,38,40,47,48,50,55,56,59,61,67,70,71,72'>112</option>";
				ex_dd += "<option value='1,2,7,8,10,11,25,26,33,34,38,40,44,47,48,55,57,61,62,65,66,67,69,70,71'>113</option>";
				ex_dd += "<option value='1,3,11,12,13,14,26,27,32,33,34,35,40,41,43,44,46,48,55,56,61,66,69,71,75'>114</option>";
				ex_dd += "<option value='1,3,5,8,13,17,26,33,35,36,38,39,40,49,53,55,56,58,59,60,65,67,70,71,75'>115</option>";
				ex_dd += "<option value='1,2,8,14,17,19,22,24,26,33,34,37,38,40,48,49,55,56,57,65,66,67,70,71,75'>116</option>";
				ex_dd += "<option value='1,4,7,8,12,13,15,16,18,22,25,26,28,32,34,42,47,50,55,56,57,67,70,71,75'>117</option>";
				ex_dd += "<option value='1,5,7,9,11,14,15,22,25,26,28,33,34,42,48,50,55,56,57,61,63,67,70,71,75'>118</option>";
				ex_dd += "<option value='1,4,6,13,21,24,26,28,29,31,32,33,41,42,44,50,53,55,61,63,66,69,70,71,72'>119</option>";
				ex_dd += "<option value='1,2,19,20,26,27,32,33,34,35,37,39,40,41,46,49,52,55,58,64,66,67,69,71,72'>120</option>";
				ex_dd += "<option value='1,4,5,6,10,11,12,15,18,21,25,26,27,28,39,46,47,48,50,55,59,61,65,71,75'>121</option>";
				ex_dd += "<option value='1,2,5,7,8,13,17,23,26,33,38,40,43,44,48,53,55,59,60,61,62,65,70,71,75'>122</option>";
				ex_dd += "<option value='1,3,6,8,13,14,18,26,28,32,33,35,38,40,41,48,52,53,55,59,61,67,69,71,75'>123</option>";
				ex_dd += "<option value='1,7,8,14,20,24,26,32,33,34,39,40,41,42,46,48,49,53,55,61,67,69,70,71,74'>124</option>";
				ex_dd += "<option value='1,7,13,14,21,26,30,33,39,40,41,43,44,47,48,50,55,59,61,62,66,70,71,72,74'>125</option>";
				ex_dd += "<option value='1,5,6,8,10,16,20,21,22,26,28,30,32,33,35,44,48,53,55,58,59,65,70,71,75'>126</option>";
				ex_dd += "<option value='1,4,6,7,12,13,14,17,18,20,25,26,30,32,38,40,47,53,55,62,63,65,70,71,75'>127</option>";

			case 19:
				//49-25
				ex_dd += "<option value='1,2,6,7,14,15,16,25,26,27,28,33,41,45,48,49,51,55,56,57,59,65,69,70,71'>1</option>";
				ex_dd += "<option value='1,2,4,6,7,14,24,26,27,28,33,34,42,46,49,53,54,55,56,57,61,65,70,71,72'>2</option>";
				ex_dd += "<option value='1,4,6,8,10,11,14,17,24,25,26,28,32,39,44,46,47,50,55,61,63,66,71,74,75'>3</option>";
				ex_dd += "<option value='1,5,7,9,10,12,13,17,21,26,27,28,33,34,43,47,48,53,55,58,59,61,62,69,71'>4</option>";
				ex_dd += "<option value='1,3,5,7,8,15,17,18,20,25,26,28,29,30,33,39,41,47,54,55,58,59,61,67,71'>5</option>";
				ex_dd += "<option value='1,5,7,8,11,14,16,21,22,24,25,26,27,28,31,34,42,44,54,55,56,61,65,71,74'>6</option>";
				ex_dd += "<option value='1,2,4,7,8,10,11,14,17,22,25,26,27,28,30,31,38,41,49,55,56,59,62,69,71'>7</option>";
				ex_dd += "<option value='1,4,7,12,18,20,22,25,26,27,31,34,37,38,39,42,48,50,52,57,67,69,71,72,75'>8</option>";
				ex_dd += "<option value='1,4,7,8,12,16,17,24,26,27,30,31,35,42,46,47,49,50,52,59,61,65,71,73,75'>9</option>";
				ex_dd += "<option value='1,2,5,10,12,13,21,26,27,28,33,34,35,39,40,43,44,47,53,55,61,64,65,69,71'>10</option>";
				ex_dd += "<option value='1,3,8,11,13,14,22,26,28,30,33,35,43,46,47,48,49,55,56,58,63,66,70,71,75'>1</option>";
				ex_dd += "<option value='1,2,3,6,8,17,20,24,25,26,31,33,34,36,40,44,46,48,55,60,61,65,67,70,71'>12</option>";
				ex_dd += "<option value='1,2,3,7,13,17,24,26,27,30,31,33,34,40,44,45,46,48,51,55,61,67,71,72,75'>13</option>";
				ex_dd += "<option value='1,4,8,13,14,16,20,22,25,26,28,30,42,44,46,50,53,55,56,62,63,67,69,71,75'>14</option>";
				ex_dd += "<option value='1,4,5,7,11,12,17,18,21,25,26,27,28,31,39,47,48,50,55,59,61,62,65,71,75'>15</option>";
				ex_dd += "<option value='1,5,7,11,12,14,17,21,22,25,26,28,31,35,39,44,47,50,54,59,61,62,71,73,75'>16</option>";
				ex_dd += "<option value='1,2,3,6,12,14,16,20,26,28,31,32,33,35,38,39,41,44,47,50,55,59,69,70,71'>17</option>";
				break;
			case 20:
				//50-25
				ex_dd += "<option value='1,3,5,10,11,16,17,21,26,27,32,33,34,40,42,47,48,49,55,57,61,62,66,71,72'>1</option>";
				ex_dd += "<option value='1,4,7,10,12,17,18,25,26,27,28,32,34,38,47,50,53,55,56,61,62,70,71,72,75'>2</option>";
				ex_dd += "<option value='1,8,10,12,15,20,25,26,27,28,30,34,41,43,44,47,54,55,57,58,61,69,70,71,74'>3</option>";
				ex_dd += "<option value='1,6,7,8,11,14,15,17,18,24,25,26,29,32,34,41,47,48,52,58,61,65,71,73,75'>4</option>";
				break;
			case 21:
				//53-27
				ex_dd += "<option value='1,2,6,8,10,12,13,14,15,16,17,18,22,24,26,28,30,33,42,47,55,61,62,63,71,74,75'>1</option>";
				break;
			case 22:
				//54-27
				ex_dd += "<option value='1,3,6,7,10,11,14,16,17,18,20,21,25,26,27,31,32,33,34,35,40,41,42,48,55,61,71'>1</option>";
				break;
			case 23:
				//40-23
				ex_dd += "<option value='1,3,4,8,11,19,23,26,28,29,31,33,36,38,42,49,53,57,61,63,66,67,71'>1</option>";
				break;
			case 24:
				//41-23
				ex_dd += "<option value='1,3,4,5,12,19,21,23,24,26,28,29,31,35,38,40,42,43,56,63,64,69,75'>1</option>";
				break;
			case 25:
				//42-23
				ex_dd += "<option value='1,2,3,4,7,15,19,20,23,24,26,28,29,38,39,40,47,48,57,63,64,67,75'>1</option>";
				break;
			case 26:
				//42-25
				ex_dd += "<option value='1,4,9,12,16,19,23,26,28,29,34,35,40,42,44,47,50,52,55,63,66,67,70,73,75'>1</option>";
				break;
			case 27:
				//43-25
				ex_dd += "<option value='1,2,3,4,5,8,15,19,23,24,26,28,29,31,38,40,42,43,50,56,63,64,66,69,75'>1</option>";
				break;				
			case 28:
				//44-25
				ex_dd += "<option value='1,3,4,5,11,12,13,15,19,20,23,24,25,26,28,29,31,35,38,40,43,52,53,62,63'>1</option>";
				break;				
			case 29:
				//45-25
				ex_dd += "<option value='1,2,3,4,14,19,20,22,23,24,26,28,29,31,35,38,39,43,46,47,48,51,59,68,72'>1</option>";
				break;				
			case 30:
				//46-25
				ex_dd += "<option value='1,2,3,4,11,19,20,22,23,24,26,27,28,29,30,31,35,42,47,51,55,62,63,68,73'>46-25</option>";
				break;				
			case 31:
				//47-25
				ex_dd += "<option value='1,2,3,4,13,19,20,22,23,24,26,28,29,38,41,43,44,46,49,59,62,66,70,72,75'>1</option>";
				break;				
			case 32:
				//44-27
				ex_dd += "<option value='1,3,4,7,12,19,23,26,28,29,31,32,35,38,41,43,44,51,54,57,58,60,62,63,65,68,71'>1</option>";
				break;				
			case 33:
				//45-27
				ex_dd += "<option value='1,3,4,5,9,11,19,20,22,23,24,26,28,29,31,33,38,42,53,55,59,60,63,66,71,72,73'>1</option>";
				break;				
			case 34:
				//46-27
				ex_dd += "<option value='1,3,4,6,7,19,20,22,23,24,26,27,28,29,37,41,42,43,44,47,49,57,59,62,66,72,73'>1</option>";
				break;				
			case 35:
				//47-27
				ex_dd += "<option value='1,2,3,4,7,12,14,19,20,23,24,26,27,28,29,31,35,39,40,43,48,50,52,57,59,70,72'>1</option>";
				break;				
			case 36:
				//48-27
				ex_dd += "<option value='1,2,3,4,11,15,19,20,22,23,24,26,27,28,29,31,35,42,43,46,47,50,51,53,62,63,68'>1</option>";
				break;				
			case 37:
				//49-27
				ex_dd += "<option value='1,2,3,4,5,6,12,14,19,20,22,23,24,26,27,28,29,31,32,39,48,51,55,59,68,73,75'>1</option>";
				break;				
			case 38:
				//50-27
				ex_dd += "<option value='1,2,3,4,6,7,10,11,17,19,20,22,23,24,26,27,28,29,35,42,43,47,50,51,53,63,68'>1</option>";
				break;				
			case 39:
				//51-27
				ex_dd += "<option value='1,2,3,4,8,13,14,16,19,20,21,22,23,24,25,26,28,29,31,34,38,47,50,52,62,64,69'>1</option>";
				break;				
			case 40:
				//52-27
				ex_dd += "<option value='1,2,3,4,6,8,13,14,16,19,20,22,23,24,25,26,28,29,31,38,46,47,50,56,59,62,69'>1</option>";
				break;				
			case 41:
				//46-29
				ex_dd += "<option value='1,3,4,7,11,15,17,19,21,23,24,25,26,28,29,36,38,40,43,47,48,49,54,56,59,64,69,71,74'>1</option>";
				break;
			case 42:
				//47-29
				ex_dd += "<option value='1,3,4,8,10,12,13,16,19,20,23,24,26,28,29,31,33,34,38,40,41,45,49,52,60,62,68,69,71'>1</option>";
				break;
			case 43:
				//48-29
				ex_dd += "<option value='1,3,4,5,7,14,15,19,20,22,23,24,26,27,28,29,31,33,34,36,39,43,44,47,48,53,69,70,71'>1</option>";
				break;
			case 44:
				//49-29
				ex_dd += "<option value='1,2,3,4,12,19,20,22,23,24,26,27,28,29,30,31,35,41,47,48,53,55,57,59,62,66,72,73,74'>1</option>";
				break;
			case 45:
				//50-29
				ex_dd += "<option value='1,2,3,4,7,9,10,19,20,22,23,24,26,27,28,29,30,33,35,42,43,44,47,51,53,54,57,68,75'>1</option>";
				break;
			case 46:
				//51-29
				ex_dd += "<option value='1,2,3,4,11,12,19,20,22,23,24,25,26,27,28,29,30,31,32,37,42,43,47,51,62,63,68,72,73'>1</option>";
				break;
			case 47:
				//52-29
				ex_dd += "<option value='1,2,3,4,5,9,11,14,18,19,20,22,23,24,25,26,27,28,29,30,31,37,42,43,51,62,68,72,73'>1</option>";
				break;
			case 48:
				//53-29
				ex_dd += "<option value='1,2,3,4,5,9,15,17,19,20,22,23,24,26,27,28,29,30,31,33,36,42,43,44,46,54,60,66,72'>1</option>";
				break;
			case 49:
				//54-29
				ex_dd += "<option value='1,2,3,4,5,9,11,12,14,16,19,20,22,23,24,26,27,28,29,30,31,33,35,42,46,52,60,64,71'>1</option>";
				break;
			case 50:
				//55-29
				ex_dd += "<option value='1,2,3,4,7,8,9,11,12,13,14,18,19,20,21,22,23,24,25,26,28,29,31,36,38,55,60,70,73'>1</option>";
				break;
			case 51:
				//56-29
				ex_dd += "<option value='1,2,3,4,7,10,12,13,14,16,17,19,20,23,24,26,28,29,30,32,35,38,46,47,56,59,61,66,69'>1</option>";
				break;
			case 52:
				//48-31
				ex_dd += "<option value='1,3,4,5,7,12,15,17,19,23,24,25,26,28,29,32,35,37,38,40,42,43,45,47,51,55,56,63,64,67,69'></option>";
				break;
			case 53:
				//49-31
				ex_dd += "<option value='1,3,4,5,7,13,15,19,20,22,23,24,26,27,28,29,31,33,37,43,44,47,50,57,60,63,66,70,71,72,73'>1</option>";
				break;
			case 54:
				//50-31
				ex_dd += "<option value='1,2,3,4,12,14,19,20,22,23,24,26,27,28,29,31,35,38,39,40,43,46,48,50,51,52,58,59,68,70,72'>1</option>";
				break;
			case 55:
				//51-31
				ex_dd += "<option value='1,2,3,4,11,13,14,19,20,22,23,24,26,27,28,29,30,31,33,34,35,37,45,54,55,56,59,62,63,68,75'>1</option>";
				break;
			case 56:
				//52-31
				ex_dd += "<option value='1,2,3,4,5,9,10,14,18,19,20,22,23,24,25,26,27,28,29,30,31,33,35,41,42,43,44,49,53,54,66'>1</option>";
				break;
			case 57:
				//53-31
				ex_dd += "<option value='1,2,3,4,5,7,11,14,18,19,20,22,23,24,25,26,27,28,29,30,35,41,42,49,55,57,62,63,66,73,75'>1</option>";
				break;
			case 58:
				//54-31
				ex_dd += "<option value='1,2,3,4,6,10,11,19,20,21,22,23,24,25,26,27,28,29,30,32,33,35,38,42,43,47,53,54,58,59,61'>1</option>";
				break;
			case 59:
				//55-31
				ex_dd += "<option value='1,2,3,4,5,9,10,11,12,14,16,19,20,22,23,24,25,26,27,28,29,30,31,33,35,41,42,49,52,54,64'>1</option>";
				break;
			case 60:
				//56-31
				ex_dd += "<option value='1,2,3,4,7,11,15,16,19,20,21,22,23,24,25,26,27,28,29,30,32,34,39,41,44,47,48,49,50,56,57'>1</option>";
				break;
			case 61:
				//57-31
				ex_dd += "<option value='1,2,3,4,5,6,7,8,12,13,14,15,16,18,19,20,22,23,24,26,27,28,29,39,46,49,56,59,69,74,75'>1</option>";
				break;
			case 62:
				//58-31
				ex_dd += "<option value='1,3,4,5,13,16,17,18,19,20,21,22,23,24,25,26,27,28,29,31,35,39,41,44,45,46,47,50,51,59,74'>1</option>";
				break;
			case 63:
				//51-33
				ex_dd += "<option value='1,2,3,4,5,8,13,14,18,19,20,22,23,24,26,27,28,29,35,37,39,42,44,47,48,50,56,59,66,67,69,70,73'>1</option>";
				break;
			case 64:
				//52-33
				ex_dd += "<option value='1,2,3,4,12,16,18,19,20,22,23,24,26,27,28,29,30,31,35,42,43,44,47,51,52,53,55,62,63,64,66,68,73'>1</option>";
				break;
			case 65:
				//53-33
				ex_dd += "<option value='1,2,3,4,5,6,11,12,19,20,22,23,24,25,26,27,28,29,30,31,32,35,36,37,42,43,53,57,60,63,66,73,75'>1</option>";
				break;
			case 66:
				//54-33
				ex_dd += "<option value='1,2,3,4,5,7,12,13,16,19,20,22,23,24,25,26,27,28,29,30,35,41,42,48,53,55,59,62,67,72,73,74,75'>1</option>";
				break;
			case 67:
				//55-33
				ex_dd += "<option value='1,2,3,4,5,9,12,14,16,19,20,22,23,24,25,26,27,28,29,30,31,37,42,44,51,52,53,62,64,66,68,72,73'>1</option>";
				break;
			case 68:
				//56-33
				ex_dd += "<option value='1,2,3,4,5,6,8,9,10,11,13,14,16,18,19,20,22,23,24,25,26,27,28,29,30,37,42,43,53,55,58,61,65'>1</option>";
				break;
			case 69:
				//57-33
				ex_dd += "<option value='1,2,3,4,6,8,9,14,15,19,20,21,22,23,24,25,26,27,28,29,30,34,39,42,43,49,53,57,59,66,69,70,74'>1</option>";
				break;
			case 70:
				//58-33
				ex_dd += "<option value='1,2,3,4,5,6,8,9,10,11,14,15,16,18,19,20,22,23,24,25,26,27,28,29,30,37,42,45,46,50,68,70,73'>1</option>";
				break;
			case 71:
				//59-33
				ex_dd += "<option value='1,2,3,4,5,6,7,8,12,13,15,17,18,19,20,22,23,24,26,27,28,29,30,32,34,40,54,60,61,64,67,69,71'>1</option>";
				break;
			case 72:
				//60-33
				ex_dd += "<option value='1,2,3,4,5,6,8,9,10,12,14,15,16,17,19,20,22,23,24,25,26,27,28,29,30,38,42,44,52,57,58,61,64'>1</option>";
				break;
			case 73:
				//53-35
				ex_dd += "<option value='1,2,3,4,5,6,11,19,20,22,23,24,26,27,28,29,30,31,33,34,35,39,40,42,43,47,48,54,58,64,65,69,70,72,75'>1</option>";
				break;
			case 74:
				//54-35
				ex_dd += "<option value='1,2,3,4,5,9,11,15,16,19,20,22,23,24,25,26,27,28,29,30,31,33,34,41,42,43,44,49,59,60,66,67,69,71,72'>1</option>";
				break;
			case 75:
				//55-35
				ex_dd += "<option value='1,2,3,4,5,7,8,11,12,19,20,21,22,23,24,25,26,27,28,29,30,32,35,36,43,44,46,48,49,53,57,60,63,74,75'>1</option>";
				break;
			case 76:
				//56-35
				ex_dd += "<option value='1,2,3,4,5,6,7,10,13,16,19,20,21,22,23,24,25,26,27,28,29,30,41,42,43,45,46,47,48,51,53,55,59,73,74'>1</option>";
				break;
			case 77:
				//57-35
				ex_dd += "<option value='1,2,3,4,5,6,7,8,9,10,13,16,19,20,21,22,23,24,25,26,27,28,29,30,32,36,38,42,44,59,60,62,63,65,66'>1</option>";
				break;
			case 78:
				//58-35
				ex_dd += "<option value='1,2,3,4,5,7,8,16,18,19,20,21,22,23,24,25,26,27,28,29,30,31,44,45,46,47,51,52,57,58,61,62,63,64,65'>1</option>";
				break;
			case 79:
				//59-35
				ex_dd += "<option value='1,2,3,4,5,7,8,10,12,14,15,16,18,19,20,21,22,23,24,25,26,27,28,29,30,34,38,40,44,46,56,57,61,64,65'>1</option>";
				break;
			case 80:
				//60-35
				ex_dd += "<option value='1,2,3,4,5,6,7,11,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,32,34,39,41,45,47,48,49,50,68,69'>1</option>";
				break;
			case 81:
				//55-37
				ex_dd += "<option value='1,2,3,4,5,7,12,14,18,19,20,22,23,24,25,26,27,28,29,30,32,33,35,41,42,43,44,46,49,51,53,57,60,63,68,71,75'>1</option>";
				break;
			case 82:
				//56-37
				ex_dd += "<option value='1,2,3,4,5,10,12,19,20,21,22,23,24,25,26,27,28,29,30,34,37,38,39,42,43,47,48,51,53,56,59,62,63,65,68,70,73'>1</option>";
				break;
			case 83:
				//57-37
				ex_dd += "<option value='1,2,3,4,9,10,13,16,19,20,21,22,23,24,25,26,27,28,29,30,32,36,38,41,44,48,50,52,56,60,62,64,65,66,69,70,74'>1</option>";
				break;
			case 84:
				//58-37
				ex_dd += "<option value='1,2,3,4,5,16,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,34,38,41,44,47,48,50,52,57,58,61,62,64,69,70,74'>1</option>";
				break;
			case 85:
				//59-37
				ex_dd += "<option value='1,2,3,4,5,16,18,19,20,21,22,23,24,25,26,27,28,29,30,34,37,38,39,40,41,42,44,50,53,55,56,57,58,64,67,72,74'>1</option>";
				break;
			case 86:
				//60-37
				ex_dd += "<option value='1,2,3,4,5,11,12,16,17,19,20,21,22,23,24,25,26,27,28,29,30,32,33,35,39,42,44,46,47,49,54,56,59,66,69,70,74'>1</option>";
				break;
			case 87:
				//58-39
				ex_dd += "<option value='1,2,3,4,7,10,13,16,19,20,21,22,23,24,25,26,27,28,29,30,32,35,38,40,41,42,45,47,48,50,51,52,53,58,59,70,72,74,75'>1</option>";
				break;
			case 88:
				//59-39
				ex_dd += "<option value='1,2,3,4,5,7,9,10,11,16,18,19,20,21,22,23,24,25,26,27,28,29,30,31,38,39,40,41,44,45,47,48,49,50,51,52,57,58,62'>1</option>";
				break;
			case 89:
				//60-39
				ex_dd += "<option value='1,2,3,4,5,6,7,10,13,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,32,35,39,42,45,47,48,50,51,53,54,59,60,71,72'>1</option>";
				break;
			case 90:
				//60-41
				ex_dd += "<option value='1,2,3,4,5,6,7,10,13,16,19,20,21,22,23,24,25,26,27,28,29,30,31,35,39,42,45,47,49,50,51,54,56,58,59,60,61,65,69,71,74'>1</option>";
				break;
				
		}
//ex_dd += "

		ex_dd += "</select>";
		document.getElementById('example_area').innerHTML = ex_dd;
		document.getElementById('example_group').value = example_group;

	}
</script>
<input type='submit' id='show_example' onclick='runExample();' value='Run Example'/>
<p id='example_area'></p>
<script type="text/javascript" src="coloring_controls.js"></script>
<script type="text/javascript" src="styley.js"></script>
<input type='submit' id='Grey' onclick='GreyAndLock();' value='Toggle Grey and Lock'/>
&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;
<input type='submit' id='reset' onclick='resetChartandValues();' value='Reset'/>
<input type='hidden' id='locked' value='0'/>

<div style="float:left">
<!--
<select id='example'>
	<option selected value=''>None</option>
	<option value='1,10,15,18,26,28,35,39,50,54,63,71,73'>26-13 BKS Parity Proof 1</option>
	<option value='1,8,9,21,24,26,28,33,47,55,57,66,67,71,74'>30-15 BKS Parity Proof 1</option>
	<option value='1,4,5,21,24,26,28,32,49,53,55,59,61,71,72'>30-15 BKS Parity Proof 2</option>
	<option value='1,15,17,25,26,28,32,43,49,54,55,63,71,72,74'>30-15 BKS Parity Proof 3</option>
	<option value='1,15,17,26,27,28,33,44,48,55,57,59,65,67,71'>30-15 BKS Parity Proof 4</option>
	<option value='1,4,8,12,14,18,21,22,26,28,63,66,67,71,73'>30-15 BKS Parity Proof 5</option>
	<option value='1,10,15,17,26,28,33,42,44,48,57,59,62,71,73'>30-15 BKS Parity Proof 6</option>

	<option value='1,3,4,8,11,19,23,26,28,29,31,33,36,38,42,49,53,57,61,63,66,67,71'>Example 40-23</option>
</select>
-->
<table class="coloring_subsub">
	<tr>
		<td colspan='3'>
			<table class="coloring">
			<?php
				$green_field = "";
				$red_field = "";
				$blue_field = "";
				echo "<tr>\n";
				for ($i=1; $i<=60; $i++) {
					echo "<td>" . $i . "</td>\n";
					$green_field .= "<td><input  type='text' style='width:15px;border:0;padding:0' id='green_count" . $i . "'>" . "</td>\n";
					$red_field .= "<td><input  type='text' style='width:15px;border:0;padding:0' id='red_count" . $i . "'>" . "</td>\n";
					$blue_field .= "<td><input type='text' style='width:15px;border:0;padding:0' id='blue_count" . $i . "'>" . "</td>\n";
				}
				echo "</tr>\n";
				echo "<tr>\n";
				echo $green_field;
				echo "</tr>\n";
				echo "<tr>\n";
				echo $red_field;
				echo "</tr>\n";
				echo "<tr>\n";
				echo $blue_field;
				echo "</tr>\n";

			?>
			</table>
		</td>
	</tr>
<tr>
<td>
Basis Table
&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;
Basis Tool: <select id='basis_tool'>
	<option selected value=0>Regular Tool</option>
	<option value=1>Blue Tool</option>
</select>
<br>
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
//					echo "<td>";
					echo "<td id='basis_element_"  . (($i*$basis_row_display_height)+$k) . "_" . (($j*$basis_column_width)+$m) . "'";
					echo " onclick='toggle_basis(" . (($i*$basis_row_display_height)+$k) . ", " . (($j*$basis_column_width)+$m) . ")'>";
					echo $basis[($i*$basis_row_display_height)+$k][($j*$basis_column_width)+$m];
					echo "\n</td>\n";

//					echo "</td>";
				}
				echo "</tr></table></td></tr>";
			}
			echo "</table></td>";

		}
		echo "</tr>";
	}

?>
</table>
</td><td>
Line Table
<br>

<table class="coloring">
<?php
	for ($i=0; $i<$line_rows; $i++) {
		echo "<tr>\n";
		for ($j=0; $j<$line_columns; $j++) {
			echo "<td>\n<table class='coloring_sub'>\n";
			for ($k=0; $k<$line_row_height; $k++) {
				echo "<tr>\n";
				for ($m=0; $m<$line_column_width; $m++) {
					echo "<td id='line_element_"  . (($i*$line_row_height)+$k) . "_" . (($j*$line_column_width)+$m) . "'";
					echo " onclick='toggle_line(" . (($i*$line_row_height)+$k) . ", " . (($j*$line_column_width)+$m) . ")'>";
					echo $line[($i*$line_row_height)+$k][($j*$line_column_width)+$m];
					echo "\n</td>\n";
				}
				echo "</tr>\n";
			}
			echo "</table>\n</td>\n";

		}
		echo "</tr>";
	}

?>
</table>
</td><td>
Pentagon Table
<br>


<table class="coloring">
<?php
	for ($i=0; $i<$pentagon_rows; $i++) {
		echo "<tr>";
		for ($j=0; $j<$pentagon_columns; $j++) {
			echo "<td><table class='coloring_sub'>";
			for ($k=0; $k<$pentagon_row_height; $k++) {
				echo "<tr>";
				for ($m=0; $m<$pentagon_column_width; $m++) {
//					echo "<td>";
					echo "<td id='pentagon_element_"  . (($i*$pentagon_row_height)+$k) . "_" . (($j*$pentagon_column_width)+$m) . "'";
					echo " onclick='toggle_pentagon(" . (($i*$pentagon_row_height)+$k) . ", " . (($j*$pentagon_column_width)+$m) . ")'>";
					echo $pentagon[($i*$pentagon_row_height)+$k][($j*$pentagon_column_width)+$m];
					echo "\n</td>\n";

//					echo "</td>";

				}
				echo "</tr>";
			}
			echo "</table></td>";

		}
		echo "</tr>";
	}

?>
</table>
</td></tr>
</table>
</div>
</body>
