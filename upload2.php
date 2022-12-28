

<?php
    echo <<<_END
<html><head><title>PHP-форма для загрузки файлов на сервер</title></head><body>
<form action="upload2.php" method="post" enctype="multipart/form-data">
Выберите файл с расширением JPG, GIF, PNG или TIF: <input type="file" name="filename" size="10">
<input type="submit" value="Загрузить">
</form>
_END;

    if($_FILES){
        $name = $_FILES['filename']['name'];
        $name = strtolower(preg_replace("[^A-Za-z0-9.]/", "", $name));
        switch ($_FILES['filename']['type']){
            case 'image/jpeg': $ext = 'jpg'; break;
            case 'image/gif': $ext = 'gif'; break;
            case 'image/png': $ext = 'png'; break;
            case 'image/tiff': $ext = 'tiff'; break;
            default: $ext = ''; break;
        }
        if($ext){
            $n = "image.$ext";
            move_uploaded_file($_FILES['filename']['tmp_name'], $n);
            echo "Загружаемое изображение '$name' под именем '$n': <br>";
            echo "<img src='$n'";
        }
        else echo "'$name' - неприемлемый файл изображения";
    }
    else echo "Загрузки изображения не произошло";

echo "</body></html>";



