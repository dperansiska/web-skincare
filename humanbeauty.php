<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sephora</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
	background-color: #FF99CC;
        }
        .top-bar {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
            font-size: 14px;
        }
        .top-bar a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }
        .top-bar a:hover {
            text-decoration: underline;
        }
        .header {
            background-color: white;
            padding: 20px 0;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        .header img {
            max-width: 100%;
            height: auto;
        }
        .header .logo {
	font-size: 36px;
	font-weight: bold;
	color: #000;
        }
        .header .search-bar {
            margin: 20px 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .header .search-bar input[type="text"] {
            width: 400px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px 0 0 4px;
        }
        .header .search-bar button {
            padding: 10px;
            border: 1px solid #ddd;
            border-left: none;
            background-color: black;
            color: white;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
        }
        .header .search-bar button:hover {
            background-color: #444;
        }
        .header .free-shipping {
            margin-left: 20px;
            font-size: 14px;
            font-weight: bold;
        }
        .nav {
            background-color: white;
            padding: 10px 0;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        .nav a {
            color: black;
            margin: 0 15px;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }
        .nav a:hover {
            text-decoration: underline;
        }
        .banner {
	background-color: #f5f5f5;
	padding: 20px 0;
	text-align: center;
	border-bottom: 1px solid #ddd;
	color: #F66;
        }
        .banner img {
            max-width: 100%;
            height: auto;
        }
        .banner .title {
            font-size: 24px;
            font-weight: bold;
            margin: 20px 0;
        }
        .banner .subtitle {
            font-size: 16px;
            color: #666;
        }
        .recommended {
	background-color: white;
	padding: 20px 0;
	text-align: center;
	color: #F96;
        }
        .recommended .title {
	font-size: 24px;
	font-weight: bold;
	margin: 20px 0;
	color: #F96;
        }
        .recommended .products {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .recommended .product {
            width: 150px;
            margin: 10px;
            text-align: center;
        }
        .recommended .product img {
            max-width: 100%;
            height: auto;
        }
        .recommended .product .name {
	font-size: 14px;
	margin: 10px 0;
	color: #F66;
        }
        .recommended .product .price {
            font-size: 14px;
            color: #666;
        }
        .recommended .product button {
            margin-top: 10px;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .recommended .product button:hover {
            background-color: #0056b3;
        }
        .cart {
            background-color: white;
            padding: 20px;
            margin: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        .cart h2 {
	font-size: 20px;
	margin-bottom: 20px;
	color: #F96;
        }
        .cart ul {
            list-style-type: none;
            padding: 0;
        }
        .cart ul li {
            margin-bottom: 10px;
            font-size: 16px;
        }
    .banner .logo strong {
	font-size: 18px;
}
    </style>
</head>
<body bgcolor="#FF9999">
    
    <div class="header">
        <div class="logo">BEAUTY HUMAN</div>
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Pencarian untuk merek dan produk">
            <button onclick="searchProducts()"><i class="fas fa-search"></i></button>
            <div class="free-shipping">GRATIS ONGKIR</div>
        </div>
</div>
    

    <div class="banner">
        <div class="logo"><strong>SKINCARE</strong></div>
        <div class="subtitle">Global and cult beauty brands for every woman</div>
</div>
<div class="recommended">
        <div class="title"></div>
        <div class="products">
            <div class="product">
                <img src="powder.jpg" alt="Wardah Luminous Face Powder">
                <div class="name"><span class="logo">Wardah Luminous Face Powder</span></div>
                <div class="price">Rp 40.000</div>
                <button onclick="addToCart('Wardah Luminous Face Powder')">Add to Cart</button>
          </div>
            <div class="product">
                <img src="ser.jpg" alt="Hanasui Gold Serum">
                <div class="name"><span class="logo">Hanasui Gold Serum</span></div>
                <div class="price">Rp 60.000</div>
                <button onclick="addToCart('Hanasui Gold Serum')">Add to Cart</button>
            </div>
            <div class="product">
                <img src="kaf.jpg" alt="Kahf Oil and Acne Cleanser">
                <div class="name"><span class="logo">Kahf Oil and Acne Cleanser</span></div>
                <div class="price">Rp 50.000</div>
                <button onclick="addToCart('Kahf Oil and Acne Cleanser')">Add to Cart</button>
            </div>
            <div class="product">
                <img src="warligh.jpg" alt="Wardah Lightening Day Cream">
                <div class="name"><span class="logo">Wardah Lightening Day Cream</span></div>
                <div class="price">Rp 80.000</div>
                <button onclick="addToCart('Wardah Lightening Day Cream')">Add to Cart</button>
            </div>
            <div class="product">
                <img src="paket skincare.jpg" alt="Paketan Wardah Lightening">
                <div class="name"><span class="logo">Paketan Wardah Lightening</span></div>
                <div class="price">Rp 269.000</div>
                <button onclick="addToCart('Paketan Wardah Lightening')">Add to Cart</button>
            </div>
             <div class="product">
                <img src="pin.jpg" alt="Paketan Hanasui">
                <div class="name"><span class="logo">Paketan Hanasui</span></div>
                <div class="price">Rp 189.000</div>
                <button onclick="addToCart('Paketan Hanasui')">Add to Cart</button>
            </div>
            <div class="product">
                <img src="pktkaf.webp" alt="Paketan Kahf">
                <div class="name"><span class="logo">Paketan Kahf</span></div>
                <div class="price">Rp 356.000</div>
                <button onclick="addToCart('Paketan Kahf')">Add to Cart</button>
            </div>
  </div>
  </div>

    <div class="cart">
        <h2>Keranjang Pesanan</h2>
        <ul id="cartItems">
            <li>Keranjang masih kosong.</li>
        </ul>
    </div>

<script>
        // Array to store cart items
        let cart = [];

        // Function to handle search functionality
        function searchProducts() {
            const searchQuery = document.getElementById('searchInput').value;
            alert("Searching for: " + searchQuery);
        }

        // Function to add items to the cart
        function addToCart(productName) {
            if (cart.length === 0) {
                document.getElementById('cartItems').innerHTML = '';
            }
            cart.push(productName);
            const li = document.createElement('li');
            li.textContent = productName;
            document.getElementById('cartItems').appendChild(li);
        }

        // Function to show category content
        function showCategory(category) {
            alert("Showing category: " + category);
            // Dynamically update the page content based on the selected category.
        }
    </script>
</body>
</html>
