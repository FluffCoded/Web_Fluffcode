<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editor.css">
    <title>Online Editor</title>
</head>
<body>
<form action="editor.php" method="POST" id="read">
<input type="number" name="read" id="inputr">
</form>
<div id="kontener">
<span id="tytul"> Online Editor</span>
<span id="info">if site flashes its your connection fault!</span>
<div id='tekst'>
<form action="editor.php" method="POST" id="forma">
<textarea name="text" spellcheck="false" id="txtar"><?php
if(isset($_POST['login'])){
    $puser = fopen("/users/1txt", "r");
    $user = fread($puser, filesize("/users/1txt"));
    echo $user;
    fclose($puser);
}
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
<script src="skrypt.js">
</script>
</body>
</html>