<?php

require_once __DIR__ . '/Movie.php';

// TRAMA FILM 1
$plot_movie1 = 'Dopo essere sopravvissuto a una terribile tragedia, il miliardario Oliver Queen decide di cambiare vita e di combattere il crimine e le ingiustizie nei panni di Arrow, un vigilante mascherato.';

// TRAMA FILM 2
$plot_movie2 = 'Tornati nei bassifondi di Birmingham dai campi di battaglia della Prima Guerra Mondiale, i fratelli Tommy e Arthur Shelby sono pronti ad affermarsi nel mondo della criminalità locale con le scommesse illegali e il mercato nero.';

// MANIFESTAZIONE DEL COSTRUTTORE DEL FILM 1
$movie1 = new Movie( 'Arrow', 'Oliver', 'Queen', $plot_movie1, 'Stephen Amell' );

// MANIFESTAZIONE DEL COSTRUTTORE DEL FILM 2
$movie2 = new Movie( 'Peaky Blinders', 'Thomas', 'Shelby', $plot_movie2, 'Cilian Murphy' );

// ARRAY UNICO IN MODO DA FARCI UN CICLO E STAMPARE IN PAGINA
$movies = [$movie1, $movie2];

?>