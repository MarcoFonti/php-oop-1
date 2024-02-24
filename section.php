<?php

require_once __DIR__ . '/movies.php';

?>

<section id="Movies">
    <h1 class="text-center text-danger mt-5">SERIE TV</h1>
    <!-- CICLO SULL'ARRAY MOVIES -->
    <?php foreach($movies as $movie) : ?>
        <article>
            <div class="card w-75 m-auto mt-4 p-2">
                <h3> <?= $movie -> title ?> </h3>
                <address> Attore: <?= $movie -> actor ?> </address>
                <p> Trama: <?= $movie -> plot ?> </p>
                <address> Nome Protagonista: <h6><?= $movie -> fullName() ?></h6></address>
            </div>
        </article>
    <?php endforeach; ?>
</section>