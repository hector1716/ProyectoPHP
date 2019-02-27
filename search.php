<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/customColors.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/index.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Propiedades</title>
</head>

<body>

  <div class="contenedor">
  
  <?php 
     
	 $data = file_get_contents("data-1.json");
	 $products = json_decode($data, true);
	 
	 $ciudad = $_POST['ciudad'];
	 $tipo   = $_POST['tipo'];
	 $pr     = $_POST['precio'];
	 
   
		$precios = explode(";", $pr);
		$precios[0]; 
		$precios[1]; 
			
		switch ($ciudad) {
    case 1:
        $ciudad="New York";
        break;
    case 2:
        $ciudad= "Orlando";
        break;
    case 3:
        $ciudad= "Los Angeles";
        break;
		
	case 4:
        $ciudad= "Houston";
        break;
		
	case 5:
        $ciudad= "Washington";
        break;
		
	case 6:
        $ciudad= "Miami";
        break;
		}
		
  switch ($tipo) {
    case 1:
        $tipo="Casa";
        break;
    case 2:
        $tipo= "Casa de Campo";
        break;
    case 3:
        $tipo= "Apartamento";
        break;
		}

?>

 <div class="tituloContenido card">
        <h5>Resultados de la búsqueda:</h5>
        <div class="divider"></div>
      </div>
  
<?php  	
	foreach ($products as $product) {
 
	if ($ciudad == $product['Ciudad'] && $tipo== $product['Tipo'] && $pr=$precios[0] && $pr=$precios[1]) {
    
  ?>
  
 <table width="786" border="1">
  <tr>
    <td width="283" rowspan="7"><img src="img/home.jpg" width="400" height="400px"></td>
    <td width="81">Id:</td>
    <td width="385"><?php echo $product['Id'];?></td>
  </tr>
  <tr>
    <td>Direccion:</td>
    <td><?php echo $product['Direccion'];?></td>
  </tr>
  <tr>
    <td>Ciudad:</td>
    <td><?php echo $product['Ciudad'];?></td>
  </tr>
  <tr>
    <td>Telèfono:</td>
    <td><?php echo $product['Telefono'];?></td>
  </tr>
  <tr>
    <td>Codigo Postal:</td>
    <td><?php echo $product['Codigo_Postal'];?></td>
  </tr>
  <tr>
    <td>Tipo:</td>
    <td><?php echo $product['Tipo'];?></td>
  </tr>
  <tr>
    <td>Precio</td>
    <td><?php echo $product['Precio'];?></td>
  </tr>
</table>  
  <?php 
  } 
	
    }
  ?>
  </div>

  <script type="text/javascript" src="js/jquery-3.0.0.js"></script>
  <script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/index.js"></script>
</body>
</html>
