<?php

function component($prod_name, $prod_price, $prod_img, $prod_desc)
{
    $element = '
    
        <div class="col-md-4 col-sm-6 my-3 my-md-3">
            <form action="" method="POST">
                <div class="card shadow">
                    <div>
                        <img src="img/' . $prod_img . '.png" alt="pizza1" class="img-fluid card-img-top">
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
                        <button type="submit" name="add" class="btn btn-warning my-3">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                        <input type="number" name="pizzaCount" placeholder="0" min="0" max="50">
                    </div>
                </div>
            </form>
        </div>
    ';
    echo $element;
}

$pepperoni_desc = "Peperoni dešra, mocarela, rūkytas lydytas sūris, saulėje džiovintų pomidorų padažas, svogūnū traškučiai, gražgarstės, aliejaus ir česnakų padažas, raudonėliai. 
";
$fourSeasons_desc = "Pepperoni, kepta vištiena, mocarela, konservuoti ananasai, pievagrybiai, vyšniniai pomidorai, špinatai, juodosios alyvuogės";
$kaimiska_desc = "Šoninė, mocarela, svogūnai, konservuoti agurkai, krapai, kepta vištiena, mocarela, vyšniniai pomidorai, agurkai, paprikai, pievagrybiai";
$astrioji_desc = "Malta mėsa, plėšyta kiauliena, mocarela, pievagrybiai, konservuoti jalapeno pipirai, svogūnai, aštrūs raudonieji pipirai, chipotle padažas";
$grybu_desc = "Kepta vištiena, kumpis, mocarela, konservuoti agurkai, konservuotos paprikos, česnakinis padažas, pievagrybiai, kelmučiai";
$meksikietiska_desc = "Malta mėsa, mocarela, svogūnai, juodosios alyvuogės, konservuotos paprikos, konservuoti jalapeno pipirai, saldžiaaštris padažas";
