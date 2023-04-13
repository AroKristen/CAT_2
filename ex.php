<?php

function encrypt($text, $s)
{
    $result = "";
    for ($i = 0; $i < strlen($text); $i++)
    {
            if (ctype_upper($text[$i]))
              $result = $result.chr((ord($text[$i]) +
                            $s - 65) % 26 + 65);
            else
              $result = $result.chr((ord($text[$i]) +
                        $s - 97) % 26 + 97);
    }

    return $result;
}

$text = "Attack";
$s = 4;
echo "Text : " . $text;
echo "\nShiftCount: " . $s;
echo "\nCaeserCipher: " . encrypt($text, $s);

?>