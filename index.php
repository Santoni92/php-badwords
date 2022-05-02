<?php
//phpinfo();
$paragrafo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
             Donec fringilla ligula et sem finibus pulvinar. Fusce quis fermentum enim. Vivamus est odio, 
             fringilla ultricies venenatis nec, tincidunt at mi. Etiam mattis nulla arcu, vitae pharetra orci malesuada
              eleifend. Donec sed nibh non nibh auctor gravida et eu est. Vestibulum vitae tortor felis. Quisque arcu massa, 
              egestas vel elit id, dapibus feugiat massa. Duis lacinia, nisi et euismod dapibus, lectus mi ullamcorper lacus, 
              at egestas sem est id dolor. Cras maximus eros ac ligula fermentum sodales. ";
$lunghezzaParagrafoConSpazi = strlen($paragrafo);
$paragrafoSenzaSpazi = str_replace(" ","",$paragrafo);
$lunghezzaParagrafoSenzaSpazi = strlen($paragrafoSenzaSpazi);
$paragrafoSenzaParolaCensurata = str_replace($_GET["parolaDaCensurare"],"***",$paragrafo );
?>

<h1>PHP Badwords</h1>
<p><?php echo($paragrafo) ?></p>
<p>La lunghezza del paragrafo avente spazi tra le varie parole risulta: <?php echo(strlen($paragrafo))?></p>

<h2>paragrafo senza spazi</h2>
<p><?php echo($paragrafoSenzaSpazi)?></p>
<p>La lunghezza del paragrafo senza spazi tra le parole risulta: <?php echo($lunghezzaParagrafoSenzaSpazi)?></p>

<p>La parola di cui è richiesta la censura risulta: <?php echo($_GET["parolaDaCensurare"]) ?></p>
<p>Il paragrafo con la parola da censurare sostituita  risulta: <?php echo($paragrafoSenzaParolaCensurata) ?> </p>

