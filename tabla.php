<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="utf-8">
<title>tabla del 1 al 50 </title>
</head>
<body>
<?php
define('TAM',5);
define('TAM2',10);
echo "<table border=1>"; 
$n=1;
for ($n1=1; $n1<=TAM; $n1++)
{
 if ($n1 % 2 == 0) 
 echo "<tr bgcolor=#bdc3d6>";
 else
 echo "<tr>"; 
 for ($n2=1; $n2<=TAM2; $n2++)
 {
 echo "<td>", $n, "</td>"; 
 $n=$n+1; 
 }
 echo "</tr>"; 
}
echo "</table>"; 
?>
</body>
</html>