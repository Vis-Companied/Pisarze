<?php
    session_start();

    if (!isset($_SESSION['zalogowany']))
    {
        header('Location: Vis.php');
        exit();
    }
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Vis</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta name="robots" content="index">
        <meta name="author" content="MW/RL/BS/MU">
        <meta name="publisher" content="Wydawnictwo Vis">
        <meta name="copyrights" content="Prawa autorskie zastrzeżone">
        <meta name="generator" content="Vis, sklep internetowy, komputery, części komputerowe, sprzęt komputerowy, RTV,">
        <meta name="keywords" content="Strona Vis, Vis">
        <meta name="creation-date" content="30.09.2020">
        <meta name="last-modified" content="Na bieżąco">
        <meta name="description" content="Vis, sklep internetowy, komputery, części komputerowe, sprzęt komputerowy, RTV">
        <link rel="stylesheet" id="pagestyle" href="main.css" type="text/css">
        <script src="https://kit.fontawesome.com/14208e411b.js" crossorigin="anonymous"></script>
        <script src="Vis.js"></script>
    </head>
    <body>
        <div>
            <?php
                if(isset($_SESSION['zalogowany'])){
                    echo 'Hello, '.$_SESSION['nazwa'].'<a href="wyloguj.php">Wyloguj</a>';
                }

            ?>
        </div>
        <header>
            <!-- Zmienny Motyw --> 
            <div id="AnLamp">
                <input type="radio" id="main.css" name="switch" value="on" onclick="initate()"; />
                <input type="radio" id="mainN.css" name="switch" value="off" checked="checked" onclick="initate()"; />
                <label for="switch"></label>
                <div id="Kabel"></div>
                <div id="Lampa"></div>
            </div>
        </header> 
        
       
        

        <!-- Ikonki do odnośników[Discord, Face Book, github, Code branch(Mozna czyms innym zastapic to :))]
        <i class="fab fa-discord"></i>
        <i class="fab fa-facebook"></i>
        <i class="fab fa-github"></i>
        <i class="fas fa-code-branch"></i>
        -->
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
        <script src="Tlo.js"></script>
        <script src="modal.js"></script>

       
    </body>
</html>