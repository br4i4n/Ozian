

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>

</head>
<body>
<h1>INGRESAR SALARIO</h1>

<Div>
<form action="funciones.php" method= "post" id="">
   <input type="number" name="comentario" id=""> 
    <input type="submit" name="Enviar" id="">
</form><br>
<?php

if($_POST)
$comentario=$_POST['comentario'];




 function calcularSalario($salario) {
    $impuesto = $salario * 0.25;
    $salarioConImpuesto = $salario - $impuesto;
    return array($salarioConImpuesto, $salario);
}
$total=$comentario;
$salarioTrabajador = $comentario;
list($salarioSinImpuesto, $salarioTotal) = calcularSalario($salarioTrabajador);



echo "Salario total: " . $total;
echo "<br>";
echo "Salario sin impuesto: " . $salarioSinImpuesto;


?>
</Div>
<style>

body {
            color: black;
            background-size: cover; 
            background-image: url("https://www.bbva.com/wp-content/uploads/2022/12/Salario-minimo-scaled.jpg");
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
            
        }
 h1 {
        box-shadow: 5px 5px 5px black;
         color: white;
         text-align: center;
         font-size: 20px;
         position: absolute;
         border-radius: 1px;
         top: 40%;
         left: 30%;
         transform: translate(-50%, -50%);
         position: absolute;
         padding: 8px;
         border: 1px solid white;
         backdrop-filter: blur(5px);
         top: 35%;
         left: 50%;
         transform: translate(-50%, -60%);
     }
  div{
            max-width: 600px;
            padding: 15px;
            backdrop-filter: blur(10px);
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            box-shadow: 5px 5px 5px black;
  }

</style>



</body>
</html>





