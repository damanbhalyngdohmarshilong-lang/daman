
<?php

session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}


/* Product information */

$products = [

    1 => [
        "name" => "Product 1",
        "price" => 500
    ],

    2 => [
        "name" => "Product 2",
        "price" => 750
    ],

    3 => [
        "name" => "Product 3",
        "price" => 1000
    ],

    4 => [
        "name" => "Product 4",
        "price" => 600
    ],

    5 => [
        "name" => "Product 5",
        "price" => 850
    ],

    6 => [
        "name" => "Product 6",
        "price" => 900
    ],

    7 => [
        "name" => "Product 7",
        "price" => 1200
    ]

];


/* Calculate total */

$grand_total = 0;

foreach ($_SESSION['cart'] as $product_id => $quantity) {

    if (isset($products[$product_id])) {

        $grand_total += $products[$product_id]['price'] * $quantity;

    }

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Checkout - Fima</title>

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

        .checkout {
            max-width: 900px;
            margin: 40px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
        }

        .checkout h2 {
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
        }

        .form-group textarea {
            height: 100px;
            resize: vertical;
        }

        .total {
            margin-top: 30px;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 5px;
            font-size: 22px;
            font-weight: bold;
            text-align: right;
        }

        .place-order {
            display: block;
            width: 100%;
            margin-top: 20px;
            padding: 15px;
            background-color: #111;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        .place-order:hover {
            background-color: #444;
        }

        .back {
            display: inline-block;
            margin-top: 20px;
            color: #111;
            text-decoration: none;
        }

        @media (max-width: 600px) {

            .checkout {
                margin: 20px;
                padding: 20px;
            }

        }

    </style>

</head>

<body>

<header>

    <h1>Fima Checkout</h1>

</header>


<div class="checkout">

    <h2>Delivery Information</h2>


    <form action="order_success.php" method="POST">


        <div class="form-group">

            <label for="name">
                Full Name
            </label>

            <input
                type="text"
                id="name"
                name="name"
                placeholder="Enter your full name"
                required
            >

        </div>


        <div class="form-group">

            <label for="phone">
                Phone Number
            </label>

            <input
                type="tel"
                id="phone"
                name="phone"
                placeholder="Enter your phone number"
                required
            >

        </div>


        <div class="form-group">

            <label for="address">
                Address
            </label>

            <textarea
                id="address"
                name="address"
                placeholder="Enter your full address"
                required
            ></textarea>

        </div>


        <div class="form-group">

            <label for="city">
                City
            </label>

            <input
                type="text"
                id="city"
                name="city"
                placeholder="Enter your city"
                required
            >

        </div>


        <div class="form-group">

            <label for="state">
                State
            </label>

            <input
                type="text"
                id="state"
                name="state"
                placeholder="Enter your state"
                required
            >

        </div>


        <div class="form-group">

            <label for="pincode">
                Pincode
            </label>

            <input
                type="text"
                id="pincode"
                name="pincode"
                placeholder="Enter your pincode"
                required
            >

        </div>


        <div class="form-group">

            <label for="payment">
                Payment Method
            </label>

            <select id="payment" name="payment" required>

                <option value="">
                    Select Payment Method
                </option>

                <option value="cod">
                    Cash on Delivery
                </option>

                <option value="online">
                    Online Payment
                </option>

            </select>

        </div>


        <div class="total">

            Total: ₹<?php echo $grand_total; ?>

        </div>


        <button
            type="submit"
            class="place-order"
        >
            Place Order
        </button>


    </form>


    <a href="cart.php" class="back">
        ← Back to Cart
    </a>


</div>

</body>

</html>

