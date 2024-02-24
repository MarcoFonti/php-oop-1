<?php

class Movie 
{
    // VARIABILI
    public $title;
    public $name;
    public $surname;
    public $plot;
    public $actor;
    public $full_name;

    // COSTRUTTORE
    function __construct($title, $name, $surname, $plot, $actor)
    {
        $this -> title = $title;
        $this -> name = $name;
        $this -> surname = $surname;
        $this -> plot = $plot;
        $this -> actor = $actor;
        $this -> fullName();
    }

    // METODO 
    public function fullName(){
     return $this -> full_name = $this -> name . ' ' . $this -> surname;
    }
}

?>
