<?php

/* AcmeTrivialWarsBundle:Trivial:index.html.php */
class __TwigTemplate_889f1f8bec135bef63070710957acf932dac90c4e6dccaafb2145b6bf2a11f82 extends Twig_Template
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
        <!--<link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />-->
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/trivial/css/index/principal.css"), "html", null, true);
        echo "\" />
        <title>Trivial Wars</title>
        <style type=\"text/css\">
            @font-face
            {
                font-family: \"starwars\";
                src: url(\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/trivial/fonts/Starjhol.ttf"), "html", null, true);
        echo "\");
            }
            body{
                background-image: url(\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/trivial/images/fondo.jpg"), "html", null, true);
        echo "\");
            }
        </style>
    </head>
    <body>
        <div id=\"cabecera\">
            <div id=\"logo\">
                <p id=\"titulo\">oca wars</p>
            </div>
            <div id=\"registroUsuarios\" align=\"right\">
                <form>
                    <p class=\"textoUsuario\">Usuario:         .  <input type = 'text' name = 'usuario' width=\"10%\" /></p><br />
                    <p class=\"textoUsuario\">Password:           . <input type = 'text' name = 'usuario' width=\"10%\" /></p>
                    <button class=\"botonUsuarios\">Login</button><button class=\"botonUsuarios\">Regístrate</button>
                </form>

            </div>
        </div>
        <hr width=\"100%\">
        <div id=\"cuerpo\" align=\"center\">
            <div id=\"trailer\" align=\"center\">
                <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/trivial/images/intro.gif"), "html", null, true);
        echo "\"/>
            </div>

            <div id=\"menu\" aling=\"center\">
                <a href=\"<?php echo 'hola' ?>\"><button class=\"botonMenu\" onmouseover=\"document.getElementById('sablelaser').play()\">inicio</button></a>
                <button class=\"botonMenu\" onmouseover=\"document.getElementById('sablelaser').play()\">configuracion del juego</button>
                <button class=\"botonMenu\" onmouseover=\"document.getElementById('sablelaser').play()\">sobre nosotros</button>
            </div>
        </div>
        <hr width=\"100%\">

        <div id=\"pie\"> 
            <audio id=\"sablelaser\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/trivial/audio/saber1.wav"), "html", null, true);
        echo "\"></audio>
            <audio src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/trivial/audio/mainTheme.wav"), "html", null, true);
        echo "\" controls=\"controls\"></audio>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "AcmeTrivialWarsBundle:Trivial:index.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 49,  83 => 48,  68 => 36,  44 => 15,  38 => 12,  29 => 6,  25 => 5,  19 => 1,);
    }
}
