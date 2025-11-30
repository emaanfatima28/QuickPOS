<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="QuickPOS - The Last POS System You'll Ever Need">
    <title>QuickPOS - Modern Point of Sale System</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation & Header (Epic 1) -->
    <header class="header">
        <nav class="navbar">
            <div class="container">
                <div class="nav-wrapper">
                    <div class="logo">
                        <i class="fas fa-cash-register"></i>
                        <span>QuickPOS</span>
                    </div>
                    <ul class="nav-links">
                        <li><a href="#features">Features</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <a href="#contact" class="btn btn-signup">Sign Up</a>
                    <button class="mobile-menu-toggle" id="mobileMenuToggle">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section (Epic 2) -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">The Last POS System You'll Ever Need</h1>
                    <p class="hero-subtitle">Streamline your business operations with our powerful, intuitive point of sale solution. Manage inventory, track sales, and grow your business effortlessly.</p>
                    <a href="#contact" class="btn btn-primary btn-large">
                        Get Started for Free
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <p class="hero-note">No credit card required • 14-day free trial</p>
                </div>
                <div class="hero-image">
                    <div class="image-placeholder">
                        <i class="fas fa-desktop"></i>
                        <p>POS Dashboard Mockup</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-bg-shape"></div>
    </section>

    <!-- Features Section (Epic 3) -->
    <section id="features" class="features">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Powerful Features for Modern Businesses</h2>
            <p class="section-subtitle">Everything you need to run your business efficiently</p>
        </div>

        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-boxes"></i>
                </div>
                <h3>Inventory Management</h3>
                <p>Track stock levels in real-time, set reorder alerts, and manage multiple locations with ease.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Sales Analytics</h3>
                <p>Gain actionable insights with comprehensive reports and dashboards.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-plug"></i>
                </div>
                <h3>Easy Integration</h3>
                <p>Seamlessly connect with your favorite tools and payment processors.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3>Mobile Ready</h3>
                <p>Access your POS system from anywhere on any device.</p>
            </div>
        </div>
    </div>
</section>


    <!-- Pricing Section (Epic 4) -->
   <section id="pricing" class="pricing">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Simple, Transparent Pricing</h2>
            <p class="section-subtitle">Choose the perfect plan for your business</p>
        </div>

        <div class="pricing-grid">

            <!-- Basic Plan -->
            <div class="pricing-card">
                <div class="plan-header">
                    <h3>Basic</h3>
                    <div class="price">
                        <span class="currency">$</span>
                        <span class="amount">29</span>
                        <span class="period">/month</span>
                    </div>
                    <p class="plan-description">Perfect for small businesses</p>
                </div>

                <ul class="plan-features">
                    <li><i class="fas fa-check"></i> 1 Location</li>
                    <li><i class="fas fa-check"></i> Up to 1,000 Products</li>
                    <li><i class="fas fa-check"></i> Basic Reporting</li>
                    <li><i class="fas fa-check"></i> Email Support</li>
                    <li><i class="fas fa-check"></i> Mobile App Access</li>
                </ul>

                <a href="#contact" class="btn btn-outline">Get Started</a>
            </div>

            <!-- Pro Plan -->
            <div class="pricing-card featured">
                <div class="badge">Most Popular</div>

                <div class="plan-header">
                    <h3>Pro</h3>
                    <div class="price">
                        <span class="currency">$</span>
                        <span class="amount">79</span>
                        <span class="period">/month</span>
                    </div>
                    <p class="plan-description">Best for growing businesses</p>
                </div>

                <ul class="plan-features">
                    <li><i class="fas fa-check"></i> 5 Locations</li>
                    <li><i class="fas fa-check"></i> Unlimited Products</li>
                    <li><i class="fas fa-check"></i> Advanced Analytics</li>
                    <li><i class="fas fa-check"></i> Priority Support</li>
                    <li><i class="fas fa-check"></i> API Access</li>
                    <li><i class="fas fa-check"></i> Custom Integrations</li>
                </ul>

                <a href="#contact" class="btn btn-primary">Get Started</a>
            </div>

            <!-- Enterprise Plan -->
            <div class="pricing-card">
                <div class="plan-header">
                    <h3>Enterprise</h3>
                    <div class="price">
                        <span class="amount-text">Custom</span>
                    </div>
                    <p class="plan-description">For large organizations</p>
                </div>

                <ul class="plan-features">
                    <li><i class="fas fa-check"></i> Unlimited Locations</li>
                    <li><i class="fas fa-check"></i> Unlimited Products</li>
                    <li><i class="fas fa-check"></i> Custom Reporting</li>
                    <li><i class="fas fa-check"></i> 24/7 Dedicated Support</li>
                    <li><i class="fas fa-check"></i> White Label Option</li>
                    <li><i class="fas fa-check"></i> On-Premise Deployment</li>
                    <li><i class="fas fa-check"></i> Custom Development</li>
                </ul>

                <a href="#contact" class="btn btn-outline">Contact Sales</a>
            </div>

        </div>
    </div>
</section>


    <!-- Contact Us Form (Epic 5) -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Get In Touch</h2>
                <p class="section-subtitle">Have questions? We'd love to hear from you</p>
            </div>
            <div class="contact-wrapper">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <p>Fill out the form and our team will get back to you within 24 hours.</p>
                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span>+1 (555) 123-4567</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>support@quickpos.com</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>123 Business Ave, Suite 100<br>San Francisco, CA 94102</span>
                        </div>
                    </div>
                </div>
                <form class="contact-form" method="POST" action="process-contact.php" id="contactForm">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Send Message
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer (Epic 6) -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <div class="logo">
                        <i class="fas fa-cash-register"></i>
                        <span>QuickPOS</span>
                    </div>
                    <p>The modern point of sale system for businesses of all sizes.</p>
                </div>
                <div class="footer-links">
                    <h4>Product</h4>
                    <ul>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="footer-social">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> QuickPOS. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>