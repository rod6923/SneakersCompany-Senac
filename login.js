function login() {    
showLoading()

    var email = document.getElementById("email").value;    
var senha = document.getElementById("senha").value;     
 var emailCadastrado = localStorage.getItem("email");   
  var senhaCadastrada = localStorage.getItem("senha"); 



     if (email == emailCadastrado && senha == senhaCadastrada) 
 {             
 alert("Acesso Garantido");    

 window.location.href = "index2.php";    } 

 else {        alert("Usuario eu senha invalidos!");    }

}   