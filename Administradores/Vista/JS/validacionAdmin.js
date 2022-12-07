function mostrarPassword(){
    var cambio = document.getElementById("txtPassword");
    if(cambio.type == "password"){
        cambio.type = "text";
        $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    }else{
        cambio.type = "password";
        $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
} 
function validarFormulario(){
    var usuario = document.querySelector("#username").value;
    var contraseña = document.querySelector("#txtPassword").value;
    if(usuario.length == 0){
        alert("Ingrese su usuario");
        return;
    }
    if(contraseña.length == 0){
        alert("Ingrese su contraseña");
        return;
    }
    console.log(usuario);
    console.log(contraseña);
    validacionA();
}

function validacionA() {
    fetch("../Controlador/login.php", {
      method: "POST",
      body: new FormData(formLogin),
    })
      .then((response) => response.text())
      .then((response) => {
        console.log("validacion");
        console.log(response);
        if (response != 0 ) {
            window.location.href = "indexAdmin.html";
        }else{
            alert("Usuario o Contraseña incorrectos");    
            //formLogin.reset();
        }
      });
}
function sesionIniciada(){
    fetch("../Controlador/validacion.php")
        .then((response) => response.text())
        .then((response) => {
          console.log(response);
          if (response == " error" ) {
            location.reload();
            window.location.href = "login.html";   
            //alert("Usuario o Contraseña incorrectos");
            //formLogin.reset();
          }
          setInterval("actualizarSesion()",1500000); //El admin tiene una sesion de 15 min
        });
}
function actualizarSesion(){
    cerrarSesion();
    location.reload();
}


function cerrarSesion(){
    fetch("../Controlador/logout.php")
        .then((response) => response.text())
        .then((response) => {
          //console.log(response);
          location.reload();
          window.location.href = "login.html";
        });
}

