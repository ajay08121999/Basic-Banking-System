<html>
<head>
    <title>Basic Banking System </title>
    <link rel="shortcut icon" href="images/cm.png">
        <h1> (Web&Mobile Development: Task1-Basic Banking System)  #GRIPDEC20</h1>
   
	 <link rel="stylesheet" href="index_button.css">
	<style>
	button{
		background-color:#8cbed6;
	}
	body
	{
		text-align:center;
	}
		body{
		background-image:url("https://www.bankit.in/uploads/category/8542Money%20Transfer%20-%20Small%20image-min.png");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	</style>
</head>
<body >
	<div id="header">
       <br>
    
       <h1 style=" font-family:Courier New; font-size: 70px;color:red;text-shadow: 2px 2px black;"> Welcome to MY BANK </h1>
       <h2 style=" font-family:Brush Script MT; font-size: 70px;color:green;text-shadow: 2px 2px black;"> Let's make your transactions more easier and faster </h2>
    </div>
        <div id="section">
            <table>
                <tr></tr>
                <tr><br>
				<a href="getdetail.php">
               <button class="primary_btn" id="button "type="button" href="getdetail.php">View users</button>
                </a>
               
                </tr>
                <tr>        
               <br> <br> <br>
			   <a href="transfer.php">
			   <button class="primary_btn" id="button" type="button">Credit Transfer</button>
               </a>
               
               </tr>
			   
			    <tr>        
               <br> <br> <br>
			   <a href="transaction.php">
			   <button class="primary_btn" id="button" type="button">All Transaction</button>
               </a>
            </table>
    </div>
	           
</body>
</html>