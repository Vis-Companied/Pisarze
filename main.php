<?php
    session_start();

    if (!isset($_SESSION['zalogowany']))
    {
        header('Location: Vis.php');
        exit();
    }
?>
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



   







      
        <!-- MENU/START -->
        <div class="menu-wysuwane">
          <nav class="site-nav">
            <button class="site-nav-trigger" type="button" data-toggle="collapse">Menu</button>
            <div class="site-menu">
              <ul>
                <li>
                  <a href="#1opcja">
                      1 opcja
                  </a>
                </li>
                <li>
                  <a href="#2opcja">
                      2 opcja
                  </a>
                </li>
                <li>
                    <?php
                if(isset($_SESSION['zalogowany'])){
 echo ''.$_SESSION[''].'<a href="wyloguj.php">Wyloguj</a>';}?> 
                  
                </li>
              </ul>
            </div>
          </nav>
  </div>
      <!-- MENU/KONIEC -->

    <div id="vis">Vis</div> 
<div class="gora"> 
</div> 
    

        






<div id="przedmioty">
  <div class="kartajeden">
<div class="wrapper">
  <div class="card">
    <div class="front">
      <h1>AMD Ryzen 5 1600 AF</h1>
    
      <p class="price">$ 152,57</p>
    </div>
    <div class="right">
      <h2>AMD Ryzen 5 1600 AF</h2>
      <ul>
        <li>Seria:Ryzen™ 5 1600 (AF)</li>
        <li>Taktowanie:3.2 GHz</li>
        <li>Liczba rdzeni:6 rdzeni</li>
        <li>Cache:19 MB</li>
        <li>Socket AM4</li>
      </ul>
      <button class="przycisk-koszyk">Koszyk, yo</button>
    </div>
  </div>
  <div class="img-wrapper">
       <img src='img/amd.png' alt=''>    
  </div>
</div>
                </div>
 
<div class="kartadwa">
<div class="wrapper">
  <div class="card">
    <div class="front">
      <h1>Intel Core i9-11900K</h1>
      
      <p class="price">$ 722.00</p>
    </div>
    <div class="right">
      <h2>Intel Core i9-11900K</h2>
      <ul>
        <li>Seria:i9-11900K</li>
        <li>Taktowanie:3.5 GHz</li>
        <li>Liczba rdzeni: 8 rdzenie</li>
        <li>Cache: 16 MB</li>
        <li>Socket 1200 </li>
      </ul>
      <button class="przycisk-koszyk">Koszyk, yo</button>
    </div>
  </div>
  <div class="img-wrapper">
       <img src='img/intel.png' alt=''>    
  </div>
</div>
                </div>

                <div id="przedmioty">
  <div class="kartatrzy">
<div class="wrapper">
  <div class="card">
    <div class="front">
      <h1>AMD Ryzen 7 3800X</h1>
      
      <p class="price">$ 381,82</p>
    </div>
    <div class="right">
      <h2>AMD Ryzen 7 3800X</h2>
      <ul>
        <li>Seria:Ryzen™ 7 3800X</li>
        <li>Taktowanie:3.9 GHz</li>
        <li>Liczba rdzeni:8 rdzeni</li>
        <li>Cache:36 MB</li>
        <li>Socket AM4</li>
      </ul>
      <button class="przycisk-koszyk">Koszyk yo</button>
    </div>
  </div>
  <div class="img-wrapper">
       <img src='img/amd.png' alt=''>    
  </div>
</div>
                </div>

                <div id="przedmioty">
  <div class="kartacztery">
<div class="wrapper">
  <div class="card">
    <div class="front">
      <h1>Intel Core i5-10400</h1>
      
      <p class="price">$ 267.00</p>
    </div>
    <div class="right">
      <h2>Intel Core i5-10400</h2>
      <ul>
        <li>Seria:i5-10400"</li>
        <li>Taktowanie:2.9 GHz"</li>
        <li>Liczba rdzeni:6 rdzeni"</li>
        <li>Cache:12 MB"</li>
        <li>Socket 1200"</li>
      </ul>
      <button class="przycisk-koszyk" >Koszyk, yo</button>
    </div>
  </div>
  <div class="img-wrapper">
       <img src='img/intel.png' alt=''>    
  </div>
</div>
                </div>

</div> 

<div id="przedmioty">
  <div class="kartapiec">
<div class="wrapper">
  <div class="card">
    <div class="front">
      <h1>AMD Threadripper 1900X</h1>
     
      <p class="price">$ 392,74</p>
    </div>
    <div class="right">
      <h2>AMD Threadripper 1900X</h2>
      <ul>
        <li>Seria:Threadripper 1900X</li>
        <li>Taktowanie:3.8 GHz</li>
        <li>Liczba rdzeni:8 rdzeni</li>
        <li>Cache:20 MB</li>
        <li>Socket TR4</li>
      </ul>
      <button class="przycisk-koszyk">Koszyk, yo</button>
    </div>
  </div>
  <div class="img-wrapper">
       <img src='img/amd.png' alt=''>    
  </div>
</div>
                </div>

                <div id="przedmioty">
  <div class="kartaszesc">
<div class="wrapper">
  <div class="card">
    <div class="front">
      <h1>Intel Core i9-10900X</h1>
      
      <p class="price">$ 750.00</p>
    </div>
    <div class="right">
      <h2>Intel Core i9-10900X</h2>
      <ul>
        <li>Seria:i9-10900X"</li>
        <li>Taktowanie:3.7 GHz"</li>
        <li>Liczba rdzeni:10 rdzeni"</li>
        <li>Cache:19.25 MB"</li>
        <li>Socket 2066"</li>
      </ul>
      <button class="przycisk-koszyk">Koszyk, yo</button>
    </div>
  </div>
  <div class="img-wrapper">
       <img src='img/intel.png' alt=''>    
  </div>
</div>
                </div>

                <div id="przedmioty">
  <div class="kartasiedem">
<div class="wrapper">
  <div class="card">
    <div class="front">
      <h1>AMD Ryzen 5 5600X</h1>
     
      <p class="price">$ 392,74</p>
    </div>
    <div class="right">
      <h2>AMD Ryzen 5 5600X</h2>
      <ul>
        <li>Seria:Ryzen™ 5 5600X</li>
        <li>Taktowanie:3.7 GHz</li>
        <li>Liczba rdzeni:6 rdzeni</li>
        <li>Cache:35 MB</li>
        <li>Socket AM4</li>
      </ul>
      <button class="przycisk-koszyk">Koszyk, yo</button>
    </div>
  </div>
  <div class="img-wrapper">
       <img src='img/amd.png' alt=''>    
  </div>
</div>
                </div>

                <div id="przedmioty">
  <div class="kartaosiem">
<div class="wrapper">
  <div class="card">
    <div class="front">
      <h1>Intel Core i9-10980XE</h1>
    
      <p class="price">$ 1280.00</p>
    </div>
    <div class="right">
      <h2>Intel Core i9-10980XE</h2>
      <ul>
        <li>Seria:i9-10980XE"</li>
        <li>Taktowanie:3.0 GHz"</li>
        <li>Liczba rdzeni:18 rdzeni"</li>
        <li>Cache:24.75 MB"</li>
        <li>Socket 2066"</li>
      </ul>
      <button class="przycisk-koszyk" >Koszyk, yo</button>
    </div>
  </div>
  <div class="img-wrapper">
       <img src='img/intel.png' alt=''>    
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
        <script src="menu.js"></script>
        <script src="search.js"></script>
        
      
    </body>
</html>