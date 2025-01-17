<?php

print_r($_SERVER['REQUEST_URI']);

print_r($_SERVER['REQUEST_METHOD']);

foreach ($_SERVER as $key => $value) {
    echo "$key: ";
    print_r($value);
    echo "<br>";

}

