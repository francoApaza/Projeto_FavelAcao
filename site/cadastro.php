
<?php   
    include "conexao.php";//faz ligaçao com a pagina de conexao Com  a base de dados 
    
    $nome=$_POST['nome']; 
    $data_nascimento=$_POST['data_nascimento'];
    $endereco=$_POST['endereco'];
    $complemento=$_POST['complemento'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $senha=md5($_POST['senha']);
    
    $confirmesenha=md5($_POST['confirmesenha']);
        

    if(isset($_POST['nome']) && (($_POST['data_nascimento'])!=="") && isset($_POST['endereco']) && isset($_POST['complemento']) && isset($_POST['email']) && (($_POST['telefone'])!=="") && isset($_POST['senha']) && (strlen($_POST['senha'])===8)  && (($_POST['senha'])===($_POST['confirmesenha']))){ 
        $conn = mysqli_connect($server_name, $user_name, $password_name, $database_name);   
        $sql = "INSERT INTO cadastro (nome, data_nascimento, endereco, complemento, email, telefone, senha) VALUES ('$nome', '$data_nascimento', '$endereco', '$complemento', '$email', '$telefone', '$senha')"; 
        $result = mysqli_query($conn, $sql);
        echo "<script>
            alert ('$nome, dados cadastrados com Sucesso!')
            window.location.href='index.html'
        </script>"; 
    }
    else if ($senha!==$confirmesenha){ 
        echo "<script>
            alert ('As senhas devem ser iguais, tente novamente!')
            window.location.href='cadastro.html'
        </script>";
    
    }
    else if ((strlen($_POST['senha'])!==8)){ 
        echo "<script>
            alert ('Digite uma senha válida com 8 dígitos para realizar o cadastro!')
            window.location.href='cadastro.html'
        </script>";
    }
    else{
        echo "<script>
            alert ('Dados inválidos!')
            window.location.href='cadastro.html'
        </script>";       
                                
        
    }   
                  