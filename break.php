<?php

$number = 2;

while ($number <= 12)
{
    echo "The number is : " . $number . "<br />";
    $number = $number + 2;

    if ($number > 8)
    {
        echo "The number is greater than eight and loop ends here";
        break;
    }

}
