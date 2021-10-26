<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <title>CLIMATIZACION</title>

<!--

Breezed Template

https://templatemo.com/tm-543-breezed

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('css/templatemo-breezed.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{asset('css/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('css/whatsapp.css')}}">




    <style>
        .container1 {
            max-width: 820px;
            margin: 0px auto;
            margin-top: 50px;
        }
        .comment {
            float: left;
            width: 100%;
            height: auto;
        }
        .commenter {
            float: left;
        }
        .commenter img {
            width: 35px;
            height: 35px;
        }
        .comment-text-area {
            float: left;
            width: 100%;
            height: auto;
        }

        .textinput {
            float: left;
            width: 100%;
            min-height: 75px;
            outline: none;
            resize: none;
            border: 1px solid grey;
        }
    </style>
    </head>
    
    <body>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<a href="https://api.whatsapp.com/send?phone=0985774379&text=Hola,%20en%20que%20podemos%20ayudarte" class="float" target="_blank">
	<i class="fa fa-whatsapp my-float"></i></a>  
  
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ url('/servicios1') }}" class="logo"><img src="images/logo.png" width="90px"/>

</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">Acerca de nosotros</a></li>
                            <li class="scroll-to-section"><a href="{{ url('/servicios3') }}">Servicios</a></li>
                            
                            <li class="scroll-to-section"><a href="#contact-us">Contactenos</a></li> 
                            <li class="scroll-to-section"><a href="{{url('/login')}}">INGRESAR</a></li>
                            
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    
    <!-- ***** Search Area ***** -->
    <div id="search">
        <button type="button" class="close">×</button>
        <form id="contact" action="#" method="get">
            <fieldset>
                <input type="search" name="q" placeholder="SEARCH KEYWORD(s)" aria-label="Search through site content">
            </fieldset>
            <fieldset>
                <button type="submit" class="main-button">Search</button>
            </fieldset>
        </form>
    </div>

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          @foreach($carruseles as $carrusel) 
          <div class="item">
            <div class="img-fill">
                <img src="{{ asset('storage').'/'.$carrusel->urlimagen_carru}}" width="1200px" height="650px">
                <div class="text-content">
                    <h5 style="font-family: 'Merriweather', serif;">{{ $carrusel->descripcion_carru }}</h5>
                  
           
                </div>
            </div>
          </div>
          @endforeach
          <!-- // Item -->
          <!-- Item -->
       
          <!-- // Item -->
          <!-- Item -->
    
          <!-- // Item -->
        </div>
    </div>
    <div class="scroll-down scroll-to-section"><a href="#about"><i class="fa fa-arrow-down"></i></a></div>
    <br><br>
 
    <section class="section" id="about">
        <div class="container1">
            <div class="row">
                <div class="col-md-12">
                
                        
                        <h3>ACERCA DE NOSOTROS</h3>
                        
                        <br><h3 style="text-align: justify">Trabajamos con las mejores marcas del mercado para garantizar su funcionamiento.  equipos de aire acondicionado, Split decorativo, multisplit , aire acondicionado por conductos ,aire tipo fancoil ,aire acondicionado tipo portátil, tipo cassette , piso techo, reparación frigoríficos cámaras de congelación y refrigeración, equipos de ventilación mecánica inyección y extracción 
</h3>
                    
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- ***** About Area Ends ***** -->

    <!-- ***** Features Big Item Start ***** -->
    
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    
    <!-- ***** Features Big Item End ***** -->


    <!-- ***** Projects Area Starts ***** -->
    
    <!-- ***** Projects Area Ends ***** -->

    <!-- ***** Testimonials Starts ***** -->
    
    <!-- ***** Testimonials Ends ***** -->
    
    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contactenos</h6>
                            <h2>Brindamos un mejor asesoramiento!</h2>
                        </div>
                        <ul class="contact-info">
                            <li><img src="images/contact-info-01.png" alt="">+12132837597</li>
                            <li><img src="images/contact-info-02.png" alt="">kmuneraherazo@gmail.com</li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="enviar2.php" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Nombre *" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="phone" type="text" id="phone" placeholder="Celular" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="email" id="email" placeholder="Email *" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Asunto">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Mensaje" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Enviar mensaje ahora!! <i class="fa fa-arrow-right"></i></button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->

    

    <!-- jQuery -->
 <!-- jQuery -->
 <script src="{{asset('js/jquery-2.1.0.min.js')}}"></script>

<!-- Bootstrap -->
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- Plugins -->
<script src="{{asset('js/owl-carousel.js')}}"></script>
<script src="{{asset('js/scrollreveal.min.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/imgfix.min.js')}}"></script> 
<script src="{{asset('js/slick.js')}}"></script> 
<script src="{{asset('js/lightbox.js')}}"></script> 
<script src="{{asset('js/isotope.js')}}"></script> 

<!-- Global Init -->
<script src="{{asset('js/custom.js')}}"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
    </body>
</html>