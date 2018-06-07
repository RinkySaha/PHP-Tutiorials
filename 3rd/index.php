<?php

printing();

function printing()
{
	echo "hello world <br>";
}

printing();

function getresult()
{
	$a = 4;
	$b = 5;
	echo  $a+$b;
	echo "<br>";
	return $a+$b;
}

getresult();
echo "<br>";

echo getresult(); 
echo "<br>"; 
// these are not best way


$res = getresult();

echo $res*2 . "<br>";


echo "function with argument <br> <br>";



$globalvariable = 15;



function getresultnew($number1, $number2)
{
	global $globalvariable;
	return $number1+$number2+$globalvariable;
}

function getresultnewww($number1, $number2)
{
	global $globalvariable;
	return $number1+$number2+$globalvariable;
}

$neres = getresultnew(1,2);


echo  $neres . "<br>";


$fun_calling = "getresultnewww";

$fun = $fun_calling(3, 2); //dynamic function calling

echo $fun ;