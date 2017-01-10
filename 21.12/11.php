<?php 
function rus_translit($string) {
    $converter = [
      'а' => 'a',   'б' => 'b',   'в' => 'v',
      'г' => 'g',   'д' => 'd',   'е' => 'e',
      'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
      'и' => 'i',   'й' => 'y',   'к' => 'k',
      'л' => 'l',   'м' => 'm',   'н' => 'n',
      'о' => 'o',   'п' => 'p',   'р' => 'r',
      'с' => 's',   'т' => 't',   'у' => 'u',
      'ф' => 'f',   'х' => 'h',   'ц' => 'c',
      'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
      'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
      'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
      
  ];
  return strtr($string, $converter);
}

function en_translit($string) {
    $converter = [
      'a' => 'а', 'b' => 'б', 'c' => 'ц',
      'd' => 'д', 'e' => 'э', 'f' => 'ф',
      'g' => 'г', 'h' => 'х', 'i' => 'и',
      'j' => 'дж', 'k' => 'к', 'l' => 'л',
      'm' => 'м', 'n' => 'н', 'o' => 'о',
      'p' => 'п', 'q' => 'к', 'r' => 'р',
      's' => 'с', 't' => 'т', 'u' => 'ю',
      'v' => 'в', 'w' => 'в', 'x' => 'кс',
      'y' => 'и', 'z' => 'з'
  ];

  return strtr($string, $converter);
}

$string = "привет всем да будет вам счастье";
$string2 = "hello everyone";

echo rus_translit($string);
echo "<br>";
echo en_translit($string2);