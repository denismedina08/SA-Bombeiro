<?php
        include('conexao.php'); 
        if(isset($_POST['submit-button'])) {
            $usuario = $_POST['usuario']; 
            $senha = $_POST['senha']; 
            
            $sql = "INSERT bombeiro.login, senha TO cadastro WHERE usuario = '$usuario' && senha = '$senha'"; /*informações de tabela e campos de acordo como seu BD*/
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) { 
              header("Location: https://www.google.com"); 
            } else {
                header("Location: login.php"); 
            }
        }
        
        mysqli_close($conn);
    ?>