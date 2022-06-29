<?php 

//Create connection to database:

$connecionstr="host='localhost' port='5432' dbname='Personal' user='postgres' password='123456' options='--client_encoding=UTF8'";
$dbconn = pg_connect($connecionstr);
// connection check
if (!$dbconn) {
 die("Connection failed: " . pg_connect_error());
}
$flag=-1;
if (isset($_POST['submit']) && $_POST['submit']=='Submit') {
	//create row
	$sql = "INSERT INTO info(fname, lname, adress, postal, number, email, card, ccv, expdate) VALUES('".$_POST['fname']."','".$_POST['lname']."','".$_POST['adress']."','".$_POST['postal']."','".$_POST['number']."','".$_POST['email']."','".$_POST['card']."','".$_POST['ccv']."','".$_POST['expdate']."')";
	$flag=1;
}else{
	$sql = "SELECT * FROM info WHERE email='".$_POST['email2']."';";
	$flag=0;
	
}
$result = pg_query($dbconn, $sql) ;

if ($result && $flag==1) {
	echo '<h1 style="text-align:center; color:#00cc00; position:absolute; transform:translate(-50%, -50%); left:50%; top:40%;" >successful payment 
		  <img src="images/381607_complete_icon.png" alt="image" style="max-height:25px;  position:relative; top:3px; margin-right:80px;">
		  <script>setTimeout(function () {window.location.replace("http://localhost/airlines-demo/index.php", "_blank");}, 4000);</script></h1>'; 
}elseif(!$result && $flag==1){
	echo '<h1 style="text-align:center; color:red; position:absolute; transform:translate(-50%, -50%); left:50%; top:40%;" >Incomplete connection into database, please try again 
	<img src="images/Delete-Red-X-Button-Transparent.png" alt="image" style="max-height:25px;  position:relative; top:5px; margin-right:80px;">
	</h1>';
} 


if($flag==0 && $result){
// Εμφάνιση αποτελεσμάτων στις γραμμές του πίνακα
echo "<link rel='stylesheet' href='Style2.css'>";
echo "<form>";
echo "<table>";
echo "<tr>
		<th>first name</th>
		<th>last name</th>
		<th>adress</th>
		<th>postal</th>
		<th>number</th>
		<th>email</th>
		<th>Card Number</th>
		<th>CCV</th>
		<th>EXP date</th>
	 </tr>";
}

while($row = pg_fetch_array($result)) {


echo "<tr>
		 <td>".$row['fname']."</td>".
		"<td>".$row['lname']."</td>".
		"<td>".$row['adress']."</td>".
		"<td>".$row['postal']."</td>".
		"<td>".$row['number']."</td>".
		"<td>".$row['email']."</td>".
		"<td>".$row['card']."</td>".
		"<td>".$row['ccv']."</td>".
		"<td>".$row['expdate']."</td>
		
	  </tr>";
echo "</table>" ;
echo "</form>";
}
pg_close($dbconn);
?>


