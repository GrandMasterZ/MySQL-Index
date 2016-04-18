
<?php

header('Content-Type: application/excel');
header('Content-Disposition: attachment; filename="randomData.csv"');

$name = array("Pulnex","Milteliai Mettox CB 5",
"Vylių dėžutė kartoninė pelėms",
"Spąstai pelėms gyvagaudžiai Repeater (metaliniai)","Vylių dėžutė pelėms Peti");

$unit = array("kg","vnt");

$data = [];
$id=27031;
for($i=0; $i<1000; $i++)
{
	$line = $id++ . "," . $name[rand(0,4)] . "," . $unit[rand(0,1)] . "," . rand(1,100) . "," . rand(1,100) . "," . rand(1,100);
	array_push($data,$line);
}

$fp = fopen('php://output', 'w');
foreach ( $data as $line ) {
    $val = explode(",", $line);
    fputcsv($fp, $val);
}
fclose($fp);
?>
