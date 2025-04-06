<?php require_once 'header.php' ?>

    <!-- Shop Header -->
    <div class="shop-header">
        <div class="container">
            <h1 class="shop-title">Curated Collection</h1>
            <p class="shop-subtitle">Handpicked designer pieces for the discerning connoisseur</p>
        </div>
    </div>

    <!-- Filter Bar -->
    <div class="container">
        <div class="filter-bar">
            <div class="filter-container">
                <div class="filter-left">
                    <div class="filter-item">
                        <button class="filter-btn">
                            <span>Category</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="filter-dropdown">
                            <label class="custom-checkbox">
                                <input type="radio" name="category" value="all" checked>
                                <span class="checkmark"></span>
                                All Products
                            </label>
                            <label class="custom-checkbox">
                                <input type="radio" name="category" value="clothing">
                                <span class="checkmark"></span>
                                Clothing
                            </label>
                            <label class="custom-checkbox">
                                <input type="radio" name="category" value="perfumes">
                                <span class="checkmark"></span>
                                Perfumes
                            </label>
                            <label class="custom-checkbox">
                                <input type="radio" name="category" value="accessories">
                                <span class="checkmark"></span>
                                Accessories
                            </label>
                        </div>
                    </div>
                    <div class="filter-item">
                        <button class="filter-btn">
                            <span>Gender</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="filter-dropdown">
                            <label class="custom-checkbox">
                                <input type="radio" name="gender" value="all" checked>
                                <span class="checkmark"></span>
                                All
                            </label>
                            <label class="custom-checkbox">
                                <input type="radio" name="gender" value="men">
                                <span class="checkmark"></span>
                                Men
                            </label>
                            <label class="custom-checkbox">
                                <input type="radio" name="gender" value="women">
                                <span class="checkmark"></span>
                                Women
                            </label>
                        </div>
                    </div>
                    <div class="filter-item">
                        <button class="filter-btn">
                            <span>Brand</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="filter-dropdown">
                            <label class="custom-checkbox">
                                <input type="radio" name="brand" value="all" checked>
                                <span class="checkmark"></span>
                                All Brands
                            </label>
                            <label class="custom-checkbox">
                                <input type="radio" name="brand" value="easy-trend">
                                <span class="checkmark"></span>
                                EASY TREND LUXE
                            </label>
                            <label class="custom-checkbox">
                                <input type="radio" name="brand" value="designer1">
                                <span class="checkmark"></span>
                                Designer 1
                            </label>
                            <label class="custom-checkbox">
                                <input type="radio" name="brand" value="designer2">
                                <span class="checkmark"></span>
                                Designer 2
                            </label>
                        </div>
                    </div>
                    <div class="filter-item">
                        <button class="filter-btn">
                            <span>Sort By</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="filter-dropdown">
                            <label class="custom-checkbox">
                                <input type="radio" name="sort-by" value="newest" checked>
                                <span class="checkmark"></span>
                                Newest
                            </label>
                            <label class="custom-checkbox">
                                <input type="radio" name="sort-by" value="high-to-low">
                                <span class="checkmark"></span>
                                Price: High to Low
                            </label>
                            <label class="custom-checkbox">
                                <input type="radio" name="sort-by" value="low-to-high">
                                <span class="checkmark"></span>
                                Price: Low to High
                            </label>
                            <label class="custom-checkbox">
                                <input type="radio" name="sort-by" value="bestsellers">
                                <span class="checkmark"></span>
                                Bestsellers
                            </label>
                        </div>
                    </div>
                </div>
                <div class="filter-search">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search products...">
                </div>
            </div>
        </div>
    </div>

    <!-- Products Grid -->
    <div class="container">
        <div class="products-grid">
            <!-- Product 1 -->
            <div class="product-card another">
                <div class="product-image">
                    <img src="assets/images/product_3.jpg" alt="Luxury Blazer">
                    <div class="product-overlay">
                        <div class="product-actions">
                            <button class="product-action-btn" data-product="1">
                                <i class="fas fa-shopping-bag"></i>
                                <span>Add to Cart</span>
                            </button>
                            <button class="product-action-btn wishlist">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-tags">
                        <div class="product-tag new">New</div>
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-category">Men's Clothing</div>
                    <h3 class="product-title">Luxury Velvet Blazer</h3>
                    <div class="product-price">
                        <span class="current-price">$399.00</span>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="assets/images/product_3.jpg" alt="Designer Perfume">
                    <div class="product-overlay">
                        <div class="product-actions">
                            <button class="product-action-btn" data-product="2">
                                <i class="fas fa-shopping-bag"></i>
                                <span>Add to Cart</span>
                            </button>
                            <button class="product-action-btn wishlist">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-category">Perfumes</div>
                    <h3 class="product-title">Midnight Elixir Fragrance</h3>
                    <div class="product-price">
                        <span class="current-price">$185.00</span>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="assets/images/product_3.jpg" alt="Evening Dress">
                    <div class="product-overlay">
                        <div class="product-actions">
                            <button class="product-action-btn" data-product="3">
                                <i class="fas fa-shopping-bag"></i>
                                <span>Add to Cart</span>
                            </button>
                            <button class="product-action-btn wishlist">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-tags">
                        <div class="product-tag sale">Sale</div>
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-category">Women's Clothing</div>
                    <h3 class="product-title">Silk Evening Gown</h3>
                    <div class="product-price">
                        <span class="current-price">$499.00</span>
                        <span class="old-price">$699.00</span>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="assets/images/product_3.jpg" alt="Leather Bag">
                    <div class="product-overlay">
                        <div class="product-actions">
                            <button class="product-action-btn" data-product="4">
                                <i class="fas fa-shopping-bag"></i>
                                <span>Add to Cart</span>
                            </button>
                            <button class="product-action-btn wishlist">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-category">Accessories</div>
                    <h3 class="product-title">Italian Leather Handbag</h3>
                    <div class="product-price">
                        <span class="current-price">$329.00</span>
                    </div>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="assets/images/product_3.jpg" alt="Designer Watch">
                    <div class="product-overlay">
                        <div class="product-actions">
                            <button class="product-action-btn" data-product="5">
                                <i class="fas fa-shopping-bag"></i>
                                <span>Add to Cart</span>
                            </button>
                            <button class="product-action-btn wishlist">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-tags">
                        <div class="product-tag">Best Seller</div>
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-category">Accessories</div>
                    <h3 class="product-title">Minimalist Luxury Watch</h3>
                    <div class="product-price">
                        <span class="current-price">$879.00</span>
                    </div>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="assets/images/product_3.jpg" alt="Cashmere Sweater">
                    <div class="product-overlay">
                        <div class="product-actions">
                            <button class="product-action-btn" data-product="6">
                                <i class="fas fa-shopping-bag"></i>
                                <span>Add to Cart</span>
                            </button>
                            <button class="product-action-btn wishlist">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-category">Women's Clothing</div>
                    <h3 class="product-title">Cashmere Wrap Sweater</h3>
                    <div class="product-price">
                        <span class="current-price">$255.00</span>
                    </div>
                </div>
            </div>

            <!-- Products 7-9 (adding more products as requested) -->
            <div class="product-card">
                <div class="product-image">
                    <img src="assets/images/product_3.jpg" alt="Designer Sunglasses">
                    <div class="product-overlay">
                        <div class="product-actions">
                            <button class="product-action-btn" data-product="7">
                                <i class="fas fa-shopping-bag"></i>
                                <span>Add to Cart</span>
                            </button>
                            <button class="product-action-btn wishlist">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-tags">
                        <div class="product-tag new">New</div>
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-category">Accessories</div>
                    <h3 class="product-title">Avant-Garde Sunglasses</h3>
                    <div class="product-price">
                        <span class="current-price">$219.00</span>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="assets/images/product_3.jpg" alt="Men's Shoes">
                    <div class="product-overlay">
                        <div class="product-actions">
                            <button class="product-action-btn" data-product="8">
                                <i class="fas fa-shopping-bag"></i>
                                <span>Add to Cart</span>
                            </button>
                            <button class="product-action-btn wishlist">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-category">Men's Footwear</div>
                    <h3 class="product-title">Handcrafted Italian Loafers</h3>
                    <div class="product-price">
                        <span class="current-price">$459.00</span>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="assets/images/product_3.jpg" alt="Women's Perfume">
                    <div class="product-overlay">
                        <div class="product-actions">
                            <button class="product-action-btn" data-product="9">
                                <i class="fas fa-shopping-bag"></i>
                                <span>Add to Cart</span>
                            </button>
                            <button class="product-action-btn wishlist">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-tags">
                        <div class="product-tag sale">Sale</div>
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-category">Perfumes</div>
                    <h3 class="product-title">Floral Essence Parfum</h3>
                    <div class="product-price">
                        <span class="current-price">$149.00</span>
                        <span class="old-price">$195.00</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <div class="page-item arrow">
                <i class="fas fa-chevron-left"></i>
            </div>
            <div class="page-item active">1</div>
            <div class="page-item">2</div>
            <div class="page-item">3</div>
            <div class="page-item">...</div>
            <div class="page-item">8</div>
            <div class="page-item arrow">
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>

        <!-- Newsletter Section -->
        <!-- <div class="newsletter">
            <div class="newsletter-container">
                <h2 class="newsletter-title">Subscribe to Our Newsletter</h2>
                <p class="newsletter-subtitle">Be the first to know about new collections, exclusive offers, and fashion insights.</p>
                <form class="newsletter-form">
                    <input type="email" class="newsletter-input" placeholder="Your email address">
                    <button type="submit" class="newsletter-btn">Subscribe</button>
                </form>
            </div>
        </div> -->
    </div>

    <?php require_once 'footer.php' ?>