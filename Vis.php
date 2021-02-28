<?php
    session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Vis</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <!-- <meta http-equiv="Content Type" content="text/html;htmlcharset=utf-8"> -->
        <meta name="robots" content="index">
        <meta name="author" content="MW/RL/BS/MU">
        <meta name="publisher" content="Wydawnictwo Vis">
        <meta name="copyrights" content="Prawa autorskie zastrzeżone">
        <meta name="generator" content="Vis, sklep internetowy, komputery, części komputerowe, sprzęt komputerowy, RTV,">
        <meta name="keywords" content="Strona Vis, Vis">
        <meta name="creation-date" content="30.09.2020">
        <meta name="last-modified" content="Na bieżąco">
        <meta name="description" content="Vis, sklep internetowy, komputery, części komputerowe, sprzęt komputerowy, RTV">
        <link rel="stylesheet" id="pagestyle" href="Vis.css" type="text/css">
        <link rel="stylesheet" id="pagestyle" href="Vis.scss">
        <script src="https://kit.fontawesome.com/14208e411b.js" crossorigin="anonymous"></script>
        <script src="Vis.js"></script>
    </head>
    <body style="overflow:hidden;">
        <div>
            <?php
                if(isset($_SESSION['error'])){ echo $_SESSION['error']; }
            ?>
        </div>
       
<!-- przycisk zaloguj się/START  -->
     <div style="<?php if(isset($_SESSION['zalogowany'])){ echo 'display: none;';} ?>" class="box-zaloguj">
        <div class="btn btn-zaloguj" id="myBtn" >
            <span>Zaloguj sie</span>
        </div>
    </div> 
<!-- Pzycisk zaloguj się/KONIEC-->
<!-- Logowanie Rejestracja/START -->
  
        <div id="myModal" class="modal">

            <div class="modal-content">
                  <span class="close"><i class="far fa-times-circle"></i></span>
                  
                  <div id="account-container">
                      <div class="form-container sign-up-container">
                          <form action="rejestracja.php" method="POST">
                              <h1>Stwórz Użytkownika</h1>
                              <div class="social-container">
                                  <a href="#" class="social" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                  <a href="https://discord.gg/ExJvEWSM" class="social" target="_blank"><i class="fab fa-discord"></i></a>
                                  <a href="https://github.com/Vis-Companied/Pisarze" class="social" target="_blank"><i class="fab fa-github"></i></a>
                              </div>
                              <span>Utwórz konto!</span>
                                <input name="nazwa" type="text" placeholder="Name" />
                                <input name="email" type="email" placeholder="Email" />
                                <input name="haslo" type="password" placeholder="Password" />
                              <button>Utwórz</button>
                          </form>
                      </div>
                      <div class="form-container sign-in-container">
                          <form action="Login.php" method="POST">
                              <h1>Zaloguj się</h1>
                              <div class="social-container">
                                  <span>Lub zaloguj się za pomocą:</span><br>
                                    <a href="#" class="social" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://discord.gg/ExJvEWSM" class="social" target="_blank"><i class="fab fa-discord"></i></a>
                                    <a href="https://github.com/Vis-Companied/Pisarze" class="social" target="_blank"><i class="fab fa-github"></i></a>
                              </div>
                              
                              <input name="email" type="email" placeholder="Email" />
                              <input name="haslo" type="password" placeholder="Password" />
                                <a href="#">Niepamiętam Hasła.</a>
                              <button>Zaloguj Się</button>
                          </form>
                      </div>
                      <div class="overlay-container">
                          <div class="overlay">
                              <div class="overlay-panel overlay-left">
                                  <h1>Witamy W Vis!</h1>
                                  <p>Cieszymy się że chcesz do nas dołączyć !<br>
                                       ~Zespół Vis-Companied</p>
                                  <button class="ghost" id="signIn">Zaloguj Się</button>
                              </div>
                              <div class="overlay-panel overlay-right">
                                  <h1>Witamy!</h1>
                                  <p>Nie masz konta? Zarejestruj się kilka ruchami myszki!</p>
                                  <button class="ghost" id="signUp">Zarejestruj Się</button>
                              </div>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
        <!-- Logowanie Rejestracja/KONIEC -->


        
        <header>
            <!-- Zmienny Motyw/START --> 
            <div id="AnLamp">
                <input type="radio" id="Vis.css" name="switch" value="on" onclick="initate()"; />
                <input type="radio" id="VisN.css" name="switch" value="off" checked="checked" onclick="initate()"; />
                <label for="switch"></label>
                <div id="Kabel"></div>
                <div id="Lampa"></div>
            </div>
        </header> 
        <!-- TŁO -->
        <div id="AnimatedBackground">
            <div id="large-header" class="large-header">
                <canvas id="demo-canvas"></canvas>
                <!-- <h1 class="main-title">Tekst Pogrubiony <span class="thin"> Tekst cienki</span> -->
            </div>
        </div>
<!-- Zmienny Motyw/KONIEC -->
<!-- Informacja Bar/START -->
<div id="Sidebar">
<div class="ct" id="t1">
  <div class="ct" id="t2">
    <div class="ct" id="t3">
      <div class="ct" id="t4">
         <div class="ct" id="t5">
          <ul id="menu">
            <a href="#t1"><li class="icon fa fa-youtube-play" id="jeden"></li></a>
            <a href="#t2"><li class="icon fa fa-keyboard-o" id="dwa"></li></a>
            <a href="#t3"><li class="icon fa fa-rocket" id="trzy"></li></a>
            <a href="#t4"><li class="icon fa fa-dribbble" id="cztery"></li></a>
            
          </ul>
          <div class="page" id="p1">
             <section class="icon fa fa-youtube-play"><span class="title">YT</span><span class="hint"></span></section>  
          </div>
          <div class="page" id="p2">
            <section class="icon fa fa-keyboard-o"><span class="title">Type</span></section>
          </div>  
          <div class="page" id="p3">
            <section class="icon fa fa-rocket"><span class="title">Rocket</span></section>
          </div>
          <div class="page" id="p4">
            <section class="icon fa fa-dribbble">
              <span class="title">Dribbble</span>
              <p class="hint">
              </p>
             
            </section>
          </div> 
          
           
          </div> 
        </div>
      </div>
    </div>
  </div>
</div>
</div>






    

















</div>









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