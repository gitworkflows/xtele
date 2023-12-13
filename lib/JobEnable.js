//Enable JOB
function jfd()
{
	if (document.getElementById('job_no').checked)
	{
		document.getElementById('organization1').disabled = false;
		document.getElementById('job_post1').disabled = false;
		document.getElementById('t_day1').disabled = false;
		document.getElementById('t_month1').disabled = false;
		document.getElementById('t_year1').disabled = false;
		document.getElementById('f_day1').disabled = false;
		document.getElementById('f_month1').disabled = false;
		document.getElementById('f_year1').disabled = false;
		document.getElementById('job_res1').disabled = false;
		document.getElementById('job_button').disabled = false;
		document.getElementById('till_now').disabled = false;
	}
	if (!document.getElementById('job_no').checked)
	{
		document.getElementById('organization1').disabled = true;
		document.getElementById('job_post1').disabled = true;
		document.getElementById('t_day1').disabled = true;
		document.getElementById('t_month1').disabled = true;
		document.getElementById('t_year1').disabled = true;
		document.getElementById('f_day1').disabled = true;
		document.getElementById('f_month1').disabled = true;
		document.getElementById('f_year1').disabled = true;
		document.getElementById('job_res1').disabled = true;
		document.getElementById('job_button').disabled = true;
		document.getElementById('till_now').disabled = true;
	}


}

function till_date(){
	if (document.getElementById('till_now').checked)
	{	
		var today = new Date();
		var day = String(today.getDate()).padStart(2, '0');
		var month = String(today.getMonth() + 1).padStart(2, '0'); 
		var Year = today.getFullYear();

		document.getElementById("f_day1").value = day;
		document.getElementById("f_month1").value = month;
		document.getElementById("f_year1").value = Year;

	}
	if (!document.getElementById('till_now').checked)
	{
		document.getElementById("f_day1").value = 0;
		document.getElementById("f_month1").value = 0;
		document.getElementById("f_year1").value = 0;
		
	}

}



function onmouseout(event) {
  this.start()
}

function onmouseover(event) {
  this.stop()
}