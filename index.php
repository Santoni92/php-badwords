<?php
$paragrafo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
             Donec fringilla ligula et sem finibus pulvinar. Fusce quis fermentum enim. Vivamus est odio, 
             fringilla ultricies venenatis nec, tincidunt at mi. Etiam mattis nulla arcu, vitae pharetra orci malesuada
              eleifend. Donec sed nibh non nibh auctor gravida et eu est. Vestibulum vitae tortor felis. Quisque arcu massa, 
              egestas vel elit id, dapibus feugiat massa. Duis lacinia, nisi et euismod dapibus, lectus mi ullamcorper lacus, 
              at egestas sem est id dolor. Cras maximus eros ac ligula fermentum sodales. ";
$paragrafoSenzaSpazi = str_replace(" ","",$paragrafo);
$lunghezzaParagrafo = strlen($paragrafoSenzaSpazi);

?>

<h1>PHP Badwords</h1>
<p><?php echo($paragrafo) ?></p>

<h2>paragrafo senza spazi</h2>
<p><?php echo($paragrafoSenzaSpazi)?></p>

<p>La lunghezza del paragrafo risulta: <?php echo($lunghezzaParagrafo)?></p>

