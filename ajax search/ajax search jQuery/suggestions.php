<?php
$names = array('Omar', 'Obada', 'Ola', 'Ahmad', 'Ali', 'Eisa');

if (isset($_POST['suggestion'])) {
    $sugg = strtolower($_POST['suggestion']);
    foreach ($names as $name) {
        if (strpos(strtolower($name), $sugg) !== false) {
            echo $name . "<br>";
        }
    }
}
