<?php
$a=array("quac"=>"charles",11=>"red","poem"=>"William Shakespher","Mark");
print_r($a['quac']);
print_r($a[11]);
print_r($a['poem']);
print_r($a[12]);
$k=array_keys($a);
echo $a[$k[3]];
?>