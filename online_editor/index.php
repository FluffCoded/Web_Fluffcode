<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <div id="kontener2">
    <span id="tytul"> Online Editor</span>
    <span id="name">Your name :</span>

    <!-- Form do wpisania nazwy do ktorej doda sie .txt -->
    <form id="forma">
    <input name="login" id="nazwa">
    <p id="pcheck">Must be letters no spaces!!</p>
    </form>
    <button type="button" id="log">zapisz</button>
    </div>

    <!-- Form do stworzenia pliku w tym php -->
   <form method="POST" action="test.php" style="visibility:hidden" id="create">
    <input name="plik" id="plik">
   </form>

    <!-- Form do przejscia do edytora -->
   <form method="POST" action="editor.php" style="visibility:hidden" id="next">
    <input name="login" id="nextp">
   </form>



   <?php
   if(isset($_POST['plik'])){
   $nazwa = $_POST['plik'];
   $plik = fopen("users/$nazwa", "w");
   fwrite($plik, "0");
}
    ?>
    <script src="index.js"></script>
</body>
</html>