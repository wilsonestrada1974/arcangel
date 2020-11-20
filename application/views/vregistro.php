<!DOCTYPE html>
<html lang="en">
<head>
  <title>ARCANGEL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  
</head>
<body>
  
<div class="container p-3 my-3 bg-primary text-white">
    <h1>ARCANGEL</h1>
    <p>Software de gestion administrativa de PUNTO VET CLINICA VETERINARIA</p>
</div>


    <div class="container">
      <h2>REGISTRO DE USUARIOS</h2>
      <form action="/action_page.php">
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" id="nombres" placeholder="Nombres" name="nombres">
        </div>
        <div class="form-group">
          <label for="apellidos">Apellidos:</label>
          <input type="text" class="form-control" id="apellidos" placeholder="Apellidos" name="apellidos">
        </div>
        <div class="form-group">
          <label for="Cedula">Cedula:</label>
          <input type="number" class="form-control" id="cedula" placeholder="Cedula" name="cedula">
        </div>
        <div class="form-group">
          <label for="nacimiento">Fecha de Nacimiento:</label>
          <input type="date" class="form-control" id="nacimiento" placeholder="Fecha de Nacimiento" name="nacimiento">
        </div>
        <div class="form-group">
          <label for="email">Correo Electronico:</label>
          <input type="email" class="form-control" id="email" placeholder="Ingrese su Correo" name="email">
        </div>
        <div class="form-group">
          <label for="contrasena">Contraseña:</label>
          <input type="password" class="form-control" id="direccion" placeholder="Contraseña" name="direccion">
        </div>
        <div class="form-group">
          <label for="confirmacion">Confimacion de Contraseña:</label>
          <input type="password" class="form-control" id="confirmacion" placeholder="Confimar Contraseña" name="contrasena">
        </div>
        
        
        
        <span>
            <button type="submit" class="btn btn-primary">Ingresar</button>
            <button type="submit" class="btn btn-primary">Cancelar</button>
        </span>  
        <br>
        <br>
        

      </form>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
