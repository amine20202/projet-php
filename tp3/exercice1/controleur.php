<?php 
include("modele.php");
$l = $_POST['login'];
$p=$_POST['pass'] ;
$u = new user($l,$p);
$va= $u->connect();
if($va){
    echo $u ;
}else{
    header("Location:authentification.html");
}





?>