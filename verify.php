<?php
$access_token = 'BwsfXPfrVFj00nNqPB8iCnfOeQO7ZpvrB2R1cYgTZbM0X7gB0lRY0xqLiEIW/vvWTvU3/q+35+pFMV+4+1VXKusYWR/++c116fWiX6DvcaheCmTL61kkt8QJzDGHSLa0OINB/hiEdz1aO3Q5atPZvQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
