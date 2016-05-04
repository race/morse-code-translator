Website: https://github.com/race/morse-code-translator

A simple PHP library for translating morse code into latin characters and vice-versa

Example usage:

```
<?php
require('morse_code_translator.php');
$MorseCodeTranslator = new MorseCodeTranslator();

// convert latin string to morse
// - .... .. ...  .. ...  .-  - . ... - 
echo $MorseCodeTranslator->latinToMorse("This is a test"),"\n";

// convert morse string to latin
// THISISATEST
echo $MorseCodeTranslator->morseToLatin("- .... .. ...  .. ...  .-  - . ... -"),"\n";
?>
```


Included in the repo is an example script (example.php) which you can execute to test the library, encoding messages.


```
$ php example.php "help me"
.... . .-.. .--.  -- .

$ php example.php --latin "sos"
... --- ...

$ php example.php --morse ".... . .-.. .--.  -- ."
HELPME
```
