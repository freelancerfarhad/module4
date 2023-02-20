<?php

/**
*1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
*/
function sortByLength($array) {
    usort($array, function($a, $b) {
      return strlen($a) - strlen($b);
    });
    return $array;
  }
  
  // Example usage
  $fruits = array("apple", "banana", "orange", "grapes");
  $sorted_fruits = sortByLength($fruits);
  print_r($sorted_fruits);



/** 
*2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
*/
function concatenateFromEnd($str1, $str2) {
  $len1 = strlen($str1);
  $len2 = strlen($str2);
  if ($len2 >= $len1) {
    return $str2 . $str1;
  } else {
    $end_of_str1 = substr($str1, $len1 - $len2);
    return $str2 . $end_of_str1;
  }
}

// Example usage
$str1 = "hello world";
$str2 = "bangla";
$result = concatenateFromEnd($str1, $str2);
echo $result;


/**
 * 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
*/
function removeFirstAndLast($arr) {
    array_shift($arr); 
    array_pop($arr); 
    return $arr; 
  }

  $myArray = array('apple', 'banana', 'cherry', 'date');
$newArray = removeFirstAndLast($myArray);
print_r($newArray);
 // Output: Array ( [1] => banana [2] => cherry )

/**
 * 4.Write a PHP function to check if a string contains only letters and whitespace.
*/
function containsOnlyLettersAndWhitespace($str) {
    return preg_match('/^[a-zA-Z\s]+$/', $str);
  }
$str1 = 'Hello world'; 
$str2 = 'Hello123 world'; 


if (containsOnlyLettersAndWhitespace($str1)) {
    echo 'String 1 contains only letters and whitespace.';
  } else if(containsOnlyLettersAndWhitespace($str2)) {
    echo 'String 2 contains only letters and whitespace.';
  } else {
    echo 'String 1 or 2 contains non-letter characters.';
  }


/**
 * 5.Write a PHP function to find the second largest number in an array of numbers.
*/
function findSecondLargest($arr) {
    $largest = $arr[0];
    $secondLargest = $arr[0];

    for ($i = 1; $i < count($arr); $i++) {
      if ($arr[$i] > $largest) {
        $secondLargest = $largest;
        $largest = $arr[$i];
      } else if ($arr[$i] > $secondLargest && $arr[$i] < $largest) {
        $secondLargest = $arr[$i];
      }
    }
    return $secondLargest;
  }

  $myArray = array(2, 5, 8, 10, 3);
$secondLargest = findSecondLargest($myArray);
echo 'The second largest number in the array is: ' . $secondLargest;



