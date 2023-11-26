<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/pushbar.css">
    <link rel="stylesheet" href="../../css/style.css">
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

<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3 justify-content-center" id="productos">
        
        
      </div>
    </div>
  </section>
<div class="container pl-3">
<div data-pushbar-id="pushbar-menu" data-pushbar-direction="right" class="pushbar-menu pushbar p-3 ">
  
  <button data-pushbar-close> <img src="../../img/x.png" height="20px"></button>
  </img>
  <div id="carrito">
    <h2>Lista De Productos</h2>
    <ul id="items-carrito"></ul>
    <p>Total: $<span id="total-carrito">0</span></p>
    <button onclick="vaciarCarrito()">Vaciar Carrito</button>
</div>
</div>
</div>


  <?php
include_once("../footer.php");
?>

<script src="../../Js/MyScript.js"></script>
<script src="../../Js/pushbar.js"></script>
<script>
    var pushbar = new Pushbar ({
        blur: true,
        overlay: true
    });
</script>
</body>
</html>