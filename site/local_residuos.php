<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>

        <link rel="icon" href="./img/logo-removebg-preview.png">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/local-residuos.css">
    </head>
    <body>
        <br>
        <h2>Locais cadastrados</h2>
        <?php
            include "conexao.php";
            $conn = mysqli_connect($server_name,$user_name,$password_name,$database_name);

            if($conn ->connect_error){
                die("FALHA NA CONEXAO : ". $conn->connect_error);
            }

                $sql = "SELECT res_endereco, res_ponto_referencia, res_quantidade, res_presenca_insetos, res_quais_insetos, res_informacoes FROM cadastro_residuos";
                $result = $conn->query($sql);

                while($row =$result->fetch_assoc()) {
                    echo  
                        "<br> Endereço: ".$row['res_endereco'] ."<br>"
                        ."Ponto de referência: " .$row['res_ponto_referencia'] ."<br>"
                        ."Presença de insetos? ".$row['res_presenca_insetos'] ."<br>"
                        ."Quantidade: ".$row['res_quantidade'] ."<br>"
                        ."Quais insetos? ".$row['res_quais_insetos'] ."<br>"
                        ."Outras informações: ".$row['res_informacoes'] ."<br>"
                        ." <br>";
                    
                    echo "<hr> <br>";
                    
                //VALUES('$nome','$data_nascimento','$endereco','$complemento', '$email', '$telefone','$senha')";
            }
        ?>
    </body>
</html>