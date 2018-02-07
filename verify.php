<?php
$access_token = 'hVEBUebqSLm68KB20yiVuEhX2hhG5GGAhUtAoX2SsvolMlUTb27XmsVG0bz8h8niNLl7CK7Xtey2L+RhR2KR+xtwYksI3ZFk/aDJg5nYh+bNnzAblRtvPhF/DR3mrNCBYPahmFYnpJH3YHJCsZGP8QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>