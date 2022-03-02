<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Galeria</title>
</head>
<body>
<?php
//Crear un array con los datos de los productos
$Productos = array(
    "Camiseta1" => array('nombreP' => 'Camiseta Manchester City', 'Precio' => '$ 250.000', "img" => 'img src="img/Camiseta2.jpg'),
    "Camiseta1" => array('nombreP' => 'Camisea Arsenal', 'Precio' => '$ 220.000', "img" => 'img src="img/Camiseta4.jpg'),
    "Camiseta3" => array('nombreP' => 'Camiseta Tottenham', 'Precio' => '$ 200.000', "img" => 'img src="img/Camiseta5.jpg'),
    "Camiseta4" => array('nombreP' => 'Camiseta Psg', 'Precio' => '$ 260.000', "img" => 'img src="img/Camiseta3.jpg'),
    "Camiseta5" => array('nombreP' => 'Camiseta Real Madrid', 'Precio' => '$ 280.000', "img" => 'img src="img/Camiseta5.jpg'),
);
var_dump($Productos);

?>

<nav>
    <h1> Acá va el menú </h1>
    <br>
</nav>
<main>
    <h2> Lista de productos </h2>
    <br>
    <br>
    <div class="card" style="width: 18rem;">
  <img src="img/camiseta2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
</ul>
</div>
</main>
<footer>
    <br>
    <br>
    <p> Desarollador: Alejandro Restrepo </P>
    <p> Correo: Alejandrohort@hotmail.com </p>
    <p> Celular: 010101010101011 </p>
</footer>




<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
