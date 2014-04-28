<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="<?php echo $view['assets']->getUrl('bundles/trivial/images/favicon.ico'); ?>" />
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
            #registroUsuarios{
                background-image: url("<?php echo $view['assets']->getUrl('bundles/trivial/images/backgroundFormIndex.png'); ?>");
                background-repeat: no-repeat;
                background-size: 100%;
            }
        </style>
    </head>
    <body>
        <div id="cabecera">
            <div id="logo">
                <h1 id="titulo">trivial wars</h1>
            </div>
        </div>
        <div id="registroUsuarios" align="center">
            <form method="get" action="<?php echo $view["router"]->generate("player") ?>">
                Usuario:<input type = 'text' id="user" name = 'user' width="10%" /><br>
                Password:<input type = 'text' id="password" name = 'password' width="10%" /><br>
                <p id="textRemember"><input id="remember" name="remember" type="checkbox" style="text-align: left;"/>Recordarme</p>
                <input id="loginButton" type="submit" class="botonUsuarios" value="login" /><br>
                <a href="<?php echo $view["router"]->generate("register") ?>"><p id="register">¿Aún no tienes cuenta? Regístrate</p></a>
            </form>
        </div>
    </body>
</html>