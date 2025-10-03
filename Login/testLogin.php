<?php 
    require_once '../bd.php';
    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT id, nome, senha, is_admin FROM usuario WHERE email = ? LIMIT 1";

        $stmt = $connection->prepare($sql);
        $stmt->execute([$email]); 
        $resultado = $stmt->get_result();
        $usuario = $resultado->fetch_assoc();

        if($usuario && password_verify($senha, $usuario['senha'])){
            
            $_SESSION ['email'] = $email;
            $_SESSION ['senha'] = $senha;
            $_SESSION ['is_admin'] = $usuario['is_admin'];

            if($_SESSION['is_admin'] > 0){
                header('Location: ../Admin/pagAdmin.php');
                exit();
            }
            
            header('Location: ../Inicio/Inicio.php');


        }else{
            echo "Email ou senha invalidos!";
        }

    }
?>