<?php 
$tableau =array(
    //tableau assosiatif
    "amine" =>"13.25" ,
    "adel" => "14.36",
    "chiheb" => "12.36",
    "ali" =>"9.36"


) ;
function moye ($moyenne){
    if($moyenne >10){
        return "green";

    }else{
        return "red";
    }
};
?>