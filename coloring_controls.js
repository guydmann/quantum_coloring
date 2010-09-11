function toggle_basis(row, column) {
	cell_row = BasisElementArray[row][column][2]; 
	cell_column = BasisElementArray[row][column][3]; 

	if (BasisCellArray[cell_row][cell_column][0] == 0) {
		BasisCellArray[cell_row][cell_column][0] = 1;
        	for (var i=0; i<BasisCellRowHeight/3; i++) {
	        	for (var j=0; j<BasisCellColumnWidth; j++) {
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('basis_element_'+((BasisCellRowHeight/3*cell_row)+i)+"_"+((BasisCellColumnWidth*cell_column)+j),"color","green");
				} else {
					setStyleById('basis_element_'+((BasisCellRowHeight/3*cell_row)+i)+"_"+((BasisCellColumnWidth*cell_column)+j),"background-color","green");
				}
				setStyleById('basis_element_'+((BasisCellRowHeight/3*cell_row)+i)+"_"+((BasisCellColumnWidth*cell_column)+j),"font-weight","bold");
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('basis_element_'+((BasisCellRowHeight/3*cell_row)+i)+"_"+((BasisCellColumnWidth*cell_column)+j),"textDecoration","underline");
				}
				BasisElementArray[(BasisCellRowHeight/3*cell_row)+i][(BasisCellColumnWidth*cell_column)+j][1] = 1;
				findandmark_green_element(BasisElementArray[(BasisCellRowHeight/3*cell_row)+i][(BasisCellColumnWidth*cell_column)+j][0]);
			}	
		}
	} else if (BasisCellArray[cell_row][cell_column][0] == 1) {
		//set to red
		BasisCellArray[cell_row][cell_column][0] = 2;
        	for (var i=0; i<BasisCellRowHeight/3; i++) {
	        	for (var j=0; j<BasisCellColumnWidth; j++) {
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('basis_element_'+((BasisCellRowHeight/3*cell_row)+i)+"_"+((BasisCellColumnWidth*cell_column)+j),"color","blue");
				} else {
					setStyleById('basis_element_'+((BasisCellRowHeight/3*cell_row)+i)+"_"+((BasisCellColumnWidth*cell_column)+j),"background-color","blue");
				}
				setStyleById('basis_element_'+((BasisCellRowHeight/3*cell_row)+i)+"_"+((BasisCellColumnWidth*cell_column)+j),"font-weight","bold");
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('basis_element_'+((BasisCellRowHeight/3*cell_row)+i)+"_"+((BasisCellColumnWidth*cell_column)+j),"textDecoration","underline");
				}
				BasisElementArray[(BasisCellRowHeight/3*cell_row)+i][(BasisCellColumnWidth*cell_column)+j][1] = 2;
//				findandmark_red_element(BasisElementArray[(BasisCellRowHeight/3*cell_row)+i][(BasisCellColumnWidth*cell_column)+j][0]);
			}	
		}
	} else if (BasisCellArray[cell_row][cell_column][0] == 2) {
		//set to red
		BasisCellArray[cell_row][cell_column][0] = -1;
        	for (var i=0; i<BasisCellRowHeight/3; i++) {
	        	for (var j=0; j<BasisCellColumnWidth; j++) {
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('basis_element_'+((BasisCellRowHeight/3*cell_row)+i)+"_"+((BasisCellColumnWidth*cell_column)+j),"color","red");
				} else {
					setStyleById('basis_element_'+((BasisCellRowHeight/3*cell_row)+i)+"_"+((BasisCellColumnWidth*cell_column)+j),"background-color","red");
				}
				setStyleById('basis_element_'+((BasisCellRowHeight/3*cell_row)+i)+"_"+((BasisCellColumnWidth*cell_column)+j),"font-weight","bold");
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('basis_element_'+((BasisCellRowHeight/3*cell_row)+i)+"_"+((BasisCellColumnWidth*cell_column)+j),"textDecoration","underline");
				}
				BasisElementArray[(BasisCellRowHeight/3*cell_row)+i][(BasisCellColumnWidth*cell_column)+j][1] = -1;
				findandmark_red_element(BasisElementArray[(BasisCellRowHeight/3*cell_row)+i][(BasisCellColumnWidth*cell_column)+j][0]);
			}	
		}
	} else {
		//unset values
		BasisCellArray[cell_row][cell_column][0] = 0;
        	for (var i=0; i<BasisCellRowHeight/3; i++) {
	        	for (var j=0; j<BasisCellColumnWidth; j++) {
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('basis_element_'+((BasisCellRowHeight/3*cell_row)+i)+"_"+((BasisCellColumnWidth*cell_column)+j),"color","grey");
				} else {
					setStyleById('basis_element_'+((BasisCellRowHeight/3*cell_row)+i)+"_"+((BasisCellColumnWidth*cell_column)+j),"background-color","black");
				}
				setStyleById('basis_element_'+((BasisCellRowHeight/3*cell_row)+i)+"_"+((BasisCellColumnWidth*cell_column)+j),"font-weight","normal");
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('basis_element_'+((BasisCellRowHeight/3*cell_row)+i)+"_"+((BasisCellColumnWidth*cell_column)+j),"textDecoration","none");
				}
				BasisElementArray[(BasisCellRowHeight/3*cell_row)+i][(BasisCellColumnWidth*cell_column)+j][1] = 0;
				findandmark_grey_element(BasisElementArray[(BasisCellRowHeight/3*cell_row)+i][(BasisCellColumnWidth*cell_column)+j][0]);
			}	
		}
	}

}
function toggle_line(row, column) {

	cell_row = LineElementArray[row][column][2]; 
	cell_column = LineElementArray[row][column][3]; 

	if (LineCellArray[cell_row][cell_column][0] == 0) {
		LineCellArray[cell_row][cell_column][0] = 1;
	        for (var i=0; i<LineCellRowHeight; i++) {
        		for (var j=0; j<LineCellColumnWidth; j++) {
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('line_element_'+((LineCellRowHeight*cell_row)+i)+"_"+((LineCellColumnWidth*cell_column)+j),"color","green");
				} else {
					setStyleById('line_element_'+((LineCellRowHeight*cell_row)+i)+"_"+((LineCellColumnWidth*cell_column)+j),"background-color","green");
				}
				setStyleById('line_element_'+((LineCellRowHeight*cell_row)+i)+"_"+((LineCellColumnWidth*cell_column)+j),"font-weight","bold");
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('line_element_'+((LineCellRowHeight*cell_row)+i)+"_"+((LineCellColumnWidth*cell_column)+j),"textDecoration","underline");
				}
				LineElementArray[(LineCellRowHeight*cell_row)+i][(LineCellColumnWidth*cell_column)+j][1] = 1;
				findandmark_green_element(LineElementArray[(LineCellRowHeight*cell_row)+i][(LineCellColumnWidth*cell_column)+j][0]);

			}	
		}
	} else if (LineCellArray[cell_row][cell_column][0] == 1) {
		LineCellArray[cell_row][cell_column][0] = -1;
	        for (var i=0; i<LineCellRowHeight; i++) {
        		for (var j=0; j<LineCellColumnWidth; j++) {
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('line_element_'+((LineCellRowHeight*cell_row)+i)+"_"+((LineCellColumnWidth*cell_column)+j),"color","red");
				} else {
					setStyleById('line_element_'+((LineCellRowHeight*cell_row)+i)+"_"+((LineCellColumnWidth*cell_column)+j),"background-color","red");
				}
				setStyleById('line_element_'+((LineCellRowHeight*cell_row)+i)+"_"+((LineCellColumnWidth*cell_column)+j),"font-weight","bold");
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('line_element_'+((LineCellRowHeight*cell_row)+i)+"_"+((LineCellColumnWidth*cell_column)+j),"textDecoration","underline");
				}
				LineElementArray[(LineCellRowHeight*cell_row)+i][(LineCellColumnWidth*cell_column)+j][1] = -1;
				findandmark_red_element(LineElementArray[(LineCellRowHeight*cell_row)+i][(LineCellColumnWidth*cell_column)+j][0]);

			}	
		}

	} else  {
		LineCellArray[cell_row][cell_column][0] = 0;
	        for (var i=0; i<LineCellRowHeight; i++) {
        		for (var j=0; j<LineCellColumnWidth; j++) {
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('line_element_'+((LineCellRowHeight*cell_row)+i)+"_"+((LineCellColumnWidth*cell_column)+j),"color","grey");
				} else {
					setStyleById('line_element_'+((LineCellRowHeight*cell_row)+i)+"_"+((LineCellColumnWidth*cell_column)+j),"background-color","black");
				}
				setStyleById('line_element_'+((LineCellRowHeight*cell_row)+i)+"_"+((LineCellColumnWidth*cell_column)+j),"font-weight","normal");
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('line_element_'+((LineCellRowHeight*cell_row)+i)+"_"+((LineCellColumnWidth*cell_column)+j),"textDecoration","none");
				}
				LineElementArray[(LineCellRowHeight*cell_row)+i][(LineCellColumnWidth*cell_column)+j][1] = 0;
				findandmark_grey_element(LineElementArray[(LineCellRowHeight*cell_row)+i][(LineCellColumnWidth*cell_column)+j][0]);

			}	
		}

	}

}

function toggle_pentagon(row, column) {

	cell_row = PentagonElementArray[row][column][2]; 
	cell_column = PentagonElementArray[row][column][3]; 
	if (PentagonCellArray[cell_row][cell_column][0] == 0) {
		PentagonCellArray[cell_row][cell_column][0] = 1;
	        for (var i=0; i<PentagonCellRowHeight; i++) {
        		for (var j=0; j<PentagonCellColumnWidth; j++) {
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('pentagon_element_'+((PentagonCellRowHeight*cell_row)+i)+"_"+((PentagonCellColumnWidth*cell_column)+j),"color","green");
				} else {
					setStyleById('pentagon_element_'+((PentagonCellRowHeight*cell_row)+i)+"_"+((PentagonCellColumnWidth*cell_column)+j),"background-color","green");
				}
				setStyleById('pentagon_element_'+((PentagonCellRowHeight*cell_row)+i)+"_"+((PentagonCellColumnWidth*cell_column)+j),"font-weight","bold");
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('pentagon_element_'+((PentagonCellRowHeight*cell_row)+i)+"_"+((PentagonCellColumnWidth*cell_column)+j),"textDecoration","underline");
				}
				PentagonElementArray[(PentagonCellRowHeight*cell_row)+i][(PentagonCellColumnWidth*cell_column)+j][1] = 1;
				findandmark_green_element(PentagonElementArray[(PentagonCellRowHeight*cell_row)+i][(PentagonCellColumnWidth*cell_column)+j][0]);

			}	
		}
	} else 	if (PentagonCellArray[cell_row][cell_column][0] == 1) {
		PentagonCellArray[cell_row][cell_column][0] = -1;
	        for (var i=0; i<PentagonCellRowHeight; i++) {
        		for (var j=0; j<PentagonCellColumnWidth; j++) {
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('pentagon_element_'+((PentagonCellRowHeight*cell_row)+i)+"_"+((PentagonCellColumnWidth*cell_column)+j),"color","red");
				} else {
					setStyleById('pentagon_element_'+((PentagonCellRowHeight*cell_row)+i)+"_"+((PentagonCellColumnWidth*cell_column)+j),"background-color","red");
				}
				setStyleById('pentagon_element_'+((PentagonCellRowHeight*cell_row)+i)+"_"+((PentagonCellColumnWidth*cell_column)+j),"font-weight","bold");
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('pentagon_element_'+((PentagonCellRowHeight*cell_row)+i)+"_"+((PentagonCellColumnWidth*cell_column)+j),"textDecoration","underline");
				}
				PentagonElementArray[(PentagonCellRowHeight*cell_row)+i][(PentagonCellColumnWidth*cell_column)+j][1] = -1;
				findandmark_red_element(PentagonElementArray[(PentagonCellRowHeight*cell_row)+i][(PentagonCellColumnWidth*cell_column)+j][0]);

			}	
		}

	} else {
		PentagonCellArray[cell_row][cell_column][0] = 0;
	        for (var i=0; i<PentagonCellRowHeight; i++) {
        		for (var j=0; j<PentagonCellColumnWidth; j++) {
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('pentagon_element_'+((PentagonCellRowHeight*cell_row)+i)+"_"+((PentagonCellColumnWidth*cell_column)+j),"color","grey");
				} else {
					setStyleById('pentagon_element_'+((PentagonCellRowHeight*cell_row)+i)+"_"+((PentagonCellColumnWidth*cell_column)+j),"background-color","black");
				}
				setStyleById('pentagon_element_'+((PentagonCellRowHeight*cell_row)+i)+"_"+((PentagonCellColumnWidth*cell_column)+j),"font-weight","normal");
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('pentagon_element_'+((PentagonCellRowHeight*cell_row)+i)+"_"+((PentagonCellColumnWidth*cell_column)+j),"textDecoration","none");
				}
				PentagonElementArray[(PentagonCellRowHeight*cell_row)+i][(PentagonCellColumnWidth*cell_column)+j][1] = 0;
				findandmark_grey_element(PentagonElementArray[(PentagonCellRowHeight*cell_row)+i][(PentagonCellColumnWidth*cell_column)+j][0]);

			}	
		}

	}
}


function findandmark_green_element(value) {
	var found_rows = new Array();
	var found_columns = new Array();
	
        for (var i=0; i<BasisCellArray.length; i++) {
		if (!inArray(i,found_rows)) {
			var found_in_row = false;
	                for (var j=0; j<BasisCellArray[0].length && !found_in_row; j++) {
				if (!inArray(j,found_columns)) {
				        for (var p=0; p<BasisCellRowHeight/3 && !found_in_row; p++) {
				        	for (var q=0; q<BasisCellColumnWidth && !found_in_row; q++) {
							if (BasisElementArray[(BasisCellRowHeight/3*i)+p][(BasisCellColumnWidth*j)+q][0] == value) {
				        	                BasisElementArray[(BasisCellRowHeight/3*i)+p][(BasisCellColumnWidth*j)+q][1] = 1;
								if (BrowserDetect.browser=="Firefox") {
					                	        setStyleById('basis_element_'+((BasisCellRowHeight/3*i)+p)+"_"+((BasisCellColumnWidth*j)+q),"color","green");
								} else {
					                	        setStyleById('basis_element_'+((BasisCellRowHeight/3*i)+p)+"_"+((BasisCellColumnWidth*j)+q),"background-color","green");
								}

								checkandmark_basis_set_green(i, j) ;

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

	found_rows = new Array();
	found_columns = new Array();
	
        for (var i=0; i<LineCellArray.length; i++) {
		if (!inArray(i,found_rows)) {
			var found_in_row = false;
	                for (var j=0; j<LineCellArray[0].length && !found_in_row; j++) {
				if (!inArray(j,found_columns)) {
				        for (var p=0; p<LineCellRowHeight && !found_in_row; p++) {
				        	for (var q=0; q<LineCellColumnWidth && !found_in_row; q++) {
							if (LineElementArray[(LineCellRowHeight*i)+p][(LineCellColumnWidth*j)+q][0] == value) {
				        	                LineElementArray[(LineCellRowHeight*i)+p][(LineCellColumnWidth*j)+q][1] = 1;
								if (BrowserDetect.browser=="Firefox") {
					                	        setStyleById('line_element_'+((LineCellRowHeight*i)+p)+"_"+((LineCellColumnWidth*j)+q),"color","green");
								} else {
					                	        setStyleById('line_element_'+((LineCellRowHeight*i)+p)+"_"+((LineCellColumnWidth*j)+q),"background-color","green");
								}

								checkandmark_line_set_green(i, j) ;

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

	found_rows = new Array();
	found_columns = new Array();

        for (var i=0; i<PentagonCellArray.length; i++) {
		if (!inArray(i,found_rows)) {
			var found_in_row = false;
	                for (var j=0; j<PentagonCellArray[0].length && !found_in_row; j++) {
				if (!inArray(j,found_columns)) {
				        for (var p=0; p<PentagonCellRowHeight && !found_in_row; p++) {
				        	for (var q=0; q<PentagonCellColumnWidth && !found_in_row; q++) {
							if (PentagonElementArray[(PentagonCellRowHeight*i)+p][(PentagonCellColumnWidth*j)+q][0] == value) {
								if (BrowserDetect.browser=="Firefox") {
					                	        setStyleById('pentagon_element_'+((PentagonCellRowHeight*i)+p)+"_"+((PentagonCellColumnWidth*j)+q),"color","green");
								} else {
					                	        setStyleById('pentagon_element_'+((PentagonCellRowHeight*i)+p)+"_"+((PentagonCellColumnWidth*j)+q),"background-color","green");
								}

				        	                PentagonElementArray[(PentagonCellRowHeight*i)+p][(PentagonCellColumnWidth*j)+q][1] = 1;

								checkandmark_pentagon_set_green(i, j) ;

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

function findandmark_red_element(value) {
	var found_rows = new Array();
	var found_columns = new Array();
	
        for (var i=0; i<BasisCellArray.length; i++) {
		if (!inArray(i,found_rows)) {
			var found_in_row = false;
	                for (var j=0; j<BasisCellArray[0].length && !found_in_row; j++) {
				if (!inArray(j,found_columns)) {
				        for (var p=0; p<BasisCellRowHeight/3 && !found_in_row; p++) {
				        	for (var q=0; q<BasisCellColumnWidth && !found_in_row; q++) {
							if (BasisElementArray[(BasisCellRowHeight/3*i)+p][(BasisCellColumnWidth*j)+q][0] == value) {
				        	                BasisElementArray[(BasisCellRowHeight/3*i)+p][(BasisCellColumnWidth*j)+q][1] = -1;
								if (BrowserDetect.browser=="Firefox") {
					                	        setStyleById('basis_element_'+((BasisCellRowHeight/3*i)+p)+"_"+((BasisCellColumnWidth*j)+q),"color","red");
								} else {
					                	        setStyleById('basis_element_'+((BasisCellRowHeight/3*i)+p)+"_"+((BasisCellColumnWidth*j)+q),"background-color","red");
								}

								checkandmark_basis_set_red(i, j);

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

	found_rows = new Array();
	found_columns = new Array();
	
        for (var i=0; i<LineCellArray.length; i++) {
		if (!inArray(i,found_rows)) {
			var found_in_row = false;
	                for (var j=0; j<LineCellArray[0].length && !found_in_row; j++) {
				if (!inArray(j,found_columns)) {
				        for (var p=0; p<LineCellRowHeight && !found_in_row; p++) {
				        	for (var q=0; q<LineCellColumnWidth && !found_in_row; q++) {
							if (LineElementArray[(LineCellRowHeight*i)+p][(LineCellColumnWidth*j)+q][0] == value) {
				        	                LineElementArray[(LineCellRowHeight*i)+p][(LineCellColumnWidth*j)+q][1] = -1;
								if (BrowserDetect.browser=="Firefox") {
					                	        setStyleById('line_element_'+((LineCellRowHeight*i)+p)+"_"+((LineCellColumnWidth*j)+q),"color","red");
								} else {
					                	        setStyleById('line_element_'+((LineCellRowHeight*i)+p)+"_"+((LineCellColumnWidth*j)+q),"background-color","red");
								}

								checkandmark_line_set_red(i, j);

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

	found_rows = new Array();
	found_columns = new Array();

        for (var i=0; i<PentagonCellArray.length; i++) {
		if (!inArray(i,found_rows)) {
			var found_in_row = false;
	                for (var j=0; j<PentagonCellArray[0].length && !found_in_row; j++) {
				if (!inArray(j,found_columns)) {
				        for (var p=0; p<PentagonCellRowHeight && !found_in_row; p++) {
				        	for (var q=0; q<PentagonCellColumnWidth && !found_in_row; q++) {
							if (PentagonElementArray[(PentagonCellRowHeight*i)+p][(PentagonCellColumnWidth*j)+q][0] == value) {
								if (BrowserDetect.browser=="Firefox") {
					                	        setStyleById('pentagon_element_'+((PentagonCellRowHeight*i)+p)+"_"+((PentagonCellColumnWidth*j)+q),"color","red");
								} else {
					                	        setStyleById('pentagon_element_'+((PentagonCellRowHeight*i)+p)+"_"+((PentagonCellColumnWidth*j)+q),"background-color","red");
								}

				        	                PentagonElementArray[(PentagonCellRowHeight*i)+p][(PentagonCellColumnWidth*j)+q][1] = -1;

								checkandmark_pentagon_set_red(i, j);

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



function findandmark_grey_element(value) {
	var found_rows = new Array();
	var found_columns = new Array();
	
        for (var i=0; i<BasisCellArray.length; i++) {
		if (!inArray(i,found_rows)) {
			var found_in_row = false;
	                for (var j=0; j<BasisCellArray[0].length && !found_in_row; j++) {
				if (!inArray(j,found_columns)) {
				        for (var p=0; p<BasisCellRowHeight/3 && !found_in_row; p++) {
				        	for (var q=0; q<BasisCellColumnWidth && !found_in_row; q++) {
							if (BasisElementArray[(BasisCellRowHeight/3*i)+p][(BasisCellColumnWidth*j)+q][0] == value) {
				        	                BasisElementArray[(BasisCellRowHeight/3*i)+p][(BasisCellColumnWidth*j)+q][1] = 0;
								if (BrowserDetect.browser=="Firefox") {
					                	        setStyleById('basis_element_'+((BasisCellRowHeight/3*i)+p)+"_"+((BasisCellColumnWidth*j)+q),"color","grey");
								} else {
					                	        setStyleById('basis_element_'+((BasisCellRowHeight/3*i)+p)+"_"+((BasisCellColumnWidth*j)+q),"background-color","black");
								}

								checkandmark_basis_unset(i, j) 

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

	found_rows = new Array();
	found_columns = new Array();
	
        for (var i=0; i<LineCellArray.length; i++) {
		if (!inArray(i,found_rows)) {
			var found_in_row = false;
	                for (var j=0; j<LineCellArray[0].length && !found_in_row; j++) {
				if (!inArray(j,found_columns)) {
				        for (var p=0; p<LineCellRowHeight && !found_in_row; p++) {
				        	for (var q=0; q<LineCellColumnWidth && !found_in_row; q++) {
							if (LineElementArray[(LineCellRowHeight*i)+p][(LineCellColumnWidth*j)+q][0] == value) {
				        	                LineElementArray[(LineCellRowHeight*i)+p][(LineCellColumnWidth*j)+q][1] = 0;
								if (BrowserDetect.browser=="Firefox") {
					                	        setStyleById('line_element_'+((LineCellRowHeight*i)+p)+"_"+((LineCellColumnWidth*j)+q),"color","grey");
								} else {
					                	        setStyleById('line_element_'+((LineCellRowHeight*i)+p)+"_"+((LineCellColumnWidth*j)+q),"background-color","black");
								}

								checkandmark_line_unset(i, j) 

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

	found_rows = new Array();
	found_columns = new Array();

        for (var i=0; i<PentagonCellArray.length; i++) {
		if (!inArray(i,found_rows)) {
			var found_in_row = false;
	                for (var j=0; j<PentagonCellArray[0].length && !found_in_row; j++) {
				if (!inArray(j,found_columns)) {
				        for (var p=0; p<PentagonCellRowHeight && !found_in_row; p++) {
				        	for (var q=0; q<PentagonCellColumnWidth && !found_in_row; q++) {
							if (PentagonElementArray[(PentagonCellRowHeight*i)+p][(PentagonCellColumnWidth*j)+q][0] == value) {
								if (BrowserDetect.browser=="Firefox") {
					                	        setStyleById('pentagon_element_'+((PentagonCellRowHeight*i)+p)+"_"+((PentagonCellColumnWidth*j)+q),"color","grey");
								} else {
					                	        setStyleById('pentagon_element_'+((PentagonCellRowHeight*i)+p)+"_"+((PentagonCellColumnWidth*j)+q),"background-color","black");
								}

				        	                PentagonElementArray[(PentagonCellRowHeight*i)+p][(PentagonCellColumnWidth*j)+q][1] = 0;

								checkandmark_pentagon_unset(i, j) 

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


function checkandmark_line_set_green(cell_row, cell_column) {
	var filled = true;
        for (var i=0; i<LineCellRowHeight; i++) {
        	for (var j=0; j<LineCellColumnWidth; j++) {
			if (LineElementArray[((LineCellRowHeight*cell_row)+i)][((LineCellColumnWidth*cell_column)+j)][1]!=1) {
				filled = false;	
			}
		}
	}
	if (filled) {
	        for (var i=0; i<LineCellRowHeight; i++) {
        		for (var j=0; j<LineCellColumnWidth; j++) {
				setStyleById('line_element_'+((LineCellRowHeight*cell_row)+i)+"_"+((LineCellColumnWidth*cell_column)+j),"font-weight","bold");
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('line_element_'+((LineCellRowHeight*cell_row)+i)+"_"+((LineCellColumnWidth*cell_column)+j),"textDecoration","underline");
				}
			}
		}	
		LineCellArray[cell_row][cell_column][0] = 1;
	}

}
function checkandmark_line_set_red(cell_row, cell_column) {
	var filled = true;
        for (var i=0; i<LineCellRowHeight; i++) {
        	for (var j=0; j<LineCellColumnWidth; j++) {
			if (LineElementArray[((LineCellRowHeight*cell_row)+i)][((LineCellColumnWidth*cell_column)+j)][1]!=-1) {
				filled = false;	
			}
		}
	}
	if (filled) {
	        for (var i=0; i<LineCellRowHeight; i++) {
        		for (var j=0; j<LineCellColumnWidth; j++) {
				setStyleById('line_element_'+((LineCellRowHeight*cell_row)+i)+"_"+((LineCellColumnWidth*cell_column)+j),"font-weight","bold");
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('line_element_'+((LineCellRowHeight*cell_row)+i)+"_"+((LineCellColumnWidth*cell_column)+j),"textDecoration","underline");
				}
			}
		}	
		LineCellArray[cell_row][cell_column][0] = -1;
	}

}

function checkandmark_line_unset(cell_row, cell_column) {
        for (var i=0; i<LineCellRowHeight; i++) {
       		for (var j=0; j<LineCellColumnWidth; j++) {
			setStyleById('line_element_'+((LineCellRowHeight*cell_row)+i)+"_"+((LineCellColumnWidth*cell_column)+j),"font-weight","normal");
			if (BrowserDetect.browser=="Firefox") {
				setStyleById('line_element_'+((LineCellRowHeight*cell_row)+i)+"_"+((LineCellColumnWidth*cell_column)+j),"textDecoration","none");
			}
		}
	}	
}


function checkandmark_pentagon_set_green(cell_row, cell_column) {
	var filled = true;
        for (var i=0; i<PentagonCellRowHeight; i++) {
        	for (var j=0; j<PentagonCellColumnWidth; j++) {
			if (PentagonElementArray[((PentagonCellRowHeight*cell_row)+i)][((PentagonCellColumnWidth*cell_column)+j)][1]!=1) {
				filled = false;	
			}
		}
	}
	if (filled) {
	        for (var i=0; i<PentagonCellRowHeight; i++) {
        		for (var j=0; j<PentagonCellColumnWidth; j++) {
				setStyleById('pentagon_element_'+((PentagonCellRowHeight*cell_row)+i)+"_"+((PentagonCellColumnWidth*cell_column)+j),"font-weight","bold");
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('pentagon_element_'+((PentagonCellRowHeight*cell_row)+i)+"_"+((PentagonCellColumnWidth*cell_column)+j),"textDecoration","underline");
				}
			}
		}	
		PentagonCellArray[cell_row][cell_column][0] = 1;
	}

}
function checkandmark_pentagon_set_red(cell_row, cell_column) {
	var filled = true;
        for (var i=0; i<PentagonCellRowHeight; i++) {
        	for (var j=0; j<PentagonCellColumnWidth; j++) {
			if (PentagonElementArray[((PentagonCellRowHeight*cell_row)+i)][((PentagonCellColumnWidth*cell_column)+j)][1]!=-1) {
				filled = false;	
			}
		}
	}
	if (filled) {
	        for (var i=0; i<PentagonCellRowHeight; i++) {
        		for (var j=0; j<PentagonCellColumnWidth; j++) {
				setStyleById('pentagon_element_'+((PentagonCellRowHeight*cell_row)+i)+"_"+((PentagonCellColumnWidth*cell_column)+j),"font-weight","bold");
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('pentagon_element_'+((PentagonCellRowHeight*cell_row)+i)+"_"+((PentagonCellColumnWidth*cell_column)+j),"textDecoration","underline");
				}
			}
		}	
		PentagonCellArray[cell_row][cell_column][0] = -1;
	}

}

function checkandmark_pentagon_unset(cell_row, cell_column) {
        for (var i=0; i<PentagonCellRowHeight; i++) {
       		for (var j=0; j<PentagonCellColumnWidth; j++) {
			setStyleById('pentagon_element_'+((PentagonCellRowHeight*cell_row)+i)+"_"+((PentagonCellColumnWidth*cell_column)+j),"font-weight","normal");
			if (BrowserDetect.browser=="Firefox") {
				setStyleById('pentagon_element_'+((PentagonCellRowHeight*cell_row)+i)+"_"+((PentagonCellColumnWidth*cell_column)+j),"textDecoration","none");
			}
		}
	}	
}

function checkandmark_basis_set_green(cell_row, cell_column) {
	var filled = true;
        for (var i=0; i<BasisCellRowHeight/3; i++) {
        	for (var j=0; j<BasisCellColumnWidth; j++) {
			if (BasisElementArray[((BasisCellRowHeight/3*cell_row)+i)][((BasisCellColumnWidth*cell_column)+j)][1]!=1) {
				filled = false;	
			}
		}
	}
	if (filled) {
	        for (var i=0; i<BasisCellRowHeight/3; i++) {
        		for (var j=0; j<BasisCellColumnWidth; j++) {
				setStyleById('basis_element_'+((BasisCellRowHeight/3*cell_row)+i)+"_"+((BasisCellColumnWidth*cell_column)+j),"font-weight","bold");
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('basis_element_'+((BasisCellRowHeight/3*cell_row)+i)+"_"+((BasisCellColumnWidth*cell_column)+j),"textDecoration","underline");
				}
			}
		}	
		BasisCellArray[cell_row][cell_column][0] = 1;
	}

}

function checkandmark_basis_set_red(cell_row, cell_column) {
	var filled = true;
        for (var i=0; i<BasisCellRowHeight/3; i++) {
        	for (var j=0; j<BasisCellColumnWidth; j++) {
			if (BasisElementArray[((BasisCellRowHeight/3*cell_row)+i)][((BasisCellColumnWidth*cell_column)+j)][1]!=-1) {
				filled = false;	
			}
		}
	}
	if (filled) {
	        for (var i=0; i<BasisCellRowHeight/3; i++) {
        		for (var j=0; j<BasisCellColumnWidth; j++) {
				setStyleById('basis_element_'+((BasisCellRowHeight/3*cell_row)+i)+"_"+((BasisCellColumnWidth*cell_column)+j),"font-weight","bold");
				if (BrowserDetect.browser=="Firefox") {
					setStyleById('basis_element_'+((BasisCellRowHeight/3*cell_row)+i)+"_"+((BasisCellColumnWidth*cell_column)+j),"textDecoration","underline");
				}
			}
		}	
		BasisCellArray[cell_row][cell_column][0] = -1;
	}

}

function checkandmark_basis_unset(cell_row, cell_column) {
        for (var i=0; i<BasisCellRowHeight/3; i++) {
       		for (var j=0; j<BasisCellColumnWidth; j++) {
			setStyleById('basis_element_'+((BasisCellRowHeight/3*cell_row)+i)+"_"+((BasisCellColumnWidth*cell_column)+j),"font-weight","normal");
			if (BrowserDetect.browser=="Firefox") {
				setStyleById('basis_element_'+((BasisCellRowHeight/3*cell_row)+i)+"_"+((BasisCellColumnWidth*cell_column)+j),"textDecoration","none");
			}
		}
	}	
}



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

