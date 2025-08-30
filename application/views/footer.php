<!-- Start Footer 
    ============================================= -->
<footer class="default-padding">
    <div class="container">
        <div class="f-items">
            <div class="row">
                <!-- Brand & CTA -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="f-item">
                        <img src="assets/img/logo1.png" alt="UAE Invoicing & CRM Logo">
                        <p>
                            A bilingual (Arabic/English) invoicing & client management platform for UAE businesses. 
                            Automate billing, stay <strong>FTA/EmaraTax</strong> compliant, and improve cash flow with secure hosting and local payment integrations.
                        </p>
                        <a href="#pricing" class="btn circle btn-theme effect btn-sm">Start Now</a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 item">
                    <div class="f-item link">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#features">Features</a></li>
                            <li><a href="#pricing">Pricing</a></li>
                            <li><a href="#overview">Overview</a></li>
                            <li><a href="#blog">Blog</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Company -->
                <div class="col-lg-2 col-md-6 item">
                    <div class="f-item link">
                        <h4>Company</h4>
                        <ul>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Support</a></li>
                            <li><a href="#faq">FAQ</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Contact Widget -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="f-item contact-widget">
                        <div class="address">
                            <ul>
                                <li>
                                    <div class="icon"><i class="fas fa-home"></i></div>
                                    <div class="info">
                                        <h5>Website:</h5>
                                        <span>invoicing.amaziverse.io</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-envelope"></i></div>
                                    <div class="info">
                                        <h5>Email:</h5>
                                        <span>support@amaziverse.io</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-phone"></i></div>
                                    <div class="info">
                                        <h5>Phone:</h5>
                                        <span>+971 (0)4 555 1234</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="social-address mt-3">
                            <h4>Follow Us</h4>
                            <ul class="social">
                                <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Contact Widget -->
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <p>© Copyright 2025. All rights reserved by 
                            <a href="#">Amaziverse UAE Invoicing</a>
                        </p>
                    </div>
                    <div class="col-lg-6 text-end link">
                        <ul>
                            <li><a href="<?= base_url('legal/terms-en') ?>">Terms of Use</a></li>
                            <li><a href="<?= base_url('legal/privacy-en') ?>">Privacy Policy</a></li>
                            <li><a href="#contact">Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Footer Bottom -->
    </div>
</footer>
<!-- End Footer -->

<!-- jQuery Frameworks
============================================= -->
<script src="<?= base_url('assets/js/jquery-3.6.0.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.appear.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.easing.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('assets/js/count-to.js') ?>"></script>
<script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
<script src="<?= base_url('assets/js/validnavs.js') ?>"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>

<!-- Language Toggle Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const languageToggle = document.getElementById('languageToggle');
    const languageFlag = document.getElementById('languageFlag');
    
    // Set the current language flag (UAE for English page)
    languageFlag.classList.add('uae');
    languageFlag.title = 'Switch to Arabic / التبديل إلى العربية';
    
    languageToggle.addEventListener('click', function() {
        // Try multiple URL approaches for better compatibility
        const baseUrl = '<?= base_url() ?>';
        
        // First try the clean URL, then fallback to index.php
        const testUrl = baseUrl + 'ar';
        
        // Test if clean URLs work by making a quick check
        fetch(testUrl, { method: 'HEAD' })
            .then(response => {
                if (response.ok) {
                    window.location.href = testUrl;
                } else {
                    // Fallback to index.php approach
                    window.location.href = baseUrl + 'index.php/ar';
                }
            })
            .catch(() => {
                // If fetch fails, try index.php approach
                window.location.href = baseUrl + 'index.php/ar';
            });
    });
});
</script>

<!-- Include Chatbot Widget -->
<?php $this->load->view('chatbot_widget'); ?>

</body>
</html>
