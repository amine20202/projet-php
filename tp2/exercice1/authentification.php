<?php 
if(isset($_POST['login'] )&& ($_POST['pass'])){
    if(!empty($_POST['login']) &&($_POST['pass'] )){
        if(($_POST['login']=="admin" )&&( $_POST['pass']=="admin")){
            echo "bonjour" . $_POST['login']  ;
             echo"vous etes connectez";
        }else{
            header('Location:authentification.html');
        }
    }
}
?>