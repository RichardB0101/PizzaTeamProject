<?php
include_once 'header.php';
include_once 'database\dB_Fresh.php';
include_once 'assets/pizzaBuilder.php';
?>


<div class="container">

    <div class="row text-center pt-5 justify-content-center">

        <?php
        component("Pepperoni", "9", "pepperoni NEW", $pepperoni_desc);
        component("Meksikietiška", "9", "meksikietiska NEW", $meksikietiska_desc);
        component("Kaimiška", "9", "kaimiška NEW", $kaimiska_desc);

        ?>

    </div>

    <div class="row text-center py-4 justify-content-center">

        <?php
        component("Grybų", "9", "grybu NEW", $grybu_desc);
        component("Aštrioji", "9", "astrioji NEW", $astrioji_desc);
        component("4 Sezonų", "9", "4 sezonu NEW", $fourSeasons_desc);
        ?>

    </div>
</div>



<?php
include_once 'footer.php';
?>