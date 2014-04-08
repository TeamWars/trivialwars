<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--<link rel="icon" sizes="16x16" href="{{ asset('favicon.ico') }}" />-->
        <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/trivial/css/index/principal.css'); ?>" />
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
            <div id="registroUsuarios" align="right">
                <form>
                    <p class="textoUsuario">¡¡Bienvenido Usuario!!</p><br />
                    <input id="closeSessionButton" class="botonUsuarios" value="cerrar sesion"/>
                </form>

            </div>
        </div>
        <div id="cuerpo" align="center">
            <div id="trailer" align="center">
                <img src="<?php echo $view['assets']->getUrl('bundles/trivial/images/intro.gif'); ?>"/>
            </div>

            <div id="menu" aling="center">
                <a href="<?php echo $view["router"]->generate("board") ?>"><button class="botonMenu" onmouseover="document.getElementById('sablelaser').play()">crear partida</button></a>
                <button class="botonMenu" onmouseover="document.getElementById('sablelaser').play()">unirse a partida</button>
                <button class="botonMenu" onmouseover="document.getElementById('sablelaser').play()">configuracion del juego</button>
                <button class="botonMenu" onmouseover="document.getElementById('sablelaser').play()">sobre nosotros</button>
            </div>
        </div>
        <hr width="100%">

        <div id="pie"> 
            <audio id="sablelaser" src="<?php echo $view['assets']->getUrl('bundles/trivial/audio/saber1.wav'); ?>"></audio>
            <audio src="<?php echo $view['assets']->getUrl('bundles/trivial/audio/mainTheme.wav'); ?>" controls="controls"></audio>
        </div>
    </body>
</html>
