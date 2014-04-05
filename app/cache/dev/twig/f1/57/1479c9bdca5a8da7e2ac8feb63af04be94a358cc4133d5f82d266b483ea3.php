<?php

/* AcmeTrivialWarsBundle:Tablero:tablero.html.php */
class __TwigTemplate_f1571479c9bdca5a8da7e2ac8feb63af04be94a358cc4133d5f82d266b483ea3 extends Twig_Template
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
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/trivial/css/tablero/board.css"), "html", null, true);
        echo "\" />
        <title>Trivial Wars</title>
        <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/trivial/js/libs/jquery-1.9.0/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
\$(document).ready(function() {
    var casillaActual = 0;
    posicionInicial = \$(\"#\" + casillaActual).position();

    for (i = 0; i < 64; i++) {
        \$(\"#\" + i).css({backgroundImage: \"url('";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/trivial/images"), "html", null, true);
        echo "/casilla\" + i + \".png')\"});
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
                \$(\"#imagenDado\").attr(\"src\", \"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/trivial/images/"), "html", null, true);
        echo "\" + random + \".png\");
            }, delay);
            delay -= 50;
        }
        if (delay <= 0) {
            var random = Math.floor((Math.random() * 6) + 1);
            \$(\"#imagenDado\").attr(\"src\", \"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/trivial/images/"), "html", null, true);
        echo "\" + random + \".png\");
            next = casillaActual + random;
            var posicion = \$(\"#\" + next).position();
            \$(\"#ficha1\").animate({left: posicion.left, top: posicion.top});
        }

    });
});

        </script>
        <style type=\"text/css\">
            /*            @font-face
                        {
                            font-family: \"starwars\";
                            src: url(\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/trivial/fonts/Starjhol.ttf"), "html", null, true);
        echo "\");
                        }
                                    @font-face
                                    {
                                        font-family: \"starwars\";
                                        src: url(\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/trivial/fonts/STARWARS.TTF"), "html", null, true);
        echo "\");
                                    }*/
            @font-face { 
                font-family: 'starwars'; 
                src: url(\" ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/trivial/fonts/BAUHS93.TTF"), "html", null, true);
        echo " \") format('ttf'); 
                font-style: normal; } 
            body{
                background-image: url(\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/trivial/images/fondo.jpg"), "html", null, true);
        echo "\");
            }
            #board{
                border-image: url(\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/trivial/images/barra1.png"), "html", null, true);
        echo "\");
            }
        </style>
    </head>
    <body>
        <table id=\"board\">
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
                    <td id=\"0\" colspan=\"2\"><img id=\"ficha1\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/trivial/images/FICHAdarthvader.png"), "html", null, true);
        echo "\"/></td>
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
                    <td id=\"dado\" colspan=\"2\" align=\"center\" ><img width=110 height=110 id=\"imagenDado\" src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/trivial/images/5.png"), "html", null, true);
        echo "\"/></td>
                    <td id=\"marcador\" colspan=\"6\"></td>
                    <td id=\"mensaje\" colspan=\"3\"></td>
                </tr>
            </tbody>
        </table>
        <table id=\"questions\">
            <tr>
                <td><p>¿Cual era el anterior nombre de Darth Vader?</p></td>
            </tr>
            <tr id=\"answer1\">
                <td>Obi Wan Kenobi</td>
            </tr>
            <tr id=\"answer2\">
                <td>Anakin Skywalker</td>
            </tr>
            <tr id=\"answer3\">
                <td>Luke Skywalker</td>
            </tr>
        </table>

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "AcmeTrivialWarsBundle:Tablero:tablero.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 144,  182 => 132,  107 => 60,  101 => 57,  95 => 54,  88 => 50,  80 => 45,  63 => 31,  54 => 25,  40 => 14,  30 => 7,  25 => 5,  19 => 1,);
    }
}
