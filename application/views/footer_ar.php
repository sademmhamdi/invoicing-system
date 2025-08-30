<!-- Start Footer 
    ============================================= -->
<footer class="default-padding">
    <div class="container">
        <div class="f-items">
            <div class="row">
                <!-- Brand & CTA -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="f-item">
                        <img src="<?= base_url('assets/img/logo1.png') ?>" alt="شعار الفوترة وإدارة العملاء في الإمارات">
                        <p>
                            منصة فوترة وإدارة عملاء ثنائية اللغة (عربي/إنجليزي) للشركات في دولة الإمارات. 
                            أتمتة الفوترة والبقاء <strong>متوافقاً مع الهيئة الاتحادية للضرائب/إمارة تاكس</strong> وتحسين التدفق النقدي مع الاستضافة الآمنة وتكامل المدفوعات المحلية.
                        </p>
                        <a href="#pricing" class="btn circle btn-theme effect btn-sm">ابدأ الآن</a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 item">
                    <div class="f-item link">
                        <h4>روابط سريعة</h4>
                        <ul>
                            <li><a href="#home">الرئيسية</a></li>
                            <li><a href="#features">المميزات</a></li>
                            <li><a href="#pricing">التسعير</a></li>
                            <li><a href="#overview">نظرة عامة</a></li>
                            <li><a href="#blog">المدونة</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Company -->
                <div class="col-lg-2 col-md-6 item">
                    <div class="f-item link">
                        <h4>الشركة</h4>
                        <ul>
                            <li><a href="#about">من نحن</a></li>
                            <li><a href="#contact">الدعم</a></li>
                            <li><a href="#faq">الأسئلة الشائعة</a></li>
                            <li><a href="#">الوظائف</a></li>
                            <li><a href="#contact">اتصل بنا</a></li>
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
                                        <h5>الموقع الإلكتروني:</h5>
                                        <span>invoicing.amaziverse.io</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-envelope"></i></div>
                                    <div class="info">
                                        <h5>البريد الإلكتروني:</h5>
                                        <span>support@amaziverse.io</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-phone"></i></div>
                                    <div class="info">
                                        <h5>الهاتف:</h5>
                                        <span>1234 555 4) 0) 971+</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="social-address mt-3">
                            <h4>تابعنا</h4>
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
                        <p>© حقوق النشر 2025. جميع الحقوق محفوظة لدى 
                            <a href="#">أمازيفيرس للفوترة في الإمارات</a>
                        </p>
                    </div>
                    <div class="col-lg-6 text-start link">
                        <ul>
                            <li><a href="<?= base_url('legal/terms') ?>">شروط الاستخدام</a></li>
                            <li><a href="<?= base_url('legal/privacy') ?>">سياسة الخصوصية</a></li>
                            <li><a href="#contact">الدعم</a></li>
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
    
    // Set the current language flag (UK for Arabic page)
    languageFlag.classList.add('uk');
    languageFlag.title = 'Switch to English / التبديل إلى الإنجليزية';
    
    languageToggle.addEventListener('click', function() {
        // Try multiple URL approaches for better compatibility
        const baseUrl = '<?= base_url() ?>';
        
        // Always go back to main page (works with or without rewrite)
        window.location.href = baseUrl;
    });
});
</script>

<!-- Include Chatbot Widget -->
<?php $this->load->view('chatbot_widget'); ?>

</body>
</html>
