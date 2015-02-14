<?php
$URL = 'origin.com';
$ping = @fsockopen ($URL, 80, $errno, $errstr, 10);
(!$ping) ? $status = '<img class="icon" src="../images/down-status.png" />Origin is down' : $status = '<img class="icon" src="../images/up-status.png" />Origin is up';


$URL = 'battlelog.battlefield.com';
$ping = @fsockopen ($URL, 80, $errno, $errstr, 10);
(!$ping) ? $status2 = '<img class="icon" src="../images/down-status.png" />Battlelog is down' : $status2 = '<img class="icon" src="../images/up-status.png" />Battlelog is up';
?>