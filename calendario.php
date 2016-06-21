<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>calendario</title>
    <style>
        table,tr,td{
            border-collapse: collapse;
            border:2px solid black;
        }
    </style>
</head>
<body>
  <form action="calendario.php" method="post">
      <input type="text" name="año" required>
      <input type="submit" value="mostrar calendario">
  </form>
   <?php
$year = 2000;
    if(isset($_POST['año']) && $_POST['año'] != "") $year = $_POST['año'];
    /*if($year % 4 == 0) echo "<script>alert('el año ".$year." es biciesto')</script>";*/
$meses=13;
function mes($n)
{
    if($n == 1) return "Enero" ;
    if($n == 2) return "Febrero";
    if($n == 3) return "Marzo";
    if($n == 4) return "Abril";
    if($n == 5) return "Mayo";
    if($n == 6) return "Junio";
    if($n == 7) return "Julio";
    if($n == 8) return "Agosto";
    if($n == 9) return "Septiembre";
    if($n == 10) return "Octubre";
    if($n == 11) return "Noviembre";
    if($n == 12) return "Diciembre";      
}
?>
<h1>Calendario año <?php echo $year;?></h1>
<table>
<?php

for($a=1;$a< $meses;$a++)
{
 echo "<tr><td colspan='7' style='text-align:center'>".mes($a)."</td></tr><tr>"; 
    if($a == 1 || $a == 3 || $a == 5 || $a == 7 || $a == 8 || $a == 10 || $a == 12 )
    {
        for($b=1;$b<32;$b++)
        {
            echo "<td>".$b."</td>";
            if($b == 7 || $b == 14 || $b == 21 || $b == 28) echo "</tr>";
        }        
    }
    if($a == 4 || $a == 6 || $a == 9 || $a == 11 )
    {
        for($b=1;$b<31;$b++)
        {
            echo "<td>".$b."</td>";
            if($b == 7 || $b == 14 || $b == 21 || $b == 28) echo "</tr>";
        }        
    }
    if($year % 4 == 0 && $a == 2 )
    {
        for($b=1;$b<30;$b++)
        {
            echo "<td>".$b."</td>";
            if($b == 7 || $b == 14 || $b == 21 || $b == 28) echo "</tr>";
        }        
    }elseif($a == 2)
    {
       for($b=1;$b<29;$b++)
        {
            echo "<td>".$b."</td>";
            if($b == 7 || $b == 14 || $b == 21 || $b == 28) echo "</tr>";
        } 
    }             
}

?>
</table> 
</body>
</html>
