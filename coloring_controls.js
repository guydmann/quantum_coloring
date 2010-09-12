function runExample() {
	//alert('examples don\'t work yet');

	//if (document.getElementById('locked').value=='1') { return; }		

	if (document.getElementById('example').value=='') {
		alert('select an example to proceed');
		return;
	}
	resetChartandValues();

	//run example list
	var example_array = document.getElementById('example').value.split(',');
	for (var i = 0;i<example_array.length; i++) {
		var cell_row = (example_array[i]-1)%15;
		var cell_column = Math.floor((example_array[i]-1)/15);
		//alert(example_array[i] + ' ' + cell_row + ' ' + cell_column );
		if (TableCellArray[0][cell_row][cell_column][0] != 1) {
			toggle_basis(cell_row,TableCellColumnWidth[0]*cell_column);
		}
	}

	//find any cells that contain no greens
	//mark them red
        for (var p=0; p<TableCellArray[0].length; p++) {
	        for (var q=0; q<TableCellArray[0][0].length ; q++) {
			var has_green = true;
			if (TableCellArray[0][p][q][0] != 1) {
				has_green = false;
	       			for (var i=0; i<TableCellRowHeight[0] && !has_green; i++) {
      					for (var j=0; j<TableCellColumnWidth[0] && !has_green; j++) {
						if (TableElementArray[0][(TableCellRowHeight[0]*p)+i][(TableCellColumnWidth[0]*q)+j][1] ==  1) {
							has_green = true;
						}
					}
				}
			} 
			if (!has_green) {					
				TableCellArray[0][p][q][0] = -1;
	       			for (var i=0; i<TableCellRowHeight[0]; i++) {
       					for (var j=0; j<TableCellColumnWidth[0]; j++) {
						if (BrowserDetect.browser=="Firefox") {
							setStyleById('basis_element_'+((TableCellRowHeight[0]*p)+i)+"_"+((TableCellColumnWidth[0]*q)+j),"color","red");
						} else {
							setStyleById('basis_element_'+((TableCellRowHeight[0]*p)+i)+"_"+((TableCellColumnWidth[0]*q)+j),"background-color","red");
						}
						setStyleById('basis_element_'+((TableCellRowHeight[0]*p)+i)+"_"+((TableCellColumnWidth[0]*q)+j),"font-weight","bold");
						if (BrowserDetect.browser=="Firefox") {
							setStyleById('basis_element_'+((TableCellRowHeight[0]*p)+i)+"_"+((TableCellColumnWidth[0]*q)+j),"textDecoration","underline");
						}
						TableElementArray[0][(TableCellRowHeight[0]*p)+i][(TableCellColumnWidth[0]*q)+j][1] = -1;
						findandmark_red_element(TableElementArray[0][(TableCellRowHeight[0]*p)+i][(TableCellColumnWidth[0]*q)+j][0]);
					}	
				}
			} 
		}
	}


	//find any cells that are all green but not in list
	//mark them blue
        for (var p=0; p<TableCellArray[0].length; p++) {
	        for (var q=0; q<TableCellArray[0][0].length ; q++) {
			if (TableCellArray[0][p][q][0] == 1) {
				if (!inArray(p+(q*15)+1,example_array)) {
					TableCellArray[0][p][q][0] = 2;
		       			for (var i=0; i<TableCellRowHeight[0]; i++) {
        					for (var j=0; j<TableCellColumnWidth[0]; j++) {
							if (BrowserDetect.browser=="Firefox") {
								setStyleById('basis_element_'+((TableCellRowHeight[0]*p)+i)+"_"+((TableCellColumnWidth[0]*q)+j),"color","blue");
							} else {
								setStyleById('basis_element_'+((TableCellRowHeight[0]*p)+i)+"_"+((TableCellColumnWidth[0]*q)+j),"background-color","blue");
							}
							setStyleById('basis_element_'+((TableCellRowHeight[0]*p)+i)+"_"+((TableCellColumnWidth[0]*q)+j),"font-weight","bold");
							if (BrowserDetect.browser=="Firefox") {
								setStyleById('basis_element_'+((TableCellRowHeight[0]*p)+i)+"_"+((TableCellColumnWidth[0]*q)+j),"textDecoration","underline");
							}
							TableElementArray[0][(TableCellRowHeight[0]*p)+i][(TableCellColumnWidth[0]*q)+j][1] = 2;
							//findandmark_red_element(BasisElementArray[(TableCellRowHeight[0]*p)+i][(TableCellColumnWidth[0]*q)+j][0]);
						}	
					}
				}
			} 
		}
	}
	GreyAndLock();
	showNumCounts();
}

function resetChartandValues() {
	for (var Z=0; Z<3; Z++) {
		var table_name;
		if (Z==0) { 
			table_name = "basis";
		} else if (Z==1) {
			table_name = "line";
		} else {
			table_name = "pentagon";
		}
		
		for (var p=0; p<TableCellArray[Z].length; p++) {
			for (var q=0; q<TableCellArray[Z][0].length ; q++) {
				TableCellArray[Z][p][q][0] = 0; 
				for (var i=0; i<TableCellRowHeight[Z]; i++) {
					for (var j=0; j<TableCellColumnWidth[Z]; j++) {
						TableElementArray[Z][((TableCellRowHeight[Z]*p)+i)][((TableCellColumnWidth[Z]*q)+j)][1]=0;
						setStyleById(table_name+'_element_'+((TableCellRowHeight[Z]*p)+i)+"_"+((TableCellColumnWidth[Z]*q)+j),"font-weight","normal");
						if (BrowserDetect.browser=="Firefox") {
							setStyleById(table_name+'_element_'+((TableCellRowHeight[Z]*p)+i)+"_"+((TableCellColumnWidth[Z]*q)+j),"color","#BFBBB7");
							setStyleById(table_name+'_element_'+((TableCellRowHeight[Z]*p)+i)+"_"+((TableCellColumnWidth[Z]*q)+j),"textDecoration","none");
						} else {
							setStyleById(table_name+'_element_'+((TableCellRowHeight[Z]*p)+i)+"_"+((TableCellColumnWidth[Z]*q)+j),"background-color","black");
							setStyleById(table_name+'_element_'+((TableCellRowHeight[Z]*p)+i)+"_"+((TableCellColumnWidth[Z]*q)+j),"color","#BFBBB7");
						}
					}
				}
			}
		}
	}
	document.getElementById('locked').value = '0';
	showNumCounts();
}

function showNumCounts() {
	for (var i=1; i<=60; i++) {
		NumColoringArray[i][1] = 0;
		NumColoringArray[i][-1] = 0;
		NumColoringArray[i][2] = 0;
	}

	for (var p=0; p<TableCellArray[0].length; p++) {
		for (var q=0; q<TableCellArray[0][0].length ; q++) {
			var count_color = TableCellArray[0][p][q][0]
			if (count_color != 0) {
				for (var i=0; i<TableCellRowHeight[0]; i++) {
			        	for (var j=0; j<TableCellColumnWidth[0]; j++) {
						var num = TableElementArray[0][(TableCellRowHeight[0]*p)+i][(TableCellColumnWidth[0]*q)+j][0]
						NumColoringArray[num][count_color]= NumColoringArray[num][count_color]+1;
					}
				}

			}
		}
	}
	for (var i=1; i<=60; i++) {
		document.getElementById('green_count' + i).value = NumColoringArray[i][1];
		document.getElementById('red_count' + i).value = NumColoringArray[i][-1];
		document.getElementById('blue_count' + i).value = NumColoringArray[i][2];
	}
}


function GreyAndLock() {
	if (document.getElementById('locked').value=='0') { 
		//lock
		for (var Z=0; Z<3; Z++) {
			var table_name;
			if (Z==0) { 
				table_name = "basis";
			} else if (Z==1) {
				table_name = "line";
			} else {
				table_name = "pentagon";
			}
		
			for (var p=0; p<TableCellArray[Z].length; p++) {
				for (var q=0; q<TableCellArray[Z][0].length ; q++) {
					var CellValue = TableCellArray[Z][p][q][0]; 
					if (CellValue!=1 && CellValue!=-1 && CellValue!=2) {
						for (var i=0; i<TableCellRowHeight[Z]; i++) {
							for (var j=0; j<TableCellColumnWidth[Z]; j++) {
								if (BrowserDetect.browser=="Firefox") {
									setStyleById(table_name+'_element_'+((TableCellRowHeight[Z]*p)+i)+"_"+((TableCellColumnWidth[Z]*q)+j),"color","black");
								} else {
									setStyleById(table_name+'_element_'+((TableCellRowHeight[Z]*p)+i)+"_"+((TableCellColumnWidth[Z]*q)+j),"background-color","grey");
									setStyleById(table_name+'_element_'+((TableCellRowHeight[Z]*p)+i)+"_"+((TableCellColumnWidth[Z]*q)+j),"color","grey");
								}
							}
						}
					}
				}
			}
		}
		document.getElementById('locked').value = '1';
	} else {
		//unlock
		for (var Z=0; Z<3; Z++) {
			var table_name;
			if (Z==0) { 
				table_name = "basis";
			} else if (Z==1) {
				table_name = "line";
			} else {
				table_name = "pentagon";
			}

			for (var p=0; p<TableCellArray[Z].length; p++) {
				for (var q=0; q<TableCellArray[Z][0].length ; q++) {
					var CellValue = TableCellArray[Z][p][q][0]; 
					if (CellValue!=1 && CellValue!=-1 && CellValue!=2) {
						for (var i=0; i<TableCellRowHeight[Z]; i++) {
							for (var j=0; j<TableCellColumnWidth[Z]; j++) {
								var cell_color = TableElementArray[Z][(TableCellRowHeight[Z]*p)+i][(TableCellColumnWidth[Z]*q)+j][1];
								var cell_color_text = "grey";
								if (cell_color==1) {
									cell_color_text = "green";
								} else if (cell_color==-1) {
									cell_color_text = "red";
								}
								if (BrowserDetect.browser=="Firefox") {
									setStyleById(table_name+'_element_'+((TableCellRowHeight[Z]*p)+i)+"_"+((TableCellColumnWidth[Z]*q)+j),"color",cell_color_text);
								} else {
									if (cell_color_text == "grey") {
										cell_color_text = "black";
									}
									setStyleById(table_name+'_element_'+((TableCellRowHeight[Z]*p)+i)+"_"+((TableCellColumnWidth[Z]*q)+j),"background-color",cell_color_text);
									setStyleById(table_name+'_element_'+((TableCellRowHeight[Z]*p)+i)+"_"+((TableCellColumnWidth[Z]*q)+j),"color","#BFBBB7");
								}
							}	
						}
					}
				}
			}
		}
		document.getElementById('locked').value = '0';
	}
}

function table_CheckCellForBlue(table_id,cell_row,cell_column) {
	var return_value;
	for (var i=0; i<TableCellRowHeight[table_id]; i++) {
        	for (var j=0; j<TableCellColumnWidth[table_id]; j++) {
			return_value = findBlue(TableElementArray[table_id][(TableCellRowHeight[table_id]*cell_row)+i][(TableCellColumnWidth[table_id]*cell_column)+j][0]);
			if (return_value) {
				return true;
			}
		}	
	}

}

function findBlue(value) {
	var found_rows = new Array();
	var found_columns = new Array();
	
        for (var i=0; i<TableCellArray[0].length; i++) {
               for (var j=0; j<TableCellArray[0][0].length; j++) {
		        for (var p=0; p<TableCellRowHeight[0]; p++) {
		        	for (var q=0; q<TableCellColumnWidth[0]; q++) {
					if (TableElementArray[0][(TableCellRowHeight[0]*i)+p][(TableCellColumnWidth[0]*j)+q][0] == value) {
		        	                if (TableElementArray[0][(TableCellRowHeight[0]*i)+p][(TableCellColumnWidth[0]*j)+q][1] == 2)
						{
							return true;
						}
					}
				}
			}
       	        }
        }
	return false;
}

function toggle_basis(row, column) {
	cell_row = TableElementArray[0][row][column][2]; 
	cell_column = TableElementArray[0][row][column][3]; 
	
	if (document.getElementById('locked').value=='1') { return; }		

	if (document.getElementById('basis_tool').value==0) {
		if (table_CheckCellForBlue(0,cell_row, cell_column)) { return; }
		
		if (TableCellArray[0][cell_row][cell_column][0] == 0) {
        		for (var i=0; i<TableCellRowHeight[0]; i++) {
		        	for (var j=0; j<TableCellColumnWidth[0]; j++) {
					setStyleById('basis_element_'+((TableCellRowHeight[0]*cell_row)+i)+"_"+((TableCellColumnWidth[0]*cell_column)+j),"font-weight","bold");
					if (BrowserDetect.browser=="Firefox") {
						setStyleById('basis_element_'+((TableCellRowHeight[0]*cell_row)+i)+"_"+((TableCellColumnWidth[0]*cell_column)+j),"color","green");
						setStyleById('basis_element_'+((TableCellRowHeight[0]*cell_row)+i)+"_"+((TableCellColumnWidth[0]*cell_column)+j),"textDecoration","underline");
					} else {
						setStyleById('basis_element_'+((TableCellRowHeight[0]*cell_row)+i)+"_"+((TableCellColumnWidth[0]*cell_column)+j),"background-color","green");
					}
					
					TableElementArray[0][(TableCellRowHeight[0]*cell_row)+i][(TableCellColumnWidth[0]*cell_column)+j][1] = 1;
					findandmark_green_element(TableElementArray[0][(TableCellRowHeight[0]*cell_row)+i][(TableCellColumnWidth[0]*cell_column)+j][0]);
				}	
			}
			TableCellArray[0][cell_row][cell_column][0] = 1;
		} else if (TableCellArray[0][cell_row][cell_column][0] == 1) {
			//set to red
			TableCellArray[0][cell_row][cell_column][0] = -1;
	        	for (var i=0; i<TableCellRowHeight[0]; i++) {
		        	for (var j=0; j<TableCellColumnWidth[0]; j++) {
					setStyleById('basis_element_'+((TableCellRowHeight[0]*cell_row)+i)+"_"+((TableCellColumnWidth[0]*cell_column)+j),"font-weight","bold");
					if (BrowserDetect.browser=="Firefox") {
						setStyleById('basis_element_'+((TableCellRowHeight[0]*cell_row)+i)+"_"+((TableCellColumnWidth[0]*cell_column)+j),"color","red");
						setStyleById('basis_element_'+((TableCellRowHeight[0]*cell_row)+i)+"_"+((TableCellColumnWidth[0]*cell_column)+j),"textDecoration","underline");
					} else {
						setStyleById('basis_element_'+((TableCellRowHeight[0]*cell_row)+i)+"_"+((TableCellColumnWidth[0]*cell_column)+j),"background-color","red");
					}
					TableElementArray[0][(TableCellRowHeight[0]*cell_row)+i][(TableCellColumnWidth[0]*cell_column)+j][1] = -1;
					findandmark_red_element(TableElementArray[0][(TableCellRowHeight[0]*cell_row)+i][(TableCellColumnWidth[0]*cell_column)+j][0]);
				}	
			}
		} else if (TableCellArray[0][cell_row][cell_column][0] == -1) {
			//unset values
			TableCellArray[0][cell_row][cell_column][0] = 0;
        		for (var i=0; i<TableCellRowHeight[0]; i++) {
		        	for (var j=0; j<TableCellColumnWidth[0]; j++) {
					setStyleById('basis_element_'+((TableCellRowHeight[0]*cell_row)+i)+"_"+((TableCellColumnWidth[0]*cell_column)+j),"font-weight","normal");
					if (BrowserDetect.browser=="Firefox") {
						setStyleById('basis_element_'+((TableCellRowHeight[0]*cell_row)+i)+"_"+((TableCellColumnWidth[0]*cell_column)+j),"color","grey");
						setStyleById('basis_element_'+((TableCellRowHeight[0]*cell_row)+i)+"_"+((TableCellColumnWidth[0]*cell_column)+j),"textDecoration","none");
					} else {
						setStyleById('basis_element_'+((TableCellRowHeight[0]*cell_row)+i)+"_"+((TableCellColumnWidth[0]*cell_column)+j),"background-color","black");
					}
					TableElementArray[0][(TableCellRowHeight[0]*cell_row)+i][(TableCellColumnWidth[0]*cell_column)+j][1] = 0;
					findandmark_grey_element(TableElementArray[0][(TableCellRowHeight[0]*cell_row)+i][(TableCellColumnWidth[0]*cell_column)+j][0]);
				}	
			}
		}
	} else {
		if (TableCellArray[0][cell_row][cell_column][0] == 1) {
			//set to blue
			TableCellArray[0][cell_row][cell_column][0] = 2;
       			for (var i=0; i<TableCellRowHeight[0]; i++) {
        			for (var j=0; j<TableCellColumnWidth[0]; j++) {
					if (BrowserDetect.browser=="Firefox") {
						setStyleById('basis_element_'+((TableCellRowHeight[0]*cell_row)+i)+"_"+((TableCellColumnWidth[0]*cell_column)+j),"color","blue");
					} else {
						setStyleById('basis_element_'+((TableCellRowHeight[0]*cell_row)+i)+"_"+((TableCellColumnWidth[0]*cell_column)+j),"background-color","blue");
					}
					setStyleById('basis_element_'+((TableCellRowHeight[0]*cell_row)+i)+"_"+((TableCellColumnWidth[0]*cell_column)+j),"font-weight","bold");
					if (BrowserDetect.browser=="Firefox") {
						setStyleById('basis_element_'+((TableCellRowHeight[0]*cell_row)+i)+"_"+((TableCellColumnWidth[0]*cell_column)+j),"textDecoration","underline");
					}
					TableElementArray[0][(TableCellRowHeight[0]*cell_row)+i][(TableCellColumnWidth[0]*cell_column)+j][1] = 2;
					//findandmark_red_element(BasisElementArray[(TableCellRowHeight[0]*cell_row)+i][(TableCellColumnWidth[0]*cell_column)+j][0]);
				}	
			}
		} else if (TableCellArray[0][cell_row][cell_column][0] == 2) {
			TableCellArray[0][cell_row][cell_column][0] = 1;
        		for (var i=0; i<TableCellRowHeight[0]; i++) {
		        	for (var j=0; j<TableCellColumnWidth[0]; j++) {
					setStyleById('basis_element_'+((TableCellRowHeight[0]*cell_row)+i)+"_"+((TableCellColumnWidth[0]*cell_column)+j),"font-weight","bold");
					if (BrowserDetect.browser=="Firefox") {
						setStyleById('basis_element_'+((TableCellRowHeight[0]*cell_row)+i)+"_"+((TableCellColumnWidth[0]*cell_column)+j),"color","green");
						setStyleById('basis_element_'+((TableCellRowHeight[0]*cell_row)+i)+"_"+((TableCellColumnWidth[0]*cell_column)+j),"textDecoration","underline");
					} else {
						setStyleById('basis_element_'+((TableCellRowHeight[0]*cell_row)+i)+"_"+((TableCellColumnWidth[0]*cell_column)+j),"background-color","green");
					}
					TableElementArray[0][(TableCellRowHeight[0]*cell_row)+i][(TableCellColumnWidth[0]*cell_column)+j][1] = 1;
					//findandmark_green_element(BasisElementArray[(TableCellRowHeight[0]*cell_row)+i][(TableCellColumnWidth[0]*cell_column)+j][0]);
				}	
			}
		}
	}
	showNumCounts();
}
function toggle_line(row, column) {

	cell_row = TableElementArray[1][row][column][2]; 
	cell_column = TableElementArray[1][row][column][3]; 

	if (document.getElementById('locked').value=='1') { return; }

	if (table_CheckCellForBlue(1,cell_row, cell_column)) { return; }

	if (TableCellArray[1][cell_row][cell_column][0] == 0) {
	        for (var i=0; i<TableCellRowHeight[1]; i++) {
        		for (var j=0; j<TableCellColumnWidth[1]; j++) {
				setStyleById('line_element_'+((TableCellRowHeight[1]*cell_row)+i)+"_"+((TableCellColumnWidth[1]*cell_column)+j),"font-weight","bold");
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('line_element_'+((TableCellRowHeight[1]*cell_row)+i)+"_"+((TableCellColumnWidth[1]*cell_column)+j),"color","green");
					setStyleById('line_element_'+((TableCellRowHeight[1]*cell_row)+i)+"_"+((TableCellColumnWidth[1]*cell_column)+j),"textDecoration","underline");
				} else {
					setStyleById('line_element_'+((TableCellRowHeight[1]*cell_row)+i)+"_"+((TableCellColumnWidth[1]*cell_column)+j),"background-color","green");
				}
				
				TableElementArray[1][(TableCellRowHeight[1]*cell_row)+i][(TableCellColumnWidth[1]*cell_column)+j][1] = 1;
				findandmark_green_element(TableElementArray[1][(TableCellRowHeight[1]*cell_row)+i][(TableCellColumnWidth[1]*cell_column)+j][0]);

			}	
		}
		TableCellArray[1][cell_row][cell_column][0] = 1;
	} else if (TableCellArray[1][cell_row][cell_column][0] == 1) {
		TableCellArray[1][cell_row][cell_column][0] = -1;
	        for (var i=0; i<TableCellRowHeight[1]; i++) {
        		for (var j=0; j<TableCellColumnWidth[1]; j++) {
				setStyleById('line_element_'+((TableCellRowHeight[1]*cell_row)+i)+"_"+((TableCellColumnWidth[1]*cell_column)+j),"font-weight","bold");
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('line_element_'+((TableCellRowHeight[1]*cell_row)+i)+"_"+((TableCellColumnWidth[1]*cell_column)+j),"color","red");
					setStyleById('line_element_'+((TableCellRowHeight[1]*cell_row)+i)+"_"+((TableCellColumnWidth[1]*cell_column)+j),"textDecoration","underline");
				} else {
					setStyleById('line_element_'+((TableCellRowHeight[1]*cell_row)+i)+"_"+((TableCellColumnWidth[1]*cell_column)+j),"background-color","red");
				}

				TableElementArray[1][(TableCellRowHeight[1]*cell_row)+i][(TableCellColumnWidth[1]*cell_column)+j][1] = -1;
				findandmark_red_element(TableElementArray[1][(TableCellRowHeight[1]*cell_row)+i][(TableCellColumnWidth[1]*cell_column)+j][0]);

			}	
		}

	} else if (TableCellArray[1][cell_row][cell_column][0] == -1) {
		TableCellArray[1][cell_row][cell_column][0] = 0;
	        for (var i=0; i<TableCellRowHeight[1]; i++) {
        		for (var j=0; j<TableCellColumnWidth[1]; j++) {
				setStyleById('line_element_'+((TableCellRowHeight[1]*cell_row)+i)+"_"+((TableCellColumnWidth[1]*cell_column)+j),"font-weight","normal");
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('line_element_'+((TableCellRowHeight[1]*cell_row)+i)+"_"+((TableCellColumnWidth[1]*cell_column)+j),"color","grey");
					setStyleById('line_element_'+((TableCellRowHeight[1]*cell_row)+i)+"_"+((TableCellColumnWidth[1]*cell_column)+j),"textDecoration","none");
				} else {
					setStyleById('line_element_'+((TableCellRowHeight[1]*cell_row)+i)+"_"+((TableCellColumnWidth[1]*cell_column)+j),"background-color","black");
				}
				
				TableElementArray[1][(TableCellRowHeight[1]*cell_row)+i][(TableCellColumnWidth[1]*cell_column)+j][1] = 0;
				findandmark_grey_element(TableElementArray[1][(TableCellRowHeight[1]*cell_row)+i][(TableCellColumnWidth[1]*cell_column)+j][0]);

			}	
		}
	}
	showNumCounts();
}

function toggle_pentagon(row, column) {
	cell_row = TableElementArray[2][row][column][2]; 
	cell_column = TableElementArray[2][row][column][3]; 

	if (document.getElementById('locked').value=='1') { return; }
	if (table_CheckCellForBlue(2,cell_row, cell_column)) { return; }

	if (TableCellArray[2][cell_row][cell_column][0] == 0) {
	        for (var i=0; i<TableCellRowHeight[2]; i++) {
        		for (var j=0; j<TableCellColumnWidth[2]; j++) {
				setStyleById('pentagon_element_'+((TableCellRowHeight[2]*cell_row)+i)+"_"+((TableCellColumnWidth[2]*cell_column)+j),"font-weight","bold");
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('pentagon_element_'+((TableCellRowHeight[2]*cell_row)+i)+"_"+((TableCellColumnWidth[2]*cell_column)+j),"color","green");
					setStyleById('pentagon_element_'+((TableCellRowHeight[2]*cell_row)+i)+"_"+((TableCellColumnWidth[2]*cell_column)+j),"textDecoration","underline");
				} else {
					setStyleById('pentagon_element_'+((TableCellRowHeight[2]*cell_row)+i)+"_"+((TableCellColumnWidth[2]*cell_column)+j),"background-color","green");
				}

				TableElementArray[2][(TableCellRowHeight[2]*cell_row)+i][(TableCellColumnWidth[2]*cell_column)+j][1] = 1;
				findandmark_green_element(TableElementArray[2][(TableCellRowHeight[2]*cell_row)+i][(TableCellColumnWidth[2]*cell_column)+j][0]);

			}	
		}
		TableCellArray[2][cell_row][cell_column][0] = 1;
	} else 	if (TableCellArray[2][cell_row][cell_column][0] == 1) {
		TableCellArray[2][cell_row][cell_column][0] = -1;
	        for (var i=0; i<TableCellRowHeight[2]; i++) {
        		for (var j=0; j<TableCellColumnWidth[2]; j++) {
				setStyleById('pentagon_element_'+((TableCellRowHeight[2]*cell_row)+i)+"_"+((TableCellColumnWidth[2]*cell_column)+j),"font-weight","bold");
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('pentagon_element_'+((TableCellRowHeight[2]*cell_row)+i)+"_"+((TableCellColumnWidth[2]*cell_column)+j),"color","red");
					setStyleById('pentagon_element_'+((TableCellRowHeight[2]*cell_row)+i)+"_"+((TableCellColumnWidth[2]*cell_column)+j),"textDecoration","underline");
				} else {
					setStyleById('pentagon_element_'+((TableCellRowHeight[2]*cell_row)+i)+"_"+((TableCellColumnWidth[2]*cell_column)+j),"background-color","red");
				}

				TableElementArray[2][(TableCellRowHeight[2]*cell_row)+i][(TableCellColumnWidth[2]*cell_column)+j][1] = -1;
				findandmark_red_element(TableElementArray[2][(TableCellRowHeight[2]*cell_row)+i][(TableCellColumnWidth[2]*cell_column)+j][0]);

			}	
		}

	} else 	if (TableCellArray[2][cell_row][cell_column][0] == -1) {
		TableCellArray[2][cell_row][cell_column][0] = 0;
	        for (var i=0; i<TableCellRowHeight[2]; i++) {
        		for (var j=0; j<TableCellColumnWidth[2]; j++) {
				setStyleById('pentagon_element_'+((TableCellRowHeight[2]*cell_row)+i)+"_"+((TableCellColumnWidth[2]*cell_column)+j),"font-weight","normal");
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('pentagon_element_'+((TableCellRowHeight[2]*cell_row)+i)+"_"+((TableCellColumnWidth[2]*cell_column)+j),"color","grey");
					setStyleById('pentagon_element_'+((TableCellRowHeight[2]*cell_row)+i)+"_"+((TableCellColumnWidth[2]*cell_column)+j),"textDecoration","none");
				} else {
					setStyleById('pentagon_element_'+((TableCellRowHeight[2]*cell_row)+i)+"_"+((TableCellColumnWidth[2]*cell_column)+j),"background-color","black");
				}
				TableElementArray[2][(TableCellRowHeight[2]*cell_row)+i][(TableCellColumnWidth[2]*cell_column)+j][1] = 0;
				findandmark_grey_element(TableElementArray[2][(TableCellRowHeight[2]*cell_row)+i][(TableCellColumnWidth[2]*cell_column)+j][0]);
			}	
		}
	}
	showNumCounts();
}


function findandmark_green_element(value) {
	for (var Z=0; Z<3; Z++) {
		var table_name;
		if (Z==0) { 
			table_name = "basis";
		} else if (Z==1) {
			table_name = "line";
		} else {
			table_name = "pentagon";
		}

	
		var found_rows = new Array();
		var found_columns = new Array();
		
		for (var i=0; i<TableCellArray[Z].length; i++) {
			if (!inArray(i,found_rows)) {
				var found_in_row = false;
				for (var j=0; j<TableCellArray[Z][0].length && !found_in_row; j++) {
					if (!inArray(j,found_columns)) {
						for (var p=0; p<TableCellRowHeight[Z] && !found_in_row; p++) {
							for (var q=0; q<TableCellColumnWidth[Z] && !found_in_row; q++) {
								if (TableElementArray[Z][(TableCellRowHeight[Z]*i)+p][(TableCellColumnWidth[Z]*j)+q][0] == value) {
									TableElementArray[Z][(TableCellRowHeight[Z]*i)+p][(TableCellColumnWidth[Z]*j)+q][1] = 1;
									if (BrowserDetect.browser=="Firefox") {
										setStyleById(table_name+'_element_'+((TableCellRowHeight[Z]*i)+p)+"_"+((TableCellColumnWidth[Z]*j)+q),"color","green");
									} else {
										setStyleById(table_name+'_element_'+((TableCellRowHeight[Z]*i)+p)+"_"+((TableCellColumnWidth[Z]*j)+q),"background-color","green");
									}

									checkandmark_set_green(Z,i, j) ;

									found_rows.push(i);
									found_columns.push(j);
									found_in_row = true;
								}
							}
						}
					}
				}
			}
		}
	}
}

function findandmark_red_element(value) {
	for (var Z=0; Z<3; Z++) {
		var table_name;
		if (Z==0) { 
			table_name = "basis";
		} else if (Z==1) {
			table_name = "line";
		} else {
			table_name = "pentagon";
		}
		var found_rows = new Array();
		var found_columns = new Array();
		
		for (var i=0; i<TableCellArray[Z].length; i++) {
			if (!inArray(i,found_rows)) {
				var found_in_row = false;
				for (var j=0; j<TableCellArray[Z][0].length && !found_in_row; j++) {
					if (!inArray(j,found_columns)) {
						for (var p=0; p<TableCellRowHeight[Z] && !found_in_row; p++) {
							for (var q=0; q<TableCellColumnWidth[Z] && !found_in_row; q++) {
								if (TableElementArray[Z][(TableCellRowHeight[Z]*i)+p][(TableCellColumnWidth[Z]*j)+q][0] == value) {
									TableElementArray[Z][(TableCellRowHeight[Z]*i)+p][(TableCellColumnWidth[Z]*j)+q][1] = -1;
									if (BrowserDetect.browser=="Firefox") {
										setStyleById(table_name+'_element_'+((TableCellRowHeight[Z]*i)+p)+"_"+((TableCellColumnWidth[Z]*j)+q),"color","red");
									} else {
										setStyleById(table_name+'_element_'+((TableCellRowHeight[Z]*i)+p)+"_"+((TableCellColumnWidth[Z]*j)+q),"background-color","red");
									}

									checkandmark_set_red(Z,i, j);

									found_rows.push(i);
									found_columns.push(j);
									found_in_row = true;
								}
							}
						}
					}
				}
			}
		}
	}
}



function findandmark_grey_element(value) {
	for (var Z=0; Z<3; Z++) {
		var table_name;
		if (Z==0) { 
			table_name = "basis";
		} else if (Z==1) {
			table_name = "line";
		} else {
			table_name = "pentagon";
		}
		var found_rows = new Array();
		var found_columns = new Array();
		
		for (var i=0; i<TableCellArray[Z].length; i++) {
			if (!inArray(i,found_rows)) {
				var found_in_row = false;
				for (var j=0; j<TableCellArray[Z][0].length && !found_in_row; j++) {
					if (!inArray(j,found_columns)) {
						for (var p=0; p<TableCellRowHeight[Z] && !found_in_row; p++) {
							for (var q=0; q<TableCellColumnWidth[Z] && !found_in_row; q++) {
								if (TableElementArray[Z][(TableCellRowHeight[Z]*i)+p][(TableCellColumnWidth[Z]*j)+q][0] == value) {
									TableElementArray[Z][(TableCellRowHeight[Z]*i)+p][(TableCellColumnWidth[Z]*j)+q][1] = 0;
									if (BrowserDetect.browser=="Firefox") {
										setStyleById(table_name+'_element_'+((TableCellRowHeight[Z]*i)+p)+"_"+((TableCellColumnWidth[Z]*j)+q),"color","grey");
									} else {
										setStyleById(table_name+'_element_'+((TableCellRowHeight[Z]*i)+p)+"_"+((TableCellColumnWidth[Z]*j)+q),"background-color","black");
									}

									checkandmark_unset(Z,i, j) 

									found_rows.push(i);
									found_columns.push(j);
									found_in_row = true;
								}
							}
						}
					}
				}
			}
		}
	}
}

function checkandmark_set_green(table_id,cell_row, cell_column) {
	var filled = true;
	var locked = false;
	var table_name;
	if (table_id==0) { 
		table_name = "basis";
	} else if (table_id==1) {
		table_name = "line";
	} else {
		table_name = "pentagon";
	}
	
        for (var i=0; i<TableCellRowHeight[table_id]; i++) {
        	for (var j=0; j<TableCellColumnWidth[table_id]; j++) {
			if (TableElementArray[table_id][((TableCellRowHeight[table_id]*cell_row)+i)][((TableCellColumnWidth[table_id]*cell_column)+j)][1]!=1) {
				filled = false;	
			}
			if (TableElementArray[table_id][((TableCellRowHeight[0]*cell_row)+i)][((TableCellColumnWidth[table_id]*cell_column)+j)][1]==-1) {
				locked = true;	
			}
		}
	}
	if (filled) {	
		if (TableCellArray[table_id][cell_row][cell_column][0] != 1) {
		        for (var i=0; i<TableCellRowHeight[table_id]; i++) {
        			for (var j=0; j<TableCellColumnWidth[table_id]; j++) {
					setStyleById(table_name+'_element_'+((TableCellRowHeight[table_id]*cell_row)+i)+"_"+((TableCellColumnWidth[table_id]*cell_column)+j),"font-weight","bold");
					if (BrowserDetect.browser=="Firefox") {
						setStyleById(table_name+'_element_'+((TableCellRowHeight[table_id]*cell_row)+i)+"_"+((TableCellColumnWidth[table_id]*cell_column)+j),"textDecoration","underline");
					}
				}
			}	
			TableCellArray[table_id][cell_row][cell_column][0] = 1;
		}
	} else {
	        for (var i=0; i<TableCellRowHeight[table_id]; i++) {
        		for (var j=0; j<TableCellColumnWidth[table_id]; j++) {
				setStyleById(table_name+'_element_'+((TableCellRowHeight[table_id]*cell_row)+i)+"_"+((TableCellColumnWidth[table_id]*cell_column)+j),"font-weight","normal");
				if (BrowserDetect.browser=="Firefox") {
					setStyleById(table_name+'_element_'+((TableCellRowHeight[table_id]*cell_row)+i)+"_"+((TableCellColumnWidth[table_id]*cell_column)+j),"textDecoration","none");
				}
			}
		}	
		if (locked) {
			TableCellArray[table_id][cell_row][cell_column][0] = -2;
		}
	}
}

function checkandmark_set_red(table_id,cell_row, cell_column) {
	var filled = true;
	var table_name;
	if (table_id==0) { 
		table_name = "basis";
	} else if (table_id==1) {
		table_name = "line";
	} else {
		table_name = "pentagon";
	}
	
        for (var i=0; i<TableCellRowHeight[table_id]; i++) {
        	for (var j=0; j<TableCellColumnWidth[table_id]; j++) {
			if (TableElementArray[table_id][((TableCellRowHeight[table_id]*cell_row)+i)][((TableCellColumnWidth[table_id]*cell_column)+j)][1]!=-1) {
				filled = false;	
			}
		}
	}
	if (filled) {
		if (TableCellArray[table_id][cell_row][cell_column][0] != -1) {
		        for (var i=0; i<TableCellRowHeight[table_id]; i++) {
        			for (var j=0; j<TableCellColumnWidth[table_id]; j++) {
					setStyleById(table_name+'_element_'+((TableCellRowHeight[table_id]*cell_row)+i)+"_"+((TableCellColumnWidth[table_id]*cell_column)+j),"font-weight","bold");
					if (BrowserDetect.browser=="Firefox") {
						setStyleById(table_name+'_element_'+((TableCellRowHeight[table_id]*cell_row)+i)+"_"+((TableCellColumnWidth[table_id]*cell_column)+j),"textDecoration","underline");
					}
				}
			}	
			TableCellArray[table_id][cell_row][cell_column][0] = -1;
		}
	} else {
	        for (var i=0; i<TableCellRowHeight[table_id]; i++) {
        		for (var j=0; j<TableCellColumnWidth[table_id]; j++) {
				setStyleById(table_name+'_element_'+((TableCellRowHeight[table_id]*cell_row)+i)+"_"+((TableCellColumnWidth[table_id]*cell_column)+j),"font-weight","normal");
				if (BrowserDetect.browser=="Firefox") {
					setStyleById(table_name+'_element_'+((TableCellRowHeight[table_id]*cell_row)+i)+"_"+((TableCellColumnWidth[table_id]*cell_column)+j),"textDecoration","none");
				}
			}
		}	
		TableCellArray[table_id][cell_row][cell_column][0] = -2;
	}
}

function checkandmark_unset(table_id, cell_row, cell_column) {
	var table_name;
	if (table_id==0) { 
		table_name = "basis";
	} else if (table_id==1) {
		table_name = "line";
	} else {
		table_name = "pentagon";
	}
		
        for (var i=0; i<TableCellRowHeight[table_id]; i++) {
       		for (var j=0; j<TableCellColumnWidth[table_id]; j++) {
			setStyleById(table_name+'_element_'+((TableCellRowHeight[table_id]*cell_row)+i)+"_"+((TableCellColumnWidth[table_id]*cell_column)+j),"font-weight","normal");
			if (BrowserDetect.browser=="Firefox") {
				setStyleById(table_name+'_element_'+((TableCellRowHeight[table_id]*cell_row)+i)+"_"+((TableCellColumnWidth[table_id]*cell_column)+j),"textDecoration","none");
			}
		}
	}	
	TableCellArray[table_id][cell_row][cell_column][0] = 0;
}

/////////////////////////////////////////////////////////////////////
//
//	Utility Functions
//
//
function inArray(needle, haystack) {
    var length = haystack.length;
    for(var i = 0; i < length; i++) {
        if(haystack[i] == needle) return true;
    }
    return false;
}


var BrowserDetect = {
	init: function () {
		this.browser = this.searchString(this.dataBrowser) || "An unknown browser";
		this.version = this.searchVersion(navigator.userAgent)
			|| this.searchVersion(navigator.appVersion)
			|| "an unknown version";
		this.OS = this.searchString(this.dataOS) || "an unknown OS";
	},
	searchString: function (data) {
		for (var i=0;i<data.length;i++)	{
			var dataString = data[i].string;
			var dataProp = data[i].prop;
			this.versionSearchString = data[i].versionSearch || data[i].identity;
			if (dataString) {
				if (dataString.indexOf(data[i].subString) != -1)
					return data[i].identity;
			}
			else if (dataProp)
				return data[i].identity;
		}
	},
	searchVersion: function (dataString) {
		var index = dataString.indexOf(this.versionSearchString);
		if (index == -1) return;
		return parseFloat(dataString.substring(index+this.versionSearchString.length+1));
	},
	dataBrowser: [
		{
			string: navigator.userAgent,
			subString: "Chrome",
			identity: "Chrome"
		},
		{ 	string: navigator.userAgent,
			subString: "OmniWeb",
			versionSearch: "OmniWeb/",
			identity: "OmniWeb"
		},
		{
			string: navigator.vendor,
			subString: "Apple",
			identity: "Safari",
			versionSearch: "Version"
		},
		{
			prop: window.opera,
			identity: "Opera"
		},
		{
			string: navigator.vendor,
			subString: "iCab",
			identity: "iCab"
		},
		{
			string: navigator.vendor,
			subString: "KDE",
			identity: "Konqueror"
		},
		{
			string: navigator.userAgent,
			subString: "Firefox",
			identity: "Firefox"
		},
		{
			string: navigator.vendor,
			subString: "Camino",
			identity: "Camino"
		},
		{		// for newer Netscapes (6+)
			string: navigator.userAgent,
			subString: "Netscape",
			identity: "Netscape"
		},
		{
			string: navigator.userAgent,
			subString: "MSIE",
			identity: "Explorer",
			versionSearch: "MSIE"
		},
		{
			string: navigator.userAgent,
			subString: "Gecko",
			identity: "Mozilla",
			versionSearch: "rv"
		},
		{ 		// for older Netscapes (4-)
			string: navigator.userAgent,
			subString: "Mozilla",
			identity: "Netscape",
			versionSearch: "Mozilla"
		}
	],
	dataOS : [
		{
			string: navigator.platform,
			subString: "Win",
			identity: "Windows"
		},
		{
			string: navigator.platform,
			subString: "Mac",
			identity: "Mac"
		},
		{
			   string: navigator.userAgent,
			   subString: "iPhone",
			   identity: "iPhone/iPod"
	    },
		{
			string: navigator.platform,
			subString: "Linux",
			identity: "Linux"
		}
	]

};
BrowserDetect.init();

