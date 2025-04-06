document.addEventListener('DOMContentLoaded', function() {
    // Tax rate (8% for this example)
    const TAX_RATE = 0.08;
    const SHIPPING_COST = 20;
    
    // Format currency function
    function formatCurrency(amount) {
        return new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD',
            minimumFractionDigits: 2
        }).format(amount);
    }
    
    // Get all cart items
    const cartItems = document.querySelectorAll('.cart-item');
    
    // Calculate and update each item's price
    function updateItemPrice(cartItem) {
        const basePrice = parseFloat(cartItem.dataset.price);
        const quantityInput = cartItem.querySelector('.quantity-value');
        const quantity = parseInt(quantityInput.value);
        const priceElement = cartItem.querySelector('.cart-item-price');
        
        const totalItemPrice = basePrice * quantity;
        priceElement.textContent = formatCurrency(totalItemPrice);
        
        // Add animation to price update
        priceElement.classList.remove('price-update');
        // Trigger reflow to restart animation
        void priceElement.offsetWidth;
        priceElement.classList.add('price-update');
        
        return totalItemPrice;
    }
    
    // Calculate and update all totals
    function updateTotals() {
        let subtotal = 0;
        
        // Sum up all items
        cartItems.forEach(item => {
            const basePrice = parseFloat(item.dataset.price);
            const quantity = parseInt(item.querySelector('.quantity-value').value);
            subtotal += basePrice * quantity;
        });
        
        // Calculate tax and total
        const tax = subtotal * TAX_RATE;
        const total = subtotal + tax + SHIPPING_COST;
        
        // Update the summary display
        const subtotalElement = document.querySelector('.subtotal-value');
        const taxElement = document.querySelector('.tax-value');
        const totalElement = document.querySelector('.total-value');
        
        subtotalElement.textContent = formatCurrency(subtotal);
        taxElement.textContent = formatCurrency(tax);
        totalElement.textContent = formatCurrency(total);
        
        // Add animation to totals
        [subtotalElement, taxElement, totalElement].forEach(el => {
            el.classList.remove('price-update');
            void el.offsetWidth;
            el.classList.add('price-update');
        });
        
        // Update item count
        const itemCount = Array.from(cartItems).reduce((acc, item) => {
            return acc + parseInt(item.querySelector('.quantity-value').value);
        }, 0);
        
        document.querySelector('.subtotal-text').textContent = `Subtotal (${itemCount} items)`;
        document.querySelector('.cart-count').textContent = itemCount;
    }
    
    // Initialize prices
    cartItems.forEach(updateItemPrice);
    updateTotals();
    
    // Add event listeners to quantity buttons
    cartItems.forEach(item => {
        const decreaseBtn = item.querySelector('.decrease');
        const increaseBtn = item.querySelector('.increase');
        const quantityInput = item.querySelector('.quantity-value');
        
        decreaseBtn.addEventListener('click', function() {
            let currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
                updateItemPrice(item);
                updateTotals();
            }
        });
        
        increaseBtn.addEventListener('click', function() {
            let currentValue = parseInt(quantityInput.value);
            quantityInput.value = currentValue + 1;
            updateItemPrice(item);
            updateTotals();
        });
    });
    
    // Remove items functionality
    const removeButtons = document.querySelectorAll('.remove-item');
    removeButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const cartItem = this.parentElement;
            cartItem.style.opacity = '0';
            setTimeout(() => {
                cartItem.remove();
                updateTotals();
                checkEmptyCart();
            }, 300);
        });
    });
    
    // Check for empty cart
    function checkEmptyCart() {
        const remainingItems = document.querySelectorAll('.cart-item').length;
        const cartContainer = document.querySelector('.cart-container');
        const emptyCart = document.querySelector('.empty-cart');
        const recommendedSection = document.querySelector('.recommended');
        
        if (remainingItems === 0) {
            cartContainer.style.display = 'none';
            emptyCart.style.display = 'block';
            recommendedSection.style.marginTop = '2rem';
        }
    }
    
    // Promo code functionality
    const promoInput = document.querySelector('.promo-input');
    const promoButton = document.querySelector('.promo-btn');
    
    promoButton.addEventListener('click', function() {
        const promoCode = promoInput.value.trim().toUpperCase();
        
        // Example promo codes
        const promoCodes = {
            'LUXE20': 0.2,  // 20% off
            'WELCOME10': 0.1,  // 10% off
            'FREESHIP': 'freeshipping'  // Free shipping
        };
        
        if (promoCodes[promoCode]) {
            // Apply discount
            let discount = 0;
            const subtotalValue = parseFloat(document.querySelector('.subtotal-value').textContent.replace(/[^0-9.-]+/g, ''));
            
            if (promoCodes[promoCode] === 'freeshipping') {
                // Free shipping promo
                document.querySelector('.shipping-value').textContent = '$0.00';
                discount = SHIPPING_COST;
                
                // Show success message
                promoInput.value = '';
                promoInput.placeholder = 'Free shipping applied!';
                promoInput.style.borderColor = '#d4af37';
                setTimeout(() => {
                    promoInput.placeholder = 'Enter Promo Code';
                    promoInput.style.borderColor = 'rgba(255, 255, 255, 0.1)';
                }, 3000);
            } else {
                // Percentage discount
                discount = subtotalValue * promoCodes[promoCode];
                
                // Create discount element if it doesn't exist
                let discountElement = document.querySelector('.discount-value');
                if (!discountElement) {
                    const discountItem = document.createElement('div');
                    discountItem.className = 'summary-item';
                    discountItem.innerHTML = `
                        <span>Discount (${promoCode})</span>
                        <span class="discount-value">-${formatCurrency(discount)}</span>
                    `;
                    const taxElement = document.querySelector('.summary-item:nth-child(3)');
                    taxElement.insertAdjacentElement('afterend', discountItem);
                    discountElement = document.querySelector('.discount-value');
                } else {
                    discountElement.textContent = `-${formatCurrency(discount)}`;
                    discountElement.previousElementSibling.textContent = `Discount (${promoCode})`;
                }
                
                // Show success message
                promoInput.value = '';
                promoInput.placeholder = `${Math.round(promoCodes[promoCode] * 100)}% discount applied!`;
                promoInput.style.borderColor = '#d4af37';
                setTimeout(() => {
                    promoInput.placeholder = 'Enter Promo Code';
                    promoInput.style.borderColor = 'rgba(255, 255, 255, 0.1)';
                }, 3000);
            }
            
            // Recalculate total
            updateTotalsWithDiscount();
        } else if (promoCode !== '') {
            // Invalid promo code
            promoInput.value = '';
            promoInput.placeholder = 'Invalid promo code';
            promoInput.style.borderColor = 'rgba(255, 0, 0, 0.5)';
            setTimeout(() => {
                promoInput.placeholder = 'Enter Promo Code';
                promoInput.style.borderColor = 'rgba(255, 255, 255, 0.1)';
            }, 3000);
        }
    });
    
    // Function to update totals with discount
    function updateTotalsWithDiscount() {
        let subtotal = 0;
        
        // Sum up all items
        cartItems.forEach(item => {
            const basePrice = parseFloat(item.dataset.price);
            const quantity = parseInt(item.querySelector('.quantity-value').value);
            subtotal += basePrice * quantity;
        });
        
        // Get discount if any
        let discount = 0;
        const discountElement = document.querySelector('.discount-value');
        if (discountElement) {
            discount = parseFloat(discountElement.textContent.replace(/[^0-9.-]+/g, ''));
        }
        
        // Get shipping cost
        const shippingCost = parseFloat(document.querySelector('.shipping-value').textContent.replace(/[^0-9.-]+/g, ''));
        
        // Calculate tax and total
        const tax = subtotal * TAX_RATE;
        const total = subtotal + tax + shippingCost - discount;
        
        // Update the display
        const subtotalElement = document.querySelector('.subtotal-value');
        const taxElement = document.querySelector('.tax-value');
        const totalElement = document.querySelector('.total-value');
        
        subtotalElement.textContent = formatCurrency(subtotal);
        taxElement.textContent = formatCurrency(tax);
        totalElement.textContent = formatCurrency(total);
        
        // Add animation to totals
        [subtotalElement, taxElement, totalElement].forEach(el => {
            el.classList.remove('price-update');
            void el.offsetWidth;
            el.classList.add('price-update');
        });
    }
    
    // Checkout button animation
    const checkoutBtn = document.querySelector('.checkout-btn');
    checkoutBtn.addEventListener('mouseover', function() {
        this.style.transform = 'translateY(-2px)';
        this.style.boxShadow = '0 5px 15px rgba(212, 175, 55, 0.2)';
    });
    
    checkoutBtn.addEventListener('mouseout', function() {
        this.style.transform = 'translateY(0)';
        this.style.boxShadow = 'none';
    });
    
    checkoutBtn.addEventListener('click', function(e) {
        e.preventDefault();
        // Simple animation to simulate checkout
        this.textContent = 'Processing...';
        this.style.opacity = '0.8';
        
        setTimeout(() => {
            window.location.href = 'checkout.php'; // Redirect to checkout page
        }, 800);
    });
    
    // Product cards hover effects
    const productCards = document.querySelectorAll('.product-card');
    productCards.forEach(card => {
        card.addEventListener('mouseover', function() {
            this.style.transform = 'translateY(-5px)';
            this.style.boxShadow = '0 10px 20px rgba(0, 0, 0, 0.3)';
            this.style.backgroundColor = 'rgba(255, 255, 255, 0.05)';
        });
        
        card.addEventListener('mouseout', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = 'none';
            this.style.backgroundColor = 'rgba(255, 255, 255, 0.02)';
        });
        
        // Simulate click to product page
        card.addEventListener('click', function() {
            this.style.transform = 'scale(0.98)';
            setTimeout(() => {
                window.location.href = 'product.php'; // Redirect to product page
            }, 300);
        });
    });
    
    // Add smooth scroll effect
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Add header scroll effect
    const header = document.querySelector('header');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            header.style.height = '70px';
            header.style.backdropFilter = 'blur(15px)';
            header.style.borderBottom = '1px solid rgba(255, 255, 255, 0.1)';
        } else {
            header.style.height = '80px';
            header.style.backdropFilter = 'blur(10px)';
            header.style.borderBottom = '1px solid rgba(255, 255, 255, 0.05)';
        }
    });
    
    // Save cart to localStorage
    function saveCartToLocalStorage() {
        const cartData = [];
        cartItems.forEach(item => {
            const itemData = {
                name: item.querySelector('.cart-item-name').textContent,
                brand: item.querySelector('.cart-item-brand').textContent,
                price: parseFloat(item.dataset.price),
                quantity: parseInt(item.querySelector('.quantity-value').value),
                options: {},
                image: item.querySelector('.cart-item-img').src
            };
            
            // Get options
            const options = item.querySelectorAll('.cart-item-options span');
            options.forEach(option => {
                const [key, value] = option.textContent.split(': ');
                itemData.options[key] = value;
            });
            
            cartData.push(itemData);
        });
        
        localStorage.setItem('easyTrendCart', JSON.stringify(cartData));
    }
    
    // Save cart on any changes
    document.querySelectorAll('.quantity-btn, .remove-item').forEach(btn => {
        btn.addEventListener('click', saveCartToLocalStorage);
    });
    
    // Initial save
    saveCartToLocalStorage();
    
    // Initialize animations for elements
    function initAnimations() {
        // Animate in cart items
        cartItems.forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                item.style.transition = 'all 0.5s ease';
                item.style.opacity = '1';
                item.style.transform = 'translateY(0)';
            }, 100 * (index + 1));
        });
        
        // Animate in summary section
        const summary = document.querySelector('.order-summary');
        summary.style.opacity = '0';
        summary.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            summary.style.transition = 'all 0.5s ease';
            summary.style.opacity = '1';
            summary.style.transform = 'translateY(0)';
        }, 400);
        
        // Animate in recommended products
        const products = document.querySelectorAll('.product-card');
        products.forEach((product, index) => {
            product.style.opacity = '0';
            product.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                product.style.transition = 'all 0.5s ease';
                product.style.opacity = '1';
                product.style.transform = 'translateY(0)';
            }, 600 + (100 * index));
        });
    }
    
    // Run animations after a small delay
    setTimeout(initAnimations, 300);
    
    // Add wishlist functionality
    function addWishlistButtons() {
        const cartItems = document.querySelectorAll('.cart-item');
        
        cartItems.forEach(item => {
            const wishlistBtn = document.createElement('button');
            wishlistBtn.className = 'wishlist-btn';
            wishlistBtn.innerHTML = '<i class="far fa-heart"></i>';
            wishlistBtn.style.position = 'absolute';
            wishlistBtn.style.top = '1.5rem';
            wishlistBtn.style.right = '30px';
            wishlistBtn.style.background = 'transparent';
            wishlistBtn.style.border = 'none';
            wishlistBtn.style.color = 'rgba(240, 240, 240, 0.5)';
            wishlistBtn.style.fontSize = '1rem';
            wishlistBtn.style.cursor = 'pointer';
            wishlistBtn.style.transition = 'color 0.3s ease';
            
            wishlistBtn.addEventListener('mouseover', function() {
                this.style.color = '#d4af37';
            });
            
            wishlistBtn.addEventListener('mouseout', function() {
                this.style.color = 'rgba(240, 240, 240, 0.5)';
            });
            
            wishlistBtn.addEventListener('click', function() {
                this.innerHTML = '<i class="fas fa-heart"></i>';
                this.style.color = '#d4af37';
                
                // Show toast notification
                const toast = document.createElement('div');
                toast.className = 'toast-notification';
                toast.textContent = 'Added to Wishlist';
                toast.style.position = 'fixed';
                toast.style.bottom = '20px';
                toast.style.right = '20px';
                toast.style.backgroundColor = 'rgba(212, 175, 55, 0.9)';
                toast.style.color = '#0a0a0a';
                toast.style.padding = '10px 20px';
                toast.style.borderRadius = '5px';
                toast.style.fontSize = '0.9rem';
                toast.style.zIndex = '1000';
                toast.style.transform = 'translateY(100%)';
                toast.style.opacity = '0';
                toast.style.transition = 'all 0.3s ease';
                
                document.body.appendChild(toast);
                
                setTimeout(() => {
                    toast.style.transform = 'translateY(0)';
                    toast.style.opacity = '1';
                }, 10);
                
                setTimeout(() => {
                    toast.style.transform = 'translateY(100%)';
                    toast.style.opacity = '0';
                    setTimeout(() => {
                        toast.remove();
                    }, 300);
                }, 3000);
            });
            
            item.appendChild(wishlistBtn);
        });
    }
    
    // Add wishlist buttons
    // addWishlistButtons();
});