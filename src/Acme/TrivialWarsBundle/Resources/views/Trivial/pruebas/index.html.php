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
            #logo{
                width: 100%;
                text-align: center;
            }
            #registroUsuarios{
                width: 100%;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div id="cabecera">
            <div id="logo">
                <p id="titulo">trivial wars</p>
            </div>
            
        </div>
        <div id="registroUsuarios" align="right">
                <form>
                    <p class="textoUsuario">Usuario:         .  <input type = 'text' name = 'usuario' width="10%" /></p><br />
                    <p class="textoUsuario">Password:           . <input type = 'text' name = 'usuario' width="10%" /></p>
                    <button class="botonUsuarios">Login</button><button class="botonUsuarios">Regístrate</button>
                    
                </form>
                <a href="<?php echo $view["router"]->generate("board") ?>"><button class="inicio">Pantalla Inicio</button></a>
            </div>
    </body>
</html>