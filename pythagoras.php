<?php
$a = 4;
$b = 6;
$obdelnikobsah = $a * $b;
//echo 'Obsah obdélníku o stranách a: ' . $a . ' a b: ' . $b . ' je ' . $obdelnikobsah . '. ';
$strana = 6;
$uhel = 60;
$vyska = sin(deg2rad($uhel)) * $strana; //sinus 60 stupňů * strana o délce 6 (cm)
$trojuhelnikobsah = $strana / 2 * $vyska;
//echo 'Rovnostranný trojúhelník o straně délky ' . $strana . ' cm a úhlu ' . $uhel . ' stupňů je ' . round($trojuhelnikobsah, 0) . ' cm2.';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Výpočet obsahu 1</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>

  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navigace</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Úvodní stránka <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Výpočet obvodu</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Výpočet obsahu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Další...</a>
      </li>
    </ul>
</nav>
  <br></br>
  <div class = "container">
  <h2>Výpočet obsahu 1</h2>
  <br></br>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="row">text</th>
      <th scope="row">Výpočet obsahu obdélníku</th>
      <th scope="row">Výpočet obsahu rovnostranného trojúhelníku</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Nutné parametry</th>
      <td>délky stran</td>
      <td>délky stran, výška trojúhelníku (lze dopočítat)</td>
    </tr>
    <tr>
      <th scope="row">Vzorec pro výpočet</th>
      <td>S = strana a × strana b</td>
      <td>výška trojúhelníku × strana ÷ 2</td>
    </tr>
    <tr>
      <th colspan="3">Příklad</th>
    </tr>
    <tr>
      <th scope="row">Známé údaje</th>
      <td>strana a: <?php echo $a?> cm, strana b: <?php echo $b?> cm</td>
      <td>strana a: <?php echo $strana?> cm</td>
    </tr>
    <tr>
      <th scope="row">Dosazení do vzorce</th>
      <td>S = <?php echo $a?> cm × <?php echo $b?> cm</td>
      <td>S = <?php echo $strana . ' cm × ' . $vyska . ' cm ÷ 2'?></td>
    </tr>
    <tr>
      <th scope="row">Výsledek</th>
      <td>S = <?php echo $obdelnikobsah?> cm2</td>
      <td>S = <?php echo round($trojuhelnikobsah, 0) . ' cm2(zaokrouhleno)'?></td>
    </tr>
  </tbody>
</table>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Výpočet výšky rovnostranného trojúhelníku</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">Výšku je třeba dopočítat s pomocí sinu úhlu, který svírají strany trojúhelníku. 
      Velikost všech vnitřních úhlů rovnostranného trojúhelníku známe, neboť všechny strany spolu svírají stejný úhel a 
      součet vnitřních úhlu je 180 stupňů - velikost jednoho úhlu je tedy 60 stupňů...
     </tr>
      </tbody>
</table>

  </div> <!-- konec kontejneru-->
  
  <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Předchozí</a>
    </li>
    <li class="page-item disabled"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Další</a>
    </li>
  </ul>
</nav>

  </body>
</html>