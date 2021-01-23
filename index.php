<?php 
//Q1. 1. Write a function to calculate the factorial of a number (a non-negative integer).The function accepts the number as an argument.
function factNum($num) {
    $result = 1;
    if($num > 0) {
        for($i = $num; $i >= 1; $i--) {
            $result *= $i;
        }
    }else {
        echo "Invalid Number";
    }
    echo $num."! =".$result;
}
factNum(3);
echo "<hr>";
//------------------------------------------------------------------------------------------
//Q2. Write a function to check whether a number is prime or not.
function primeNum($num) {
    if($num > 1) {
        for($i = 2; $i < $num; $i++) {
            if($num % $i) {
                return false;
            }
        }
    }elseif($num <= 1) {
        echo "The number must be greater than 1 <br>";
        return false;
    }
    return true;
}
function checkNumber($n) {
    $result = primeNum($n);
    if($result == false) {
        echo "$n : Not a Prime Number";
    } else {
        echo "$n : a Prime Number";
    }
}
checkNumber(1);
echo "<hr>";
//------------------------------------------------------------------------------------------
// Q3. Write a function to reverse a string.
function reverseString($str) {
    $len = strlen($str);    
    for($i = ($len - 1), $j = 0; $i >= 0, $j < $i; $i--, $j++) {
        $tempStr = $str[$i];
        $str[$i] = $str[$j];
        $str[$j] = $tempStr;
    }
    return $str;
}
print_r(reverseString('Angham'));
echo "<hr>";
//------------------------------------------------------------------------------------------
// Q4. Write a function to sort an string array depending on the alphabetical order
$array = array('2','4','8','5','0', '-1' ,'1','7','16','9','10','3');
$alpha = array('m', 'h', 'g', 'a', 'n');
function sortArray($arr) {
    for($j = 0; $j < count($arr); $j ++) {
        for($i = 0; $i < count($arr)-1; $i ++){
            if($arr[$i] > $arr[$i+1]) {
                $temp = $arr[$i+1];
                $arr[$i+1]=$arr[$i];
                $arr[$i]=$temp;
            }       
        }
    }
    foreach($arr as $r => $r_value) {
        echo $r_value." \t ,";
    }
    echo "<br>";
}
sortArray($array);
sortArray($alpha);
echo "<hr>";
//------------------------------------------------------------------------------------------
//Q5. Write a PHP function that checks whether a string is all lowercase.
function isLower($str) {
    for ($i = 0; $i < strlen($str); $i++) {
        if (ord($str[$i]) >= ord('A') && ord($str[$i]) <= ord('Z')) {
            return false;
        }
    }
    return true;
}
var_dump(isLower('AnGHam'));
var_dump(isLower('angham'));
var_dump(isLower('ANGHAM'));
echo "<hr>";
//------------------------------------------------------------------------------------------
//Q6. Write a PHP function that checks whether a passed string is a palindrome or not?
function isPalindrome($str) {
    if ($str == strrev($str)) {
        return true;
    } else {
        return false;
    }
}
echo var_dump(isPalindrome('madam'));
echo "<hr>";
//------------------------------------------------------------------------------------------
// Q7-Write a PHP program to find three numbers from an array such that the sum of three consecutive numbers equal to a given number.
// Input : (array(2, 7, 7, 1, 8, 2, 7, 8, 7), 16))
function getSum($arr, $num) {
$len = count($arr) - 2;
$result=[];
for ($i = 0; $i < $len; $i++) {
    if ($arr[$i] + $arr[$i+1] + $arr[$i+2] == $num) {
        array_push($result, "{$arr[$i]} + {$arr[$i+1]} + {$arr[$i+2]} = $num");
    }
}
return $result;
}
$my_array = array(2, 7, 7, 1, 8, 2, 7, 8, 7);
print_r(getSum($my_array, 16));

?>