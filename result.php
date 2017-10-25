<?php

include 'ApiHit.php';

if(isset($_POST["submit"])){

$url = $_POST["url"];
$email = $_POST["email"];

$result = new ApiHit();
$replywebpagetest = $result->webpagetest($url);
$replydesktop = $result->testpage($url);
$replymobile = $result->testpagemobile($url);

echo "<h1>.::". $url ."::.</h1>";

echo "<h3>Desktop Score: ".$replydesktop->ruleGroups->SPEED->score."</h3>";
echo "<h3>Mobile Score: ".$replymobile->ruleGroups->SPEED->score."</h3>";

echo "<h2>.::. WebPageTest.ORG Data .::.</h2>";

echo "<pre>";
print_r($replywebpagetest);
echo "</pre>";

$str = $replywebpagetest->data->summaryCSV;

sleep(35);

$csv = array_map('str_getcsv', file($str));

echo "<h2>.::. WebPageTest.ORG CSV Data .::.</h2>";

echo "<pre>";
print_r($csv);
echo "</pre>";

echo "<h2>.::. Google PageSpeedTest Desktop Data .::.</h2>";

echo "<pre>";
print_r($replydesktop);
echo "</pre>";

echo "<h2>.::. Google PageSpeedTest Mobile Data .::.</h2>";

echo "<pre>";
print_r($replymobile);
echo "</pre>";
}
?>
