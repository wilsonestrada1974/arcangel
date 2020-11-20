<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ARCANGEL</title>
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>estilos/principal.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</head>

<body>
  <div class="container p-3 my-3 bg-primary text-white">
    <h1>ARCANGEL</h1>
    <p>Software de gestion administrativa de PUNTO VET CLINICA VETERINARIA</p>
  </div>
  <br>

  <div class="menu">
    <h2>MENU GENERAL</h2>
    <div class="seleccion">
      <a href="<?= base_url() ?>index.php/ctthh" title="Talento Humano">
        <div class="talento">
          <h2>Talento Humano</h1>

            <img src="<?= base_url() ?>imagenes/tthh2.png" alt="Talento Humano" width="120px">

        </div>
      </a>
      <a href="<?= base_url() ?>index.php/cadministracion" title="Gestion Administrativa">
        <div class="administrativo">
          <h2>Gestion Administrativa</h1>
            <img src="<?= base_url() ?>imagenes/admin.png" alt="Gestion administrativa" width="82px">
        </div>
      </a>
      </a>
    
    
      <a href="<?= base_url() ?>index.php/cmantenimiento" title="Gestion de mantenimiento">
        <div class="mantenimiento">
          <h2>Mantenimiento</h1>
            <img src="<?= base_url() ?>imagenes/admin.png" alt="Mantenimiento" width="82px">
        </div>
      </a>
      <a href="<?= base_url() ?>index.php/clogin" title="Salir">
        <div class="salir">
          <h2>Salir</h1>
            <img src="<?= base_url() ?>imagenes/salir.png" alt="Salir" width="82px">
        </div>
      </a>
    </div>
  </div>

</body>

</html>