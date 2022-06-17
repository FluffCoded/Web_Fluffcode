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
<span id="tytul"> Fluff Editor</span>

<!-- Text area -->
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
<!-- END Text area END -->

</form>
</div>

<!-- odczytanie userow -->
<?php
if(!isset($_COOKIE["plik"])){
    echo "<script>
    document.getElementById('read').action='index.php';
    document.getElementById('read').submit();
    </script>
    ";
}
else{
$names = scandir("users");
for($i=2; $i<sizeof($names); $i++){
    if($names[$i]!=$_COOKIE["plik"]){//tylko dla innych
        $plikline=file("users/".$names[$i], FILE_IGNORE_NEW_LINES);
        if($plikline[1]<time()){
            unlink("users/".$names[$i]);
        }
        echo "others: <br>";
        echo $names[$i]." linia: ".$plikline[0]." date: ".$plikline[1];
    }
}
}
?>
<!-- END odczytanie userow -->

<!-- Zapis lini / daty pliku-->
<?php
$plikline= file("users/".$_COOKIE['plik'], FILE_IGNORE_NEW_LINES);
    $plikline[0]=$_COOKIE['linia'];
    $plikline[1]=time()+60;
    file_put_contents("users/".$_COOKIE['plik'] , implode( "\n", $plikline ) );
?>
<!-- END Zapis lini / daty pliku  END -->

</div>
<script src="editor.js">
</script>
</body>
</html>