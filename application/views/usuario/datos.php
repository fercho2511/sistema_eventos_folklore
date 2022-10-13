<?php 
 $conexion=mysqli_connect('localhost','root','','dbenventos');






	$movInt=$_GET['numero'];
	$sql="SELECT id,silla FROM mapa where estado = 1 and mesa = '$movInt' GROUP BY 1"; 
$result=$mysqli->query($sql);
$options="";
while ($row=$result->fetch_array(MYSQLI_ASSOC)) { 
    $options.="<option value=\"$row[id]\">$row[id] $row[silla]</option>"; 
}
echo $options;


?>