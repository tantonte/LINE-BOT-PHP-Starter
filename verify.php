<?php
$access_token = 'L8nFxTK7lmSEN9FJ4cG5VI2G9gfapw6MN6FmJu+d/R9Q0SPdjzidxB1C0klDMOM8Zga5gf57f4nXfeSGna+pTp8H+Qhqv5Nqk2lroOFdjKZKEtZ48apaKUuSUdudh+0xSSm7lWJjP/qG56aWFIqiFgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
