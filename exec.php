<?php
//Системные вызовы
$cmd = "dir";
//$cmd = "ls";

exec(escapeshellcmd($cmd), $output, $status);
if($status) echo "Команда exec не выполнена";
else {
    echo "<pre>";
    foreach ($output as $line) echo htmlspecialchars("$line\n");
    echo "</pre>";
}
