<?php 

# Convert the string to all lowercase.
function lowerCase($text)
{
   return strtolower($text);
}

# Replace "brown" with "red" in the string.
function replace($text)
{
    return str_replace("brown","red",$text);
}

$text =  "The quick brown fox jumps over the lazy dog.";

echo lowerCase($text);
echo "<br/>";
echo replace($text);