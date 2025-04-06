    <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <div class="footer-logo">
                        <a href="index.php">EASY <span>TREND</span> LUXE</a>
                    </div>
                    <p class="footer-text">Discover the epitome of fashion and photography excellence with EASY TREND LUXE. We blend creativity, style, and luxury to create unforgettable experiences.</p>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4 class="footer-heading">Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="store.php"><i class="fas fa-chevron-right"></i> Fashion Store</a></li>
                        <li><a href="studio.php"><i class="fas fa-chevron-right"></i> Studio Services</a></li>
                        <li><a href="gallery.php"><i class="fas fa-chevron-right"></i> Gallery</a></li>
                        <li><a href="about.php"><i class="fas fa-chevron-right"></i> About Us</a></li>
                        <li><a href="contact.php"><i class="fas fa-chevron-right"></i> Contact</a></li>
                        <li><a href="blog.php"><i class="fas fa-chevron-right"></i> Blog</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4 class="footer-heading">Contact Info</h4>
                    <ul class="footer-contact footer-links">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>123 Luxury Avenue, Fashion District, New York, NY 10001</span>
                        </li>
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <span>+1 (555) 123-4567</span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>info@easytrendluxe.com</span>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <span>Mon-Sat: 10AM - 8PM<br>Sunday: 12PM - 6PM</span>
                        </li>
                    </ul>
                </div>
                <div class="footer-col footer-newsletter">
                    <h4 class="footer-heading">Join Our Newsletter</h4>
                    <p>Subscribe to receive updates on new collections, exclusive offers, and luxury fashion insights.</p>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Your Email Address">
                        <button type="submit">Subscribe</button>
                    </form>
                    <p>By subscribing, you agree to our Privacy Policy and consent to receive updates from our company.</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p class="footer-copyright">© <span id="current-year"></span> <a href="index.php">EASY TREND LUXE</a>. All Rights Reserved.</p>
                <div class="footer-payment">
                    <img src="assets/images/card.png" alt="Visa">
                    <img src="assets/images/card.png" alt="Mastercard">
                    <img src="assets/images/card.png" alt="American Express">
                    <img src="assets/images/paypal.png" alt="PayPal">
                </div>
            </div>
        </div>


        <!-- AR Try-On Feature Teaser -->
        <!-- <div class="ar-teaser">
            <div class="ar-icon">
                <i class="fas fa-vr-cardboard"></i>
            </div>
            <span>Try On Virtually</span>
        </div> -->
        
        <!-- Back to Top Button -->
        <!-- <button class="back-to-top" id="backToTop">
            <i class="fas fa-arrow-up"></i>
        </button> -->
    </footer>

    <!-- JavaScript -->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/<?= getCurrentPage() ?>.js"></script>
    <?php echo getCurrentPage() == 'contact' ? '<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>' : ''  ?>
</body>
</html>