/* javaScript para acessar o menu responsivo da navbar*/
var navLins = document.getElementById("navLinks");

function showMenu(){
    navLinks.style.right = "0";
}
function hideMenu(){
    navLinks.style.right = "-200px";
}
/* javaScript para acessar o menu responsivo da navbar*/

/* login e cadastro*/

let signupBtn = document.getElementById("signupBtn");
let signinBtn = document.getElementById("signinBtn");
let nameField = document.getElementById("namefield");
let title = document.getElementById("title");

signinBtn.onclick = function(){
    nameField.style.maxHeight = "0";
    title.innerHTML = "Entrar";
    cadastrarBtn.classList.add("disable");
    signupBtn.classList.remove("disable");
}

cadastrarBtn.onclick = function(){
    nameField.style.maxHeight = "60px";
    title.innerHTML = "cadastrar";
    cadastrarBtn.classList.remove("disable");
    signupBtn.classList.add("disable");
}

/* VALIDAR LOGIN */

function logar(){

    var login = document.getElementById('login').value;
    var senha = document.getElementById('senha').value;

    if(login == "admin@gmail.com" && senha == "12345"){
        alert('Sucesso');
        location.href = "adm.html";
    
    }else{
        alert('Usuario ou senha incorretos');
    }

    if(login == "gabriel@gmail.com" && senha == "12345"){
        alert('Sucesso');
        location.href = "index.html";

    }
}