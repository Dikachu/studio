<?php require_once 'header.php' ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <video class="hero-video" autoplay muted loop>
            <source src="assets/vidoes/hero.mp4" type="video/mp4">
        </video>
        <div class="hero-content">
            <h1>LUXURY REDEFINED</h1>
            <p>Experience the perfect blend of fashion and photography at EASY TREND LUXE. Where style meets artistry.</p>
            <div class="hero-buttons">
                <a href="store.php" class="btn">Shop Collection</a>
                <a href="contact.php" class="btn">Book Studio</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>A Legacy of Luxury</h2>
                    <p>EASY TREND LUXE was founded with a vision to redefine luxury fashion and photography. Our commitment to excellence and attention to detail is evident in every design and every photograph.</p>
                    <p>We believe in creating not just products, but experiences that resonate with the modern connoisseur of fine taste and artistic expression.</p>
                    <a href="about.php" class="btn btn-dark">Discover Our Story</a>
                </div>
                <div class="about-image">
                    <img src="assets/images/potrait_2.jpg" alt="About EASY TREND LUXE">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="featured">
        <div class="container">
            <div class="section-title">
                <h2>Featured Collection</h2>
                <p>Explore our handpicked selection of premium designs, crafted for those who appreciate the finer things in life.</p>
            </div>
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image">
                        <img src="assets/images/product_1.jpg" alt="Luxury Product">
                        <div class="product-overlay">
                            <a href="#" class="btn">View Details</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3>Velvet Evening Gown</h3>
                        <p>$1,299.00</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="assets/images/product_2.jpg" alt="Luxury Product">
                        <div class="product-overlay">
                            <a href="#" class="btn">View Details</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3>Signature Cologne</h3>
                        <p>$349.00</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="assets/images/product_3.jpg" alt="Luxury Product">
                        <div class="product-overlay">
                            <a href="#" class="btn">View Details</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3>Italian Leather Jacket</h3>
                        <p>$2,199.00</p>
                    </div>
                </div>
            </div>
            <div class="text-center" style="margin-top: 3rem;">
                <a href="store.php" class="btn">View All Products</a>
            </div>
        </div>
    </section>

    <!-- Studio Section -->
    <section class="studio">
        <div class="container">
            <div class="studio-content">
                <div class="studio-text">
                    <h2>Premium Photography Studio</h2>
                    <p>Our state-of-the-art photography studio offers the perfect environment for creative expression. With professional lighting equipment and versatile backdrop options, we create stunning visuals for fashion, portrait, and commercial photography.</p>
                    <p>Experience the artistry of our professional photographers and elevate your brand with captivating imagery.</p>
                    <a href="studio.php" class="btn btn-dark">Book A Session</a>
                </div>
                <div class="studio-gallery">
                    <div class="gallery-item">
                        <img src="assets/images/studio_1.jpg" alt="Studio Gallery">
                    </div>
                    <div class="gallery-item">
                        <img src="assets/images/studio_2.jpg" alt="Studio Gallery">
                    </div>
                    <div class="gallery-item">
                        <img src="assets/images/studio_3.jpg" alt="Studio Gallery">
                    </div>
                    <div class="gallery-item">
                        <img src="assets/images/studio_4.jpg" alt="Studio Gallery">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>Client Testimonials</h2>
                <p>Hear what our clients have to say about their experiences with EASY TREND LUXE.</p>
            </div>
            <div class="testimonial-slider">
                <div class="testimonial-item">
                    <p class="testimonial-text">"The attention to detail and craftsmanship at EASY TREND LUXE is unparalleled. Their designs have become staples in my wardrobe, and their photography services elevated my brand to new heights."</p>
                    <p class="testimonial-author">- Alexandra Johnson, Fashion Influencer</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact">
        <div class="container">
            <div class="contact-content">
                <div class="contact-form">
                    <h2>Get In Touch</h2>
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <select id="subject">
                                <option value="general">General Inquiry</option>
                                <option value="shopping">Shopping Assistance</option>
                                <option value="studio">Studio Booking</option>
                                <option value="collaboration">Collaboration</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark">Send Message</button>
                    </form>
                </div>
                <div class="contact-info">
                    <h2>Visit Us</h2>
                    <div class="contact-details">
                        <p><strong>Address:</strong> 123 Luxury Avenue, Fashion District, New York, NY 10001</p>
                        <p><strong>Phone:</strong> +1 (212) 555-7890</p>
                        <p><strong>Email:</strong> info@easytrendluxe.com</p>
                        <p><strong>Hours:</strong> Monday - Friday: 10AM - 8PM<br>Saturday - Sunday: 11AM - 6PM</p>
                    </div>
                    <div class="map">
                        <!-- Google Maps Placeholder -->
                        <img src="assets/images/map.jpg" alt="Map Location" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require_once 'footer.php' ?>