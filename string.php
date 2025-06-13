<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach($strings as $string){
    $vowelcount = 0;
    
    for ($i=0; $i < strlen($string) ; $i++) { 
       $word = $string[$i];//"hello"
        if ($word == "a" ||$word == "e" ||$word == "i" ||$word == "o" ||$word == "u" ) {
           $vowelcount++;
        }
    }
    


$reversed = strrev($string);

    echo "Original String:.$string, Vowel Count: $vowelcount, Reversed String:". $reversed."<br>";
}


?>
