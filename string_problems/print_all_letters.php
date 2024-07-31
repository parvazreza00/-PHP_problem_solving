<?php

for($x = ord('a'); $x<= ord('z'); $x++){
    echo chr($x).nl2br("\n");
}

echo nl2br("\n");

for($x = ord('A'); $x<= ord('Z'); $x++){
    echo chr($x).nl2br("\n");
}

echo nl2br("\n");

for($x=ord("a"); $x<=ord("z"); $x++){
    echo $x.nl2br("\n");
}

echo nl2br("\n");

for($x=ord("A"); $x<=ord("Z"); $x++){
    echo $x.nl2br("\n");
}

