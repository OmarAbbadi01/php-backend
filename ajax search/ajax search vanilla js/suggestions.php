<?php

$names = array('Omar', 'Ahmad', 'Emad', 'Alaa', 'Obai', 'Yasmeen', 'Obada', 'Ali');

if (isset($_POST['input'])) {
    $input = strtolower($_POST['input']);
    if (empty($input)) {
        echo "";
    } else {
        foreach ($names as $name) {
            if (strpos(strtolower($name), $input) !== false) {
                echo $name . "<br>";
            }
        }
    }
} else {
    echo "BAD";
}
