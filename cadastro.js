function cadastrar() {
    // Obtém as informações do usuário
    var nome = document.getElementById("nome").value;
    var sobrenome = document.getElementById("sobrenome").value;
    var email = document.getElementById("email").value;
    var senha = document.getElementById("senha").value;
  
    // Verifica se as informações estão preenchidas corretamente
    if (nome == "" || sobrenome == "" || email == "" || senha == "") {
      alert("Preencha todos os campos obrigatórios!");
      return;
    }
  
    // Valida o e-mail
    if (!/\w+@\w+\.\w+/.test(email)) {
      alert("E-mail inválido!");
      return;
    }
  
    // Valida a senha
    if (senha.length < 8) {
      alert("A senha deve ter pelo menos 8 caracteres!");
      console.log("funcionou")
      return;
    }
  
    // Armazena as informações no armazenamento local
    localStorage.setItem("nome", nome);
    localStorage.setItem("sobrenome", sobrenome);
    localStorage.setItem("email", email);
    localStorage.setItem("senha", senha);
  
    // Exibe uma mensagem de sucesso
    alert("Cadastro realizado com sucesso!");
    console.log("Done")
  if (console.log) {

    window.location.href = "login.php";
    
  }
  }