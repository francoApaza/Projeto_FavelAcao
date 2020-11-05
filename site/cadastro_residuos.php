<?php
include "conexao.php";//faz ligaçao com a pagina de conexao xom  a base de dados

$res_endereco = $_POST['res_endereco'];
$res_ponto_referencia = $_POST['res_ponto_referencia'];
$res_quantidade = $_POST['res_quantidade'];
$res_presenca_insetos = $_POST['res_presenca_insetos'];
$res_quais_insetos = implode(", ",$_POST['res_quais_insetos']);
$res_informacoes = $_POST['res_informacoes'];


//os insert dos dados dos usuarios
$result = "INSERT INTO cadastro_residuos (
    res_endereco,
    res_ponto_referencia,
    res_quantidade,
    res_presenca_insetos,
    res_quais_insetos,
    res_informacoes) 
VALUES ('$res_endereco','$res_ponto_referencia','$res_quantidade','$res_presenca_insetos','$res_quais_insetos','$res_informacoes')";

if(mysqli_query($conn,$result)){
    echo "<script>
        alert ('Obrigado por realizar o cadastro!')
        window.location.href='locais.html'
    </script>";
}else{
    echo "<script>
        alert ('Não foi possível fazer o cadastro do local!'. $mysqli_query;)
        window.location.href='cadastro_residuos.php'
    </script>";
}
?>