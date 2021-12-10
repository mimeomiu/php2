<?php

function say_hello() {
    echo "Hello World"."\n";
}
say_hello();
?>

<?php

function say_hello2() {
    echo "Hello World"."\n";
}
say_hello();
say_hello();
say_hello();
?>

<?php

$say_hello = function() {
    echo "Goodmorning"."\n";
};

$say_hello();
?>

<?php

function say_hello3($greeting) {
    echo $greeting."\n";
}; 

say_hello("Good Morning");
?>

<?php

function say_hello4($greeting) {
    echo $greeting."\n";
}; 

say_hello("Good Morning");
say_hello("Good afternoon");
say_hello("Good evening");
?>

<?php

function cal($x) {
    echo ($x * 3)."\n";
};

cal(6);
?>

<?php

function cal2($x, $y) {
    echo ($x / $y)."\n";
};

cal(6,3);
?>


