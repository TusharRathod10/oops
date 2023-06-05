<?php
// Interface definition
interface Name {
  public function name();
}
interface Surname {
  public function surname();
}

// Class definitions
class Pirate implements Name,Surname {
  public function name() {
    echo " Johnny ";
  }
  public function surname() {
    echo " Deep ";
  }
}

class Celebrity implements Name,Surname {
    public function name() {
        echo " Akshay ";
      }
      public function surname() {
        echo " Kumar ";
      }
}

class Cricketer implements Name,Surname {
    public function name() {
        echo " Rohit ";
      }
      public function surname() {
        echo " Sharma ";
      }
}

// Create a list of animals
$pirate = new Pirate();
$celebrity = new Celebrity();
$cricketer = new Cricketer();
$stars = array($pirate, $celebrity, $cricketer);

// Tell the animals to make a sound
foreach($stars as $star) {
  $star->name();
  $star->surname();
  echo '<br>';
}
?>