<?php
        include('conexao.php'); /*arquivo de conexão com o bando de dados*/

        if(isset($_POST['login_button'])) {
            $usuario = $_POST['matricula']; /*name do email-input*/
            $senha = $_POST['senha']; /*name do password-input*/
            
            $sql = "SELECT matricula, senha FROM cadastro WHERE matricula = '$usuario' && senha = '$senha'"; /*informações de tabela e campos de acordo como seu BD*/
            $result = mysqli_query($conn, $sql);
    
            if (mysqli_num_rows($result) > 0) { 
                $login=$result->fetch_assoc();
                session_start();
                $_SESSION["matricula"]=$login["matricula"];
                $_SESSION["senha"]=$login["senha"];
                header("Location: https://www.google.com"); /*local para onde deseja redirecionar o usuário*/
            } else {
                header("Location: Teste.html"); /*local para onde deseja redirecionar o usuário*/
                /*echo "<script>document.querySelector('#form-text').innerText = 'E-mail ou senha inválidos'</script>";*/
            }
        }
        
        //mysqli_close($conn);
    ?>