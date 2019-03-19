<?php
$authors=array(
    "ch Di",
    "Ja Au",
    "Wi Sh"
);
$authorsAss=array(
    "Quack"=>"ch Di",
    "bri"=>"Ja Au",
    "poetic"=>"Wi Sh"
);
unset($authorsAss['poetic']);
unset($authors[0],$authors[2]);
unset($authors);
print_r($authorsAss);
print_r($authors);

?>