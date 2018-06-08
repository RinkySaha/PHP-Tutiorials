<?php

$str = "I am in CSE";

$result = addcslashes($str, "iI");

echo $result . "<br>";


$str2 = "I'm in CSE";

$result2 = addslashes($str2);

echo $result2 . "<br>";

echo crypt($str2, 'ab');

echo "<br>";


$str3 = "I'm in CSE. I am 22 years old.";

$result4 = explode(" ", $str3);

print_r($result4) ;

echo "<br>";

$result5 = explode(".", $str3);

print_r($result5) ;

echo "<br>";

$result6 = implode($result5);
echo $result6;
echo "<br>";

$result7 = implode($result5, ".");
echo $result7;
echo "<br>";


echo md5($result7,true);
echo "<br>";
echo md5($result7,false);
echo "<br>";
echo md5($result7);
echo "<br>";


$res = "I'm in CSE. I am 22 years old.";
echo md5($res);
echo "<br>";

echo str_pad($res, 51, "bd");
echo "<br>";

echo str_repeat($res, 3);
echo "<br>";


echo str_replace("I","Rinky",$res  );
echo "<br>";


$out = str_split($res);
print_r($out) ;
echo "<br>";

echo strlen($res);
echo "<br>";

echo strtolower($res);
echo "<br>";

echo strpos($res, "I");
echo "<br>";



$str = crc32("Hello world.");
echo 'Without %u: '.$str."<br>";
echo 'With %u: ';
printf("%u",$str);











