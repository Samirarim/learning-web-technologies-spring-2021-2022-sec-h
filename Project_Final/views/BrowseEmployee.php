<?php  

	include_once('Condition.php');

?>
<html>
	<head>
		<title>Online Marketplace</title>
	</head>
	<body>
		<h1 style="height:80px;background-color:mediumseagreen;text-align: right; word-spacing: 15px;">
		 	<a href="LoginView.php" style="color: white; ">Home</a>
		 	<a href="About.php" style="color: white;">About</a>
		 	<a href="Contact.php" style="color: white;">Contact</a>
		 	<a href="../controller/LogOut.php" style="color:white;">LogOut</a>
		</h1>
		<h1 style="color:mediumseagreen; font-family:Lucida Handwriting;">Welcome to the Marketplace</h1>
<table style="align-self: center;">
	<tr>
	<td><br></td>
	<td><br></td>
	<td><br></td>
	<td><br></td>
	<td><br></td>
		<td>
		<table border="1">
        <tr>
        <th>
	         <a href="product_details.php">
	         <img src="../model/woman.png" alt="f1" width="200" height="200">
	         </a>
	         </th>
        </tr>
         <tr>
         <th>
   		 <font face="arial" color="#1E8449" size="6" style="text-align: center;" >
            Emma Watson
          </font>
      	</th>
      </tr>
      <tr>
      	<td align="center">
		  <button id= "button1">View details</button>
		  <a href="../views/HRequire.php" style="background-color: mediumseagreen; color:black; font-size:20;"><b>Hire</b></a>
		  <a href="../views/Report.php" style="background-color: mediumseagreen; color:black; font-size:20;"><b>Report</b></a>
		  <a href="../views/Review.php" style="background-color: mediumseagreen; color:black; font-size:20;"><b>Review</b></a>
    <div id= "DETAILS"></div>
    <script>
        document.getElementById('button1').addEventListener('click',loadfreelancer);
        function loadfreelancer()
        {
            var xttp = new XMLHttpRequest();
            xttp.open('GET','Freelancer.json',true);
            xttp.onload= function()
            {
            	let data = JSON.parse(this.responseText);

               if(this.readyState == 4 && this.status == 200 )
				{
                    var DETAILS = JSON.parse(this.responseText);
                    var output = '';
                    output +='<ul>' +
                        '<li><b>Name:'+data[0].Name+'</b></li>'+
                        '<li><b>Gender:'+data[0].Gender+'</b></li>'+
                        '<li><b>DOB:'+data[0].DOB+'</b></li>'+
                        '<li><b>Email:'+data[0].Email+'</b></li>'+
                        '<li><b>Category:'+data[0].Category+'</b></li>'+
                        '</ul>';
                        document.getElementById('DETAILS').innerHTML=output;
                        

                }
            }
            xttp.send();
     }
    </script>
     </td>
     </tr>
 </table>
</td>
<td><br></td>
<td><br></td>
<td><br></td>
<td><br></td>
<td><br></td>
<td>
 		<table border="1">
        <tr>
        <th>
	         <a href="product_details.php">
	         <img src="../model/boy.png" alt="f1" width="200" height="200">
	         </a>
	         </th>
        </tr>
         <tr>
         <th>
   		 <font face="arial" color="#1E8449" size="6" style="text-align: center;" >
            David John
          </font>
      	</th>
      </tr>
      <tr>
      	<td align="center">
		  <button id= "button2">View details</button>
		  <a href="../views/HRequire.php" style="background-color: mediumseagreen; color:black; font-size:20;"><b>Hire</b></a>
		  <a href="../views/Report.php" style="background-color: mediumseagreen; color:black; font-size:20;"><b>Report</b></a>
		  <a href="../views/Review.php" style="background-color: mediumseagreen; color:black; font-size:20;"><b>Review</b></a>
    <div id= "DETAILS2"></div>
    <script>
        document.getElementById('button2').addEventListener('click',loadfreelancer);
        function loadfreelancer()
        {
            var xttp = new XMLHttpRequest();
            xttp.open('GET','Freelancer.json',true);
            xttp.onload= function()
            {
            	let data = JSON.parse(this.responseText);

               //if(this.status == 200){
                    var DETAILS2 = JSON.parse(this.responseText);
                    var output = '';
                    output +='<ul>' +
                        '<li><b>Name:'+data[1].Name+'</b></li>'+
                        '<li><b>Gender:'+data[1].Gender+'</b></li>'+
                        '<li><b>DOB:'+data[1].DOB+'</b></li>'+
                        '<li><b>Email:'+data[1].Email+'</b></li>'+
                        '<li><b>Category:'+data[1].Category+'</b></li>'+
                        '</ul>';
                        document.getElementById('DETAILS2').innerHTML=output;
                        

               // }
            }
            xttp.send();
        }
    </script>
     </td>
     </tr>
 </table>
</td>
<td><br></td>
<td><br></td>
<td><br></td>
<td><br></td>
<td><br></td>
<td>
	 		<table border="1">
        <tr>
        <th>
	         <a href="product_details.php">
	         <img src="../model/user.png" alt="f1" width="200" height="200">
	         </a>
	         </th>
        </tr>
         <tr>
         <th>
   		 <font face="arial" color="#1E8449" size="6" style="text-align: center;" >
            Dane Walker
          </font>
      	</th>
      </tr>
      <tr>
      	<td align="center">
		  <button id= "button3">View details</button>
		  <a href="../views/HRequire.php" style="background-color: mediumseagreen; color:black; font-size:20;"><b>Hire</b></a>
		  <a href="../views/Report.php" style="background-color: mediumseagreen; color:black; font-size:20;"><b>Report</b></a>
		  <a href="../views/Review.php" style="background-color: mediumseagreen; color:black; font-size:20;"><b>Review</b></a>
    <div id= "DETAILS3"></div>
    <script>
        document.getElementById('button3').addEventListener('click',loadfreelancer);
        function loadfreelancer()
        {
            var xttp = new XMLHttpRequest();
            xttp.open('GET','Freelancer.json',true);
            xttp.onload= function()
            {
            	let data = JSON.parse(this.responseText);

               //if(this.status == 200){
                    var DETAILS3 = JSON.parse(this.responseText);
                    var output = '';
                    output +='<ul>' +
                        '<li><b>Name:'+data[2].Name+'</b></li>'+
                        '<li><b>Gender:'+data[2].Gender+'</b></li>'+
                        '<li><b>DOB:'+data[2].DOB+'</b></li>'+
                        '<li><b>Email:'+data[2].Email+'</b></li>'+
                        '<li><b>Category:'+data[2].Category+'</b></li>'+
                        '</ul>';
                        document.getElementById('DETAILS3').innerHTML=output;
                        

               // }
            }
            xttp.send();
        }
    </script>
     </td>
     </tr>
 </table>
</td>
<td><br></td>
<td><br></td>
<td><br></td>
<td><br></td>
<td><br></td>
<td>
	 		<table border="1">
        <tr>
        <th>
	         <a href="product_details.php">
	         <img src="../model/girl.png" alt="f1" width="200" height="200">
	         </a>
	         </th>
        </tr>
         <tr>
         <th>
   		 <font face="arial" color="#1E8449" size="6" style="text-align: center;" >
            Danny Rang
          </font>
      	</th>
      </tr>
      <tr>
      	<td align="center">
		  <button id= "button4">View details</button>
		  <a href="../views/HRequire.php" style="background-color: mediumseagreen; color:black; font-size:20;"><b>Hire</b></a>
		  <a href="../views/Report.php" style="background-color: mediumseagreen; color:black; font-size:20;"><b>Report</b></a>
		  <a href="../views/Review.php" style="background-color: mediumseagreen; color:black; font-size:20;"><b>Review</b></a>
    <div id= "DETAILS4"></div>
    <script>
        document.getElementById('button4').addEventListener('click',loadfreelancer);
        function loadfreelancer()
        {
            var xttp = new XMLHttpRequest();
            xttp.open('GET','Freelancer.json',true);
            xttp.onload= function()
            {
            	let data = JSON.parse(this.responseText);

               //if(this.status == 200){
                    var DETAILS4 = JSON.parse(this.responseText);
                    var output = '';
                    output +='<ul>' +
                        '<li><b>Name:'+data[3].Name+'</b></li>'+
                        '<li><b>Gender:'+data[3].Gender+'</b></li>'+
                        '<li><b>DOB:'+data[3].DOB+'</b></li>'+
                        '<li><b>Email:'+data[3].Email+'</b></li>'+
                        '<li><b>Category:'+data[3].Category+'</b></li>'+
                        '</ul>';
                        document.getElementById('DETAILS4').innerHTML=output;
                        

               // }
            }
            xttp.send();
        }
    </script>
     </td>
     </tr>
 </table>
</td>
</tr>
</table>
	</body>
</html>