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
			var div1 = document.getElementById("div1");
			if (radio.checked == true)
			{
				div1.style.display = "block";
			} 
			else 
			{
				div1.style.display = "none";
			}
		}

	</script>
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
						<td><input type="radio" id="myCheck1" onclick="myFunction()" name="c1"> Add CARD</td>
						<td>&nbsp;&nbsp;<input type="radio" id="myCheck2" name="c1"> UPI</td>
						<td>&nbsp;&nbsp;<input type="radio" id="myCheck2" name="c1"> Net Banking</td>
					</tr>
					<!--<tr>
						<td><input type="radio" id="myCheck2" onclick="myFunction()">UPI</td>
					</tr>-->

				</table>
			</div>
			<br><br>
				<!--<p><img src="images/upi.png" height="250" width="1200"></p>-->
			
			<div id="div1" style="display: none;">
				
				<p><img src="images/cards.jpg" height="250" width="1200"></p>
				<br>

				<form action="aa.php">
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

					<br><br><br>				
		</center>
	</body>