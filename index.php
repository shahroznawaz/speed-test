<?php

include 'ApiHit.php';
$url = "https://www.wpblog.com/";
$result = new ApiHit();
$replydesktop = $result->testpage($url);
$replymobile = $result->testpagemobile($url);
$replywebpagetest = $result->webpagetest($url);

echo "<pre>";
print_r($replywebpagetest);
echo "</pre>";

print_r($replywebpagetest->data->summaryCSV);

$str = $replywebpagetest->data->summaryCSV;

sleep(30);

$csv = array_map('str_getcsv', file($str));

echo "<pre>";
print_r($csv);
echo "</pre>";

echo "<h3>Desktop: ".$replydesktop->ruleGroups->SPEED->score."</h3>";
echo "<h3>Mobile: ".$replymobile->ruleGroups->SPEED->score."</h3>";

echo "<pre>";
print_r($replydesktop);
echo "</pre>";

echo "<h1>.::.Mobile Data.::.</h1>";

echo "<pre>";
print_r($replymobile);
echo "</pre>";
?>