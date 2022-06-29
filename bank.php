<!Doctype html>
<html style="background-color:#d9d9d9; text-align:justify;"> 
	<head>
		<link rel="icon" href="images/pngwing.com.png">
		<meta charset="utf-8" name="viewport" content="width=device-width, user-scalable=no"/>
		<title>transaction</title>
	</head>
<body>
<div style="position:absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); border: 1px solid black; padding: 20px; background-color:white; max-width:88%; max-height:75%; min-width:25%; min-height:60%; overflow: auto;">
	<h3 style="text-align:center; margin-top:-0.2cm;">Payment</h3>
	<p id='error' style="text-align:left; color:red;"></p>
	<br>
	<form method="post" action="save.php" style="margin-top:-0.5cm; padding-left:10%; text-align:justify; min-width:10cm; max-width:10cm;">
		<table>
			<tr>
				<th><input type="text" name="fname" id="fname" placeholder="first name"></th>
				<th><input type="text" name="lname" placeholder="last name"></th>
			</tr>
			<tr>
				<th><input type="text" name="adress" placeholder="adress"></th>
				<th><input type="text" name="postal" placeholder="postal code" maxlength="5" ></th>
			</tr>
			<tr>
				<th><input type="text" name="number" placeholder="number" maxlength="14"></th>
				<th><input type="text" name="email" placeholder="email"></th>
			</tr>
			<tr>
				<th><br></th>
				<th><br></th>
			</tr>
			<tr>
				<th></th>
			</tr>
		</table>
		<table style="margin-top:50%;">
			<tr>
				<th><input type="text" name="card" id="txtCardNumber" placeholder="XXXX-XXXX-XXXX-XXXX" maxlength="16"></th>
				<th>
					<select id="CardType" name="CardType">
						<option>Visa</option>
						<option>MasterCard</option>
						<option>Other</option>
					</select>
				</th>
			</tr>
			<tr>
				<th><input type="text" name="expdate" placeholder="MM/YY" maxlength="5"></th>
				<th><input type="text" name="ccv" placeholder="CCV" size="2" maxlength="3"></th>
			</tr>
			<tr>
				<td><input type="checkbox" id="scales" name="scales" checked><label for="save" style="position:relative; bottom:1.3px;">Save the card for future purchases</label></td>
			</tr>
		</table>
		<table>
			<tr>
				<td><input type="submit" name="submit" id="submit" value="Submit"></td>
				<td><input type="reset" name="clear" id="clear" value="Clear"></td>
				<td><input type="button" name="print" id="print" value="Print"></td>
			</tr>
		</table>
		<table style="margin-top:1cm;">
			<tr>
				<td>Forgot your personal info?</td>
			</tr>
			<tr>
				<td><input type="text" name="email2" id="email2" placeholder="example@domain.com"><input type="submit" name="search" value="Search"></td>
			</tr>
		</table>
	</form>
	<script src="script.js"></script>
	
</div>

</body>
