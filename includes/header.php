<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Costacar</title>
  <!-- Bootstrap y css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/css.css">
  
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="background-image:url(jpg/verde.jpg); opacity:0.9">
  <a class="navbar-brand" href="index.php" id="blanco">Costacar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#caracteristicas" id="blanco">Caracteristicas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#precios" id="blanco">Precios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#consejos" id="blanco">Consejos</a>
      </li>
    </ul>
    <?php
    if (isset($_SESSION['logwell'])) {
    ?>
      <!--<li class="nav-item navbar-nav">
        <a class="" id="blanco">Bienvenido <?php echo $_SESSION['loguser'] ?></a>
      </li>
    -->
      <li class="nav-item navbar-nav">
        <a class="nav-link" href="user_logout.php" id="blanco">Cerrar sesión</a>
      </li>
    <?php
    } else {
    ?>
      <div class="nav-item">
        <a class="btn " type="button" id="blanco" data-toggle="modal" data-target="#loginmodal">Ingresar</a>
      </div>
      <div class="nav-item">
        <a class="btn " type="button" id="blanco" data-toggle="modal" data-target="#registromodal">Registrarse</a>
      </div>
    <?php
    }
    ?>
  </div>
</nav>
<div class="modal fade" id="registromodal" tabindex="-1" role="dialog" aria-labelledby="registromod" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-image:url(jpg/verde.jpg)">
        <h5 class="modal-title" id="blanco">Registrarse</h5>
        <button type="button" class="close" id="blanco" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background-image:url(png/fondo.png)">
        <form action="user_reg.php" method="POST">
          <div class="form-group">
            <label for="usuario">Nombre de usuario</label>
            <input type="text" id="usuario" class="form-control" onkeyup="userrep($('#usuario').val())" name="usuario" placeholder="Usuario">
            <script>
                function userrep(usuario) {
                  $.ajax({
                    url: 'verificar.php',
                    type: 'POST',
                    data: {
                      'usuario': usuario,
                    }
                  }).done(function(resp) {
                    $("#rep_user").html(resp);
                  });
                }
              </script>
          </div>
          <h6 id="rep_user" style="color:red"></h6>
          <div class="form-group">
            <label for="pass">Contraseña</label>
            <input type="password" class="form-control" name="pass" placeholder="Contraseña">
          </div>
          <div class="form-group">
            <label for="nombres">Nombres</label>
            <input type="text" class="form-control" name="nombres" placeholder="Nombres">
          </div>
          <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" placeholder="Apellidos">
          </div>
          <div class="form-group">
            <label for="correo">Correo electronico</label>
            <input type="email" class="form-control" onkeyup="emailrep($('#email').val())" name="correo" id="email" placeholder="ejemplo@ejemplo.com">
            <script>
                function emailrep(email) {
                  $.ajax({
                    url: 'verificar.php',
                    type: 'POST',
                    data: {
                      'email': email,
                    }
                  }).done(function(resp) {
                    $("#rep_email").html(resp);
                  });
                }
              </script>
          </div>
          <h6 id="rep_email" style="color:red"></h6>
          <br>
          <input type="submit" class="btn btn-success btn-block" name="user_reg" value="Registrar">
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="loginmod" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-image:url(jpg/verde.jpg)">
        <h5 class="modal-title" id="blanco">Ingresar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background-image:url(png/fondo.png)">
        <form action="user_login.php" method="POST">
          <div class="form-group">
            <label for="usuario">Nombre de usuario</label>
            <input type="text" class="form-control" name="usuario" id="userlogin" placeholder="Usuario">
          </div>
          <div class="form-group">
            <label for="pass">Contraseña</label>
            <input type="password" id="passlogin" class="form-control" name="pass" placeholder="Contraseña">
          </div>
          <input type="submit" onclick="credenciales($('#userlogin').val(),$('#passlogin').val())" class="btn btn-success btn-block" name="login" value="Ingresar">
          <script>
                function credenciales(user,pass) {
                  $.ajax({
                    url: 'verificar.php',
                    type: 'POST',
                    data: {
                      'user': user,
                      'pass': pass,
                    }
                  }).done(function(resp) {
                    alert(resp);
                  });
                }
              </script>
        </form>
      </div>
    </div>
  </div>
</div>