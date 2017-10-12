<?php


function datatypes ($watis){
 return'de waarde is ' .  gettype($watis);
}

echo datatypes('tekst'), PHP_EOL;
echo datatypes(true), PHP_EOL;
echo datatypes( -5.250), PHP_EOL;
echo datatypes(4), PHP_EOL;
echo datatypes($a = ['één', 'twee', 'drie']);
