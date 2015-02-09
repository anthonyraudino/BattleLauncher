<?php
$URL = 'origin.com';
$ping = @fsockopen ($URL, 80, $errno, $errstr, 10);
(!$ping) ? $status = $URL.' is down' : $status = $URL.' is up';


$URL = 'battlelog.battlefield.com';
$ping = @fsockopen ($URL, 80, $errno, $errstr, 10);
(!$ping) ? $status = $URL.' is down' : $status2 = $URL.' is up';

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>BattleLauncher</title>
<link href="reset.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<video loop preload autoplay id="backgroundMovie" src="bf4trailer.webm"></video>
<p id="pattern"></p>

<div id="logoBL">
<img class=".logostyle" src="logo-optimised.png" />
</div>
<a href="https://github.com/you"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/652c5b9acfaddf3a9c326fa6bde407b87f7be0f4/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6f72616e67655f6666373630302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png"></a>
<div id="ping">
<?php echo $status.'<br>';
echo $status2; ?>
</div>


</body>
</html>
