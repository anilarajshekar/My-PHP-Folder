<?php

$str = "This is a String and not an Array";
$arr = array(1, 3, 5, 7, 9, 11, 13);

foreach($arr as $num) {
    if($num == 9)
    {
        continue;
        
    }
    echo $num . "<br />";
}
echo "<br />";
echo "The value is $num when double quotes are entered in echo statement. <br />";
echo "<br />";
echo 'The value is mentioned as $num if represented in single quotes.';

if (is_array($str))
{
    echo "This is an array";
}
else   {
    echo "<br />";
    echo "<br />";
        echo 'Hey!! $str is a string, not an array!!' ;
    
}

?>
