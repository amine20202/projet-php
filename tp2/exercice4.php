<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
      $refmessage= "" ;
      $libmessage="";
      $prixmessage="";
      $quantitemessae="";
      $pvmessag="";
      $fourmessage="";
      

$reff="";
$libb="";
$pv =array();
$fourr=array();
$prixx="";
$qunatitee="";

$submit=false ;
if(!isset($_POST['ref'])  && (!empty($_POST['ref']))){
    $reff =$_POST['ref'];
    $submit=true ;
    
    else{
        $submit=false ;
    $refmessage="vide reference " ;
        

    }}
    if(!isset($_POST['libe'])  && (!empty($_POST['libe']))){
        $libb= $_POST['libe'] ;
        else{
            $libmessage="libelle vide" ;
        }

    }
    if(!isset($_POST['prix'])  && (!empty($_POST['prix']))){
        $libb= $_POST['prix'] ;
        else{
            $libmessage="prix vide" ;
        }

    }
    if(!isset($_POST['qunatite'])  && (!empty($_POST['qunatite']))){
        $libb= $_POST['qunatite'] ;
        else{
            $libmessage="quantite vide" ;
        }

    }
    
        if(!empty($_POST['PV'])&&(!isset($_POST['PV']))){
            $pv = $_POST['PV'] ;
        }else{
          $pvmessag ="point de vente vide"
        }
        if(!empty($_POST['four'])&&(!isset($_POST['four']))){
            $fouur = $_POST['four'] ;
        }else{
            $fourmessage= "fournisseur vide"
        }
    
    




    ?>
    
        <form action="article.php"  method="post">
       <input type="text" name="ref"> 
    <br>
   <h1>libellé :</h1>  <input type="text" name="libe"> <span> <? = $libmessage ?> </span>
    <br>
     <!--donc le post intergit avec le tableau four [] come un tableau simple c'est pa--> 
  <h1>fournisseur :</h1><select name="four[]"   multiple >
        <option value="f1" <?php if(in_array(f1,$four)) echo"Selected"?>>four1</option>
        <option  value="f2"<?php if(in_array(f2,$four)) echo"Selected"?> >four2</option>
        <option   value="f3"<?php if(in_array(f3,$four)) echo"Selected" ?> >four3</option>
        <option  value="f4" <?php if(in_array(f4,$four)) echo"Selected" ?> >four4</option> 

    </select>  <span><? = $fourmessage ?> </span>
    <br>
    <br>
    <h1>Point de Ventes</h1>

    <input   type="checkbox" name="PV[]" value="tunis" <?php if(in_array(tunis,$PV)) echo"Che"?> > tunis <br>
    <input type="checkbox" name="PV[]" value="soussa" > soussa <br>
    <input type="checkbox" name="PV[]" value="sfax" > sfax <br>
    <input type="checkbox" name="PV[]" value="nabeul" > nabeul <br>
    <input type="checkbox" name="PV[]" value="bizert" > bizert <br>
    <span> <? = $pvmessag ?> </span>
   <h1> prix : </h1><input type="number" name="prix">
    <br>

    <h1>qunatite en stock : </h1> <input type="text" name="qunatite" >  <span> <? = $quantitemessae ?> </span> 
    <br>

    <input type="submit" >
    <?php 
    if($submit){
     echo "$reff" ;
     echo"$libb";
     foreach($pv as $elemnt){
        echo "$element" ;
     }
     foreach($fourr as $element){
        echo " $element"
     }
     echo " $prixx";
     echo"$qunatitee";


    }
    
    
    
    
    
    ?>



</form>
  
</body>
</html>