<!DOCTYPE html>
<html>
	<head>
	<title>Payment</title>
	<link rel="shortcut icon" href="images/logo.png" />
	<link href="css/owl.carousel.css" rel='stylesheet' type='text/css'/>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	</script>

	<script src="js/jquery.min.js"></script>

	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<script type="text/javascript">
		function myFunction() 
		{
			var radio = document.getElementById("myCheck1");
			var card = document.getElementById("card");
			var radio2 = document.getElementById("myCheck2");
			var upi = document.getElementById("upi");
			var radio3 = document.getElementById("myCheck3");
			var img3 = document.getElementById("img3");
			if (radio.checked == true)
			{
		    	nb.style.display = "none";
		    	upi.style.display = "none";
		    	card.style.display = "block";
		  	} 
		  	else 
		  	{
		    	
		  	}
		}
		function myFunction2() 
		{
			
			var radio2 = document.getElementById("myCheck2");
			var upi = document.getElementById("upi");
			if (radio2.checked == true) 
			{
				card.style.display = "none";
				nb.style.display = "none";
				upi.style.display = "block";
			} 
			else 
			{
				
			}
		}
		function myFunction3() 
		{
			
			var radio3 = document.getElementById("myCheck3");
			var nb = document.getElementById("nb");
			
		  	if (radio3.checked == true) 
			{
				card.style.display = "none";
				upi.style.display = "none";
				nb.style.display = "block";
			} 
			else 
			{
				nb.style.display = "none";
			}
		}
	</script>
	<style type="text/css">
		body
		{
			background-color: lightblue;
		}
		p
		{
			font-size: 30pt;
		}
		#p1
		{
			font-size: 30pt;
			color: 	grey;
		}

		input[type='radio']:after 
		{
	        width: 15px;
	        height: 15px;
	        border-radius: 15px;
	        top: -2px;
	        left: -1px;
	        position: relative;
	        background-color: lightblue;
	        content: '';
	        display: inline-block;
	        visibility: visible;
	        border: 1px solid white;
	    }

	    input[type='radio']:checked:after 
	    {
	        width: 15px;
	        height: 15px;
	        border-radius: 15px;
	        top: -2px;
	        left: -1px;
	        position: relative;
	        background-color: skyblue;
	        content: '';
	        display: inline-block;
	        visibility: visible;
	        border: 1px solid white;
	    }
	</style>
	</head>
	<body>
		<?php include('function.php'); ?>
		<?php include('top.php'); ?>
		<?php //include('slider.php'); ?>
		<center>
			<div class="div1">
				Payment Using Cards
				<br><br>
				<table>
					<tr>
						<td><input type="radio" id="myCheck1" name="rb1" onclick="myFunction()"> Add Debit/Credit/ATM Card</td>
						<td>&nbsp;&nbsp;<input type="radio" id="myCheck2" name="rb1" onclick="myFunction2()"> UPI</td>
						<td>&nbsp;&nbsp;<input type="radio" id="myCheck3" name="rb1" onclick="myFunction3()"> Net banking</td>
					</tr>
				</table>
			</div>
			<br><br>
			
			<div id="card" style="display: none;">
				
				<p><img src="images/cards.png" height="300" width="1200"></p>
				<form action="aa.php">
					<br>
					<table align="center">
						<tr>
							<th></th>
							<th><b><u>ENTER CARD DETAILS</u></b></th>
							<th></th>
						</tr>
						<tr>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td><label><b>CARD HOLDER NAME</b>&nbsp;&nbsp;</label></td>
							<td><input type="text" size="30" placeholder="NAME ON BLOCK LETTERS" autofocus></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td><label><b>CARD NUMBER</b></label></td>
							<td><input type="text"size="25" placeholder="    XXXX-XXXX-XXXX-XXXX" autofocus></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
						</tr>				
						<tr>
							<td><label><b>VALID THRU</b></label></td>
							<td><input type="text" size="1" placeholder="JAN" autofocus>
							<input type="text" size="3" placeholder="2001" autofocus></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td><label><b>CVV</b></label></td>
							<td><input type="text" size="1" placeholder="XXX" autofocus></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td></td>
							<td><button type="submit" class="btn btn-primary btn-block">SUMBIT</button></td>
							<td></td>
						</tr>
					</table>
				</form>

			</div>
			<br>
			<div id="upi" style="display: none;">
				<p><img src="images/qrcode2.png" height="900" width="500"></p>
				<br><br>
				
				<form action="">
					
				</form>

			</div>
			<br>
			<div id="nb" style="display: none;">
				
				<p><img src="images/net_banking.png" height="250" width="1200"></p>
				<p>NET BANKING</p>

				<form action="">
					
				</form>

			</div>

			<br><br><br>				
		</center>
	</body>
</html>