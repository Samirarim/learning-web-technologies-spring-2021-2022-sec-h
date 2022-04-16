function validateLogin()
			 {
				 let email = document.forms["login"]["email"].value;
				 if(email=="")
				 {
				 alert("Please enter the Email");
				 return false;
				 }
				 let pass = document.forms["login"]["pass"].value;
				 if(pass=="")
				 {
				 alert("Please enter the Password");
				 return false;
				 }
			}
function Checker()
{
	let check=confirm('Are you Sure?');
	if(check==false)
	{
		event.preventDefault();
	}
}

function validateSignUp()
			 {
			 	let condition = false;
			 	if(document.forms["reg"]["condition"].checked)
			 	{
			 		condition=true;
			 		let username = document.forms["reg"]["username"].value;
					 if(username=="")
					 {
					 alert("Please enter the Username");
					 return false;
					 }
					 let gender = document.forms["reg"]["gender"].value;
					 if(gender=="")
					 {
					 alert("Please Choose the gender");
					 return false;
					 }
					 let dob = document.forms["reg"]["dob"].value;
					 if(dob=="")
					 {
					 alert("Please select the date");
					 return false;
					 }
					 let email = document.forms["reg"]["email"].value;
					 if(email=="")
					 {
					 alert("Please enter the Email");
					 return false;
					 }
					 let pass = document.forms["reg"]["pass"].value;
					 if(pass=="")
					 {
					 alert("Please enter the Password");
					 return false;
					 }else if(pass<=5)
					 {
					 	alert("Password required length greater than 5");
					 	return false;
					 }
					 let Cpass = document.forms["reg"]["Cpass"].value;
					 if(Cpass=="")
					 {
					 alert("Please Confirm the Password");
					 return false;
					 }
					 if(pass!=Cpass)
					 {

					 	alert("Confirm Password failed");
					 	return false;

					 }
			 	}
				else
				 {
				 	alert("Please agree to the terms and condition");
				 }
				 	
				 	 

			}