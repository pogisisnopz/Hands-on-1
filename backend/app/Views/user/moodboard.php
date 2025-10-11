<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Mood Board - Game Store</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/moodboard.css') ?>">

</head>

<body>
    <!-- Animated Background -->
    <div class="particles">
        <?php for ($i = 0; $i < 50; $i++): ?>
            <div class="particle" style="left: <?= rand(0, 100) ?>%; top: <?= rand(0, 100) ?>%; animation-delay: <?= rand(0, 6000) / 1000 ?>s;"></div>
        <?php endfor; ?>
    </div>

    <!-- Header -->
    <header>
        <nav>
            <a href="<?= site_url('/') ?>" class="logo">Vanny Store</a>
            <ul class="nav-links">
                <li><a href="<?= site_url('/') ?>">Home</a></li>
                <li><a href="<?= site_url('users/moodboard') ?>">Mood Board</a></li>
                <li><a href="<?= site_url('users/roadmap') ?>">Roadmap</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>


    <!-- Main Content -->
    <main class="moodboard-container">
        <div class="hero-section">
            <h1 class="page-title">Design System</h1>
            <p class="page-subtitle">Visual Language & Brand Guidelines</p>
        </div>

        <!-- Color Palette Section -->
        <section class="design-section">
            <h2 class="section-title">Color Palette</h2>
            <div class="color-grid">
                <div class="color-card">
                    <div class="color-swatch" style="background: #00d4ff;"></div>
                    <div class="color-info">
                        <h3>Cyan Primary</h3>
                        <p class="color-code">#00d4ff</p>
                        <p class="color-usage">Primary actions, links, accents</p>
                    </div>
                </div>
                <div class="color-card">
                    <div class="color-swatch" style="background: #ff00ff;"></div>
                    <div class="color-info">
                        <h3>Magenta Secondary</h3>
                        <p class="color-code">#ff00ff</p>
                        <p class="color-usage">Highlights, gradients, CTAs</p>
                    </div>
                </div>
                <div class="color-card">
                    <div class="color-swatch" style="background: #ffff00;"></div>
                    <div class="color-info">
                        <h3>Yellow Accent</h3>
                        <p class="color-code">#ffff00</p>
                        <p class="color-usage">Pricing, important info</p>
                    </div>
                </div>
                <div class="color-card">
                    <div class="color-swatch" style="background: #0f0f23;"></div>
                    <div class="color-info">
                        <h3>Dark Background</h3>
                        <p class="color-code">#0f0f23</p>
                        <p class="color-usage">Base background color</p>
                    </div>
                </div>
                <div class="color-card">
                    <div class="color-swatch" style="background: #1a1a2e;"></div>
                    <div class="color-info">
                        <h3>Dark Elevated</h3>
                        <p class="color-code">#1a1a2e</p>
                        <p class="color-usage">Cards, elevated surfaces</p>
                    </div>
                </div>
                <div class="color-card">
                    <div class="color-swatch" style="background: #ffffff;"></div>
                    <div class="color-info">
                        <h3>White</h3>
                        <p class="color-code">#ffffff</p>
                        <p class="color-usage">Text, borders, overlays</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Typography Section -->
        <section class="design-section">
            <h2 class="section-title">Typography</h2>
            <div class="typography-grid">
                <div class="font-card">
                    <h3 class="font-name">Inter</h3>
                    <p class="font-usage">Primary Font - Body Text & UI</p>
                    <div class="font-samples">
                        <p class="font-sample" style="font-family: 'Inter', sans-serif; font-weight: 400;">The quick brown fox jumps over the lazy dog (Regular)</p>
                        <p class="font-sample" style="font-family: 'Inter', sans-serif; font-weight: 600;">The quick brown fox jumps over the lazy dog (Semibold)</p>
                        <p class="font-sample" style="font-family: 'Inter', sans-serif; font-weight: 800;">The quick brown fox jumps over the lazy dog (Extra Bold)</p>
                    </div>
                </div>
                <div class="font-card">
                    <h3 class="font-name">Orbitron</h3>
                    <p class="font-usage">Display Font - Headings & Logos (Optional)</p>
                    <div class="font-samples">
                        <p class="font-sample" style="font-family: 'Orbitron', sans-serif; font-weight: 400;">The quick brown fox jumps over the lazy dog (Regular)</p>
                        <p class="font-sample" style="font-family: 'Orbitron', sans-serif; font-weight: 700;">The quick brown fox jumps over the lazy dog (Bold)</p>
                        <p class="font-sample" style="font-family: 'Orbitron', sans-serif; font-weight: 900;">The quick brown fox jumps over the lazy dog (Black)</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Button Set Section -->
        <section class="design-section">
            <h2 class="section-title">Button Components</h2>
            <div class="button-grid">
                <div class="button-demo">
                    <h3>Primary Button</h3>
                    <button class="btn btn-primary">Get Started</button>
                    <p class="button-desc">Main actions, CTAs</p>
                </div>
                <div class="button-demo">
                    <h3>Secondary Button</h3>
                    <button class="btn btn-secondary">Learn More</button>
                    <p class="button-desc">Secondary actions</p>
                </div>
                <div class="button-demo">
                    <h3>Border Button</h3>
                    <button class="btn-border btn">Explore</button>
                    <p class="button-desc">Alternative actions</p>
                </div>
                <div class="button-demo">
                    <h3>Disabled Button</h3>
                    <button class="btn btn-disabled" disabled>Unavailable</button>
                    <p class="button-desc">Inactive state</p>
                </div>
            </div>
        </section>

        <!-- Card Set Section -->
        <section class="design-section">
            <h2 class="section-title">Card Components</h2>
            <div class="card-grid">
                <div class="demo-card card-style-1">
                    <div class="card-icon">🎮</div>
                    <h3 class="card-title">Game Card</h3>
                    <p class="card-description">Glassmorphism style with gradient hover effects and backdrop blur for modern aesthetic.</p>
                    <div class="card-meta">
                        <span class="card-price">$49.99</span>
                        <button class="card-action">View Details</button>
                    </div>
                </div>
                <div class="demo-card card-style-2">
                    <div class="card-badge">Featured</div>
                    <div class="card-icon">🏆</div>
                    <h3 class="card-title">Premium Card</h3>
                    <p class="card-description">Enhanced card with badge, elevated shadow, and animated gradient borders.</p>
                    <div class="card-meta">
                        <span class="card-price">$79.99</span>
                        <button class="card-action">Buy Now</button>
                    </div>
                </div>
                <div class="demo-card card-style-3">
                    <div class="card-icon">⭐</div>
                    <h3 class="card-title">Info Card</h3>
                    <p class="card-description">Minimal card design for displaying statistics, achievements, or informational content.</p>
                    <div class="card-stats">
                        <div class="stat">
                            <span class="stat-value">1000+</span>
                            <span class="stat-label">Users</span>
                        </div>
                        <div class="stat">
                            <span class="stat-value">4.8</span>
                            <span class="stat-label">Rating</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Logo Section -->
        <section class="design-section">
            <h2 class="section-title">Logo Variations</h2>
            <div class="logo-grid">
                <div class="logo-showcase">
                    <h3>Square Format</h3>
                    <div class="logo-container square">
                        <div class="logo-square">
                            <span class="logo-text">GS</span>
                        </div>
                    </div>
                    <p class="logo-usage">App icons, social media, square avatars</p>
                </div>
                <div class="logo-showcase">
                    <h3>Circle Format</h3>
                    <div class="logo-container circle">
                        <div class="logo-circle">
                            <span class="logo-text">GS</span>
                        </div>
                    </div>
                    <p class="logo-usage">Profile pictures, badges, circular badges</p>
                </div>
                <div class="logo-showcase">
                    <h3>Full Wordmark</h3>
                    <div class="logo-container wordmark">
                        <div class="logo-wordmark">Moodboard</div>
                    </div>
                    <p class="logo-usage">Headers, landing pages, marketing materials</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-links">
                <a href="#privacy">Privacy Policy</a>
                <a href="#terms">Terms of Service</a>
                <a href="#support">Support</a>
                <a href="#about">About</a>
            </div>
            <p>&copy; 2025 Game Store. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>