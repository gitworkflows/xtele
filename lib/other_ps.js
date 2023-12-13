function Show_ops1TextBox(ID,txtTextBox1){
	var sValue;

	sValue = document.getElementById(ID).options[document.getElementById(ID).options.selectedIndex].value;
	
	//No Box
	if(sValue != "Others"){
	  document.getElementById(txtTextBox1).style.visibility="hidden";
	}
	
	//UNI Box
	if(sValue == "Others"){
	  document.getElementById(txtTextBox1).value= "";
	  document.getElementById(txtTextBox1).style.visibility="visible";
	}
}
function Show_ops2TextBox(ID,txtTextBox1){
	var sValue;

	sValue = document.getElementById(ID).options[document.getElementById(ID).options.selectedIndex].value;
	
	//No Box
	if(sValue != "Others"){
	  document.getElementById(txtTextBox1).style.visibility="hidden";
	}
	
	//UNI Box
	if(sValue == "Others"){
	  document.getElementById(txtTextBox1).value= "";
	  document.getElementById(txtTextBox1).style.visibility="visible";
	}
}