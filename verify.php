<?php
$access_token = +Z9LkiZT8lXXpTpS814akaFE
+qdASOTbJq0DMxzLWM1Ki7SvvQRmioNVHogdyLfHj
3yfRjUOQ98QDlB8gbAEkUuyot9epPuQMIEAzYNHir
OgnUlLAJ6WXRJZdxaQRJKWonL5myR1VHpFjz99ytk
vhAdB04t89/1O/w1cDnyilFU=;

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
