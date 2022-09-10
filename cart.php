<?php
include_once 'header.php';
?>

<div class="container mb-5">

    <h2 class="text-center mt-5 mb-5">Shopping Cart <i class="fa-solid fa-cart-shopping"></i></h2>
    <div class="table-responsive">
        <table class="table table-bordered table-stripped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>

                <?php
                $cartId = 0;
                $wholeCartTotal = 0;
                if (!empty($_SESSION['cart'])) {

                    foreach ($_SESSION['cart'] as $cart) {
                        $oneRowTotal = $cart["price"] * $cart["quantity"];
                        $cartId += 1;
                        echo "<tr>";
                        echo "<td>" . $cartId . "</td>";
                        echo "<td>" . $cart["name"] . "</td>";
                        echo "<td>" . $oneRowTotal . "$</td>";
                        echo "<td>x" . $cart["quantity"] . "</td>";
                        print '<td>
                        <form action="delCartItem.php" method=GET>
                        <input type="hidden" name="update_id" value="' . $cartId . '" />
                        <button type="submit" class="btn btn-danger">Remove item</button>
                        </form>
                        
                        </td>';
                        echo "</tr>";
                        $wholeCartTotal +=  $oneRowTotal;
                    }
                }

                ?>
                <tr>

                    <td colspan="2">Total price: </td>
                    <td><?php echo $wholeCartTotal; ?>$</td>
                    <td colspan="2"></td>

                </tr>

            </tbody>
        </table>
    </div>

    <pre>
    <?php




    ?>
</pre>
</div>

<div class="container whitespace" style="height: 500px">
</div>



<?php
include_once 'footer.php';
?>