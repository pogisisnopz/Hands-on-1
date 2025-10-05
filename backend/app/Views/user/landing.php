<!DOCTYPE html>
<html lang="tl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vanny Store - Top Up Gaming Credits</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="header">
        <div class="container">
            <div class="nav">
                <div class="logo">
                    <h1>Vanny Store</h1>
                </div>
                <nav class="nav-menu">
                    <a href="#" class="nav-link">Home</a>
                    <a href="#games" class="nav-link">Games</a>
                    <a href="#about" class="nav-link">About</a>
                    <a href="#contact" class="nav-link">Contact</a>
                </nav>
                <button class="menu-toggle" id="menuToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>


    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h2 class="hero-title">Top Up Your Favorite Games</h2>
                <p class="hero-subtitle">Fast, Safe, and Secure Payment Method</p>
                <a href="#games" class="btn btn-primary">Browse Games</a>
            </div>
        </div>
    </section>


    <section class="search-section">
        <div class="container">
            <div class="search-box">
                <input type="text" id="searchInput" placeholder="Search for games..." class="search-input">
                <button class="search-btn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.35-4.35"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>


    <section class="games-section" id="games">
        <div class="container">
            <h2 class="section-title">Popular Games</h2>
            <div class="games-grid" id="gamesGrid">

            </div>
        </div>
    </section>


    <section class="features-section">
        <div class="container">
            <h2 class="section-title">Why Choose Us?</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">⚡</div>
                    <h3>Instant Delivery</h3>
                    <p>Get your credits instantly after payment</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🔒</div>
                    <h3>Secure Payment</h3>
                    <p>Safe and encrypted transactions</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">💳</div>
                    <h3>Multiple Payment</h3>
                    <p>Various payment methods available</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🎮</div>
                    <h3>Wide Selection</h3>
                    <p>Support for popular mobile games</p>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Vanny Store</h3>
                    <p>Your trusted gaming top-up partner</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <a href="#">Terms of Service</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">FAQ</a>
                </div>
                <div class="footer-section">
                    <h4>Contact Us</h4>
                    <p>Email: vmnavarez@fit.edu.ph</p>
                    <p>Phone: +63 9569673907</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Vanny Store. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="css/script.js"></script>
</body>
</html>