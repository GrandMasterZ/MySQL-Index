 <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "akademija";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = array("Pulnex","Milteliai Mettox CB 5",
"Vylių dėžutė kartoninė pelėms",
"Spąstai pelėms gyvagaudžiai Repeater","Vylių dėžutė pelėms Peti");

$unit = array("kg","vnt");

$id=27031;
$query = "";
$timeStart = microtime(true);
for($i=0; $i<1000; $i++)
{
	$id++;
	$query = "INSERT INTO Materials VALUES (". $id . ",'" . $name[rand(0,4)] . "','" . $unit[rand(0,1)] . "'," . rand(1,100) . "," . rand(1,100) . "," . rand(1,100) ."); ";
	$conn->query($query);
}

$timeFinish = microtime(true);
$time = $timeFinish - $timeStart;
echo $time;

?> 
