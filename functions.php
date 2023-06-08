<?php
$passwordLength = $_GET['len'] ?? false;
$let = isset($_GET['let']) ? true : false;
$num = isset($_GET['num']) ? true : false;
$sym = isset($_GET['sym']) ? true : false;
$rep = $_GET['rep'] ?? 'y'; // value y for yes and n for no
if ($passwordLength && ($let || $num || $sym)) {
    $allChar = '';
    if ($let) {
        $allChar .= $letters;
    }
    if ($num) {
        $allChar .= $numbers;
    }
    if ($sym) {
        $allChar .= $symbols;
    }
    $randomPw = '';
    if ($rep == 'y') {
        for ($i = 0; $i < $passwordLength; $i++) {
            $randomPw .= $allChar[rand(0, strlen($allChar) - 1)];
        }
    } else {
        for ($i = 0; $i < $passwordLength; $i++) {
            if (strlen($allChar) != 0) {
                $randomChar = $allChar[rand(0, strlen($allChar) - 1)];
                $allChar = splice(strpos($allChar, $randomChar), $allChar);
                // $allChar = chop($allChar, $randomChar);
                $randomPw .= $randomChar;
            } else {
                break;
            }
        }
    }

    echo 'Password: ' . $randomPw;
}
function splice($point, $string)
{
    return substr($string, 0, $point) . substr($string, $point + 1, strlen($string));
}
