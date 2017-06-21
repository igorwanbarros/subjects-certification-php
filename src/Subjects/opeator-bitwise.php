<?php

/*
 |===========================================
 | Bitwise AND (&)
 |===========================================
 */
echo '<h2>', 'Bitwise AND (&)', '</h2>';
$number = rand(1, 100);
$factor = 1;
echo formatDecBin($number, $factor, $result = $number & $factor);
echo $number, ' is ', $result ? 'odd' : 'even', '<br/>';


/*
 |===========================================
 | Bitwise OR (|)
 |===========================================
 */
echo '<h2>', 'Bitwise OR (|)', '</h2>';
$number = rand(1, 100);
$other  = rand(1, 100);
echo formatDecBin($number, $other, $result = $number | $other);
echo $number, ' or ', $other, ' is equals the ', $result, '<br/>';


/*
 |===========================================
 | Bitwise XOR (^)
 |===========================================
 */
echo '<h2>', 'Bitwise XOR (^)', '</h2>';
$number = rand(1, 100);
$other  = rand(1, 100);
echo formatDecBin($number, $other, $result = $number ^ $other);
echo $number, ' xor ', $other, ' is equals the ', $result, '<br/>';


/*
 |===========================================
 | Bitwise NOT (~)
 |===========================================
 */
echo '<h2>', 'Bitwise NOT (~)', '</h2>';
$number = rand(1, 100);
echo formatDecBin($number, $result = ~$number);
echo '~ ', $number, ' is equals the ', $result, '<br/>';


/*
 |===========================================
 | Bitwise SHIFT - RIGHT (>>)
 |===========================================
 */
echo '<h2>', 'Bitwise SHIFT - RIGHT (>>)', '</h2>';
$number = rand(1, 100);
$other  = rand(2, 5);
echo formatDecBin($number, $other, $result = $number >> $other);
echo $number, ' >> ', $other, ' is equals the ', $result, '<br/>';


/*
 |===========================================
 | Bitwise SHIFT - LEFT (<<)
 |===========================================
 */
echo '<h2>', 'Bitwise SHIFT - LEFT (<<)', '</h2>';
$number = rand(1, 100);
$other  = rand(2, 5);
echo formatDecBin($number, $other, $result = $number << $other);
echo $number, ' << ', $other, ' is equals the ', $result, '<br/>';


/*
 |===========================================
 | Bitwise Example
 |===========================================
 */
$color = rand(999999, 3769267);
$und = 255;
$r = ($color >> 16) & $und;
$g = ($color >> 8) & $und;
$b = $color & $und;
$hexa = dechex($color);
echo formatDecBin($color, $r, $g, $b);
echo 'color <span style="color:#', $hexa, '">#', $hexa, '</span>', " [$color]", '<br/>',
     ' Red: ', $r, '<br/>',
     ' Green: ', $g, '<br/>',
     ' Blue: ', $b, '<br/>';
