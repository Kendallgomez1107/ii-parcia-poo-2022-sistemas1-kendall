<?php

$month=date("n");
$year=date("Y");
$diaActual=date("j");
 

$diaSemana=date("w",mktime(0,0,0,$month,1,$year))+7;

$ultimoDiaMes=date("d",(mktime(0,0,0,$month+1,1,$year)-1));
 
$meses=array(1=>"Enero");
?>
 
<!DOCTYPE html>
<html lang="es">
<head>
	
	<title>calendario</title>
	<meta charset="utf-8">
	<style>
		#calendar {
			font-family:Arial;
			font-size:12px;
		}
		#calendar caption {
			text-align:left;
			padding:5px 10px;
			background-color:#003366;
			color:#fff;
			font-weight:bold;
		}
		#calendar th {
			background-color:#006699;
			color:#fff;
			width:40px;
		}
		#calendar td {
			text-align:right;
			padding:2px 5px;
			background-color:silver;
		}
		#calendar .hoy {
			background-color:red;
		}
	</style>
</head>
 
<body>
<table id="calendar">
	<caption><?php echo $meses[$month]." ".$year?></caption>
	<tr>
		<th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th>
		<th>Vie</th><th>Sab</th><th>Dom</th>
	</tr>
	<tr bgcolor="silver">
		<?php
		$last_cell=$diaSemana+$ultimoDiaMes;
		
		for($i=1;$i<=42;$i++)
		{
			if($i==$diaSemana)
			{
				
				$day=1;
			}
			if($i<$diaSemana || $i>=$last_cell)
			{
				
				echo "<td>&nbsp;</td>";
			}else{
			
				if($day==$diaActual)
					echo "<td class='hoy'>$day</td>";
				else
					echo "<td>$day</td>";
				$day++;
			}
			
			if($i%7==0)
			{
				echo "</tr><tr>\n";
			}
		}
	?>
	</tr>
</table>
</body>
</html>