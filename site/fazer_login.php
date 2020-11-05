<?php
	include "conexao.php";

	$conn = mysqli_connect($server_name,$user_name,$password_name,$database_name);
	
	
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>user login php  entrar</title>
	<script type="text/javascript">
		function loginsucesso() {
		//tempo que o usuario vai espera para ser direcionado a pagina	
			setTimeout("window.location='meusite/index.html'",5)
		}
		function loginfailed() {
			setTimeout("window.location='inicialLogin.html'",5000)
		}
	</script>
</head>
<body>

</body>
</html>

<?php
	$email=($_POST['email']);
	$senha=md5(($_POST['senha']));

	
	if(($email!=="") && ((strlen($_POST['senha']))===8)){
         
        $sql = "SELECT email, senha FROM cadastro where email='$email'"; 
        $result = mysqli_query($conn, $sql); 
        $row = mysqli_fetch_assoc($result);
        if($row['senha']===$senha){
            echo "<script>
                alert ('Login realizado com sucesso!')
                window.location.href='locais.html'
            </script>";
        }
        else{
            echo "<script>
                alert ('E-mail inválido ou senha inválida!')
                window.location.href='index.html'
            </script>";
        }     
    }
    else{
        echo "<script>
                alert ('E-mail inválido ou senha inválida!')
                window.location.href='index.html'
            </script>";
    }
?>