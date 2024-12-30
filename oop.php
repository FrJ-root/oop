<?php
class user{
    public $name;
    private $email;
    function set_name($name){
        $this->name = $name;
    }
    function set_email($email){
        $this->email = $email;
    }
    public function getter($name , $email){
        return $this->name=$name && $this->email=$email;
    }
function afficherDetails(){
    foreach($this->displayname as $name->name){
          $this->$name= getter();
    }
}
}
class auteur extends user{
    private $biographie;
    
    

}
class admin extends user{
    private $role = "Super Administrateur";
    
    function getter($role){
        return $this->$role;
    }
}

class article{
    private $titre;
    private $contenu;
    private $datePublication;
    private $auteur;
    __construct($titre,$contenu,$datePublication,$auteur){
         
    }

}
?>