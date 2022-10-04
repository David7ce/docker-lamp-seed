<?php

/**
 * Plantilla para la página "Próximamente" que verán los usuarios que no sean el administrador
 * 
 * @package ui-proximamente
 * @license GPL2
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Paaji+2&display=swap" >
    <link rel="stylesheet" href="<?php echo plugins_url('assets/css/comingsoon.css', dirname(__FILE__)) ?>">
    <script src="<?php echo plugins_url('assets/js/comingsoon.js', dirname(__FILE__)) ?>" type="text/javascript"></script>
    <title>Próximamentee | <?php bloginfo('name') ?></title>
</head>
<body>
    <header>
        <div class="hero">
            <p><?php bloginfo('name') ?> está en construcción / mantenimiento.</p>
            <h1>PRÓXIMAMENTE EN CINES</h1>

            <hr>
            <p id="launch"></p>
        </div>
    </header>
</body>
</html>
