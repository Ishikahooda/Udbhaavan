<?php
$servername = "localhost";
$username = "arr121";
$password = "prayogshala";
$dbname = "registerations";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))
		$p=$_POST['submit'];
	else
		$p="asdsa";
echo $p;
if(1)
{
	$name=$_POST['name'];
	$school=$_POST['school'];
	$contact = $_POST['conatct'];
	$emailid=$_POST['emailid'];
        $grade=$_POST['grade'];
	if(isset($_POST['event_1']))
		$Greenovation="Yes";
	else
		$Greenovation="NO";
	if(isset($_POST['event_2']))
		$Junkyard="yes";
	else
		$Junkyard="no";
	if(isset($_POST['event_3']))
		$Downstream="yes";
	else
		$Downstream="no";
	if(isset($_POST['event_4']))
		$Spacebar="yes";
	else
		$Spacebar="no";
	if(isset($_POST['event_5']))
		$Quiz="yes";
	else
		$Quiz="no";
	
$sql = "INSERT INTO reg (name, school, emailid,contact,grade,Greenovation,Junkyard,Downstream,Spacebar,Quiz)
VALUES ('$name', '$school', '$emailid', '$contact', '$grade', '$Greenovation','$Junkyard','$Downstream','$Spacebar','$Quiz')";

if ($conn->query($sql) === TRUE) {
    header("Location: thank_you.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
echo 1;
?>
