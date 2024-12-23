<?php

$dir = ".";

if (is_dir($dir)) {
    if ($open = opendir($dir)) {
        while ($file = readdir($open)) {
            echo "Filename : " . $file . "<br>";
        }
        closedir($open);
    }
}

?>