<?php


$str = "The quick brown fox jumped over the lazy dog";

function longestWord($str) {
  
     $str = preg_replace("/[^\w\s]/", "", $str); // optional 
  
    $words = explode(" ", $str);
   
    $longestWord = "";
  
    // foreach loop
    foreach($words as $word) {
      if(strlen($word) > strlen($longestWord)) {
        $longestWord = $word;
      }
    }
  
    // Return the longest word
    return $longestWord;
  }
  echo longestWord($str);