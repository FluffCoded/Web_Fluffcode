var txt = document.getElementById("txtar");
var forma = document.getElementById("form");
var numer = 1;
txt.addEventListener('keydown', function (e) {
    if(e.key!="Control"){
    setTimeout(function () {
        numer = parseInt(document.getElementById('txtar').selectionEnd);
        localStorage.setItem("numer", numer);
        forma.submit();
    }, 5);
}
})

//obsługa kursora
window.onload = function () {
    document.getElementById("txtar").focus();
    var val = txt.value; 
    txt.value = ''; 
    txt.value = val; 
    document.getElementById('txtar').selectionEnd = parseInt(localStorage.getItem("numer"));
}
