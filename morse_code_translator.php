<?php
/**
 * A library for converting Morse Code to Latin and vice-versa
 * Morse Code reference: https://www.itu.int/rec/R-REC-M.1677-1-200910-I/en
 *
 * @author Jeremy Race (https://github.com/race/morse-code-translator)
 * @created 2016-05-02
 */
class MorseCodeTranslator {
  private static $library = array(
    '.-'    => 'A',
    '-...'  => 'B',
    '-.-.'  => 'C',
    '-..'   => 'D',
    '.'     => 'E',
    '..-.'  => 'F',
    '--.'   => 'G',
    '....'  => 'H',
    '..'    => 'I',
    '.---'  => 'J',
    '-.-'   => 'K',
    '.-..'  => 'L',
    '--'    => 'M',
    '-.'    => 'N',
    '---'   => 'O',
    '.--.'  => 'P',
    '--.-'  => 'Q',
    '.-.'   => 'R',
    '...'   => 'S',
    '-'     => 'T',
    '..-'   => 'U',
    '...-'  => 'V',
    '.--'   => 'W',
    '-..-'  => 'X',
    '-.--'  => 'Y',
    '--..'  => 'Z',
    '.----' => '1',
    '..---' => '2',
    '...--' => '3',
    '....-' => '4',
    '.....' => '5',
    '-....' => '6',
    '--...' => '7',
    '---..' => '8',
    '----.' => '9',
    '-----' => '0',
  );

  /**
   * Constructor
   */
  public function MorseCodeTranslator() {}

  /**
   * Converts a string in Morse Code to latin characters
   *
   * @param string $morseString The morse string to convert
   * @return string $latinString The latin string
   */
  public function morseToLatin($morseString) {
    $chars = explode(' ', $morseString);

    $latinString = '';
    foreach ($chars as $char) {
      if (isset(static::$library[$char])) {
        $latinString .= static::$library[$char];
      }
    }
    return $latinString;
  }

  /**
   * Converts a string in latin characters to Morse Code
   *
   * @param string $latinString The latin string to convert
   * @return string $morseString The string encoded in morse code
   */
  public function latinToMorse($latinString) {
    $chars = str_split(strtoupper($latinString));
    $latinToMorseLib = array_flip(static::$library);

    $morseString = '';
    foreach ($chars as $char) {
      if (isset($latinToMorseLib[$char])) {
        $morseString .= $latinToMorseLib[$char];
      }
      $morseString .= ' ';
    }

    return $morseString;
  }
}
