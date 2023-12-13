function Show_GpaTextBox(ID,txtTextBox1){
	var sValue;
	var SID;

	SID=ID.slice(-1);
	sValue = document.getElementById(ID).options[document.getElementById(ID).options.selectedIndex].value;
	
	//No Box
	if(sValue <= 3 || sValue >= 6){
	  document.getElementById('Caption_Marks'+SID).innerHTML = "";
	  document.getElementById(txtTextBox1).style.visibility="hidden";
	}
	
	//GPA Box
	if(sValue == 4 || sValue == 5){
	  document.getElementById('Caption_Marks'+SID).innerHTML="GPA";
	  document.getElementById(txtTextBox1).value= "";
	  document.getElementById(txtTextBox1).style.visibility="visible";
	}
}
