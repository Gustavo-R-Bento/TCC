<?php 
    session_start();
    if(!isset($_SESSION['email']) && !isset($_SESSION['senha'])){
        header('Location: ../Login/Login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel nail</title>
    <link rel="stylesheet" href="Inicio.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Lexend:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="barrasup">
            <div class="logo">
             <a href="Inicio.php">Pixel Nail</a>
            </div>

            <nav class="menu-desktop">
                <ul>
                    <li><a href="Inicio.php">Início</a></li>
                    <li><a href="agendamento.html">Agendamentos</a></li>
                    <li><a href="#">Quem somos?</a></li>
                </ul>
            </nav>

            <div class="user">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>
                        
                </a>
            </div>

        </div>

    </header>
    <main>
        <section class="topo-site">
            <div class="inter">   
                <div class="txt-topo-site">
                    <h1>Agendamento Online</h1>
                    <p>Faça seu Agendamento agora mesmo clicando no botão abaixo!</p>
                    <input type="button" value="Agendar" class="btn-agen" id="btn-agen">
                </div>

                <div class="img-topo-site">
                    <img src="../img/img-topo-nova.png" alt="Foto unha em gel">
                </div> 
            </div>
        </section>
      

    </main>
    <footer>

    </footer>
    
</body>
</html>