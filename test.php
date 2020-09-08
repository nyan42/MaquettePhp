<?php
function ShowProduct($BestSellers)
{

    $mysqli = new mysqli('localhost', 'root', '', 'e-boutique');
    $mysqli->set_charset("utf8");
    $requete = 'SELECT * FROM product';
    $resultat = $mysqli->query($requete);
    while ($product = $resultat->fetch_assoc()) {
?>
        <?php if ($BestSellers == "slider") { ?>
            <div class="owl-item product_slider_item">
                <div class="product-item">
                    <div class="product discount">
                        <div class="product_image">
                            <?php echo '<img src="images/' . $product['image'] . '" alt=' . $product['image'] . '>'; ?>
                        </div>
                        <?php if (is_null($product['reduction']) || $product['reduction'] == 0) {
                            //plein tarif
                            echo '<div class="favorite favorite_right"></div>'; ?>
                            <div class="product_info">
                                <h6 class="product_name"><a  > <?php echo $product['name']; ?> </a></h6>
                                <div class="product_price">
                                    <?php
                                    echo '$' . $product['price'];
                                    ?>
                                </div>
                            </div>
                        <?php } else {
                            //réduction
                            echo '<div class="favorite favorite_left"></div>';
                            echo '<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
            <span>-' . $product['reduction'] . '%</span></div>'; ?>

                            <div class="product_info">
                                <h6 class="product_name"><a  > <?php echo $product['name']; ?> </a></h6>
                                <div class="product_price">
                                    <?php
                                    echo '$' . ($product['price'] * (1 - $product['reduction'] / 100)) . '<span>$' . $product['price'] . '</span>';
                                    ?>
                                </div>
                            </div>

                        <?php
                        }
                        ?>
                    </div>
                    <div class="red_button add_to_cart_button"><a href="#" onclick="">add to cart</a></div>

                </div>
            <?php echo '</div>';
        } else { ?>
                <?php echo '<div class="product-item ' . $product['genre'] . '">'; ?>

                <div class="product discount product_filter">
                    <div class="product_image">
                        <?php echo '<img src="images/' . $product['image'] . '" alt=' . $product['image'] . '>'; ?>
                    </div>
                    <?php if (is_null($product['reduction']) || $product['reduction'] == 0) {
                        //plein tarif
                        echo '<div class="favorite favorite_right"></div>'; ?>
                        <div class="product_info">
                            <h6 class="product_name"><a  > <?php echo $product['name']; ?> </a></h6>
                            <div class="product_price">
                                <?php
                                echo '$' . $product['price'];
                                ?>
                            </div>
                        </div>
                    <?php } else {
                        //réduction
                        echo '<div class="favorite favorite_left"></div>';
                        echo '<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                        <span>-' . $product['reduction'] . '%</span></div>'; ?>

                        <div class="product_info">
                            <h6 class="product_name"><a  > <?php echo $product['name']; ?> </a></h6>
                            <div class="product_price">
                                <?php
                                echo '$' . ($product['price'] * (1 - $product['reduction'] / 100)) . '<span>$' . $product['price'] . '</span>';
                                ?>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>
                <div class="red_button add_to_cart_button"><a href="#" onclick="">add to cart</a></div>

            </div>
        <?php
        }
        ?>






<?php
    }
    $mysqli->close();
}
?>