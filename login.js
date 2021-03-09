function login(){
    $user = document.getElementById("user").value;
    $pass = document.getElementById("password").value;

    if($user == "root" && $pass == "1234"){
        window.location="mostraBanco.php";
    } else {
        alert("Usuário ou senha incorretos");
        return false;
    }
}