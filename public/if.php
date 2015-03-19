<?php

echo 'hello world ';

 $a = 5;
 $b = 10;
 $c = '10';

 if ($a < $b) {
     // output the appropriate result
     echo "$a is _<_ $b\n";
 }

 if ($b > $a) {
     // output the appropriate result
     echo "$b is _>_ $a\n";
 }

 if ($b >= $c) {
     // output the appropriate result
     echo "$b is _!>=_ $c\n";
 }

 if ($b <= $c) {
     // output the appropriate result
     echo "$b is _!<=_ $c\n";
 }

 if ($b == $c) {
     // output the appropriate result
     echo "$b is _==_ $c\n";
 }

 if ($b === $c) {
     // output the appropriate result
     echo "$b is _!==_ $c\n";
 }

 // output the appropriate result
 if ($b != $c) {
     echo "$b is not equal to $c\n";
 }

 // output the appropriate result
 if ($b !== $c) {
     echo "$b is not identical to $c\n";
 }




?>