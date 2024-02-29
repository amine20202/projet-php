<?php 
  $tabEt = array( 
    "etud1" => "amine" ,
    "etud2" => "adel"  ,
    "etud3" => "ali" ,
     "etud4" => "mohamed"
    );
   echo "<ul>" ;
foreach( $tabEt as $key => $value){
    echo "  <li> $key : $value </li>  " ;
}
 echo"</ul>" ;
    ?>