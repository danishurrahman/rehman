<?php
$authors=array("Abc","Def","ghi","klm");
print count($authors);
$authors=array("Abc"=>array("a christmas carol","oliver"),"ghi"=>array("romio"),"klm"=>array("Adventure"),

"Female"=>array(
    "lots"=>array("annie")
));
print count ($authors,COUNT_RECURSIVE);
?>