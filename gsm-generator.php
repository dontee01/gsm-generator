<?php


$total = 50000;
$numbers_arr = [];

$prefix = ['234802', '234803', '234805', '234806', '234807', '234808', '234809', '234810', '234811', '234812', '234813', '234814', '234815', '234816', '234817', '234818', '234702', '234703', '234704', '234705', '234706', '234707', '234708', '234709', '234902', '234903', '234905', '234906', '234907', '234908', '234909',];
// $pref1 = range(low, high)

$start = date('Y-m-d H:i:s');
$file = fopen("new-contacts.txt", "w") or die("Unable to open file!");
$next_init = 1234567;
for ($counter = 0; $counter < $total; $counter++)
{
	$k = $counter + 1;
	// $next = rand(0000000, 9999999);
	$imsi = $prefix[rand(0, count($prefix) - 1)];
	$mobile_number = $imsi.$next_init;
	$next_init ++;

	$content = $mobile_number.",";
	fwrite($file, $content);
	echo $k." Mobile Number : ".$mobile_number."<br /><br />";
	set_time_limit(20);
}
$stop = date('Y-m-d H:i:s');

fclose($file);

?>