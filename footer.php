<div class="footer-container">
    <div class="footer-grid">
            <div class="brand">
                <p>CubeTech Innovations © 2024</p>
                <div class="social-links">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="input-group">
                    <input type="email" placeholder="Email">
                    <button class="btn-primary">Subscribe</button>
                </div>
            </div>
            <div class="footer-links">
                <div>
                    <h4>Company</h4>
                    <a href="#">About Us</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms and Conditions</a>
                </div>
                <div>
                    <h4>Products</h4>
                    <a href="#">SwapServe</a>
                    <a href="#">Barcode Generator</a>
                    <a href="#">QR Code Generator</a>
                </div>
                <div>
                    <h4>Services</h4>
                    <a href="#">Barcode Generator</a>
                    <a href="#">QR Code Generator</a>
                    <a href="#">Job Search</a>
                </div>
            </div>
        </div>
    </div>
<?php
wp_enqueue_style('footer-style', get_template_directory_uri() . '/styles/footer.css', array(), '1.0', 'all');
?>

<?php wp_footer(); ?>
</body>
</html>