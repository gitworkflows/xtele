function Show_DeptTextBox(ID,other_department){
	var sValue;

	sValue = document.getElementById(ID).options[document.getElementById(ID).options.selectedIndex].value;
	
	//No Box
	//if(sValue == -1 || sValue < 1){
	//  document.getElementById(other_department).style.visibility="hidden";
	//}
	
	//UNI Box
	if(sValue == 5){
	  document.getElementById(other_department).value= '';
	  document.getElementById(other_department).style.visibility="visible";
	}else{
			document.getElementById(other_department).value= '';
			document.getElementById(other_department).style.visibility="hidden";
		}
}