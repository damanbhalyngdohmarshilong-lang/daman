
<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>

    <title>Order Confirmed - Fima</title>

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

        .success {
            max-width: 600px;
            margin: 80px auto;
            background-color: white;
            padding: 50px 30px;
            border-radius: 10px;
            text-align: center;
        }

        .success-icon {
            font-size: 60px;
            margin-bottom: 20px;
        }

        .success h2 {
            font-size: 30px;
            margin-bottom: 15px;
        }

        .success p {
            color: #666;
            font-size: 17px;
            line-height: 1.6;
        }

        .home-button {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 25px;
            background-color: #111;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .home-button:hover {
            background-color: #444;
        }

    </style>

</head>

<body>

<header>

    <h1>Fima</h1>

</header>


<div class="success">

    <div class="success-icon">
        ✓
    </div>

    <h2>
        Order Placed Successfully!
    </h2>

    <p>
        Thank you for shopping with Fima.
    </p>

    <p>
        Your order has been received and is being processed.
    </p>

    <a href="index.php" class="home-button">
        Continue Shopping
    </a>

</div>


</body>

</html>

