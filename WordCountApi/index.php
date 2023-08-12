<?php
header('Content-Type: application/json');


//this function will count the words in a sentence.
function counter($input)
{
    $wordCount = [];
    //lower casing the whole inpur
    $lower = strtolower($input);
    // now the words in a sentence should be split.
    //str_word_count splits the sentences into 1 word. if 2nd parameter given 2
    //the function would have cut sentence by 2 words.
    $words = str_word_count($lower,1);

    //now in words we need to check for words that are reoccuring.
    //so i am going to declare an array. this array will be associative
    //with the help of the array i can count how many times the words are reoccuring.

    foreach($words as $word)
    {
        if (isset($wordCount[$word])) {
            $wordCount[$word]++;
        } 
        else 
        {
            $wordCount[$word] = 1;
        }
    }

    return $wordCount;
}
//the api is complete. we will need api handler.
?>