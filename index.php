<!DOCTYPE html>
<html>
<head>

    <title>FIMA AND WOOLIES</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #222;
        }

        header {
            background-color: #111;
            color: white;
            padding: 18px 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        header h1 {
            margin: 0;
            font-size: 26px;
        }

        nav {
            background-color: #222;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-size: 16px;
        }

        nav a:hover {
            color: #ccc;
        }

        .hero {
            text-align: center;
            padding: 80px 20px;
            background-color: white;
        }

        .hero h1 {
            font-size: 45px;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 19px;
            color: #666;
        }

        .shop-button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background-color: #111;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .shop-button:hover {
            background-color: #444;
        }

        .products {
            padding: 50px 30px;
            text-align: center;
        }

        .products h2 {
            font-size: 30px;
            margin-bottom: 35px;
        }

        .product-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            max-width: 1200px;
            margin: auto;
        }

        .product-card {
            background-color: white;
            padding: 15px;
            border-radius: 10px;
            transition: 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        }

        .product-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 8px;
        }

        .product-card h3 {
            margin: 15px 0 8px;
        }

        .price {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .product-card button {
            width: 100%;
            background-color: #111;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 15px;
        }

        .product-card button:hover {
            background-color: #444;
        }

        footer {
            background-color: #111;
            color: white;
            text-align: center;
            padding: 25px;
            margin-top: 30px;
        }

        @media (max-width: 900px) {

            .product-container {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media (max-width: 600px) {

            header {
                text-align: center;
                justify-content: center;
            }

            nav a {
                margin: 0 8px;
            }

            .hero h1 {
                font-size: 32px;
            }

            .product-container {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>

<body>

    <!-- HEADER -->

    <header>

        <h1>FIMA AND WOOLIES</h1>

    </header>


    <!-- NAVIGATION -->

    <nav>

        <a href="index.php">Home</a>

        <a href="#products">Products</a>

        <a href="cart.php">Cart</a>

        <a href="login.php">Login</a>


    </nav>


    <!-- HERO SECTION -->

    <section class="hero">

        <h1>Welcome to FIMA AND WOOLIES:)</h1>

        <p>
            Handmade with love, made just for you:>
        </p>

        <a href="#products" class="shop-button">
            Shop Now
        </a>

    </section>


    <!-- PRODUCTS -->

    <section class="products" id="products">

        <h2>Our Products</h2>

        <div class="product-container">


            <!-- PRODUCT 1 -->

            <div class="product-card">

                <img src="images/product1.jpg" alt="Product 1">

                <h3>Product 1</h3>

                <p class="price">₹500</p>

                <a href="cart.php?add=1">
                    <button>Add to Cart</button>
                </a>

            </div>


            <!-- PRODUCT 2 -->

            <div class="product-card">

                <img src="images/product2.jpg" alt="Product 2">

                <h3>Product 2</h3>

                <p class="price">₹750</p>

                <a href="cart.php?add=2">
                    <button>Add to Cart</button>
                </a>

            </div>


            <!-- PRODUCT 3 -->

            <div class="product-card">

                <img src="images/product3.jpg" alt="Product 3">

                <h3>Product 3</h3>

                <p class="price">₹1000</p>

                <a href="cart.php?add=3">
                    <button>Add to Cart</button>
                </a>

            </div>


            <!-- PRODUCT 4 -->

            <div class="product-card">

                <img src="images/product4.jpg" alt="Product 4">

                <h3>Product 4</h3>

                <p class="price">₹600</p>

                <a href="cart.php?add=4">
                    <button>Add to Cart</button>
                </a>

            </div>


            <!-- PRODUCT 5 -->

            <div class="product-card">

                <img src="images/product5.jpg" alt="Product 5">

                <h3>Product 5</h3>

                <p class="price">₹850</p>

                <a href="cart.php?add=5">
                    <button>Add to Cart</button>
                </a>

            </div>


            <!-- PRODUCT 6 -->

            <div class="product-card">

                <img src="images/product6.jpg" alt="Product 6">

                <h3>Product 6</h3>

                <p class="price">₹900</p>

                <a href="cart.php?add=6">
                    <button>Add to Cart</button>
                </a>

            </div>


            <!-- PRODUCT 7 -->

            <div class="product-card">

                <img src="images/product7.jpg" alt="Product 7">

                <h3>Product 7</h3>

                <p class="price">₹1200</p>

                <a href="cart.php?add=7">
                    <button>Add to Cart</button>
                </a>

            </div>


        </div>

    </section>


    <!-- FOOTER -->

    <footer>

        <p>© 2026 THANK YOU FOR VISITING FIMA AND WOOLIES</p>

    </footer>


</body>
</html>