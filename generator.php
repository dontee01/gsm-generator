<?php


$total = 50000;
$numbers_arr = [];

$prefix = ['0802', '0803', '0805', '0806', '0807', '0808', '0809', '0810', '0811', '0812', '0813', '0814', '0815', '0816', '0817', '0818', '0702', '0703', '0704', '0705', '0706', '0707', '0708', '0709', '0902', '0903', '0905', '0906', '0907', '0908', '0909',];
// $pref1 = range(low, high)
$start = date('Y-m-d H:i:s');
$file = fopen("contacts.txt", "w") or die("Unable to open file!");
for ($counter = 0; $counter < $total; $counter++)
{
	$k = $counter + 1;
	$next = rand(1111111, 9999999);
	$imsi = $prefix[rand(0, count($prefix) - 1)];
	$mobile_number = $imsi.$next;

	if (!in_array($mobile_number, $numbers_arr))
	{
		array_push($numbers_arr, $mobile_number);
		$content = $mobile_number.",";
		fwrite($file, $content);
		echo $k." Mobile Number : ".$mobile_number."<br /><br />";
	}
	set_time_limit(20);
}
$stop = date('Y-m-d H:i:s');

fclose($file);

?>