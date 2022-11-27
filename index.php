<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <?php include('head.php') ?>
</head>
<body>
<form action="#" class="p-5 bg-white" id='registrar'>
<div  style='margin-left:25%; ' >
<h1><b>FULL GYM</b></h1>

                            <div class="row form-group">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label class="font-weight-bold" for="username">Username</label>
                                    <input type="text" id="username" class="form-control" placeholder="username">
                                </div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label class="font-weight-bold" for="password">Password</label>
                                    <input type="password" id="password" class="form-control" placeholder="password">
                                </div>
                            </div>

                            <div c  lass="row form-group">
                                <div class="col-md-12">                                    
                                    <button type="submit"  class="btn btn-primary pill px-4 py-2" onclick='login()' >Acceder</button>
                                </div>
                            </div>
                        </form>
</div>                        
</body>
<script src="js/form.js"></script>
</html>