<?php

session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}


/* Product information */

$products = [

    1 => [
        "name" => "Product 1",
        "price" => 500,
        "image" => "images/product1.jpg"
    ],

    2 => [
        "name" => "Product 2",
        "price" => 750,
        "image" => "images/product2.jpg"
    ],

    3 => [
        "name" => "Product 3",
        "price" => 1000,
        "image" => "images/product3.jpg"
    ],

    4 => [
        "name" => "Product 4",
        "price" => 600,
        "image" => "images/product4.jpg"
    ],

    5 => [
        "name" => "Product 5",
        "price" => 850,
        "image" => "images/product5.jpg"
    ],

    6 => [
        "name" => "Product 6",
        "price" => 900,
        "image" => "images/product6.jpg"
    ],

    7 => [
        "name" => "Product 7",
        "price" => 1200,
        "image" => "images/product7.jpg"
    ]

];


/* Add product to cart */

if (isset($_GET['add'])) {

    $product_id = $_GET['add'];

    if (isset($products[$product_id])) {

        if (isset($_SESSION['cart'][$product_id])) {

            $_SESSION['cart'][$product_id]++;

        } else {

            $_SESSION['cart'][$product_id] = 1;

        }

    }

}


/* Increase quantity */

if (isset($_GET['increase'])) {

    $product_id = $_GET['increase'];

    if (isset($_SESSION['cart'][$product_id])) {

        $_SESSION['cart'][$product_id]++;

    }

}


/* Decrease quantity */

if (isset($_GET['decrease'])) {

    $product_id = $_GET['decrease'];

    if (isset($_SESSION['cart'][$product_id])) {

        $_SESSION['cart'][$product_id]--;

        if ($_SESSION['cart'][$product_id] <= 0) {

            unset($_SESSION['cart'][$product_id]);

        }

    }

}


/* Remove product */

if (isset($_GET['remove'])) {

    $product_id = $_GET['remove'];

    if (isset($_SESSION['cart'][$product_id])) {

        unset($_SESSION['cart'][$product_id]);

    }

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Shopping Cart - Fima</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
        }

        header {
            background-color: #111;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .cart {
            max-width: 900px;
            margin: 40px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
        }

        .cart h2 {
            margin-bottom: 25px;
        }

        .cart-item {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 20px 0;
            border-bottom: 1px solid #ddd;
        }

        .cart-item img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
        }

        .product-info {
            flex: 1;
        }

        .product-info h3 {
            margin: 0 0 10px;
        }

        .price {
            font-weight: bold;
            margin-bottom: 15px;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        .quantity-controls a {
            display: inline-block;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            background-color: #111;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .quantity-number {
            font-weight: bold;
            min-width: 20px;
            text-align: center;
        }

        .remove {
            color: #d00;
            text-decoration: none;
        }

        .item-total {
            font-weight: bold;
            font-size: 18px;
        }

        .grand-total {
            margin-top: 25px;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 5px;
            text-align: right;
            font-size: 22px;
            font-weight: bold;
        }

        .back {
            display: inline-block;
            margin-top: 25px;
            margin-right: 15px;
            padding: 12px 20px;
            background-color: #111;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .back:hover {
            background-color: #444;
        }

        @media (max-width: 600px) {

            .cart {
                margin: 20px;
                padding: 20px;
            }

            .cart-item {
                flex-wrap: wrap;
            }

            .item-total {
                width: 100%;
                text-align: right;
            }

        }

    </style>

</head>

<body>

<header>

    <h1>Fima Shopping Cart</h1>

</header>


<div class="cart">

    <h2>Your Cart</h2>


    <?php if (empty($_SESSION['cart'])): ?>

        <p>Your cart is empty.</p>

    <?php else: ?>

        <?php

        $grand_total = 0;

        ?>


        <?php foreach ($_SESSION['cart'] as $product_id => $quantity): ?>

            <?php

            if (!isset($products[$product_id])) {
                continue;
            }

            $product = $products[$product_id];

            $item_total = $product['price'] * $quantity;

            $grand_total += $item_total;

            ?>


            <div class="cart-item">

                <img
                    src="<?php echo $product['image']; ?>"
                    alt="<?php echo $product['name']; ?>"
                >


                <div class="product-info">

                    <h3>
                        <?php echo $product['name']; ?>
                    </h3>

                    <p class="price">
                        ₹<?php echo $product['price']; ?>
                    </p>


                    <div class="quantity-controls">

                        <a
                            href="cart.php?decrease=<?php echo $product_id; ?>"
                        >
                            −
                        </a>

                        <span class="quantity-number">
                            <?php echo $quantity; ?>
                        </span>

                        <a
                            href="cart.php?increase=<?php echo $product_id; ?>"
                        >
                            +
                        </a>

                    </div>


                    <a
                        href="cart.php?remove=<?php echo $product_id; ?>"
                        class="remove"
                    >
                        Remove
                    </a>

                </div>


                <div class="item-total">

                    ₹<?php echo $item_total; ?>

                </div>

            </div>


        <?php endforeach; ?>


        <div class="grand-total">

            Total: ₹<?php echo $grand_total; ?>

        </div>


        <!-- Both buttons are inside the cart box -->

        <a href="index.php" class="back">
            Continue Shopping
        </a>


        <a href="checkout.php" class="back">
            Proceed to Checkout
        </a>


    <?php endif; ?>

</div>


</body>

</html>