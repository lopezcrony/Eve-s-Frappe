<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Eve's Frappe</title>
</head>
<body>
    <nav>
    <?php
    include_once('menu.php');
    ?>  
    </nav>
    <section class="fondo">
    <div class="center" id="formulario1">
    <form action="" method="post">
    <div class="login-form">
    <h1>Inicio de sesión</h1>
    <input type="email" placeholder="Correo">
    <input type="password" placeholder="Contraseña">
    <button type="submit" onclick="password"  style="background-color: #cd9bb4; color: #000;
    font-weight: bold;">Inicia</button ><br><br>
    <a href="Usuario/compra.php" ><input type="button" value="Usuario" style="background-color: #cd9bb4; color: #000;
    font-weight: bold;" ></a>
    <a href="Admin/adminMenu.php" ><input type="button" value="Admin" style="background-color: #cd9bb4; color: #000;
    font-weight: bold;" ></a>
    <a href="logout.php">¿Aún no tienes cuenta? Regístrate</a>
  </div>
 
    </form>
   
    </div>
    </div>
    </section>

    <footer>
  <section class="py-5">
    <div class="container">
      <h2>Contacto</h2>
      <p>Para más información, contáctanos:</p>
      <ul>
        <li>Teléfono: +57 312 345 6789</li>
        <li>Correo electrónico: info@frappescolombia.com</li>
        <li>Dirección: Calle 100 # 20-30, Medellí, Colombia</li>
        </footer>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="../Js/MyScript.js"></script>
</body>
</html>