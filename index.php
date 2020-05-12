<?php include('includes/db.php') ?>
<?php include('includes/header.php') ?>

<?php
function calculatiempo($fechainicio, $fechafin)
{
  $date1 = $fechainicio;
  $date2 = $fechafin;
  $diff = $date1->diff($date2);
  return $diff->days + 1;
}
?>

<div id="">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" style="max-height: 100vh">
        <img src="jpg/carro.jpg" class="d-block d-sm-block w-100 " alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Renta los mejores autos</h5>
          <p>Autos en perfecto estado y en multiples modelos</p>
        </div>
      </div>
      <div class="carousel-item" style="max-height: 100vh">
        <img src="jpg/colombia.jpg" class="d-block w-100 " alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Viaja por toda Colombia</h5>
          <p>Atrévete a explorar todo el territorio colombiano</p>
        </div>
      </div>
      <div class="carousel-item" style="max-height: 100vh">
        <img src="jpg/dinero.jpg" class="d-block w-100 " alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Ahorra dinero</h5>
          <p>Nosotros cubrimos combustible, seguro, parqueo y mantenimiento</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div style="background-image:url(jpg/verde.jpg);">
  <div style="margin-left:27vw; ">
    <img src="png/Costacar.png" style="width:46vw; " alt="">
  </div>
</div>
<div style="background-image: url(png/fondo.png);">
  <br>
  <div style="text-align:center">
    <h2>Caracteristicas</h4>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md" id="texto">
        <p><br></p>
        <h4>Membresía</h4>
      </div>
      <div class="col-md" id="texto">
        <p><br></p>
        <h4>Rentar</h4>
      </div>
      <div class="col-md" id="texto">
        <p><br></p>
        <h4>Devolver</h4>
      </div>
    </div>
  </div>
  <p></p>
  <div class="container">
    <div class="row">
      <div class="col-sm" style="text-align: center">
        <img src="png/membresia.png">
      </div>
      <div class="col-sm" style="text-align: center">
        <img src="png/rentar.png">
      </div>
      <div class="col-sm" style="text-align: center">
        <img src="png/devolver.png">
      </div>
    </div>
  </div>
  <p></p>
  <div class="container">
    <div class="row">
      <div class="col-md" id="texto">
        <h6>Hazte miembro y obtén nuestra membresía completamente gratis</h6>
      </div>
      <div class="col-md" id="texto">
        <h6>Renta ya los mejores autos del mercado cuando quieras y como quieras</h6>
      </div>
      <div class="col-md" id="texto">
        <h6>Devolver el auto nunca ha sido tan fácil, regresalo justo donde lo recogiste</h6>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md" id="texto">
        <p><br></p>
        <h4>Viaja</h4>
      </div>
      <div class="col-md" id="texto">
        <p><br></p>
        <h4>Pago</h4>
      </div>
      <div class="col-md" id="texto">
        <p><br></p>
        <h4>Ahorra</h4>
      </div>
    </div>
  </div>
  <p></p>
  <div class="container">
    <div class="row">
      <div class="col-sm" style="text-align: center">
        <img src="png/bus.png">
      </div>
      <div class="col-sm" style="text-align: center">
        <img src="png/pago.png">
      </div>
      <div class="col-sm" style="text-align: center">
        <img src="png/ahorro.png">
      </div>
    </div>
  </div>
  <p></p>
  <div class="container">
    <div class="row">
      <div class="col-md" id="texto">
        <h6>Deja atras las incomodidades del transporte público y únete a nuestro grupo de clientes satisfechos</h6>
      </div>
      <div class="col-md" id="texto">
        <h6>Estima tu viaje y realiza tu pago con los múltiples metodos que tenemos para ti</h6>
      </div>
      <div class="col-md" id="texto">
        <h6>Elimina los gastos de tener un auto propio, nosotros nos hacemos cargo del combustible y costos de parqueo</h6>
      </div>
    </div>
  </div>
  <p><br></br></p>
  <div style="text-align:center;background-image:url(jpg/verde.jpg);min-height:5vh" id="blanco">
    <h2>Precios</h2>
  </div>
  <p><br></br></p>
  <div class="row">
    <div class="col-md-6 row">
      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
          <li data-target="#demo" data-slide-to="3"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active" style="max-height: 100vh">
            <img src="jpg/kia.jpg" class="d-block w-100 " alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Kia Rio Hatchback</h5>
            </div>
          </div>
          <div class="carousel-item" style="max-height: 100vh">
            <img src="jpg/hyundai.jpg" class="d-block w-100 " alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Hyundai Accent</h5>
            </div>
          </div>
          <div class="carousel-item" style="max-height: 100vh">
            <img src="jpg/renault.jpg" class="d-block w-100 " alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Renault Duster</h5>
            </div>
          </div>
          <div class="carousel-item" style="max-height: 100vh">
            <img src="jpg/volkswagen.jpg" class="d-block w-100 " alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Volkswagen Tiguan</h5>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
    <div class="col-sm-6">
      <div style="margin-left:5vw; margin-right:5vw">
        <div class="card">
          <div class="card-header" style="background-image:url(jpg/verde.jpg)" id="blanco">
            Renta
          </div>
          <div class="card-body">
            <?php
            if(isset($_SESSION['loguser'])){
              $usuario=$_SESSION['loguser'];
            }else{
              $usuario='';
            }
            echo $usuario
            ?>
            <form action="rentar.php" method="POST">
              <div class="form-group">
                <label for="fecha-ini">Fecha de salida</label>
                <input type="date" value="<?php echo date("Y-m-d"); ?>" name="fechasalida" id="fechasalida" class="form-control">
              </div>
              <div class="form-group">
                <label for="fecha-fin">Fecha de regreso</label>
                <input type="date" value="<?php echo date("Y-m-d"); ?>" name="fecharegreso" id="fecharegreso" class="form-control">
              </div>
              <div class="form-group">
                <label for="modelocarro">Modelo</label>
                <select class="form-control" name="modeloauto" id="modeloauto">
                  <?php
                  $query = "SELECT * FROM carros";
                  $carros_tabla = mysqli_query($conn, $query);
                  while ($row = mysqli_fetch_array($carros_tabla)) { ?>
                    <option value="<?php echo $row['placa'] ?>"><?php echo $row['modelo'] ?></option>
                  <?php } ?>
                </select>
              </div>
              <button class="btn btn-success" onclick="costo_renta($('#fechasalida').val(), $('#fecharegreso').val(),$('#modeloauto').val());return false;" value="calcularpreciobtn">Calcular precio</button>
              <script>
                function costo_renta(salida, regreso, modelo) {
                  $.ajax({
                    url: 'calcular_precio.php',
                    type: 'POST',
                    data: {
                      'saldate': salida,
                      'regdate': regreso,
                      'carmodel': modelo
                    }
                  }).done(function(resp) {
                    $("#preciomon").html(resp);
                  });
                }
              </script>
              <div style="text-align:center; font-size:30px">
                <h4 id="preciomon" style="text-align:center">
                  0
                </h4>
                <input type="hidden" name="usuario" value="<?php echo $usuario ?>">
              </div>
              <?php if (isset($_SESSION['logwell'])) {
              ?>
                <input type="submit" class="btn btn-success btn-block" name="rentar_auto" value="Rentar Auto" >
              <?php } else { ?>
                <div style="color:orange">
                  <h6>Inicie sesion para rentar este auto</h6>
                </div>
              <?php } ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <p><br><br></p>
  <div style="text-align:center;background-image:url(jpg/verde.jpg);min-height:5vh" id="blanco">
    <h4> Consejos para alquilar un carro en Barranquilla </h4>
  </div>
  <p></p>
  <div style="text-align: center">
    <img src="png/consejo.png">
  </div>
  <p></p>
  <div class="container">
    <div class="row">
      <div class="col-md" id="texto">
        <p>Reserva tu carro de alquiler en Barranquilla al menos 2 semanas antes de tu viaje para conseguir un precio por debajo del promedio.</p>
      </div>
      <div class="col-md" id="texto">
        <p>Las oficinas de alquiler de carros fuera del aeropuerto de Barranquilla son en promedio un 12% más caras que las del aeropuerto.</p>
      </div>
      <div class="col-md" id="texto">
        <p>En promedio, los carros de alquiler de tipo Mini en Barranquilla son alrededor de un 41% más baratos que otro tipo de carros.</p>
      </div>
    </div>
  </div>
  <p><br><br></p>
  <div style="text-align:center;background-image:url(jpg/verde.jpg);min-height:5vh" id="blanco">
    <h4>Preguntas frecuentes sobre renta de autos en Barranquilla</h4>
  </div>
  <p></p>
  <div style="text-align: center">
    <img src="png/pregunta.png">
  </div>
  <p></p>
  <div class="container">
    <div class="row">
      <div class="col-md" id="texto">
        <h6>¿Cuánto cuesta alquilar un auto en Barranquilla?</h6>
      </div>
      <div class="col-md" id="texto">
        <h6>¿Cuál es el tipo de carro más popular en Barranquilla?</h6>
      </div>
      <div class="col-md" id="texto">
        <h6>¿Cuáles son los tipos de carros que ofrecen en Barranquilla?</h6>
      </div>
    </div>
  </div>
  <p></p>
  <div class="container">
    <div class="row">
      <div class="col-md" id="texto">
        <p>Un auto de alquiler en Barranquilla cuesta $119.937 por día.</p>
      </div>
      <div class="col-md" id="texto">
        <p>El tipo de carro más reservado en Barranquilla es Económico (Kia Rio Hatchback o similar).</p>
      </div>
      <div class="col-md" id="texto">
        <p> Comercial, Compacto, Económico, Mediano, Mini y SUV.</p>
      </div>
    </div>
  </div>
  <p></p>
  <div class="container">
    <div class="row">
      <div class="col-md" id="texto">
        <h6>¿Cuánto cuesta alquilar un carro por una semana en Barranquilla?</h6>
      </div>
      <div class="col-md" id="texto">
        <h6>¿Cuánto cuesta alquilar un carro por un mes en Barranquilla?</h6>
      </div>
      <div class="col-md" id="texto">
        <h6>¿Cómo y dondé puedo contactarlos para el alquiler de un auto en Barranquilla?</h6>
      </div>
    </div>
  </div>
  <p></p>
  <div class="container">
    <div class="row">
      <div class="col-md" id="texto">
        <p>En promedio, alquilar un carro en Barranquilla cuesta $839.561 por semana ($119.937 por día).</p>
      </div>
      <div class="col-md" id="texto">
        <p>En promedio, alquilar un carro en Barranquilla cuesta $3.598.119 por mes ($119.937 por día).</p>
      </div>
      <div class="col-md" id="texto">
        <p>Abajo puedes encontrar nuestra información de contacto, correo y teléfonos. También puedes dirigirte a nuestro punto Calle 70 # 53-28 (4 km del centro de la ciudad ).</p>
      </div>
    </div>
  </div>
  <p><br><br></p>
  <div class="footer" style="width:100wh">
    <div style="background-image:url(jpg/verde.jpg)">
      <p><br></p>
      <h6 id="blanco" style="text-align:center">Contáctanos</h6>
      <h6 id="blanco" style="text-align:center">Daniel Donado - adavendano@uninorte.edu.co</h6>
      <h6 id="blanco" style="text-align:center">Daniel Valencia - dvalencia@uninorte.edu.co</h6>
      <h6 id="blanco" style="text-align:center">Santiago Zúñiga - sazuniga@uninorte.edu.co</h6>
      <h6 id="blanco" style="text-align:center">Costacar - costacarbq@gmail.com</h6>
      <h6 id="blanco" style="text-align:center">Teléfonos - 3590692 - 3607011</h6>
      <h6 id="blanco" style="text-align:center">Copyright (c) 2020</h6>
      <p></p>
    </div>
  </div>
</div>

<?php include('includes/footer.php') ?>