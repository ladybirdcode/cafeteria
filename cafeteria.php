<h1>Evaluación Estructura de Control</h1>
<form action="cafeteria.php" method="post">
  <p>Tipo de comida:<br/>
  <input type="radio" name="comida" value="Desayuno" >Desayuno (L. 22.00)</p>
  <input type="radio" name="comida" value="Almuerzo" >Almuerzo (L. 30.00)</p>
  <input type="radio" name="comida" value="Cena" checked>Cena (L. 40.00)</p>
  <p><label>Ingrese número de personas:<label>
  <input type="number" name="personas"></p>
  <p><input type="submit" name="enviar" value="Aceptar"</p>
</form>

<?php
if(isset($_POST['enviar']))
{
 $comida = htmlentities($_POST['comida']);
 $personas = htmlentities($_POST['personas']);
 if(strlen($comida)>0 && strlen($personas)>0)
 {
   switch($comida)
   {
     case 'Desayuno':
     $total = 22 * $personas;
     break;
     case 'Almuerzo':
     $total = 30 * $personas;
     break;
     case 'Cena':
     $total = 40 * $personas;
     break;
     default:
     echo "La opcion de comida no valido";
     $total=0;
     break;
   }
echo  "</br></br> Su total es: L$total";
    if ($personas >=3) {
      for ($i=0; $i <$personas  ; $i++)
       {

        echo "</br><font color='red'>\"Recibe jarra GRATIS\"</font>";
      }
   }


}else{
  echo "<font color='red'>Escriba número de personas.</font>";

 }


}


 ?>
