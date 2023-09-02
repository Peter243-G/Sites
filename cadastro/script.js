// Variáveis dos campos
let nome = window.document.getElementById("nome");
let email = document.getElementById("email");
let senha = document.getElementById("senha");
let ConfirmaSenha = document.getElementById("confirmarSenha");

// Variáveis dos botoes
let botaoLogin = document.getElementById("btnLogin");
let botaoCadastro = document.getElementById("btnCadastro");

botaoLogin.addEventListener("submit",  (event) => {
  // Prevenindo o comportamento padrão do formulário
  event.preventDefault();
  // Testando o clique do botão
  console.log("Botão CLicado!");
});
