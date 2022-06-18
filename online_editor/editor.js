var txt = document.getElementById("txtar"); // text
var forma = document.getElementById("forma"); // formularz z textem
var read = document.getElementById("read"); // formularz do read
var numer = 1; // obsluga pozycji kursora
var scrolint; // obsluga mouse scrolla
var ifread = true; //czy read ma sie odpalac
// on load - cursor and scroll
window.onload = function () {
    document.getElementById("txtar").focus();
    document.getElementById('txtar').selectionEnd = parseInt(localStorage.getItem("numer"));
    document.getElementById('txtar').selectionStart = parseInt(localStorage.getItem("numer"));
    setTimeout(function(){
    txt.scrollTop=localStorage.getItem("scrol");
    },1);
    document.cookie=`linia=${localStorage.getItem("numer")}; expires=${new Date().getDate()}; path=/kod/fluff/online_editor`;
}
// save/read on key
window.addEventListener('keydown', function (e) {
    ifread = false;
    if(e.key=="Control" || e.key=="Shift" || e.key=="AltGraph"){
    }
    else{
    setTimeout(function () {
        numer = parseInt(document.getElementById('txtar').selectionEnd);
        localStorage.setItem("numer", numer);
        localStorage.setItem("scrol", txt.scrollTop);
        forma.submit();
    }, 12);
}
});
// mouse scroll
window.addEventListener("wheel",()=>{
    ifread = false;
    clearTimeout(scrolint);
    scrolint = setTimeout(()=>{
        localStorage.setItem("scrol", txt.scrollTop);
        setTimeout(ifread=true,500);
    },100);
});
//read interval
setInterval(function(){
    if(ifread == true){
        numer = parseInt(document.getElementById('txtar').selectionEnd);
        localStorage.setItem("numer", numer);
        read.submit();
    }
},1000);
//collab
var lewo;
var wiersz;
var multi;
for(i=0;i<lines.length; i++){
    var span = document.createElement('span');
    span.classList.add("user");
    span.innerHTML=`${names[i].slice(0,-4)}`;



    if(lines[i]>120){
    lewo=lines[i]/120-parseInt(lines[i]/120);
    lewo=parseInt(lewo*120);
    multi=parseInt(lines[i]/120);
    multi=multi*multi*multi*multi*multi;
    lewo = 14*lewo-multi;
    }
    else{
    lewo=14*lines[i];
    }
    span.style.left=`${30+lewo}px`;

    wiersz=parseInt(lines[i]/120);
    span.style.top=`${50*wiersz}px`;
    document.getElementById("tekst").appendChild(span);
}