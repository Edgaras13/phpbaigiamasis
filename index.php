<?php

$liepa_days = 31;
$rugpjutis_days = 30;
$rugsejis_days = 30;
$spalis_days = date('d');

$x = $liepa_days + $rugpjutis_days + $rugsejis_days + $spalis_days;

print "Nuo Liepos pradzios iki siandien praejo " . $x . " dienu.";