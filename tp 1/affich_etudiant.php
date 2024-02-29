<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   table{
    border-collapse :collapse ;

   }
   table ,tr,td {
    border : 2px solid black ;
    
   }
   
</style>
<body>
<?php 
require "util.php " ;
echo "bonjour";
echo "<table border=1>" ;
foreach($tableau as $key => $value){  
 $chaine =   moye($value) ;
    echo "<tr> <td style = 'background-color:$chaine ;'> $key </td><td style = 'background-color:$chaine ;'> $value </td> </tr>" ;
} ;
echo "</table>" ;


?>
</body>
</html>

