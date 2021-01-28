<?php

$originalFiles=[
    "index.ssghtml.php","about.ssghtml.php"
];

foreach ($orginalFiles as $originalFile) {
    $command = "c:\\xampp\\php\\php.exe {$originFile}";
    shell_exec($command);
    exit;
    # code...
}