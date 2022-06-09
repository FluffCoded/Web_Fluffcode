<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="viewport" content="width=device-width, initial-scale=1.0">
    <title>okayge</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<form action="strona.php" method="POST" id="read">
<input type="number" name="read" id="inputr">
</form>
<div id="kontener">
<span id="tytul"> Online group editor! !</span>
<div id='tekst'>
<form action="strona.php" method="POST" id="forma">
<textarea name="text" spellcheck="false" id="txtar"><?php
function read(){
    if(filesize("tekst.txt")>0){
        $plikr = fopen("tekst.txt", "r");
        $tekstr = fread($plikr, filesize("tekst.txt"));
        clearstatcache();
        echo $tekstr;
        fclose($plikr);
    }
    else{
        echo " ";
    }
}
 if(isset($_POST['read'])){
    read();
 }
 else{
    if(isset($_POST['text'])){
        $plikw = fopen("tekst.txt", "w");
        $tekstw = $_POST['text'];
        fwrite($plikw, $tekstw);
        fclose($plikw);

        read();
    }
    else{
        read();
    }
}
?></textarea>
</form>
</div>
</div>
<script src="skrypt.js">
</script>
</body>

</html>