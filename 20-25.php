<?php

$arr1=[1 => "a",2 => "b"];

$arr2=[3 => "c", 4 => "d"];


echo"<pre>";


print_r($arr1+$arr2);
//unit tow arry
echo "<pre>";
$arr4=[1 =>"20" ,2 => "30"];

$arr5=[2=>30 ,1=>20];

var_dump($arr4==$arr5);
// equal to
"<br>";
var_dump($arr4!=$arr5);
// not equal to
"<br>";
var_dump($arr4<>$arr5);
// not equal to
"<br>";


if ( 5< 5){


    echo "first true";

}
elseif (5 < 5) {
    echo " second true";
}
else{

    echo "last false";
}