<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha']; 
   
        
        $link = mysqli_connect('localhost','root','','flexxobank');

        if($link){
            $cadastar = mysqli_query($link, "INSERT INTO cadastro (nome, email, senha) VALUES ('$nome','$email','$senha')");
            if($cadastrar){
                echo "cadastro concluido";

            }else{
                echo "erro";
            }
        }else{
            echo "erro 2";
        }
        
?>