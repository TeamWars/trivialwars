<div id="cuerpo" align="center">
    <div id="trailer" align="center">
        <!--<img src="<?php // echo $view['assets']->getUrl('bundles/trivial/images/intro.gif');  ?>"/>-->
        <video width="720" height="440" autoplay muted loop>
            <source src="<?php echo $view['assets']->getUrl('bundles/trivial/video/Recorte4-StarWarsVI.mp4'); ?>" type="video/mp4">
            </object>
        </video>
    </div>

    <div id="menu" aling="center">
        <div>
            <a href="<?php echo $view["router"]->generate("board") ?>"><button class="botonMenu" onmouseover="document.getElementById('sablelaser').play()">crear partida</button></a>
            <button class="botonMenu" onmouseover="document.getElementById('sablelaser').play()">unirse a partida</button>
        </div><br>
        <div>
            <button class="botonMenu" onmouseover="document.getElementById('sablelaser').play()">configuracion del juego</button>
            <button class="botonMenu" onmouseover="document.getElementById('sablelaser').play()">sobre nosotros</button>
        </div>
    </div>
</div>
<hr width="100%">

<div id="pie"> 
    <audio id="sablelaser" src="<?php echo $view['assets']->getUrl('bundles/trivial/audio/saber1.wav'); ?>"></audio>
    <audio src="<?php echo $view['assets']->getUrl('bundles/trivial/audio/mainTheme.wav'); ?>" controls="controls" autoplay></audio>
</div>

