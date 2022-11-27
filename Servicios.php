<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Servicios</title>
    <?php include('head.php') ?>
  </head>
  <body>
  
  <!-- Navegacion -->
  <div class="site-wrap">         
    <?php include('cabecera.php') ?>

    <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active" style="height: 100vh">
      <img src="images/Serv1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption d-none d-md-block">
    <h5>NUESTROS SERVICIOS</h5>
  </div>
    </div>
    <div class="carousel-item" style="height: 100vh">
      <img src="images/Serv2.jpg" alt="Chicago" width="1100" height="500">
    </div>
   
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


    <div class="border-bottom">
      <div class="row no-gutters">
        <div class="col-md-6 col-lg-3">
          <div class="w-100 h-100 block-feature p-5 bg-light">
            <span class="d-block mb-3">
              <span class="flaticon-padmasana display-4"></span>
            </span>
            <h2>Yoga</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fugiat iure eveniet perferendis odit est.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="w-100 h-100 block-feature p-5">
            <span class="d-block mb-3">
              <span class="flaticon-weight display-4"></span>
            </span>
            <h2>Pesas</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fugiat iure eveniet perferendis odit est.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="w-100 h-100 block-feature p-5 bg-light">
            <span class="d-block mb-3">
              <span class="flaticon-boxing-gloves display-4"></span>
            </span>
            
            <h2>Boxing</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fugiat iure eveniet perferendis odit est.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="w-100 h-100 block-feature p-5">
            <span class="d-block mb-3">
              <span class="flaticon-running display-4"></span>
            </span>
            <h2>Running</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fugiat iure eveniet perferendis odit est.</p>
          </div>
        </div>


      </div>
    </div> <!-- .block-feature -->

   
    
<!-- Formulario -->
<div class="site-section bg-light">
      <div class="container">
        <div class="row">               
          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Informacion de Contacto</h3>
              <p class="mb-0 font-weight-bold">Direccion</p>
              <p class="mb-4">Guayaquil - Alborada 6ta etapa, diagonal al Rc Norte</p>

              <p class="mb-0 font-weight-bold">Telefono</p>
              <p class="mb-4"><a href="#">+593 995473004</a></p>

              <p class="mb-0 font-weight-bold">Email</p>
              <p class="mb-0"><a href="#">fullgym@hotmail.com</a></p>

            </div>  
          </div>
        </div>
      </div>
    </div>
    <?php include('footer.php');?>
  </div>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
     <script src="js/form.js"></script>
  </body>
</html>