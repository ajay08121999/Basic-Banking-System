<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="button.css">
	<style>
	body{
		text-align:center;
	}
	body{
		
		background-image:url("https://image.freepik.com/free-vector/people-using-mobile-bank-remittance-money_74855-6617.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size:1100px 1100px;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		
		padding:30px;
		
	}
	.ho{
		padding-top:50px;
	}
	.butto1{
		background-color:#bebebe;
	}
	.button{
		border-radius:90px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: #28048a;
		font-size:17px;
		font-weight:bold;
		background:#26abff;
	}
	.button:hover{
		background-color:#26abff;
	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Deepak"){
				 var arr=["Mahesha","Aashay","Mukul","Kapil","Aziz","Jhanesh","Abhi","Balaji","Jeevan"];
				 }
				 else if(a==="Mahesha"){
					var arr=["Deepak","Aashay","Mukul","Kapil","Aziz","Jhanesh","Abhi","Balaji","Jeevan"];
				}
				else if(a==="Aashay"){
					var arr=["Mahesha","Deepak","Mukul","Kapil","Aziz","Jhanesh","Abhi","Balaji","Jeevan"];
				}
				else if(a==="Mukul"){
					var arr=["Mahesha","Aashay","Deepak","Kapil","Aziz","Jhanesh","Abhi","Balaji","Jeevan"];
				 }
				 else if(a==="Kapil"){
					var arr=["Mahesha","Aashay","Mukul","Deepak","Aziz","Jhanesh","Abhi","Balaji","Jeevan"];
				 }
				 else if(a==="Aziz"){
					var arr=["Mahesha","Aashay","Mukul","Kapil","Deepak","Jhanesh","Abhi","Balaji","Jeevan"];
				 }
				 else if(a==="Jhanesh"){
					var arr=["Mahesha","Aashay","Mukul","Kapil","Aziz","Deepak","Abhi","Balaji","Jeevan"];
				 }
				 else if(a==="Abhi"){
					var arr=["Mahesha","Aashay","Mukul","Kapil","Aziz","Jhanesh","Deepak","Balaji","Jeevan"];
				 }
				 else if(a==="Balaji"){
					var arr=["Mahesha","Aashay","Mukul","Kapil","Aziz","Jhanesh","Abhi","Deepak","Jeevan"];
				 }
				 else if(a==="Jeevan"){
				 var arr=["Mahesha","Aashay","Mukul","Kapil","Aziz","Jhanesh","Abhi","Balaji","Deepak"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1 style=" font-size:45px;color:#e0115f;text-shadow: 1.5px 1.5px black;">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" style=" font-size:45px; align="left">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Deepak">Deepak</option>
			<option value="Mahesha">Mahesha</option>
			<option value="Aashay">Aashay</option>
			<option value="Mukul">Mukul</option>
			<option value="Kapil">Kapil</option>
			<option value="Aziz">Aziz</option>
			<option value="Jhanesh">Jhanesh</option>
			<option value="Abhi">Abhi</option>
			<option value="Balaji">Balaji</option>
			<option value="Jeevan">Jeevan</option>
		</select><br><br>
		<label for="receiver" style=" font-size:45px; align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" style=" font-size:44px;align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="glow-on-hover">HOME</button>
	</a>
</div>
</body>
</html>