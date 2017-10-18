<?php

include 'ApiHit.php';
$url = "https://magenticians.com/";
$result = new ApiHit();
$replydesktop = $result->testpage($url);
$replymobile = $result->testpagemobile($url);

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