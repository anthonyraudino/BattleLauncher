<?php
$URL = 'origin.com';
$ping = @fsockopen ($URL, 80, $errno, $errstr, 10);
(!$ping) ? $status = 'Origin is down' : $status = 'Origin is up';


$URL = 'battlelog.battlefield.com';
$ping = @fsockopen ($URL, 80, $errno, $errstr, 10);
(!$ping) ? $status2 = 'Battlelog is down' : $status2 = 'Battlelog is up';
?>