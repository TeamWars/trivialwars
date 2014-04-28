<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="<?php echo $view['assets']->getUrl('bundles/trivial/images/favicon.ico'); ?>" />
        <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/trivial/css/player/register.css'); ?>" />
        <title>Trivial Wars - Register</title>
        <style type="text/css">
            #divi{
                background-image: url("<?php echo $view['assets']->getUrl('bundles/trivial/images/obi-wan-kenobiv1.jpg'); ?>");
                background-repeat: no-repeat;
                background-size: 100%;
            }
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
                <h1 id="titulo">triviali wars</h1>
            </div>
        </div>
        <div id="divi">
            <form action="mailto:emaildelaempresaquehaceelformulario@email.com" method="post" enctype="text/plain">
                <table>
                    <tr>
                        <td>
                            <table width="33%" border="2" align="center" cellpadding="8" cellspacing="0">
                                <tr>
                                    <td>
                                        <p>Username:</p> 
                                    </td>
                                    <td>
                                        <input type="text" name="username" size="30" maxlength="50">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Email:</p>    
                                    </td>
                                    <td>
                                        <input type="text" name="correo" size="30" maxlength="100">
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        <p>Password:</p>
                                    </td>
                                    <td>
                                        <input type="password" name="password" size="30" maxlength="50">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Confirmación de password:</p> 
                                    </td>
                                    <td>
                                        <input type="password" name="password" size="30" maxlength="50">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        <a href="<?php echo $view["router"]->generate("homepage") ?>"><input type="button" value="Cancelar"/></a>
                                    </td>
                                    <td align="left">
                                        <input type="submit" value="Confirmar"> 
                                    </td>
                                </tr>
                            </table>
                        </td>
<!--                        <td>
                            <table width="33%" border="2" align="center" cellpadding="8" cellspacing="0">
                                <tr>
                                    <td>
                                        <img id="ficha1" src="<?php echo $view['assets']->getUrl('bundles/trivial/images/obi-wan-kenobi.jpg'); ?>"/>
                                    </td>
                                </tr>
                            </table>
                        </td>-->
                </table>
            </form>
        </div>
    </body>
</html>
