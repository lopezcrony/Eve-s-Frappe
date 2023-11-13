<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="vista/page/css/style.css">
    <title>Eve's Frappe</title>
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Agbalumo&display=swap');
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark position-absolute" style="width:100%; height:80px;background-color:#b97d99; right:0; left:0;">
  <div class="container-fluid pt-2">
    <div class="navegador">
    <a class="navbar-brand" href="../index.php"><img src="img/logo.png" alt="logo" width="50%" height="90%"></a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse p-3" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        <a class="nav-link active" href="clientes.php"></a>
        <a class="nav-link active " href="operaciones.php"></a>
        <a class="nav-link active" href="vista/page/login.php">Login</a>

      </div>
    </div>
  </div>
</nav>
<main>
 <section>
  <img class="mt-5" src="vista/page/img/publicidad.jpg" alt="" width="100%" height="500px">
  

</section>
  <div class="container center mt-4">

  <section class="py-2">
  <span class="tituloInicio">Las mejores frappes de Medellín</span><br><br>
  <section class="py-1">
      <div class="row">
        <div class="col-md-4">
        <div class="card" style="width: 18rem; border:2px solid #cd9bb4;">
  <img src="vista/page/img/F_Cafe.jpeg" height ="300px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Frappé de Café</h5>
    <p class="card-text">Un delicioso batido de café frío, cremoso y refrescante. Hecho con café recién hecho, leche y hielo, y endulzado a tu gusto</p>
  </div>
  </div>
        </div>
        <div class="col-md-4">
        <div class="card" style="width: 18rem; border:2px solid #cd9bb4">
  <img src="vista/page/img/frutos rojos.webp" height ="300px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Frappé de Frutos Rojos</h5>
    <p class="card-text">Un delicioso batido de café frío, cremoso y refrescante. Hecho con café recién hecho, leche y hielo, y endulzado a tu gusto</p>
  </div>
  </div>
</div>
  <div class="col-md-4">
        <div class="card" style="width: 18rem; border:2px solid #cd9bb4">
  <img src="vista/page/img/F_Arequipe.jpeg" height ="300px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Frappé de Arequipe</h5>
    <p class="card-text">
Un delicioso batido de arequipe frío, cremoso y refrescante. Hecho con arequipe, leche y hielo, y endulzado a tu gusto.</p>
  </div>
  </div>
        </div>
      </div>
        <!-- <a href="frappes.html" class="btn btn-success justify-conten-center">Ver más frappes</a> -->
    </div>
  </section>
    <div class="container center mb-5">
    <div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mt-5">
          <img src="img/logo.png" alt="">
        </div>
        <div class="col-md-6">
      <h2 class="mt-5">¿Quiénes somos?</h2>
      <hr style="background-color: #9b59b6; box-shadow: 0 0 10px #9b59b6;">

      <p>Somos una empresa colombiana dedicada a la venta de frappes. Nos esforzamos por ofrecer los mejores productos y servicios a nuestros clientes.</p>
      <p>Nuestros frappes están hechos con ingredientes frescos y de alta calidad. Contamos con una amplia variedad de sabores para todos los gustos.</p>
      <p>Ofrecemos servicio a domicilio en todo Medellín.</p>
    </div>
    </div>
    </div>
     <!-- <img src="img/publi2.jpeg" alt=""> -->
  </section>

  </div>
<section class="somos">
  
  <form action="enviar-formulario.php" method="post">
  <div class="container">
    <div class="row">
    
      <div class="col-md-6">
        <h2 class="display-4">Contacto</h2>
        <p class="lead">¿Tienes alguna pregunta? ¡No dudes en contactarnos!</p>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" required>
              <span class="text-muted">* Campo obligatorio</span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="correo">Correo electrónico</label>
              <input type="email" class="form-control" id="correo" name="correo" required>
              <span class="text-muted">* Campo obligatorio</span>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="asunto">Asunto</label>
          <input type="text" class="form-control" id="asunto" name="asunto" required>
          <span class="text-muted">* Campo obligatorio</span>
        </div>
        <div class="form-group">
          <label for="mensaje">Mensaje</label>
          <textarea class="form-control" id="mensaje" name="mensaje" required></textarea>
          <span class="text-muted">* Campo obligatorio</span>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
      <div class="col-md-6">
      <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0671806084806!2d-75.57722489055205!3d6.254879926202788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429020e5dcf31%3A0x9983ed2d2f2b4657!2sSena%20Ferrocarril!5e0!3m2!1ses-419!2sco!4v1692193975609!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</form>
</section>

<?php
include_once("vista/page/footer.php");
?>

  
</main>  
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

echo'
<script>
window.onload = function() {
  swal("Regístrate o inicia sesión para pedir", {
  backgroundColor: "#cd9bb4",
  buttons: ["Quizás luego", true],
});
};
</script>'

?>

</body>
</html>