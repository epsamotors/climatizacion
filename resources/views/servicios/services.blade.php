
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
                            <li class="scroll-to-section"><a href="{{ url('/servicios2') }}" class="active">Home</a></li>
                            
                            <li class="scroll-to-section"><a href="{{ url('/servicios3') }}">Servicios</a></li>
                            
                            
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

   
    <style>
        .grid__name {
            width: auto;
            min-height: 50px;
            padding: 1px;
            margin-right: auto;
            margin-left: auto;
        }
        .grid-item2 {
            width: 400px;
            height: 620px;
            overflow: hidden;
            background-color: white;
            box-sizing: border-box;
            margin-bottom: 20px;
            margin-top: 10px;
            box-shadow: 5px 8px 13px black;
            justify-content: center;
            align-items: center;
            margin-right: auto;
            margin-left: auto;
}
     .grid-item3{
        width: 300px;
        min-height: 50px;
        padding: 5px;
        overflow: hidden;
        margin-right: auto;
  margin-left: auto;


    }
    .grid-image{
        width: auto;
        height: 300px;
        margin-right: auto;
  margin-left: auto;



    }
    .grid__description {

    width: auto;
    height: 260px;
    padding: 1px;
    text-align: justify;
    overflow: hidden;
}
.container1 {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-content: space-around;
    justify-content: space-around;
    padding: 30px;
}






    </style>

    
    <section id="projects">
		<h2 class="title text-center">Nuestros servicios</h2>
          
        <div class="container1 ">
       
                <div class="col-md-12">
                
                    <div class="row">
                    @foreach($productos as $producto) 
                        <div class="col-md-4">
                        
                            <div class="grid-item2">
                                <div class="grid__name"><h2>{{ $producto->titulo }}</h2></div>
                    
                                       <div class="grid-image">
                                            <br>
                                             <img src="{{ asset('storage').'/'.$producto->urlimagen}}" width="400px" height="300px"/>

                                        </div>
               
                                    <div class="grid__description">
                                    <br>
                                   <textarea name="textarea" rows="20" cols="47" disabled>{{ $producto->descripcion }}
                                    </textarea>
                              
                                    </div>
                            </div>              
                            
                        </div>
                        @endforeach 
            </div>
           
         </div>
        
        </main>
        
	</section>


    <!-- ***** Projects Area Starts ***** -->
    
    <!-- ***** Projects Area Ends ***** -->

    <!-- ***** Testimonials Starts ***** -->
    
    <!-- ***** Testimonials Ends ***** -->
    
    <!-- ***** Contact Us Area Starts ***** -->
    
    <!-- ***** Contact Us Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <br>

    

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


