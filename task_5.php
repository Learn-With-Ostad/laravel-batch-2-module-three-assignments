<?php  

# generate password
function generatePassword(int $length) : string
{
    $az = range("a","z");
    $AZ = range("A","Z");
    $num = range(0,9);
    $sp = ['@', '!', '-', '_', '^', '#', '(', ')', '$', '%', '&'];
    $password = array_merge($sp,$az,$AZ,$num);
    return substr(str_shuffle(implode("",$password)),0, $length);
}
// call  generatePassword and echo
echo generatePassword(12);