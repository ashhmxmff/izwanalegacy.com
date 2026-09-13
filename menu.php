<!DOCTYPE html>
<html>
        <link rel="stylesheet" type="text/css" href="style.css">
    
    <head>
        <title>Izwana Legacy</title>
        
    </head>

    <body>

    <!-- Navigation Bar -->
    <header>
            <div class="logo">Izwana Legacy</div>
            <nav>
                <a href="index.php">Home</a>
                <a href="menu.php">Menu</a>
                <a href="order.php">Order</a>
                <a href="contact.php">Contact</a>
                <a href="login.php">Login/Register</a>
            </nav>
        </header>

    <!-- Main Content Container -->
    <main class="container">
        <h1 class="page-title">Food & Product Menu</h1>

        <!-- Search & Filter Section -->
        <div class="search-filter-bar">
            <div class="search-box">
                <span class="search-icon">🔍</span>
                <input type="text" placeholder="Search food or product...">
            </div>
            <div class="filter-box">
                <select>
                    <option value="all">Category: All</option>
                    <option value="food">Food</option>
                    <option value="beverage">Beverage</option>
                    <option value="catering">Catering</option>
                    <option value="packaged">Packaged Goods</option>
                </select>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="product-grid">

        <!-- Item -->
        <div class="product-card">
            <div class="image-placeholder"></div>
            <div class="product-title">Product name</div>
            <div class="product-price">RM0.00</div>
            
            <div class="btn-group">
                <a href="view-order.php"><button class="btn-action">View</button></a>
                <a href="add-order.php"><button class="btn-action">Add Order</button></a>
            </div>
        </div>

        </div>
    </main>

    </body>
</html>