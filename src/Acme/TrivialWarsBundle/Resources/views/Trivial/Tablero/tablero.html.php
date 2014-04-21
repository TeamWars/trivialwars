<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/trivial/css/tablero/board.css'); ?>" />
        <title>Trivial Wars</title>
        <script src="<?php echo $view['assets']->getUrl('bundles/trivial/js/libs/jquery-1.9.0/jquery.min.js'); ?>"></script>
        <script type="text/javascript">
            var casillaActual = 0;
            var contador = 0;

            function moverFicha(next) {
                    casillaActual = next;
                    var position = $("#" + next).position();
                    $("#ficha1").animate({top: position.top, left: position.left});
            }

            $(document).ready(function() {

                posicionInicial = $("#" + casillaActual).position();
                $("ficha1").position({top: posicionInicial.top, left: posicionInicial.left});

                for (i = 0; i < 64; i++) {
                    $("#" + i).css({backgroundImage: "url('<?php echo $view['assets']->getUrl('bundles/trivial/images'); ?>/casilla" + i + ".png')"});
                }

                $("#dado").click(function() {
                    var id = setInterval(function() {
                        var random = Math.floor((Math.random() * 10) + 1);
                        $("#imagenDado").attr("src", "<?php echo $view['assets']->getUrl('bundles/trivial/images/'); ?>" + random + ".png");
                    }, 50);
                    setTimeout(function() {
                        clearInterval(id);
                        var random = Math.floor((Math.random() * 6) + 1);
                        $("#imagenDado").attr("src", "<?php echo $view['assets']->getUrl('bundles/trivial/images/'); ?>" + random + ".png");
                        next = casillaActual + random;
                        moverFicha(next);
                    }, 1500);
                    
                });
            });

        </script>
        <style type="text/css">
            /*            @font-face
                        {
                            font-family: "starwars";
                            src: url("{{ asset('bundles/trivial/fonts/Starjhol.ttf') }}");
                        }
                                    @font-face
                                    {
                                        font-family: "starwars";
                                        src: url("{{ asset('bundles/trivial/fonts/STARWARS.TTF') }}");
                                    }*/
            @font-face { 
                font-family: 'starwars2'; 
                src: url("<?php echo $view['assets']->getUrl('bundles/trivial/fonts/BAUHS93.TTF'); ?>") format('ttf'); 
            } 
            body{
                background-image: url("<?php echo $view['assets']->getUrl('bundles/trivial/images/fondo.jpg'); ?>");
            }
            #board{
                border-image: url("<?php echo $view['assets']->getUrl('bundles/trivial/images/barra1.png'); ?>");
            }
        </style>
    </head>
    <body>
        <table id="board">
            <tbody>
                <tr>
                    <td id="24"></td>
                    <td id="23"></td>
                    <td id="22"></td>
                    <td id="21"></td>
                    <td id="20"></td>
                    <td id="19"></td>
                    <td id="18"></td>
                    <td id="17"></td>
                    <td id="16"></td>
                    <td id="15"></td>
                    <td id="14"></td>
                </tr>
                <tr>
                    <td id="25"></td>
                    <td id="48"></td>
                    <td id="47"></td>
                    <td id="46"></td>
                    <td id="45"></td>
                    <td id="44"></td>
                    <td id="43"></td>
                    <td id="42"></td>
                    <td id="41"></td>
                    <td id="40"></td>
                    <td id="13"></td>
                </tr>
                <tr>
                    <td id="26"></td>
                    <td id="49"></td>
                    <td id="63" colspan="2"></td>
                    <td id="62"></td>
                    <td id="61"></td>
                    <td id="60"></td>
                    <td id="59"></td>
                    <td id="58"></td>
                    <td id="39"></td>
                    <td id="12"></td>
                </tr>
                <tr>
                    <td id="27"></td>
                    <td id="50"></td>
                    <td id="51"></td>
                    <td id="52"></td>
                    <td id="53"></td>
                    <td id="54"></td>
                    <td id="55"></td>
                    <td id="56"></td>
                    <td id="57"></td>
                    <td id="38"></td>
                    <td id="11"></td>
                </tr>
                <tr>
                    <td id="28"></td>
                    <td id="29"></td>
                    <td id="30"></td>
                    <td id="31"></td>
                    <td id="32"></td>
                    <td id="33"></td>
                    <td id="34"></td>
                    <td id="35"></td>
                    <td id="36"></td>
                    <td id="37"></td>
                    <td id="10"></td>
                </tr>
                <tr>
                    <td id="0" colspan="2"><img id="ficha1" src="<?php echo $view['assets']->getUrl('bundles/trivial/images/FICHAdarthvader.png'); ?>"/></td>
                    <td id="1"></td>
                    <td id="2"></td>
                    <td id="3"></td>
                    <td id="4"></td>
                    <td id="5"></td>
                    <td id="6"></td>
                    <td id="7"></td>
                    <td id="8"></td>
                    <td id="9"></td>
                </tr>
                <tr>
                    <td id="dado" colspan="2" align="center" ><img width=110 height=110 id="imagenDado" src="<?php echo $view['assets']->getUrl('bundles/trivial/images/5.png'); ?>"/></td>
                    <td id="marcador" colspan="6"></td>
                    <td id="mensaje" colspan="3"></td>
                </tr>
            </tbody>
        </table>
        <table id="questions">
            <tr>
                <td><p>¿Cual era el anterior nombre de Darth Vader?</p></td>
            </tr>
            <tr id="answer1">
                <td>Obi Wan Kenobi</td>
            </tr>
            <tr id="answer2">
                <td>Anakin Skywalker</td>
            </tr>
            <tr id="answer3">
                <td>Luke Skywalker</td>
            </tr>
        </table>

    </body>
</html>