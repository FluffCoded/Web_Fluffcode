<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="viewport" content="width=device-width, initial-scale=1.0">
    <title>okayge</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div id="kontener">
<span id="tytul"> Online group editor! !</span>
<div id='tekst'>
<form action="strona.php" method="POST" id="form">
<textarea name="text" spellcheck="false" id="txtar"><?php
 if(isset($_POST['text'])){

    $plikw = fopen("tekst.txt", "w");
    $tekstw = $_POST['text'];
    fwrite($plikw, $tekstw);
    fclose($plikw);

    $check = filesize("tekst.txt");
    if($check>0){
    $plikr = fopen("tekst.txt", "r");
    $tekstr = fread($plikr, filesize("tekst.txt"));
    echo $tekstr;
    fclose($plikr);
    }
}
else{
    $pliks = fopen("tekst.txt", "r");
    $teksts = fread($pliks, filesize("tekst.txt"));
    echo $teksts;
    fclose($pliks);
}
?></textarea>
</form>
</div>
</div>
<script src="skrypt.js">
</script>
</body>

</html>