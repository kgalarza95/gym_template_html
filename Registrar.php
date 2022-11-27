<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registrar Cliente</title>
    <?php include('head.php') ?>
</head>

<body>

    <div class="site-wrap">
    <?php include('cabecera.php') ?>
       
        <div class="site-section bg-light">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-lg-8 mb-5">
                        <form action="#" class="p-5 bg-white" id='registrar'>
                            <div class="row form-group">
                                <div class="col-md-12 mb-3 mb-md-0">
                                    <label class="font-weight-bold" for="nombre">Nombre</label>
                                    <input type="text" id="nombre" class="form-control" placeholder="Nombre" onkeypress="return soloLetras(event)">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="font-weight-bold" for="email">Email</label>
                                    <input type="text" id="email" class="form-control" placeholder="Email">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12 mb-3 mb-md-0">
                                    <label class="font-weight-bold" for="telefono">Telefono</label>
                                    <input type="text" id="telefono" class="form-control" placeholder="Telefono" onkeypress='return soloNumeros(event)'>
                                </div>
                            </div>

                            <div c  lass="row form-group">
                                <div class="col-md-12">                                    
                                    <button type="submit"  class="btn btn-primary pill px-4 py-2" onclick="ingresarCliente('registrar')">Registrar</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-4">
                        <div class="p-4 mb-3 bg-white">
                            <h3 class="h5 text-black mb-3">Listas de Clientes</h3>
                            <div id="clientes" ></div>
                            <div id="nuevoCliente"></div>
                            <script>
                                var div = document.getElementById('clientes');
                                var clientes = ['Kerly Salinas','Nahin Valarezo',
                                'Maikol Gilces','Kevin Galarza','Dantee Astudillo'];
                                var data = '';
                                 for(var i=0 ; i< clientes.length;i++){
                                    data += '<p class="mb-0"><a href="#">'+clientes[i]+'</a></p>';    
                                 }
                                 div.innerHTML = data;
                            </script>                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('footer.php');?>                                
    </div>

    

</body>

</html>