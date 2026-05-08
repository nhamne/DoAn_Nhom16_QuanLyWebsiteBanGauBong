<?php
add_action('wp_enqueue_scripts', 'storefront_child_enqueue_styles');
function storefront_child_enqueue_styles()
{
    // Gọi CSS của theme gốc
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Gọi CSS của child theme
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}

// Thêm Script tạo Carousel cho lưới sản phẩm Elementor Shortcode
add_action('wp_footer', 'custom_product_carousel_script');
function custom_product_carousel_script() {
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const carousels = document.querySelectorAll('.elementor-widget-shortcode');
        carousels.forEach(function(widget) {
            const productList = widget.querySelector('ul.products');
            if (!productList) return;

            const wrapper = document.createElement('div');
            wrapper.className = 'custom-carousel-wrapper';
            
            const prevBtn = document.createElement('button');
            prevBtn.className = 'custom-carousel-prev';
            prevBtn.innerHTML = '&#10094;';

            const nextBtn = document.createElement('button');
            nextBtn.className = 'custom-carousel-next';
            nextBtn.innerHTML = '&#10095;';

            productList.parentNode.insertBefore(wrapper, productList);
            
            wrapper.appendChild(prevBtn);
            
            const trackContainer = document.createElement('div');
            trackContainer.className = 'custom-carousel-track-container';
            wrapper.appendChild(trackContainer);
            trackContainer.appendChild(productList);
            
            wrapper.appendChild(nextBtn);

            nextBtn.addEventListener('click', function() {
                const item = productList.querySelector('li.product');
                const scrollAmount = item ? item.offsetWidth + 20 : 300; // 20 là gap
                productList.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            });
            
            prevBtn.addEventListener('click', function() {
                const item = productList.querySelector('li.product');
                const scrollAmount = item ? item.offsetWidth + 20 : 300;
                productList.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            });
        });
    });
    </script>
    <?php
}
?>