<?php
include_once 'header.php';
include_once 'database/dB_Fresh.php';
include_once 'assets/pizzaBuilder.php';


if  (isset($_POST['add'])){


        $session_array = array(
            'id' => $_GET['id'],
            "name" => $_POST['p_name'],
            "price" => $_POST['p_price'],
            "quantity" => $_POST['p_count'],
        );
        //Some backup plan to prevent people from submitting null value :)
        if(empty($session_array['quantity'])){
            $session_array['quantity'] = 1;
        }

        $_SESSION['cart'][] = $session_array;
    
}

?>


<div class="container">

    <div class="row text-center pt-5 justify-content-center">

        <?php
        component(1,"Pepperoni", "9", "pepperoni NEW", $pepperoni_desc);
        component(2,"Meksikietiška", "9", "meksikietiska NEW", $meksikietiska_desc);
        component(3,"Kaimiška", "9", "kaimiška NEW", $kaimiska_desc);

        ?>

    </div>

    <div class="row text-center py-4 justify-content-center">

        <?php
        component(4,"Grybų", "9", "grybu NEW", $grybu_desc);
        component(5,"Aštrioji", "9", "astrioji NEW", $astrioji_desc);
        component(6,"Sezonų", "9", "4 sezonu NEW", $fourSeasons_desc);
        ?>

    </div>
</div>
<pre>
<?php

if(!empty($_SESSION['cart'])){
    print_r($_SESSION['cart']);
}


?>
</pre>

<?php

include_once 'footer.php';
?>