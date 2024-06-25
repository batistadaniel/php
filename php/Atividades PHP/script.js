function mostrarDados() {
    let formulario = document.querySelector("form")
    let nome = document.getElementById("nome").value;
    let usuario = document.getElementById("usuario").value;
    let email = document.getElementById("email").value;
    let cpf = document.getElementById("cpf").value;
    let nascimento = document.getElementById("nascimento").value;
    let endereco = document.getElementById("endereco").value;
    let sexo = document.getElementById("sexo").value;
    let msg = document.getElementById("msg");

    msg.textContent = `
    Nome: ${nome}
    Usuário: ${usuario}
    Email: ${email}
    CPF: ${cpf}
    Nascimento: ${nascimento}
    Endereço: ${endereco}
    Sexo: ${sexo}
    `;

    formulario.style.display = "none";

    msg.style.display = "flex";
    msg.style.flexDirection = "column";
    msg.style.justifyContent = "center";
    msg.style.alignItems = "center";
    msg.style.flexDirection = "column";
    msg.style.backgroundColor = "yellow";
}

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formulario").addEventListener("submit", function(e) {
        e.preventDefault();
        mostrarDados();
    })
});