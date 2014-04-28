<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="<?php echo $view['assets']->getUrl('bundles/trivial/images/favicon.ico'); ?>" />
        <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/trivial/css/player/player.css'); ?>" />
        <script src="<?php echo $view['assets']->getUrl('bundles/trivial/js/libs/jquery-1.9.0/jquery.min.js'); ?>"></script>
        <title>Trivial Wars</title>
        <style type="text/css">
            @font-face
            {
                font-family: "starwars";
                src: url("<?php echo $view['assets']->getUrl('bundles/trivial/fonts/Starjhol.ttf'); ?>");
            }
            body{
                background-image: url("<?php echo $view['assets']->getUrl('bundles/trivial/images/fondo.jpg'); ?>");
            }
        </style>
    </head>
    <body>
        <div id="cabecera">
            <div id="logo">
                <p id="titulo">trivial wars</p>
            </div>
            <div id="userSession" align="right">
                <p class="textoUsuario">¡¡Bienvenido Usuario!!
                    <input id="closeSessionButton" value="cerrar sesion" onmouseover="document.getElementById('sablelaser').play()"/></p>
            </div>
        </div>
        
        <?php echo $view->render('AcmeTrivialWarsBundle:Trivial/User:'.$content) ?>
        
    </body>
</html>
