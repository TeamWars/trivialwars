<?php

/* AcmeTrivialWarsBundle:Trivial:tablero.html.php */
class __TwigTemplate_1b514e4fff927331e1f8aaf89bc3dfacf698c3d157a92af0e95cd93000b55889 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"recursos/css/tablero/principal.css\" />
        <title>Trivial Wars</title>
<!--        <script src=\"recursos/js/libs/jquery-1.9.0/jquery.min.js\"></script>
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                casillaActual = 0;

                for (i = 0; i < 64; i++) {
                    \$(\"#\" + i).css({background: \"url(recursos/imagenes/casilla\" + i + \".png) no-repeat\"});
                }
                \$(\"#ficha1\").click(function() {
                    var posicion = \$(\"#\" + casillaActual++).position();
                    \$(this).animate({left: posicion.left, top: posicion.top});
                });
                \$(\"#dado\").click(function() {
                    var delay = 2000;
                    while (delay > 0) {
                        setTimeout(function() {
                            var random = Math.floor((Math.random() * 10) + 1);
                            \$(\"#imagenDado\").attr(\"src\", \"recursos/imagenes/\" + random + \".png\");
                        }, delay);
                        delay -= 50;
                    }
                });
            });

        </script>-->
        <style type=\"text/css\">
/*            body{
                background: URL(recursos/imagenes/fondo.jpg) no-repeat center center fixed;
            }
            td{
                width: 100px;
                height: 80px;
                background-position: 50%;
            }
            #ficha1 {
                position: absolute;
            }*/
        </style>
    </head>
    <body>
        <table border=\"1\">
            <tbody>
                <tr>
                    <td id=\"24\"></td>
                    <td id=\"23\"></td>
                    <td id=\"22\"></td>
                    <td id=\"21\"></td>
                    <td id=\"20\"></td>
                    <td id=\"19\"></td>
                    <td id=\"18\"></td>
                    <td id=\"17\"></td>
                    <td id=\"16\"></td>
                    <td id=\"15\"></td>
                    <td id=\"14\"></td>
                </tr>
                <tr>
                    <td id=\"25\"></td>
                    <td id=\"48\"></td>
                    <td id=\"47\"></td>
                    <td id=\"46\"></td>
                    <td id=\"45\"></td>
                    <td id=\"44\"></td>
                    <td id=\"43\"></td>
                    <td id=\"42\"></td>
                    <td id=\"41\"></td>
                    <td id=\"40\"></td>
                    <td id=\"13\"></td>
                </tr>
                <tr>
                    <td id=\"26\"></td>
                    <td id=\"49\"></td>
                    <td id=\"63\" colspan=\"2\"></td>
                    <td id=\"62\"></td>
                    <td id=\"61\"></td>
                    <td id=\"60\"></td>
                    <td id=\"59\"></td>
                    <td id=\"58\"></td>
                    <td id=\"39\"></td>
                    <td id=\"12\"></td>
                </tr>
                <tr>
                    <td id=\"27\"></td>
                    <td id=\"50\"></td>
                    <td id=\"51\"></td>
                    <td id=\"52\"></td>
                    <td id=\"53\"></td>
                    <td id=\"54\"></td>
                    <td id=\"55\"></td>
                    <td id=\"56\"></td>
                    <td id=\"57\"></td>
                    <td id=\"38\"></td>
                    <td id=\"11\"></td>
                </tr>
                <tr>
                    <td id=\"28\"></td>
                    <td id=\"29\"></td>
                    <td id=\"30\"></td>
                    <td id=\"31\"></td>
                    <td id=\"32\"></td>
                    <td id=\"33\"></td>
                    <td id=\"34\"></td>
                    <td id=\"35\"></td>
                    <td id=\"36\"></td>
                    <td id=\"37\"></td>
                    <td id=\"10\"></td>
                </tr>
                <tr>
                    <td id=\"0\" colspan=\"2\"><img id=\"ficha1\" src=\"recursos/imagenes/FICHAdarthvader.png\"/></td>
                    <td id=\"1\"></td>
                    <td id=\"2\"></td>
                    <td id=\"3\"></td>
                    <td id=\"4\"></td>
                    <td id=\"5\"></td>
                    <td id=\"6\"></td>
                    <td id=\"7\"></td>
                    <td id=\"8\"></td>
                    <td id=\"9\"></td>
                </tr>
                <tr>
                    <td id=\"dado\" colspan=\"2\" align=\"center\"><img width=110 height=110 id=\"imagenDado\" src=\"recursos/imagenes/5.png\"/></td>
                    <td id=\"marcador\" colspan=\"6\"></td>
                    <td id=\"mensaje\" colspan=\"3\"></td>
                </tr>
            </tbody>
        </table>

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "AcmeTrivialWarsBundle:Trivial:tablero.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
