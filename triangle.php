<?php

function triangle($value)
{
    if ($value >= 1) {
        $counter = 1;
        $result = "";
        while ($counter <= $value) {
            for ($i = 1; $i <= $counter; $i++) {
                $result .= 0;
            }
            $result .= "<br>";
            $counter++;
        }
    } else {
        $result = "Please enter a number of 1 or greater.";
    }
    return $result;
}

echo triangle(15);

for($i = 0; $i == 15; $i++){ for($a = 0;$a &lt;= $i ; $a++ )echo "*"; }