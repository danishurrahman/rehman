<?php
define('CHECK_CONSTANT',"YES");
$YES=123;
$stringVar="i am ";
$boolVar=False;
$f=12.36;
print "all return true........\n\n";
echo is_bool($boolVar); echo "\n";
echo is_string($stringVar);echo "\n";

echo is_float($f);echo"\n";
echo defined('CHECK_CONSTANT'); echo "\n\n";
print "all return false........\n\n";
echo is_int($YES);
echo is_bool($boolVar); echo "\n";
echo is_string($stringVar);echo "\n";

echo is_float($f);echo"\n";
echo defined('NOT_CONSTANT'); echo "\n\n";
?>