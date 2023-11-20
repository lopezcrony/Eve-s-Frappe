<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Eve's Frappe</title>
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Agbalumo&display=swap');
</style>
</head>
<body>
    <?php
    include_once('usuarioMenu.php');
    ?>
<div class="container mt-5">
  <span class="tituloInicio ">Las mejores frappes de Medellín</span>
</div>
    
    <div class="catalogo mb-5">
    <p class="lead">Encuentra la frappe perfecta para ti</p>
      <div class="row">
        <div class="col-md-3">
        <div class="card" style="width: 18rem; border:2px solid #cd9bb4">
  <img src="../img/cafeLeche.jpeg" height ="300px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Frappé de Café y Canela</h5>
    <p class="card-text">Un delicioso batido que contiene café fuerte, leche, hielo y leche condensada, que le da un sabor dulce y cremoso. Se espolvorea con canela</p>
  </div>
  </div>
        </div>
        <div class="col-md-3">
        <div class="card" style="width: 18rem; border:2px solid #cd9bb4">
  <img src="../img/fresasCrema.jpeg" height ="300px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Frappé de Fresas con Crema</h5>
    <p class="card-text">Un delicioso batido que contiene fresas naturales, leche, hielo y un poco de azúcar. Se corona con crema batida y fresas frescas</p>
  </div>
  </div>
</div>
<div class="col-md-3">
        <div class="card" style="width: 18rem; border:2px solid #cd9bb4">
  <img src="../img/ChocolateChips.jpeg" height ="300px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Frappé de Café Chips</h5>
    <p class="card-text">Un delicioso batido que contiene café, leche, hielo y jarabe de chocolate, además de chispas de chocolate y malvaviscos como toppings</p>
  </div>
  </div>
</div>
  <div class="col-md-3">
        <div class="card" style="width: 18rem; border:2px solid #cd9bb4">
  <img src="../img/vainillaArequipe.jpeg" height ="300px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Frappé de Vainilla Arequipe</h5>
    <p class="card-text">
Un delicioso batido de vainilla con crema batida y caramelo.Combina el sabor suave de la vainilla con el toque cremoso de la crema batida y el sirope de caramelo.</p>
  </div>
  </div>
        </div>
      </div>



      <div class="row mt-4">
        <div class="col-md-3">
        <div class="card" style="width: 18rem; border:2px solid #cd9bb4">
  <img src="../img/cafeLeche.jpeg" height ="300px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Frappé de Café y Canela</h5>
    <p class="card-text">Un delicioso batido que contiene café fuerte, leche, hielo y leche condensada, que le da un sabor dulce y cremoso. Se espolvorea con canela</p>
    <button type="submit" class="agregar">Agregar</button><br>
    <button type="submit" class="comprar">Comprar</button>
  </div>
  </div>
        </div>
        <div class="col-md-3">
        <div class="card" style="width: 18rem; border:2px solid #cd9bb4">
  <img src="../img/fresasCrema.jpeg" height ="300px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Frappé de Fresas con Crema</h5>
    <p class="card-text">Un delicioso batido que contiene fresas naturales, leche, hielo y un poco de azúcar. Se corona con crema batida y fresas frescas</p>
  </div>
  </div>
</div>
<div class="col-md-3">
        <div class="card" style="width: 18rem; border:2px solid #cd9bb4">
  <img src="../img/ChocolateChips.jpeg" height ="300px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Frappé de Café Chips</h5>
    <p class="card-text">Un delicioso batido que contiene café, leche, hielo y jarabe de chocolate, además de chispas de chocolate y malvaviscos como toppings</p>
  </div>
  </div>
</div>
  <div class="col-md-3">
        <div class="card" style="width: 18rem; border:2px solid #cd9bb4">
  <img src="../img/vainillaArequipe.jpeg" height ="300px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Frappé de Vainilla Arequipe</h5>
    <p class="card-text">
Un delicioso batido de vainilla con crema batida y caramelo.Combina el sabor suave de la vainilla con el toque cremoso de la crema batida y el sirope de caramelo.</p>
  </div>
  </div>
        </div>
      </div>
        <!-- <a href="frappes.html" class="btn btn-success justify-conten-center">Ver más frappes</a> -->
    </div>
    </div>
  </section>

  <?php
include_once("../footer.php");
?>
</body>
</html>