function app_form_validator(theForm)
{
	// Educational Error
	if (theForm.edu_err.value == '333')
	{
		alert("Not Eligible for Inediquate Academic Qualifications.");
		return (false);
	}
	// Age Limit
	if (theForm.age_err.value == '240')
	{
		alert("Not Eligible for Over Age.");
		return (false);
	}

  if (theForm.age_err.value == '241')
	{
		alert("Not Eligible for Under Age.");
		return (false);
	}

   if (theForm.pass_err.value == '243')
	{
		alert("Applicants Must Have National ID or Passport ID.");
		return (false);
	}

	//Data Error
	if (theForm.data_err.value == '909')
	{
		alert("Invalid or no mapping to system data types found... Kindly check this and also the Types");
		return (false);
	}
	document.images["im"].src = "images/pload.gif";
}