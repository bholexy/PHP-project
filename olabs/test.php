<?php 

$d1 = date_parse ("2011-05-17");
$d2 = date_parse ("2011-05-11 13:00:00");
$d3 = date_parse ("00:10:00");
$d4 = new DateTime ("00:10:00");

print_r($d1);
print_r($d2);

if ($d1 < $d2) {
    echo '$d1 is less than $d2.';
} else if ($d1 == $d2) {
    echo '$d1 is equal to $d2.';
} else {
    echo '$d1 is greater than $d2.';
 
}


//$startTime = date("H:i:sa",strtotime('+30 minutes',date_format($d4,'H:i:sa')));

$minutes_to_add = 5;

$time = new DateTime('2011-11-17 05:05');
$time->add(new DateInterval('PT' . $minutes_to_add . 'H'));

$stamp = $time->format('Y-m-d H:i');
echo $stamp;

?>