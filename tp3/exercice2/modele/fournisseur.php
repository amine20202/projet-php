<?php
$tabb=array();
public function __construct($id,$value){
    $this->tabb['id']=$id;
    $this->tabb['value']=$value ;
}
public function __get($attr){
    if(isset($attr)){
        return $this->tab[$attr]
    }
}
public function __set($attr,$val){
    return $this->tab[$attr]=$val ;
}
public function __isset($attr) {
    return isset($this->tab[$attr] ); }
    public function_toString(){

        return "<option value=$this->tabb['id']>$this->tabb['value']</option>";
    }
    $f0=new fournisseur();
    $f1=new fournisseur("1252","fournisseur 1");
    $f2=new fournisseur("2523","fournisseur2");

?>