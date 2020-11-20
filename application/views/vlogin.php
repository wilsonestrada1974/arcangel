<!DOCTYPE html>
<html lang="en">
<head>
  <title>ARCANGEL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
</head>
  <body>

    <div class="container p-3 my-3 bg-primary text-white">
      <h1>ARCANGEL</h1>
      <p>Software de gestion administrativa de PUNTO VET CLINICA VETERINARIA</p>
    </div>
    
    <br>
    <div class="container">
      <h2>INICIO DE SESION</h2>
      <form action="/action_page.php">
        <div class="form-group">
          <label for="email">Correo Electronico:</label>
          <input type="email" class="form-control" id="email" placeholder="Ingrese su Correo" name="email">
        </div>
        <div class="form-group">
          <label for="pwd">Contraseña:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Ingrese su Contraseña" name="pswd">
        </div>
        
        <span>
            <button type="submit" class="btn btn-primary">Ingresar</button>
            <button type="submit" class="btn btn-primary">Cancelar</button>
        </span>  
        <br>
        <br>
        <a href= "<?php echo base_url();?>index.php/cregistro">Registrese.</a>

      </form>
    </div>

  </body>
</html>