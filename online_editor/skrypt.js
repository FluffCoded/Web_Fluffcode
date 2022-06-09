var txt = document.getElementById("txtar");
var forma = document.getElementById("forma");
var read = document.getElementById("read");
var numer = 1;


//cursos movement
window.onload = function () {
    document.getElementById("txtar").focus();
    var val = txt.value; 
    txt.value = ''; 
    txt.value = val; 
    document.getElementById('txtar').selectionEnd = parseInt(localStorage.getItem("numer"));
}

//read
setInterval(function(){
    numer = parseInt(document.getElementById('txtar').selectionEnd);
    localStorage.setItem("numer", numer);
   read.submit();
},2000);

// save/read on key
txt.addEventListener('keydown', function (e) {
    if(e.key!="Control" || e.key!="Shift" || e.key!="AltGraph"){
    setTimeout(function () {
        numer = parseInt(document.getElementById('txtar').selectionEnd);
        localStorage.setItem("numer", numer);
        forma.submit();
    }, 100);
}
});