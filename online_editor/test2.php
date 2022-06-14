<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['login'])){
        $login = $_POST['login'];
        $plikzpozycja = fopen("users/$login", "r");
        $pozycja = fread($plikzpozycja, filesize("users/$login"));
        echo $pozycja;
        fclose($plikzpozycja);
    }
    ?>

</body>
</html>