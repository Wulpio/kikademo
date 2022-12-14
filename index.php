<?php
require_once "functions.php";
setLang();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Hlavní stránka</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/custom.css">
<!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-phone"></i>+420 773 717 048</a>
                  <a class="lang" href="?lang=sk"> <img src="assets/images/flags/sk.gif" alt="Slovensky" title="Slovensky"> </a>
                  <a class="lang" href="?lang=en"> <img src="assets/images/flags/en.gif" alt="English (UK)" title="English (UK)"></a>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
          <div class="container navbar-left">
                <img src= "assets/images/logo_01.png" alt="logo">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="container navbar-right">
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link current" href="#top"><?= translate('mainPage')?>
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link external" href="services.html"><?= translate('services')?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link external" href="about.html"><?= translate('aboutAs')?></a>
              </li>              
              <li class="nav-item">
                <a class="nav-link external" href="contact.html#"><?= translate('contact')?></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                  <h4>Jezdíme pro vás<br>do všech koutů světa</h4>
                  <p></p>
                  <a href="file:///Users/kristinakralova/Desktop/kikademo-main/contact.html#" class="filled-button">Kontaktujte nás</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                  <h4>Precizně<br>Rychle a Spolehlivě</h4>
                  <p></p>
                  <a href="file:///Users/kristinakralova/Desktop/kikademo-main/services.html" class="filled-button">Prohlédněte si služby</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                  <h4>Vaše zboží<br>je s námi v bezpečí</h4>
                  <p></p>
                  <a href="file:///Users/kristinakralova/Desktop/kikademo-main/about.html" class="filled-button">zjistěte více</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="services" id="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Naše <em>Služby</em></h2>
              <span></span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/service_01.png" alt="">
              <div class="down-content">
                <h4>Mezinárodní přeprava</h4>
                <p>Zajistíme pro vás rychlou a bezpečnou přepravu zboží v rámci zemí Evropy.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/service_02.png" alt="">
              <div class="down-content">
                <h4>Vnitrostátní přeprava</h4>
                <p>Spediční služby provádíme iv rámci domácího dopravního trhu.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/service_03.jpg" alt="">
              <div class="down-content">
                <h4>Služba</h4>
                <p>Popis služby</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        
            <div class="request-form">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h4>Potřebujete poradit?</h4>
            <span>Rádi vám pomůžeme v otázkách přepravy a sestavíme cenovou nabídku šitou na míru.</span>
          </div>
          <div class="col-md-4">
            <a href="file:///Users/kristinakralova/Desktop/kikademo-main/contact.html#" class="border-button">Kontaktujte nás</a>
          </div>
        </div>
      </div>
    </div>

    <div class="fun-facts">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-content">
              <span></span>
              <h2>Efektivní logistická <em>řešení</em></h2>
              <p>Vážíme si vaší důvěry v nás. Proto se staráme, aby každá objednávka byla doručena ve správný čas, na správné místo a v perfektním stavu. Dbáme na dochvilnost, dodržení plánu a především na vaši spokojenost. 
              <br><br>S výběrem konkrétní služby vám rádi pomůžeme po telefonické domluvě.</p>
            </div>
          </div>
          <div class="col-md-6 align-self-center">
            <div class="row">
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">40000</div>
                  <div class="count-title">Najetých Kilometrů</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">300</div>
                  <div class="count-title">Úspěšných Cest</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">24</div>
                  <div class="count-title">Spokojených Klientů</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">10</div>
                  <div class="count-title">Zemí, do kterých jezdíme</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info" id="about">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6">
                  <div class="left-image">
                    <img src="assets/images/more-info.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <span></span>
                    <h2>Poznejte naši <em>společnost</em></h2>
                    <p>Společnost x10 Transport působí na trhu od r. 2010. Účelem naší společnosti je zajistit rychlou a spolehlivou přepravu zboží našich klientů a vyhovět tak všem příchozím výzvám.<br><br>Preciznost, kvalita a spolehlivost jsou jedny z hlavních důvodů, proč s námi významné světové společnosti spolupracují.</p>
                    <a href="file:///Users/kristinakralova/Desktop/kikademo-main/about.html" class="filled-button">Proč právě my?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="callback-form" id="contactus">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Kde se <em>nacházíme?</em></h2>
              <span></span>
    <div id="map">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.8227278219592!2d14.380055515590328!3d50.07088147942473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b95a9253113b1%3A0x92a26c85306a0e5b!2zUGx6ZcWIc2vDoSAxNTUvMTEzLCAxNTAgMDAgUHJhaGEgNS1Lb8Whw63FmWUsIMSMZXNrbw!5e0!3m2!1ssk!2ssk!4v1661121822626!5m2!1ssk!2ssk"width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
            </div>
          </div>
        </div>
      </div>
        

    <div class="partners">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel">
            
              <div class="partner-item">
                <img src="assets/images/client-01.png" title="1" alt="1">
              </div>
              
              <div class="partner-item">
                <img src="assets/images/client-01.png" title="2" alt="2">
              </div>
              
              <div class="partner-item">
                <img src="assets/images/client-01.png" title="3" alt="3">
              </div>
              
              <div class="partner-item">
                <img src="assets/images/client-01.png" title="4" alt="4">
              </div>
              
              <div class="partner-item">
                <img src="assets/images/client-01.png" title="5" alt="5">
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4>Sídlo společnosti</h4>
            <p>X10 TRANSPORT s.r.o. <br>Plzeňská 155/113, Košíře, <br>150 00 Praha 5, <br>Česká republika</p>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Kontakt</h4>
            <p>x10.transport.cz@gmail.com<br>+420 773 717 048</p>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Sociální sítě</h4>
            <ul class="social-icons">
              <li><a rel="nofollow" href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/transportx10/"><i class="fa fa-instagram"></i></a></li>
            </ul>
          <div class="col-md-3 footer-item last-item">
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Copyright &copy; 2022  x10 Transport s.r.o.
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/jquery.singlePageNav.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script>
      $(function() {
        // Single Page Nav
        $('#navbarResponsive').singlePageNav({
          'offset': 100,
          'filter': ':not(.external)'
        });

        // On mobile, close the menu after nav-link click
        $('#navbarResponsive .navbar-nav .nav-item .nav-link').click(function(){
          $('#navbarResponsive').removeClass('show');
        });
      });
    </script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>