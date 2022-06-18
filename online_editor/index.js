
// przejscie do editor.php
if (localStorage.getItem("next") != null) {
    document.getElementById("nextp").value = localStorage.getItem("next");
    window.localStorage.removeItem('next');
    document.getElementById("next").submit();
}
p = document.getElementById("pcheck");
login = document.getElementById("nazwa");
var form1 = document.getElementById("forma");
var input = [];
var items;
var letters = /^[A-Za-z]+$/;
var numbers = /^[0-9]+$/;
//utworzenie pliku z podana nazwa.txt
document.getElementById("log").addEventListener("click", () => {
    items = login.value;
    input = Array.of(...items);
    if (input.length > 17) {
        document.getElementById("pcheck").style.visibility = "visible";
    }
    else {
        for (i = 0; i < input.length; i++) {
            if (input[i].match(letters)) {
                if (i == input.length - 1) {
                    var plik = document.getElementById("nazwa").value;
                    plik = plik + ".txt";
                    document.getElementById("plik").value = plik;
                    localStorage.setItem("next", plik);
                    document.getElementById("create").submit();
                }
            }
            else {
                document.getElementById("pcheck").style.visibility = "visible";
                break;
            }
        }
    }
});