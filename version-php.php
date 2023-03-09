<!DOCTYPE html>
<html>
 <head>
    <title>Recepción POST usando PHP </title>
 </head>
 
 <body>
   <h1>Recepción POST usando PHP</h1> 
   <p>Esta página web simple será usada para hacer recepción de dos parámetros enviados mediante petición POST HTTP por el ESP32 y serán representados por pantalla. </p>
   <p>Se enviarán dos parámetros: El canal ADC que se está realizando la medición y el valor del ADC</p>
   
   <div>
    <p>Canal ADC: <?php echo "AD1_6" ?></p>
    <p>Valor ADC: <?php echo 2048 ?>   </p> 
   </div>
   <?php echo "ADC1_6" ?>
   <p> </p>
</body>
</html>