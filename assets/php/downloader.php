<?php

$hit_count = @file_get_contents('count.txt');
$hit_count++;
@file_put_contents('count.txt', $hit_count);

header('https://github.com/Kopamed/Raven-bPLUS/raw/main/build/libs/%5B1.8.9%5D%20BetterKeystrokes%20V-1.1.0.jar'); // redirect to the real file to be downloaded