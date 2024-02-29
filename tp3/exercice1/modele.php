<?php 
class user {
private $tabb =array();
function __construct($login,$password){
    $this->tabb['login']= $login ;
    $this->tabb['password']=$password;
}


public function __get($attr){
    if(isset($attr))
    return $this->tabb[$attr] ;
}
public function __set($attr,$value){
return $this->tabb[$attr] =$value ;
}
public function __isset($attr) {
    return isset($this->tabb[$attr] ); }
    public function __toString (){
        return "vous etez connecter avec succes" . $this->tabb['login'];
    }
    public function connect(){
        if(($this->tabb['login']=='admin')&&($this->tabb['password']=="admin")){
            return true ;
        }else{
            return false ;
        }
    }






}

?>