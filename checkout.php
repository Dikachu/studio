<?php require_once 'header.php' ?>

  <div class="wrapper">
    <!-- <div class="checkout-steps">
      <div class="step completed">
        <div class="step-number">1</div>
        <div class="step-label">Cart</div>
      </div>
      <div class="step active">
        <div class="step-number">2</div>
        <div class="step-label">Checkout</div>
      </div>
      <div class="step">
        <div class="step-number">3</div>
        <div class="step-label">Confirmation</div>
      </div>
    </div> -->

    <div class="checkout-container">
      <div class="checkout-main">
        <div class="checkout-section">
          <h2 class="section-title">Shipping Information</h2>
          <div class="form-group">
            <div class="input-row">
              <div>
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" placeholder="Enter your first name">
              </div>
              <div>
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" placeholder="Enter your last name">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" placeholder="Enter your email address">
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" placeholder="Enter your phone number">
          </div>
          <div class="form-group">
            <label for="address">Street Address</label>
            <input type="text" id="address" placeholder="Enter your street address">
          </div>
          <div class="form-group">
            <div class="input-row">
              <div>
                <label for="city">City</label>
                <input type="text" id="city" placeholder="Enter your city">
              </div>
              <div>
                <label for="postalCode">Postal Code</label>
                <input type="text" id="postalCode" placeholder="Enter your postal code">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-row">
              <div>
                <label for="state">State/Province</label>
                <input type="text" id="state" placeholder="Enter your state">
              </div>
              <div>
                <label for="country">Country</label>
                <select id="country">
                  <option value="">Select your country</option>
                  <option value="US">United States</option>
                  <option value="CA">Canada</option>
                  <option value="UK">United Kingdom</option>
                  <option value="AU">Australia</option>
                  <option value="FR">France</option>
                  <option value="IT">Italy</option>
                  <option value="JP">Japan</option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <div class="checkout-section">
          <h2 class="section-title">Shipping Method</h2>
          <div class="form-group">
            <div class="payment-methods">
              <div class="payment-method selected">
                <div style="font-size: 24px; margin-bottom: 10px;"><i class="fas fa-truck"></i></div>
                <div style="font-weight: 600;">Standard</div>
                <div style="font-size: 12px; color: var(--dark-gray);">3-5 business days</div>
                <div style="font-weight: 500; margin-top: 5px;">$9.99</div>
              </div>
              <div class="payment-method">
                <div style="font-size: 24px; margin-bottom: 10px;"><i class="fas fa-rocket"></i></div>
                <div style="font-weight: 600;">Express</div>
                <div style="font-size: 12px; color: var(--dark-gray);">1-2 business days</div>
                <div style="font-weight: 500; margin-top: 5px;">$19.99</div>
              </div>
              <div class="payment-method">
                <div style="font-size: 24px; margin-bottom: 10px;"><i class="fas fa-store"></i></div>
                <div style="font-weight: 600;">Store Pickup</div>
                <div style="font-size: 12px; color: var(--dark-gray);">Available Tomorrow</div>
                <div style="font-weight: 500; margin-top: 5px;">Free</div>
              </div>
            </div>
          </div>
        </div>

        <div class="checkout-section">
          <h2 class="section-title">Payment Method</h2>
          <div class="form-group">
            <div class="payment-methods">
              <div class="payment-method selected">
                <img src="assets/images/card.png" alt="Credit Card">
              </div>
              <div class="payment-method">
                <img src="assets/images/paypal.png" alt="PayPal">
              </div>
              <div class="payment-method">
                <img src="assets/images/apple.png" alt="Apple Pay">
              </div>
            </div>
          </div>
          <div class="card-details">
            <div class="form-group">
              <label for="cardName">Name on Card</label>
              <input type="text" id="cardName" placeholder="Enter name as it appears on card">
            </div>
            <div class="form-group">
              <label for="cardNumber">Card Number</label>
              <input type="text" id="cardNumber" placeholder="XXXX XXXX XXXX XXXX">
            </div>
            <div class="form-group">
              <div class="input-row">
                <div>
                  <label for="expDate">Expiration Date</label>
                  <input type="text" id="expDate" placeholder="MM/YY">
                </div>
                <div>
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" placeholder="XXX">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="checkout-actions">
          <a href="cart.php" class="btn">Return to Cart</a>
          <a href="confirm_order.php" class="btn btn-accent">Complete Order</a>
        </div>
        
        <div class="security-badges">
          <div class="security-badge">
            <i class="fas fa-lock"></i>
            <span>Secure Payment</span>
          </div>
          <div class="security-badge">
            <i class="fas fa-shield-alt"></i>
            <span>SSL Encrypted</span>
          </div>
          <div class="security-badge">
            <i class="fas fa-credit-card"></i>
            <span>PCI Compliant</span>
          </div>
        </div>
      </div>

      <div class="order-summary">
        <div class="checkout-section">
          <h2 class="section-title">Order Summary</h2>
          <div class="order-summary-items">
            <div class="order-item">
              <img src="assets/images/product_1.jpg" alt="Product 1" class="item-image">
              <div class="item-details">
                <div class="item-name">Designer Perfume</div>
                <div class="item-meta">50ml • Floral</div>
              </div>
              <div class="item-price">$195.00</div>
            </div>
            <div class="order-item">
              <img src="assets/images/product_1.jpg" alt="Product 2" class="item-image">
              <div class="item-details">
                <div class="item-name">Luxury Silk Scarf</div>
                <div class="item-meta">Blue • One Size</div>
              </div>
              <div class="item-price">$145.00</div>
            </div>
            <div class="order-item">
              <img src="assets/images/product_1.jpg" alt="Product 3" class="item-image">
              <div class="item-details">
                <div class="item-name">Designer Sunglasses</div>
                <div class="item-meta">Black • Polarized</div>
              </div>
              <div class="item-price">$320.00</div>
            </div>
          </div>
          
          <div class="order-totals">
            <div class="total-row">
              <div>Subtotal</div>
              <div>$660.00</div>
            </div>
            <div class="total-row">
              <div>Shipping</div>
              <div>$9.99</div>
            </div>
            <div class="total-row">
              <div>Tax</div>
              <div>$66.00</div>
            </div>
            <div class="total-row final">
              <div>Total</div>
              <div>$735.99</div>
            </div>
          </div>
        </div>
        
        <div class="checkout-section">
          <h2 class="section-title">Have a Promo Code?</h2>
          <div class="form-group">
            <input type="text" placeholder="Enter promo code">
          </div>
          <a href="#" class="btn" style="width: 100%;">Apply</a>
        </div>
      </div>
    </div>
  </div>

<?php require_once 'footer.php' ?>