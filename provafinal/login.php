<?php

include_once('banco.class.php');

$banco = new Banco();

$link = $banco->conexao();

$email = $_REQUEST['email'];
$senha = $_REQUEST['senha'];

$sql = "SELECT email, nome, senha FROM usuario WHERE email = '$email' AND senha '$senha'";

$con = mysqli_query($link, $sql);

if($con){

echo    $usuario = mysqli_fetch_array($con, MYSQLI_ASSOC);
if (isset($login['email'])) {
    $_SESSION['id'] = $log['id'];
    $_SESSION['id'] = $log['nome'];
    header('Location:index.php');

}else{
    echo 'erro no login';
}


}


?>