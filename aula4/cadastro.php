<?php

if(empty( $_POST['nome']) or empty($_POST['senha'])
or empty($_POST['email'])
or empty($_POST['observacao'])){
    echo "<script> 
    alert('Existem campows que sao obrigatorios
    que não são preenchidos, por gentileza va tomar no seu aro);";
    echo "javascript:window.location='index.php';<script>"

}


$nome = $_GET['nome'];
$email = $_GET['email'];
$senha = $_GET['senha'];
$observacao = $_GET['observacao'];

if (strlen ($nome) >=10 ){
echo $nome. "<br>";
echo strlen ($nome)."<br>";
} else{
    echo "<script typer='javascript'>
    alert('Nome muito curto');";
    echo"javascript:window.location='index.php';</script>"
}
echo $email. "<br>";
echo $senha. "<br>";
echo $observacao."<br>";

?>