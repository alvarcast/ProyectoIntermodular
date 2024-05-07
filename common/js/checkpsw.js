function validar() {
    var pass = document.getElementById("contrasenia").value
    var confpass = document.getElementById("repecon").value
    if(pass != confpass){
        alert("Las contrasenias no coinciden")
    }else{
        action='insertar.php'
    }
}