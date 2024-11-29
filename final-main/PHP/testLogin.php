<?php

    //print_r($_REQUEST);
    if(isset($_POST['submit'])&& !empty($_POST['Usuario']) && !empty($_POST['senha']))
    {
        include_once('config.php');
        $Usuario = $_POST['Usuario'];
        $senha = $_POST['senha'];


        $sql = "SELECT * FROM funcionario WHERE Usuario = '$Usuario' AND senha = '$senha'";
        $result = $conexao->query($sql);

        if(mysqli_num_rows($result))
        {
          header('location: ../index.php');
        }
        else
        {
            
            if(($Usuario = 'Evandro Ripar') && ($senha = 'senha123'))
            {
                header('location: ../HTML/autentição.html');
            }
            else
            {
            header('../HTML/tela-cel.html');
            }

        }
    }
    else
    {
        header('Location: ../index.php');
    }
?>

