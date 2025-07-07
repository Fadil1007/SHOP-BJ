/**
 * SHOP BJ - Main JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    // Tooltips initialization
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });
    
    // Add to wishlist functionality
    const wishlistButtons = document.querySelectorAll('.wishlist-icon');
    wishlistButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            this.classList.toggle('active');
            const productId = this.getAttribute('data-product-id');
            // Add AJAX call here to update wishlist
            console.log('Toggle wishlist for product ID:', productId);
        });
    });
    
    // Quantity input handlers
    const quantityInputs = document.querySelectorAll('.quantity-input');
    quantityInputs.forEach(input => {
        const minusBtn = input.parentElement.querySelector('.quantity-minus');
        const plusBtn = input.parentElement.querySelector('.quantity-plus');
        
        minusBtn.addEventListener('click', function() {
            const currentValue = parseInt(input.value);
            if (currentValue > 1) {
                input.value = currentValue - 1;
                // Trigger change event to update forms
                input.dispatchEvent(new Event('change'));
            }
        });
        
        plusBtn.addEventListener('click', function() {
            const currentValue = parseInt(input.value);
            const max = parseInt(input.getAttribute('max') || 99);
            if (currentValue < max) {
                input.value = currentValue + 1;
                // Trigger change event to update forms
                input.dispatchEvent(new Event('change'));
            }
        });
    });
    
    // Cart quantity change
    const cartQuantityForms = document.querySelectorAll('.cart-quantity-form');
    cartQuantityForms.forEach(form => {
        const input = form.querySelector('.quantity-input');
        input.addEventListener('change', function() {
            form.submit();
        });
    });
    
    // Product image gallery
    const productMainImage = document.querySelector('.product-main-image');
    const productThumbnails = document.querySelectorAll('.product-thumbnail');
    
    if (productMainImage && productThumbnails.length > 0) {
        productThumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', function() {
                const imgSrc = this.getAttribute('data-img-src');
                productMainImage.src = imgSrc;
                
                // Remove active class from all thumbnails
                productThumbnails.forEach(thumb => thumb.classList.remove('active'));
                
                // Add active class to clicked thumbnail
                this.classList.add('active');
            });
        });
    }
});