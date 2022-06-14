p = document.getElementById("pcheck");
login = document.getElementById("ilogin");
var form= document.getElementById("forma");
var input=[];
var items;
var letters = /^[A-Za-z]+$/;
document.getElementById("blogin").addEventListener("click", ()=>{
    items = login.value;
    input = Array.of(...items);
    for(i=0; i<input.length; i++){
        if(input[i].match(letters)){
            if(i==input.length-1){
                forma.submit();
            }
        }
        else{
            document.getElementById("pcheck").style.visibility="visible";
            break;
        }
    }
});