<?php
include "conexao.php";
$conn = mysqli_connect($server_name,$user_name,$password_name,$database_name);

if($conn ->connect_error){
     die("FALHA NA CONEXAO : ". $conn->connect_error);
}

    $sql = "SELECT nome,data_nascimento,endereco,complemento, email, telefone,senha FROM cadastro";
    $result = $conn->query($sql);

    while($row =$result->fetch_assoc()) {
        echo "<p>" .$row['nome']
        .$row['data_nascimento']
        .$row['endereco'] 
        .$row['complemento']
        .$row['email'] 
        .$row['telefone']
        .$row['senha'] ."</p>";
        
        echo "<hr>";
        
    //VALUES('$nome','$data_nascimento','$endereco','$complemento', '$email', '$telefone','$senha')";
}

?>