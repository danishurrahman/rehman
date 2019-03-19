<?php
$a=array("quack"=>"Charles di",
"bri"=>"jane austine",
"dead"=>"william shakesphere"
);
foreach($a as $value)
{
    print $value."\n";

}
foreach($a as $key =>$value)
{
    print $value."(".$key.")\n";

}
?>