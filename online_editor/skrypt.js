var txt = document.getElementById("txtar");
var forma = document.getElementById("forma");
var read = document.getElementById("read");
var numer = 1;
// on laod - cursos and char
window.onload = function () {
    document.getElementById("txtar").focus();
    document.getElementById('txtar').selectionEnd = parseInt(localStorage.getItem("numer"));
    document.getElementById('txtar').selectionStart = parseInt(localStorage.getItem("numer"));
}
//read interval
setInterval(function(){
    numer = parseInt(document.getElementById('txtar').selectionEnd);
    localStorage.setItem("numer", numer);
   read.submit();
},1000);
// save/read on key
txt.addEventListener('keydown', function (e) {
    if(e.key!="Control" || e.key!="Shift" || e.key!="AltGraph"){
    setTimeout(function () {
        numer = parseInt(document.getElementById('txtar').selectionEnd);
        localStorage.setItem("numer", numer);
        forma.submit();
    }, 1);
}
});