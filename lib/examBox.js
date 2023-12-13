function Show_ExamTextBox(ID,txtTextBox1){
	var sValue;
	var SID;

	SID=ID.slice(4);
	sValue = document.getElementById(ID).options[document.getElementById(ID).options.selectedIndex].value;
	
	//No Box
	if(sValue == -1 || sValue < 9){
	  document.getElementById(txtTextBox1).style.visibility="hidden";
	}
	
	//UNI Box
	if(sValue == 9){
	  document.getElementById(txtTextBox1).value= "";
	  document.getElementById(txtTextBox1).style.visibility="visible";
	}
}
