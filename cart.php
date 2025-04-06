<?php require_once 'header.php' ?>

    <!-- Main Cart Section -->
    <main class="cart-page container">
        <h1 class="page-title">Your Shopping Cart</h1>

        <!-- Cart Items Section -->
        <div class="cart-container">
            <div class="cart-items">
                <!-- Cart Item 1 -->
                <div class="cart-item" data-price="2950">
                    <img src="assets/images/product_1.jpg" alt="Black Designer Dress" class="cart-item-img">
                    <div class="cart-item-details">
                        <h3 class="cart-item-name">Noir Elegance Evening Dress</h3>
                        <p class="cart-item-brand">CHANEL</p>
                        <div class="cart-item-options">
                            <span>Size: S</span>
                            <span>Color: Black</span>
                        </div>
                    </div>
                    <div class="quantity-selector">
                        <span>Quantity</span>
                        <div class="quantity-controls">
                            <button class="quantity-btn decrease">-</button>
                            <input type="text" class="quantity-value" value="1" readonly>
                            <button class="quantity-btn increase">+</button>
                        </div>
                    </div>
                    <div class="cart-item-price">$2,950.00</div>
                    <button class="remove-item"><i class="fas fa-times"></i></button>
                </div>

                <!-- Cart Item 2 -->
                <div class="cart-item" data-price="420">
                    <img src="assets/images/product_1.jpg" alt="Luxury Perfume" class="cart-item-img">
                    <div class="cart-item-details">
                        <h3 class="cart-item-name">Celestial Bloom Perfume</h3>
                        <p class="cart-item-brand">DIOR</p>
                        <div class="cart-item-options">
                            <span>Size: 100ml</span>
                        </div>
                    </div>
                    <div class="quantity-selector">
                        <span>Quantity</span>
                        <div class="quantity-controls">
                            <button class="quantity-btn decrease">-</button>
                            <input type="text" class="quantity-value" value="1" readonly>
                            <button class="quantity-btn increase">+</button>
                        </div>
                    </div>
                    <div class="cart-item-price">$420.00</div>
                    <button class="remove-item"><i class="fas fa-times"></i></button>
                </div>

                <!-- Cart Item 3 -->
                <div class="cart-item" data-price="12500">
                    <img src="assets/images/product_1.jpg" alt="Designer Watch" class="cart-item-img">
                    <div class="cart-item-details">
                        <h3 class="cart-item-name">Sovereign Chronograph Watch</h3>
                        <p class="cart-item-brand">ROLEX</p>
                        <div class="cart-item-options">
                            <span>Color: Silver</span>
                        </div>
                    </div>
                    <div class="quantity-selector">
                        <span>Quantity</span>
                        <div class="quantity-controls">
                            <button class="quantity-btn decrease">-</button>
                            <input type="text" class="quantity-value" value="1" readonly>
                            <button class="quantity-btn increase">+</button>
                        </div>
                    </div>
                    <div class="cart-item-price">$12,500.00</div>
                    <button class="remove-item"><i class="fas fa-times"></i></button>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="order-summary">
                <h2 class="summary-title">Order Summary</h2>
                <div class="summary-item">
                    <span class="subtotal-text">Subtotal (3 items)</span>
                    <span class="subtotal-value">$15,870.00</span>
                </div>
                <div class="summary-item">
                    <span>Shipping</span>
                    <span class="shipping-value">$20.00</span>
                </div>
                <div class="summary-item">
                    <span>Estimated Tax</span>
                    <span class="tax-value">$1,270.00</span>
                </div>
                <div class="summary-total">
                    <span>Total</span>
                    <span class="total-value">$17,160.00</span>
                </div>

                <div class="promo-code">
                    <input type="text" placeholder="Enter Promo Code" class="promo-input">
                    <button class="promo-btn">Apply</button>
                </div>

                <button class="checkout-btn">Proceed to Checkout</button>
                <a href="#" class="continue-shopping">Continue Shopping</a>

                <div class="payment-methods">
                    <img src="assets/images/card.png" alt="Visa" class="payment-icon">
                    <img src="assets/images/card.png" alt="Mastercard" class="payment-icon">
                    <img src="assets/images/card.png" alt="American Express" class="payment-icon">
                    <img src="assets/images/paypal.png" alt="PayPal" class="payment-icon">
                </div>
            </div>
        </div>

        <!-- Empty Cart State (hidden by default) -->
        <div class="empty-cart">
            <div class="empty-cart-icon">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <h2 class="empty-cart-message">Your cart is empty</h2>
            <a href="#" class="start-shopping-btn">Start Shopping</a>
        </div>

        <!-- Recommended Products -->
        <div class="recommended">
            <h2 class="recommended-title">Recommended For You</h2>
            <div class="recommended-products">
                <!-- Product 1 -->
                <div class="product-card">
                    <img src="assets/images/product_3.jpg" alt="Luxury Watch" class="product-img">
                    <div class="product-details">
                        <h3 class="product-name">Diamond Encrusted Gold Watch</h3>
                        <p class="product-brand">CARTIER</p>
                        <p class="product-price">$18,500.00</p>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card">
                    <img src="assets/images/product_3.jpg" alt="Designer Handbag" class="product-img">
                    <div class="product-details">
                        <h3 class="product-name">Iconic Quilted Handbag</h3>
                        <p class="product-brand">CHANEL</p>
                        <p class="product-price">$5,200.00</p>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card">
                    <img src="assets/images/product_3.jpg" alt="Men's Suit" class="product-img">
                    <div class="product-details">
                        <h3 class="product-name">Italian Wool Tuxedo</h3>
                        <p class="product-brand">TOM FORD</p>
                        <p class="product-price">$4,800.00</p>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="product-card">
                    <img src="assets/images/product_3.jpg" alt="Designer Perfume" class="product-img">
                    <div class="product-details">
                        <h3 class="product-name">Exclusive Limited Edition Fragrance</h3>
                        <p class="product-brand">GUCCI</p>
                        <p class="product-price">$680.00</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php require_once 'footer.php' ?>