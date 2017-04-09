<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Get Photos</title>
<style type="text/css">
p {padding:20px;}
</style>
</head>
<?php
$core6 = 'Latest Core 6 Photo';
$core6ID = file_get_contents('http://new-stadium.tottenhamhotspur.com/wp-content/plugins/live-feed/callback/timelapse.php?camera=596&image=latest', NULL, NULL, 7, 8);
$core6Date = file_get_contents('http://new-stadium.tottenhamhotspur.com/wp-content/plugins/live-feed/callback/timelapse.php?camera=596&image=latest', NULL, NULL, 146, 16);
$warmington = 'Latest Warmington House Photo';
$warmingtonID = file_get_contents('http://new-stadium.tottenhamhotspur.com/wp-content/plugins/live-feed/callback/timelapse.php?camera=597&image=latest', NULL, NULL, 7, 8);
$warmingtonDate = file_get_contents('http://new-stadium.tottenhamhotspur.com/wp-content/plugins/live-feed/callback/timelapse.php?camera=597&image=latest', NULL, NULL, 146, 16);
$northwest = 'Latest NW view Photo';
$northwestID = file_get_contents('http://new-stadium.tottenhamhotspur.com/wp-content/plugins/live-feed/callback/timelapse.php?camera=558&image=latest', NULL, NULL, 7, 8);
$northwestDate = file_get_contents('http://new-stadium.tottenhamhotspur.com/wp-content/plugins/live-feed/callback/timelapse.php?camera=558&image=latest', NULL, NULL, 146, 16);
echo '<body>';
echo '<p><a href="http://new-stadium.tottenhamhotspur.com/wp-content/plugins/live-feed/callback/image.php?camera=596&image='. $core6ID. '">'. $core6. '</a>';
echo '<br>'. $core6Date. '</p>';
echo '<p><a href="http://new-stadium.tottenhamhotspur.com/wp-content/plugins/live-feed/callback/image.php?camera=597&image='. $warmingtonID. '">'. $warmington. '</a>';
echo '<br>'. $warmingtonDate. '</p>';
echo '<p><a href="http://new-stadium.tottenhamhotspur.com/wp-content/plugins/live-feed/callback/image.php?camera=558&image='. $northwestID. '">'. $northwest. '</a>';
echo '<br>'. $northwestDate. '</p>';
echo '</body>';
?>