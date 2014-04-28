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
            
            function cambiaPregunta(){
              
            }

            function moverFicha(next) {
                    casillaActual = next;
                    var position = $("#" + next).position();
                    $("#ficha1").animate({top: position.top, left: position.left});
            }

            $(document).ready(function() {

                posicionInicial = $("#" + casillaActual).position();
                $("ficha1").position({top: posicionInicial.top, left: posicionInicial.left});

                for (i = 0; i < 64; i++) {
                    $("#" + i).css({backgroundImage: "url('<?php echo $view['assets']->getUrl('bundles/trivial/images'); ?>/casilla" + i + ".png') "});
                    $("#" + i).css({backgroundPosition: "center"});
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
                    <td id="24" class="claseTop claseLeft"></td>
                    <td id="23" class="claseTop"></td>
                    <td id="22" class="claseTop"></td>
                    <td id="21" class="claseTop"></td>
                    <td id="20" class="claseTop"></td>
                    <td id="19" class="claseTop"></td>
                    <td id="18" class="claseTop"></td>
                    <td id="17" class="claseTop"></td>
                    <td id="16" class="claseTop"</td>
                    <td id="15" class="claseTop"></td>
                    <td id="14" class="claseRight claseTop"></td>
                </tr>
                <tr>
                    <td id="25" class="claseLeft"></td>
                    <td id="48" class="claseTop claseLeft"></td>
                    <td id="47" class="claseTop claseBottom"></td>
                    <td id="46" class="claseTop claseBottom"></td>
                    <td id="45" class="claseTop claseBottom"></td>
                    <td id="44" class="claseTop claseBottom"></td>
                    <td id="43" class="claseTop claseBottom"></td>
                    <td id="42" class="claseTop claseBottom"></td>
                    <td id="41" class="claseTop claseBottom"></td>
                    <td id="40" class="claseRight claseTop"></td>
                    <td id="13" class="claseRight"></td>
                </tr>
                <tr>
                    <td id="26" class="claseLeft"></td>
                    <td id="49" class="claseLeft claseRight"></td>
                    <td id="63" colspan="2"></td>
                    <td id="62" ></td>
                    <td id="61" ></td>
                    <td id="60" ></td>
                    <td id="59" ></td>
                    <td id="58" class="claseRight"></td>
                    <td id="39" class="claseRight"></td>
                    <td id="12" class="claseRight"></td>
                </tr>
                <tr>
                    <td id="27" class="claseLeft"></td>
                    <td id="50" class="claseLeft"></td>
                    <td id="51" class="claseTop"></td>
                    <td id="52" class="claseTop"></td>
                    <td id="53" class="claseTop"></td>
                    <td id="54" class="claseTop"></td>
                    <td id="55" class="claseTop"></td>
                    <td id="56" class="claseTop"></td>
                    <td id="57" class="claseRight"></td>
                    <td id="38" class="claseRight"></td>
                    <td id="11" class="claseRight"></td>
                </tr>
                <tr>
                    <td id="28" class="claseLeft claseBottom"></td>
                    <td id="29" class="claseBottom claseTop"></td>
                    <td id="30" class="claseBottom claseTop"></td>
                    <td id="31" class="claseBottom claseTop"></td>
                    <td id="32" class="claseBottom claseTop"></td>
                    <td id="33" class="claseBottom claseTop"></td>
                    <td id="34" class="claseBottom claseTop"></td>
                    <td id="35" class="claseBottom claseTop"></td>
                    <td id="36" class="claseBottom claseTop"></td>
                    <td id="37" class="claseBottom claseRight"></td>
                    <td id="10" class="claseRight"></td>
                </tr>
                <tr>
                    <td id="0" colspan="2"><img id="ficha1" src="<?php echo $view['assets']->getUrl('bundles/trivial/images/FICHAdarthvader.png'); ?>"/></td>
                    <td id="1" class="claseBottom"></td>
                    <td id="2" class="claseBottom"></td>
                    <td id="3" class="claseBottom"></td>
                    <td id="4" class="claseBottom"></td>
                    <td id="5" class="claseBottom"></td>
                    <td id="6" class="claseBottom"></td>
                    <td id="7" class="claseBottom"></td>
                    <td id="8" class="claseBottom"></td>
                    <td id="9" class="claseBottom claseRight"></td>
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
                <td><p id="preg">¿Cual era el anterior nombre de Darth Vader?</p></td>
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
        <button onclick="cambiaPregunta">Cambio Pregunta</button>
    </body>
</html>