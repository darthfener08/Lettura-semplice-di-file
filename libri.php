<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $myfile = fopen("libri.txt", "r") or die("Error non si puo aprire il file");
        echo fread($myfile, filesize("libri.txt"));
        fclose($myfile);
    ?>
</body>
</html>