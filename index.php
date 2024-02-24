<?php

class Movie 
{

    // VARIABILI
    public $name;
    public $surname;
    public $plot;
    public $actor;
    public $full_name;

    // COSTRUTTORE
    function __construct($name, $surname, $plot, $actor)
    {
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

// TRAMA FILM 1
$plot_movie1 = 'Dopo essere sopravvissuto a una terribile tragedia, il miliardario Oliver Queen decide di cambiare vita e di combattere il crimine e le ingiustizie nei panni di Arrow, un vigilante mascherato.';

// TRAMA FILM 2
$plot_movie2 = 'Tornati nei bassifondi di Birmingham dai campi di battaglia della Prima Guerra Mondiale, i fratelli Tommy e Arthur Shelby sono pronti ad affermarsi nel mondo della criminalità locale con le scommesse illegali e il mercato nero.';

// MANIFESTAZIONE DEL COSTRUTTORE DEL FILM 1
$movie1 = new Movie( 'Oliver', 'Queen', $plot_movie1, 'Stephen Amell' );

// MANIFESTAZIONE DEL COSTRUTTORE DEL FILM 2
$movie2 = new Movie( 'Thomas', 'Shelby', $plot_movie2, 'Cilian Murphy' );

// ARRAY UNICO IN MODO DA FARCI UN CICLO E STAMPARE IN PAGINA
$movies = [$movie1, $movie2];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movie</title>
</head>
<body>
    <!-- CICLO SULL'ARRAY MOVIES -->
    <ul>
    <?php foreach($movies as $movie) : ?>
        <li>NOME PROTAGONISTA FILM : <h5> <?= $movie -> fullName() ?> </h5></li>
        <li> TRAMA: <?= $movie -> plot ?> </li>
        <li> NOME VERO DELL'ATTORE: <h5> <?= $movie -> actor ?> </h5></li>
    <?php endforeach; ?>
    </ul>
</body>
</html>