<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture Store</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body class="light-mode">
   <header>
    <nav class="navbar">
        <div class="logo">
            <p>AGRICULTURE STORE</p>
        </div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="index1.php" target="_blank">About Me</a></li>
            <li><a href="#">Membership</a></li>
            <li><a href="#">Testimonials</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="index2.php" id="login-link">Login</a></li>
        </ul>
        <div class="search-container">
            <input type="text" placeholder="Search...">
            <button type="submit"><i class="fas fa-search"></i></button>
        </div>
    </nav>
    <div class="mode-toggle">
        <button id="toggle-mode">Dark Mode</button>
    </div>
</header>

<main>
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to ERATANI</h1>
            <p>Your trusted partner for premium fertilizers for sustainable agriculture.</p>
        </div>
    </section><br>

    <!-- Product Section -->
    <section class="products">
        <h2>Our Fertilizer Products</h2><br>
        <div class="product-grid">
            <!-- Product cards -->
            <div class="product-card">
                <div class="product-image">
                    <img src="assets/petrofast.png" alt="Dekomproser Petrofast">
                </div>
                <div class="product-info">
                    <h3>Dekomproser Petrofast 500ml</h3>
                    <p>Pengurai Bakteri</p>
                    <p class="price">Rp 35.000</p>
                    <button class="buy-btn">Buy Now</button>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="assets/kover.jpg" alt="Pupuk Kover WP">
                </div>
                <div class="product-info">
                    <h3>Pupuk Kover WP 1kg - Silica</h3>
                    <p>Pelindung Tanaman</p>
                    <p class="price">Rp 35.000</p>
                    <button class="buy-btn">Buy Now</button>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="assets/kno3.png" alt="Pupuk KNO3">
                </div>
                <div class="product-info">
                    <h3>Pupuk KNO3 1kg DGW</h3>
                    <p>Pertumbuhan Buah</p>
                    <p class="price">Rp 35.000</p>
                    <button class="buy-btn">Buy Now</button>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="assets/calha.jpeg" alt="Pupuk CalHa">
                </div>
                <div class="product-info">
                    <h3>Pupuk CalHa 1kg – Kalsium & Asam Humat</h3>
                    <p>Memperkuat Tanaman</p>
                    <p class="price">Rp 30.000</p>
                    <button class="buy-btn">Buy Now</button>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="assets/calbovit.jpeg" alt="Pupuk Calbovit">
                </div>
                <div class="product-info">
                    <h3>Pupuk Calbovit 1kg – Kalsium Boron & Micro Element</h3>
                    <p>Pertumbuhan</p>
                    <p class="price">Rp 25.000</p>
                    <button class="buy-btn">Buy Now</button>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="assets/biomax.png" alt="Pupuk Biomax">
                </div>
                <div class="product-info">
                    <h3>Pupuk Biomax 1L – Silika</h3>
                    <p>Memperkuat Batang</p>
                    <p class="price">Rp 179.900</p>
                    <button class="buy-btn">Buy Now</button>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="assets/powersoll.webp" alt="Pupuk Powersoil">
                </div>
                <div class="product-info">
                    <h3>Pupuk Powersoil 1kg – Asam Humat & NPK</h3>
                    <p>Mengikat Air Dalam Tanah</p>
                    <p class="price">Rp 70.000</p>
                    <button class="buy-btn">Buy Now</button>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="assets/bayfolan.jpg" alt="Bayfolan">
                </div>
                <div class="product-info">
                    <h3>Pupuk Daun Bayfolan 500ml</h3>
                    <p>Pertumbuhan Daun</p>
                    <p class="price">Rp 36.000</p>
                    <button class="buy-btn">Buy Now</button>
                </div>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="footer-content">
        <p>&copy; 2024 Agriculture Store. All rights reserved.</p>
        <div class="social-icons">
        </div>
    </div>
</footer>

<script src="script2.js"></script>
</body>
</html>
