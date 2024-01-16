<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Merchant Check Out Page</title>
	<meta name="GENERATOR" content="Evrsoft First Page">
	<link rel="shortcut icon" href="images/logo.png" />
	<link href="css/owl.carousel.css" rel='stylesheet' type='text/css'/>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> 
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);	  
	 </script>
	<script src="js/jquery.min.js"></script>
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
	<script>
		function myFunction()
		{
			alert("Redirecting to paytm website. Don't Refresh This Page");
		}
	</script>

	<script>
	    function createPDF() 
	    {
	        var sTable = document.getElementById('tab').innerHTML;

	        var style = "<style>";
	        style = style + "table {width: 100%;font: 17px Calibri;}";
	        style = style + "table, th, td {border: none; border-collapse: collapse;";
	        style = style + "padding: 2px 3px;text-align: center;}";
	        style = style + "</style>";

	        // new window object.
	        var win = window.open('', '', 'height=700,width=700');

	        win.document.write('<html><head>');
	        win.document.write('<title>Profile</title>');   // title for PDF hader.
	        win.document.write(style);          // add style inside the head tag.
	        win.document.write('</head>');
	        win.document.write('<body>');
	        win.document.write(sTable);         // the table contents inside the body tag.
	        win.document.write('</body></html>');

	        win.document.close(); 	// close pdf window.

	        win.print();    // pdf print.
	    }
	</script>


	<style>

		body, html 
		{
			background-repeat: no-repeat;
		    background-size: cover;
		    min-height: 200px;
		    max-height: 250px;
		}

		
		h1 {
			color: darkred;
			text-decoration: underline;
			text-align: center;
		}
		p{
			text-align: center;
		}
		
		table{
			font-size: larger;
			/*color: darkblue;*/
		}
		td {
		    border: 0px;
		    color: black;
		}
		tr.row2 td {
		    padding-top: 10px;
		    word-spacing: 15px;
		}
		th{
			text-align: center;
			text-decoration: underline;
			color: black;
		}
		input{
			color: blue;
			background-color: transparent;
			border: none;
			text-align: center;
		}
		p{
			color: white;
		}
	</style>
</head>
	<body background="images/beach00.jpg">
		<?php include('top.php'); ?>
		<?php //include('slider.php'); ?>
		<br><br>
		<h1>Customer Order Details</h1>
		<br><br>
		
		<form method="post" action="pgRedirect.php">
   		<div id="tab">
			<table cellpadding="0" cellspacing="0" border="0" align="center">
					<tr class="row2" style="font-size: 20px;">
						<th class="lbl">Label</th>
						<th class="vlu">Value</th>
					</tr>
					<tr>
						<br>
					</tr>
					<tr class="row2">
						<td><label>&nbsp;ORDER_ID *&nbsp;</label></td>
						<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000,99999999)?>">
						</td>
					</tr>
					<tr class="row2">
						<td><label>&nbsp;CUSTID *&nbsp;</label></td>
						<td><input id="CUST_ID" tabindex="2" maxlength="12" size="20" name="CUST_ID" autocomplete="off" value="CUST001"></td>
					</tr>
					<tr class="row2">
						<td><label>&nbsp;INDUSTRY_TYPE_ID *&nbsp;</label></td>
						<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="20" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
					</tr>
					<tr class="row2">
						<td><label>&nbsp;Channel *&nbsp;</label></td>
						<td><input id="CHANNEL_ID" tabindex="4" maxlength="20" size="20" name="CHANNEL_ID" autocomplete="off" value="WEB">
						</td>
					</tr>
					<tr class="row2">
						<td><label>&nbsp;txnAmount *&nbsp;</label></td>
						<td><input title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="1">
						</td>
					</tr>
			</table>
		</div>
			<br>
			<center>
				<table>
					<tr>
						<td>
							<button value="Check Out" type="submit" onclick="myFunction() , createPDF()">Payment</button>
						</td>
						
						<!--<td>
							<button value="Create PDF" id="btPrint" onclick="createPDF()">Create PDF</button>
						</td>-->
					</tr>			
				</table>
			</center>
			<br><br>
			<p>&nbsp;&nbsp;* - Mandatory Fields</p>
		</form>
		<?php include('bottom.php'); ?>
	</body>
</html>