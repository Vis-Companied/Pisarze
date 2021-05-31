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
      <header>
            <!-- Zmienny Motyw
            <div id="AnLamp">
                <input type="radio" id="main.css" name="switch" value="on" onclick="initate()"; />
                <input type="radio" id="mainN.css" name="switch" value="off" checked="checked" onclick="initate()"; />
                <label for="switch"></label>
                <div id="Kabel"></div>
                <div id="Lampa"></div>
            </div>
        </header> 
       --> 



   <div id="vis"> Vis</div> 
<div class="gora"> 
</div> 

<div class="Pktsprzedarzy" >

        


        </div>


    



      
        <!-- MENU/START -->
        <div class="menju">
<section class="navbar-section">
<div class="dropdown float-left">
    <a href="#" onclick="javascript:return false;" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">
    <button id="nav-toggle"></button>
    <nav>
      <a href="#"><i class="coś"></i><>
    </nav>
    <svg class="ham ham3" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
    <path class="line top" d="m 70,33 h -40 c -11.092231,0 11.883874,13.496726 -3.420361,12.956839 -0.962502,-2.089471 -2.222071,-3.282996 -4.545687,-3.282996 -2.323616,0 -5.113897,2.622752 -5.113897,7.071068 0,4.448316 2.080609,7.007933 5.555839,7.007933 2.401943,0 2.96769,-1.283974 4.166879,-3.282995 2.209342,0.273823 4.031294,1.642466 5.857227,-0.252538 v -13.005715 16.288404 h 7.653568" />
    <path class="line middle" d="m 70,50 h -40 c -5.6862,0 -8.534259,5.373483 -8.534259,11.551069 0,7.187738 3.499166,10.922274 13.131984,10.922274 11.021777,0 7.022787,-15.773343 15.531095,-15.773343 3.268142,0 5.177031,-2.159429 5.177031,-6.7 0,-4.540571 -1.766442,-7.33533 -5.087851,-7.326157 -3.321409,0.0092 -5.771288,2.789632 -5.771288,7.326157 0,4.536525 2.478983,6.805271 5.771288,6.7" />
    <path class="line bottom" d="m 70,67 h -40 c 0,0 -3.680675,0.737051 -3.660714,-3.517857 0.02541,-5.415597 3.391687,-10.357143 10.982142,-10.357143 4.048418,0 17.88928,0.178572 23.482143,0.178572 0,2.563604 2.451177,3.403635 4.642857,3.392857 2.19168,-0.01078 4.373905,-1.369814 4.375,-3.392857 0.0011,-2.023043 -1.924401,-2.589191 -4.553571,-4.107143 -2.62917,-1.517952 -4.196429,-1.799562 -4.196429,-3.660714 0,-1.861153 2.442181,-3.118811 4.196429,-3.035715 1.754248,0.0831 4.375,0.890841 4.375,3.125 2.628634,0 6.160714,0.267857 6.160714,0.267857 l -0.178571,-2.946428 10.178571,0 -10.178571,0 v 6.696428 l 8.928571,0 -8.928571,0 v 7.142858 l 10.178571,0 -10.178571,0" />    
    </svg> 

    </a>     
</div>

</section>

    
<?php
                if(isset($_SESSION['zalogowany'])){
 echo ''.$_SESSION[''].'<a href="wyloguj.php">Wyloguj</a>';}?>
        






<div id="przedmioty">
  <div class="kartajeden">
<div class="wrapper">
  <div class="card">
    <div class="front">
      <h1>AMD Ryzen 5 1600 AF</h1>
    
      <p class="price">$ 199.00</p>
    </div>
    <div class="right">
      <h2>AMD Ryzen 5 1600 AF</h2>
      <ul>
        <li>Width	7.7"</li>
        <li>Length	31.75"</li>
        <li>Wheelbase	14"</li>
        <li>Nose	6.875"</li>
        <li>Tail	6.25"</li>
      </ul>
      <button>Add to cart, yo</button>
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
      <h1>AMD Ryzen 5 1600 AF</h1>
      
      <p class="price">$ 124,79</p>
    </div>
    <div class="right">
      <h2>AMD Ryzen 5 1600 AF</h2>
      <ul>
        <li>Seria: Ryzen™ 5 1600 (AF)</li>
        <li>Taktowanie: 3.2 GHz</li>
        <li>Liczba rdzeni: 6 rdzeni</li>
        <li>Cache:19 MB</li>
        <li>Socket AM4</li>
      </ul>
      <button>Add to cart, yo</button>
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
      <button>Add to cart, yo</button>
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
      <button>Add to cart, yo</button>
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
      <h1>KUTAS KOZŁA</h1>
      
      <p class="price">$ 89.00</p>
    </div>
    <div class="right">
      <h2>Signature</h2>
      <ul>
        <li>Width	7.7"</li>
        <li>Length	31.75"</li>
        <li>Wheelbase	14"</li>
        <li>Nose	6.875"</li>
        <li>Tail	6.25"</li>
      </ul>
      <button>Add to cart, yo</button>
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
        <li>Width	7.7"</li>
        <li>Length	31.75"</li>
        <li>Wheelbase	14"</li>
        <li>Nose	6.875"</li>
        <li>Tail	6.25"</li>
      </ul>
      <button>Add to cart, yo</button>
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
      <h1>Jajko</h1>
     
      <p class="price">$ 89.00</p>
    </div>
    <div class="right">
      <h2>Signature</h2>
      <ul>
        <li>Width	7.7"</li>
        <li>Length	31.75"</li>
        <li>Wheelbase	14"</li>
        <li>Nose	6.875"</li>
        <li>Tail	6.25"</li>
      </ul>
      <button>Add to cart, yo</button>
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
      <h1>KUTAS KOZŁA</h1>
    
      <p class="price">$ 89.00</p>
    </div>
    <div class="right">
      <h2>Signature</h2>
      <ul>
        <li>Width	7.7"</li>
        <li>Length	31.75"</li>
        <li>Wheelbase	14"</li>
        <li>Nose	6.875"</li>
        <li>Tail	6.25"</li>
      </ul>
      <button>Add to cart, yo</button>
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