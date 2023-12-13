function Show_SubTextBox(ID,txtTextBox1){
	var sValue;

	sValue = document.getElementById(ID).options[document.getElementById(ID).options.selectedIndex].value;
	
	//No Box
	if(sValue == -1 || sValue < 999){
	  document.getElementById(txtTextBox1).style.visibility="hidden";
	}
	
	//UNI Box
	if(sValue == 999){
	  document.getElementById(txtTextBox1).value= "";
	  document.getElementById(txtTextBox1).style.visibility="visible";
	}
}
