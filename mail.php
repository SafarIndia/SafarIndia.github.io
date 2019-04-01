<?php
	$dbServername="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbName="safar";

	$conn=mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
$name=$_POST['name'];
$cardnumber=$_POST['cno'];

$add=$_POST['email'];
// send email
$clen=strlen($cardnumber);
$hidcno="*";
$star="*";
for ($i=0;$i<$clen-5;$i++){
	$hidcno=$hidcno."*";
}
$dispcno=substr($cardnumber, ($clen-4));
$phone=$_POST['phone'];
$noTick=$_POST['noTick'];
$start=$_POST['startpt'];
$arr=$_POST['arrival'];
$dept=$_POST['dep'];

$id=$_POST['id'];
$sql="SELECT * FROM cities WHERE id=$id";
$records=mysqli_query($conn, $sql);
$rows=mysqli_fetch_assoc($records); 
$stop=$rows['NAME'];

if($start=='Mumbai'){
	$sql="SELECT * FROM flights WHERE id=$id";
	$records=mysqli_query($conn, $sql);
	$rows=mysqli_fetch_assoc($records); 
	$price=$rows['MUMBAI'];
	$price=$price*$noTick;
}
elseif ($start=='Jaipur') {
	$sql="SELECT * FROM flights WHERE id=$id";
	$records=mysqli_query($conn, $sql);
	$rows=mysqli_fetch_assoc($records); 
	$price=$rows['JAIPUR'];
	$price=$price*$noTick;
}
elseif ($start=='Bengaluru') {
	$sql="SELECT * FROM flights WHERE id=$id";
	$records=mysqli_query($conn, $sql);
	$rows=mysqli_fetch_assoc($records); 
	$price=$rows['BANGLORE'];
	$price=$price*$noTick;
}
elseif ($start=='Bhubhaneshwar') {
	$sql="SELECT * FROM flights WHERE id=$id";
	$records=mysqli_query($conn, $sql);
	$rows=mysqli_fetch_assoc($records); 
	$price=$rows['BHUBHANESHWAR'];
	$price=$price*$noTick;
}
elseif ($start=='Jammu') {
	$sql="SELECT * FROM flights WHERE id=$id";
	$records=mysqli_query($conn, $sql);
	$rows=mysqli_fetch_assoc($records); 
	$price=$rows['JAMMU'];
	$price=$price*$noTick;
}
elseif ($start=='Kochi') {
	$sql="SELECT * FROM flights WHERE id=$id";
	$records=mysqli_query($conn, $sql);
	$rows=mysqli_fetch_assoc($records); 
	$price=$rows['KOCHI'];
	$price=$price*$noTick;
}
$msg = "Hello $name,\nYour booking has been confirmed.\n \nThe following are your details:\nName: $name\nCard Number: $hidcno$dispcno\nPhone Number: $phone\n\nThis is your E-Ticket:\nStart: $start\nDestination: $stop \nNumber of Tickets: $noTick\nArrival Date: $arr\nDeparture Date: $dept\nTotal price: ₹$price\n\nWe wish you a happy and safe journey! Thank you for visiting सफ़र !ndia";
ini_set('SMTP','myserver');
ini_set('smtp_port',25);
mail($add,"Your booking on सफ़र !ndia",$msg);

echo "Your bookking is confirmed. Please check your mail for details.<br> Thank you for visiting सफ़र !ndia ";
// echo "Name: $name<br>"
// echo "Card Number: $hidcno$dispcno";
?>