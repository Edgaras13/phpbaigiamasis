<?php

$mano_pinigai = 1000;
$spent_per_month = 600;
$earned_per_month = 800;
$unknown_per_month = rand(50, 200);
$months = 24;

$wallet_forecast = $months * $earned_per_month - $months * ($spent_per_month + $unknown_per_month) + $mano_pinigai;

print "Po " . $months . " menesiu(" . date('Y/m/d', strtotime('+' . $months . ' months')). ")" . ",tiketina turesiu " . $wallet_forecast . " pinigu";