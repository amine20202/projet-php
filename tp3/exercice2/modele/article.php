<?php 
class article {
    $tab=array();
    public function __construct($refernce,$libelle,$quantite,$prix){
        $this->tab['reference']= $refernce;
        $this->tab['libelle'] = $libelle ;
        $this->tab['quantite'] = $quantite ;
        $this->tab['prix']->$prix ;
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
        public function __toString (){
           $s="<table><tr> <td>$this->tab['reference'] </td> <td>$this->tab['libelle'] </td>
            <td>$this->tab['quantite']  </td> <td>$this->tab['prix'] </td> </tr>  </table>;"
            return $s ;
        }
    
}

?>