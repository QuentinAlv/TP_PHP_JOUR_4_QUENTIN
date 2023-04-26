<?php

class Animal {

    protected string $_name;
    protected int $_age;
    protected string $_type;

    public function getName() {
        return $this->_name;
    }

    public function getAge() {
        return $this->_age;
    }

    public function getType() {
        return $this->_type;
    }

    public function setName($nameNewValue)
    {
        $this->_name = $nameNewValue;
    }

    public function setAge($ageNewValue)
    {
        if ($ageNewValue < 0) {
            $this->_age = 0;
            echo "Un animal ne peut avoir un age négatif. L'âge a été défini sur 0, veuillez renseigner une valeur correcte.";
        } 
        else {
             $this->_age = $ageNewValue;
        }
    }

    public function setType($typeNewValue)
    {
        $typeNewValues = array("Mammifère", "Oiseau", "Reptile");
        if (in_array($typeNewValue, $typeNewValues)) {
            $this->_type = $typeNewValue;
        } else {
            $this->_type = "Inconnu";
            echo " Le type de l'animal n'existe pas.\n";
        }
    }


    public function __construct( $name, $age, $type )
    {
        $this->_name = $name;
        $this->_age = $age;
        $this->_type = $type;
    }

    public function faireDuBruit() {
        return "L'animal fait du bruit.";
      }

    public function __toString()
    {
        return $this->_name . " a " . $this->_age . " ans et c'est un " . $this->_type . ". " . $this->faireDuBruit() . "\n" ;
    }

}

class Mammifere extends Animal {
    private int $_pattes;
    
    public function __construct($name, $age, $pattes) {
        parent::__construct($name, $age, "mammifère");
        $this->setPattes($pattes);
    }

    public function faireDuBruit() {
        parent:: faireDuBruit();
        return "Le mammifère rugit.";
      }
    
    public function getPattes() {
        return $this->_pattes;
    }
    
    public function setPattes($pattes) {
        $this->_pattes = $pattes;
    }
    
    public function __toString() {
        return $this->_name . " a " . $this->_age . " ans, c'est un Mammiffère à " . $this->_pattes . " pattes. " . $this->faireDuBruit() . "\n";
    }
}

class Oiseau extends Animal {
    private string $_couleurPlumage;
    
    public function __construct($name, $age, $couleurPlumage) {
        parent::__construct($name, $age, "oiseau");
        $this->setcouleurPlumage($couleurPlumage);
    }

    public function faireDuBruit() {
        parent:: faireDuBruit();
        return "L'oiseau gazouille.";
      }
    
    public function getcouleurPlumage() {
        return $this->_couleurPlumage;
    }
    
    public function setcouleurPlumage($couleurPlumage) {
        $this->_couleurPlumage = $couleurPlumage;
    }
    
    public function __toString() {
        return $this->_name . " a " . $this->_age . " ans, c'est un oiseau et son plumage est de " . $this->_couleurPlumage . " couleur différentes. " . $this->faireDuBruit() . "\n";
    }
}




//$chien->setName("Chien");
//$chien->setAge(4);
//$chien->setType("Mammifère");
$chien = new Animal("Chien", 2, "Mammifère");
$chat = new Mammifere("Chat", 3, 4);
$mouette = new Oiseau ("Mouette", 2, 2);
echo $chien;
echo $chat;
echo $mouette;