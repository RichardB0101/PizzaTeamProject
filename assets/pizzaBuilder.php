<?php

function component($prod_id ,$prod_name, $prod_price, $prod_img, $prod_desc)
{
    $element = '
    
        <div class="col-md-4 col-sm-6 my-3 my-md-3">
            <form action="index.php?id='.$prod_id.'" method="POST">
                <div class="card shadow">
                    <div>
                        <img src="img/' . $prod_img . '.png" alt="pizza1" class="img-fluid grow card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">' . $prod_name . ' 30cm</h5>
                        <hr>
                        <p>' . $prod_desc . '</p>
                        <hr>
                        <h5>
                            <small><s class="text-secondary">12€</s></small>
                            <span>' . $prod_price . '€</span>
                        </h5>
                        <input type="hidden" name="p_id" value='. $prod_id .'>
                        <input type="hidden" name="p_name" value='. $prod_name .'>
                        <input type="hidden" name="p_price" value='. $prod_price .'>
                        <button type="submit" name="add" class="btn btn-warning my-3">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                        <input type="number" name="p_count" placeholder="0" min="1" max="50">
                    </div>
                </div>
            </form>
        </div>
    ';
    //$sql = mysqli_query($conn_full, "INSERT INTO `pizzas`(`name`, `price`, `description`, `img`) VALUES ('$prod_name','$prod_price', '$prod_desc', '$prod_img')");
    echo $element;
}

$pepperoni_desc = "Peperoni dešra, mocarela, rūkytas lydytas sūris, saulėje džiovintų pomidorų padažas, svogūnū traškučiai, gražgarstės, aliejaus ir česnakų padažas, raudonėliai. 
";
$fourSeasons_desc = "Pepperoni, kepta vištiena, mocarela, konservuoti ananasai, pievagrybiai, vyšniniai pomidorai, špinatai, juodosios alyvuogės";
$kaimiska_desc = "Šoninė, mocarela, svogūnai, konservuoti agurkai, krapai, kepta vištiena, mocarela, vyšniniai pomidorai, agurkai, paprikai, pievagrybiai";
$astrioji_desc = "Malta mėsa, plėšyta kiauliena, mocarela, pievagrybiai, konservuoti jalapeno pipirai, svogūnai, aštrūs raudonieji pipirai, chipotle padažas";
$grybu_desc = "Kepta vištiena, kumpis, mocarela, konservuoti agurkai, konservuotos paprikos, česnakinis padažas, pievagrybiai, kelmučiai";
$meksikietiska_desc = "Malta mėsa, mocarela, svogūnai, juodosios alyvuogės, konservuotos paprikos, konservuoti jalapeno pipirai, saldžiaaštris padažas";
