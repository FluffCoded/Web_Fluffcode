p = document.getElementById("pcheck");
login = document.getElementById("ilogin");
var input=[];
var items;
var letters = /^[A-Za-z]+$/;
document.getElementById("blogin").addEventListener("click", ()=>{
    items = login.value;
    input = Array.of(...items);
    for(i=0; i<input.length; i++){
        if(input[i].match(letters)){
            document.getElementById("forma").submit();
        }
        else{
            document.getElementById("pcheck").style.visibility="visible";
        }
    }
});