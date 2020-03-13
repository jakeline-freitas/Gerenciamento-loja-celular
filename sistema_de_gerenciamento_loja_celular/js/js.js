
var nome = document.getElementById("txt-nome");
var senha = document.getElementById("txt-senha");
var mensagem = document.getElementById("mensagem");
nome.onkeydown = verificarEnter;
senha.onkeydown = verificarEnter;

function exibirMensagem(msg) {
    mensagem.innerHTML = msg;
}
document.getElementById("btn-login").onclick = function(){
    if (nome.value != "walyson" || senha.value != "12345") {
        exibirMensagem("Usuário e/ou senha inválido(s)");
        nome.value = "";
        senha.value = "";
        nome.focus();
        event.preventDefault();
    }else{
        
    alert("teste")
        window.location.href = "index.php";
        msg.innerHTML = "";
    }
    
}
function verificarEnter(event) {
    if (event.key == "Enter") {
        document.getElementById("btn-login").click();
    }
}