<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editor.css">
    <title>Online Editor</title>
</head>
<body>
<?php
    if(isset($_POST['login'])){
        $login = $_POST['login'];
        $plikzpozycja = fopen("users/$login", "r");
        $pozycja = fread($plikzpozycja, filesize("users/$login"));
        //ciag dalszy
        fclose($plikzpozycja);
    }
    ?>
<form action="editor.php" method="POST" id="read">
<input type="number" name="read" id="inputr">
</form>
<div id="kontener">
<span id="tytul"> Online Editor</span>
<span id="info">if site flashes its your connection fault!</span>
<!-- odczytanie userow -->
<?php
$names = scandir("users");
for($i=2; $i<sizeof($names); $i++){
    if($names[$i]!=$_COOKIE["plik"]){
        echo $names[$i];
    }
}

?>
<div id='tekst'>
<form action="editor.php" method="POST" id="forma">
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
}
?></textarea>
</form>
</div>
</div>
<script src="editor.js">
</script>
</body>
</html>