function Checker()
{
	let check=confirm('Are you Sure?');
	if(check==false)
	{
		event.preventDefault();
	}
}
function validatePassword() {
			let email,pass,Cpass = true;

			let email = document.forms["ResetPass"]["email"].value;
			let pass = document.forms["ResetPass"]["pass"].value;
			let Cpass = document.forms["ResetPass"]["Cpass"].value;

			if(email=="") 
			{
			email.focus();
			document.getElementByTagName("email").innerHTML = "required";
			return false;
			}
			else if(pass=="") {
			pass.focus();
			document.getElementByTagName("pass").innerHTML = "required";
			return false;
			}
			else if(Cpass=="") {
			Cpass.focus();
			document.getElementByTagName("Cpass").innerHTML = "required";
			return false;
			}
			if(pass != Cpass) {
			pass="";
			Cpass="";
			pass.focus();
			document.getElementByTagName("Cpass").innerHTML = "Does not Match";
			return false;
			} 	
			return true;
}

function validateHire() {
			let salary=false;
			let salary = document.forms["hire"]["sal"].value;
			if(sal=="") 
			{
			alert("Enter Amount");
			return false;
			}
			return true;
}

function Process()
{
	alert("Request Being Process");
}