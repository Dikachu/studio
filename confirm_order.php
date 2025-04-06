<?php require_once 'header.php' ?>

  <div class="confirmation-container">
    <div class="success-icon">
      <div class="success-circle pulse">
        <i class="fas fa-check"></i>
      </div>
    </div>

    <div class="confirmation-section">
      <div class="confirmation-header">
        <h1>Thank You For Your Order!</h1>
        <p>We've received your order and are preparing it for shipping.</p>
        <p>A confirmation email has been sent to <strong>client@example.com</strong></p>
      </div>
      
      <div class="section-title">Order Information</div>
      <div class="order-details">
        <div>
          <div class="detail-group">
            <div class="detail-label">Order Number</div>
            <div class="detail-value order-id">#ETL-46928</div>
          </div>
          <div class="detail-group">
            <div class="detail-label">Order Date</div>
            <div class="detail-value">April 6, 2025</div>
          </div>
          <div class="detail-group">
            <div class="detail-label">Payment Method</div>
            <div class="detail-value">Credit Card (••••5678)</div>
          </div>
        </div>
        
        <div>
          <div class="detail-group">
            <div class="detail-label">Shipping Address</div>
            <div class="detail-value">
              John Smith<br>
              123 Luxury Lane<br>
              Beverly Hills, CA 90210<br>
              United States
            </div>
          </div>
          <div class="detail-group">
            <div class="detail-label">Shipping Method</div>
            <div class="detail-value">Standard (3-5 business days)</div>
          </div>
        </div>
      </div>
      
      <div class="section-title">Order Status</div>
      <div class="delivery-timeline">
        <div class="timeline-step completed">
          <div class="step-icon">
            <i class="fas fa-check"></i>
          </div>
          <div class="step-name">Order Placed</div>
        </div>
        <div class="timeline-step active">
          <div class="step-icon">
            <i class="fas fa-box"></i>
          </div>
          <div class="step-name">Processing</div>
        </div>
        <div class="timeline-step">
          <div class="step-icon">
            <i class="fas fa-truck"></i>
          </div>
          <div class="step-name">Shipped</div>
        </div>
        <div class="timeline-step">
          <div class="step-icon">
            <i class="fas fa-home"></i>
          </div>
          <div class="step-name">Delivered</div>
        </div>
      </div>
      
      <div class="special-message">
        <p>As a valued EASY TREND LUXE customer, your order will be handled with extra care by our luxury specialists.</p>
      </div>
    </div>

    <div class="confirmation-section">
      <div class="section-title">Order Summary</div>
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

    <div class="confirmation-section">
      <div class="section-title">You Might Also Like</div>
      <div class="recommendations">
        <div class="product-card">
          <img src="assets/images/product_1.jpg" alt="Recommended Product 1" class="product-image">
          <div class="product-info">
            <div class="product-name">Luxury Leather Wallet</div>
            <div class="product-price">$175.00</div>
          </div>
        </div>
        <div class="product-card">
          <img src="assets/images/product_1.jpg" alt="Recommended Product 2" class="product-image">
          <div class="product-info">
            <div class="product-name">Designer Watch</div>
            <div class="product-price">$495.00</div>
          </div>
        </div>
        <div class="product-card">
          <img src="assets/images/product_1.jpg" alt="Recommended Product 3" class="product-image">
          <div class="product-info">
            <div class="product-name">Premium Face Serum</div>
            <div class="product-price">$125.00</div>
          </div>
        </div>
      </div>
    </div>

    <div class="confirmation-actions">
      <a href="#" class="btn">Track Your Order</a>
      <a href="#" class="btn btn-accent">Continue Shopping</a>
      <a href="#" class="btn btn-outline">View Order History</a>
    </div>
  </div>

<?php require_once 'footer.php' ?>