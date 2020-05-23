<?php
header('Content-type: application/vnd.ms-excel');
include("../informes/pdf/conexion.php");
header("Content-Disposition: attachment; filename=ReporteCerdos_".date('Y-m-d').".doc");

$consulta = "select * from cerdo";
$resultado = mysqli_query($mysqli, $consulta);
?>
<center>
<div style="background-color:#5F9EA0; color:black; text-align:center;">
<h2>REPORTE DE CERDOS</h2>
</div>
<table border="1">
    <tr>
        <th style="background-color:#EEE8AA; color:#000000; text-align:center;"> CODIGO </th>
        <th style="background-color:#EEE8AA; color:#000000; text-align:center;"> FECHA NACIMIENTO </th>
        <th style="background-color:#EEE8AA; color:#000000; text-align:center;"> SEXO </th>
        <th style="background-color:#EEE8AA; color:#000000; text-align:center;"> ESTADO </th>
        <th style="background-color:#EEE8AA; color:#000000; text-align:center;"> PRECIO </th>
        <th style="background-color:#EEE8AA; color:#000000; text-align:center;"> COD. CORRAL </th>      
       
    </tr>

     <?php
        if(mysqli_num_rows($resultado) != ""){
        while($filas= mysqli_fetch_array($resultado)){ 
        ?>
    
       
         <tr>
                <td><?php  echo $filas['codcerdo']; ?></td>
                <td><?php echo $filas['fechanacimiento']; ?></td>
                <td><?php echo $filas['estado']; ?></td>
                <td><?php echo $filas['sexo']; ?></td>
                <td><?php echo $filas['precio']; ?></td>
                <td><?php echo $filas['codcorral']; ?></td>
        </tr>
       
    
    <?php } } ?>
</table>
</center>