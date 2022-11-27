<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contacto</title>
    <?php include('head.php') ?>
  </head>
  <body>
  
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
      <img src="images/con1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption d-none d-md-block">
    <h5>NUESTROS SERVICIOS</h5>
  </div>
    </div>
    <div class="carousel-item" style="height: 100vh">
      <img src="images/con2.jpg" alt="Chicago" width="1100" height="500">
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


  
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <form action="#" class="p-5 bg-white" id='contacto'>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="nombre">Nombre</label>
                  <input type="text" id="nombre" class="form-control" placeholder="Nombre" onkeypress='return soloLetras(event)' >
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="text" id="email" class="form-control" placeholder="Email" >
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="telefono">Telefono</label>
                  <input type="text" id="telefono" class="form-control" placeholder="Telefono" onkeypress=' return soloNumeros(event)' >
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="mensaje">Mensaje</label> 
                  <textarea name="mensaje" id="mensaje" cols="30" rows="5" class="form-control" placeholder="Mensaje"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary pill px-4 py-2" onclick='ingresarCliente("contacto")'>Enviar</button>
                </div>
              </div>

  
            </form>
          </div>

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