<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Contador</title>
</head>
<body>
    <main>
        <?php
            $c = 10;
            do{
                echo "$c ";
                $c--;
            }while($c>=1);
        ?>
    </main>
</body>
</html>