<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $myfile = fopen("libri.txt", "r") or die("Unable to open file!");

        $i = 0; 



        while($i <=0){

            echo fgets($myfile);
            echo "<br>";

        }
        
        fclose($myfile);
        ?>

    
</body>
</html>