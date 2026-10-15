<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $libri = fopen("libri.txt", "r") or die("Error non si puo aprire il file");
        echo fread($libri, filesize("libri.txt"));
        fclose($libri);
    ?>
</body>
</html>