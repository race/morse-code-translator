<?php
#!/usr/bin/php

if (empty($argv[1]) || $argv[1] == '--help') {
  die("Usage: php {$argv[0]} [--help|--morse|--latin default] \"Text to translate\"\n");
}
$opts = getopt('l,m', array('latin', 'morse'));
if (empty($opts)) {
  $message = $argv[1];
} else {
  $opts['l'] = true;
  $message = $argv[2];
}

require('morse_code_translator.php');
$MorseCodeTranslator = new MorseCodeTranslator();

if (isset($opts['m']) || isset($opts['morse'])) {
  echo $MorseCodeTranslator->morseToLatin($message),"\n";
} else {
  echo $MorseCodeTranslator->latinToMorse($message),"\n";
}
