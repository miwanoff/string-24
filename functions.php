<?php

// $array = ["ім'я", "пошта", "телефон"];
// $comma_separated = join(", ", $array);
// echo $comma_separated; // им'я, пошта, телефон

// $str = "The quick brown fox jumps over the lazy fox.";
// $pos = stripos ( $str, "Fox");
// if ($pos !== false)
//   echo "$pos "; //  16
// else
//   echo "No result";

// $email = 'name@example.com' ;
// $domain = strstr ( $email , '@' , true);
// echo $domain ; // выводит @example.com

// $str = "the quick brown fox jumps over the lazy fox.";
// echo substr_count( $str, "the"); // 2

// $hello = "Привіт!";
// $str = "The quick brown fox jumps over the lazy fox.";
// echo mb_substr($hello, 2, 3); // bcd
// echo $str [0]; 


// $text = "Мене звати Вася.\n";
// echo nl2br($text); // Буде виведено "Мене звати Вася.<br />"

// $st =" 
// <strong>Жирний текст</strong> 
// <em>Курсивний Teкст</em> 
// <а href='http://www.php-lab.ua'>Посилання</а> 
// a<x && y>d ";
// echo "Початковий текст $st"; 
// echo "Після видалення тегів: ",strip_tags($st);

$text = "The quick brown fox jumped over the lazy dog.";
$newtext = wordwrap($text, 20, "<br />\n");
echo $newtext;

// > kjlkjlkjlj
// > lkjlkjlkjk

$str = '$s = "Hello"; "print((($a + ($b))))";';