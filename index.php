<?php

//Index.php, this is the main file of this application

require_once 'functions.php';

$a = myAdd(3, 2);
echo $a;
echo '<br />';

$b = mySub(3, 2);
echo $b;
echo '<br />';

$c = myMul(3, 2);
echo $c;
echo '<br />';

$d = myDiv(3, 2);
echo $d;
echo '<br />';
?>