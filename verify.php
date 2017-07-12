<?php
$access_token = 'GaeSEFzPVV32sZ/uvc1GSVg7Y9Jgi3ZlU0Rp12+WMVIhfttXsLe2ytzoFNKRs38Zt1B0/e4ARRRW9Bnj7c7E12OrZFF8bNFJriMO5uIlji0jPMli/SRXHwf4r4XuVELCDEX+feA5qoAsH8KES0TKCgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
