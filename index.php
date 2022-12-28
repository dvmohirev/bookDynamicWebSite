<?php
//pintf("<span style='color: #%X%X%X'>Hello </span>", 65, 127, 245);
//printf("Результат $%.2f", 123.42/12);
//echo date(DATE_W3C, time());
/*$month = 9;
$day = 30;
$year = 2022;

if(checkdate($month, $day, $year)){
    echo "Доп. дата";
} else {
    echo "Недопустимая дата";
}*/

/*if (file_exists("testfile.txt")){
    echo "Файл существует";
} else echo "Файла нет";

$fh = fopen("testfile.txt", 'w') or die("Создать файл не удалось");
$text = <<<_END
Строка 1
Строка 2
Строка 3
_END;

fwrite($fh, $text) or die("Сбой записи в файл");
fclose($fh);
echo "Файл 'testfile.txt' создан успешно";

//чтение файла
$fh = fopen("testfile.txt", 'r') or die("Файл не существует или у вас нет прав");

$line = fgets($fh);
//можно использовать fread, если нужно считать содержимое файла в виде двоичных данных
fclose($fh);
echo $line;

//копирование файлов
copy("testfile.txt", "testfilecopy.txt") or die("Копирование не удалось");
echo "Копирование успешно";*/

//обновление файла update.php
/*$fh = fopen("testfile.txt", 'r+') or die();
$text = fgets($fh);

fseek($fh, 0, SEEK_END);
fwrite($fh, $text) or die();
fclose($fh);*/

//чтение файла целиком
echo file_get_contents("https://www.oreilly.com/");
