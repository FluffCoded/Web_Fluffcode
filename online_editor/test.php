<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <!-- Form do wpisania nazwy do ktorej doda sie .txt -->
   <form method="POST" action="test2.php">
    <input name="login" id="nazwa">
    <button type="button" id="log">zapisz</button>
   </form>

<!-- Form do przejscia do edytora -->
   <form method="POST" action="test2.php" style="visibility:hidden" id="next">
    <input name="login" id="nextp">
   </form>

   <!-- Form do stworzenia pliku w tym php -->
   <form method="POST" action="test.php" style="visibility:hidden" id="create">
    <input name="plik" id="plik">
   </form>

   <?php
   if(isset($_POST['plik'])){
   $nazwa = $_POST['plik'];
   $plik = fopen("users/$nazwa", "w");
   fwrite($plik, "0");
}
    ?>

   <script>
    if(localStorage.getItem("next")!=null){
        document.getElementById("nextp").value=localStorage.getItem("next");
        window.localStorage.removeItem('next');
        document.getElementById("next").submit();
    }
    document.getElementById("log").addEventListener("click",()=>{
    var plik = document.getElementById("nazwa").value;
    plik = plik+".txt";
    document.getElementById("plik").value=plik;
    localStorage.setItem("next", plik);
    document.getElementById("create").submit();
    
})
   </script>
</body>
</html>