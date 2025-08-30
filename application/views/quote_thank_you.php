<!-- Start Quote Thank You Area  
============================================= -->
<div class="thank-you-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <?php if($success): ?>
                    <div class="success-message">
                        <div class="icon-success">
                            <i class="fas fa-check-circle" style="color: #28a745; font-size: 4rem; margin-bottom: 20px;"></i>
                        </div>
                        <h2 style="color: #28a745; margin-bottom: 20px;">Quote Request Received!</h2>
                        <div class="message-box" style="background: #d4edda; border: 1px solid #c3e6cb; border-radius: 10px; padding: 30px; margin: 30px 0;">
                            <p style="font-size: 18px; color: #155724; margin-bottom: 20px;">
                                <?php echo $message; ?>
                            </p>
                            <div style="background: #fff; border-radius: 8px; padding: 20px; margin: 20px 0;">
                                <h4 style="color: #ffa72a; margin-bottom: 15px;">
                                    <i class="fas fa-clock"></i> What Happens Next?
                                </h4>
                                <ul style="text-align: left; color: #333; list-style: none; padding: 0;">
                                    <li style="margin-bottom: 10px;">
                                        <i class="fas fa-check" style="color: #28a745; margin-right: 10px;"></i>
                                        Our team will review your requirements
                                    </li>
                                    <li style="margin-bottom: 10px;">
                                        <i class="fas fa-check" style="color: #28a745; margin-right: 10px;"></i>
                                        We'll prepare a customized quote for your business
                                    </li>
                                    <li style="margin-bottom: 10px;">
                                        <i class="fas fa-check" style="color: #28a745; margin-right: 10px;"></i>
                                        You'll receive a detailed proposal within 48 hours
                                    </li>
                                    <li>
                                        <i class="fas fa-check" style="color: #28a745; margin-right: 10px;"></i>
                                        Optional demo call to discuss your needs
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="error-message">
                        <div class="icon-error">
                            <i class="fas fa-exclamation-triangle" style="color: #dc3545; font-size: 4rem; margin-bottom: 20px;"></i>
                        </div>
                        <h2 style="color: #dc3545; margin-bottom: 20px;">Oops! Something went wrong</h2>
                        <div class="message-box" style="background: #f8d7da; border: 1px solid #f5c6cb; border-radius: 10px; padding: 30px; margin: 30px 0;">
                            <p style="font-size: 18px; color: #721c24; margin-bottom: 20px;">
                                <?php echo $message; ?>
                            </p>
                        </div>
                    </div>
                <?php endif; ?>
                
                <div class="action-buttons" style="margin-top: 40px;">
                    <a href="<?php echo base_url(); ?>" class="btn circle btn-theme effect btn-md" style="margin-right: 15px;">
                        <i class="fas fa-home"></i> Back to Home
                    </a>
                    <?php if(!$success): ?>
                    <a href="<?php echo base_url('request-quote'); ?>" class="btn circle btn-dark border btn-md">
                        <i class="fas fa-redo"></i> Try Again
                    </a>
                    <?php else: ?>
                    <a href="<?php echo base_url('contact'); ?>" class="btn circle btn-dark border btn-md">
                        <i class="fas fa-envelope"></i> Contact Us
                    </a>
                    <?php endif; ?>
                </div>
                
                <!-- Contact Information -->
                <div class="contact-info" style="margin-top: 50px; background: #f8f9fa; border-radius: 10px; padding: 30px;">
                    <h4 style="color: #333; margin-bottom: 20px;">Need Immediate Assistance?</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-item">
                                <i class="fas fa-phone" style="color: #ffa72a; font-size: 24px; margin-bottom: 10px;"></i>
                                <p style="margin-bottom: 5px; font-weight: 600;">Phone</p>
                                <p style="color: #666;">+971 (0)50 123 4567</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-item">
                                <i class="fas fa-envelope" style="color: #ffa72a; font-size: 24px; margin-bottom: 10px;"></i>
                                <p style="margin-bottom: 5px; font-weight: 600;">Email</p>
                                <p style="color: #666;">support@amaziverse.io</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-item">
                                <i class="fas fa-clock" style="color: #ffa72a; font-size: 24px; margin-bottom: 10px;"></i>
                                <p style="margin-bottom: 5px; font-weight: 600;">Response Time</p>
                                <p style="color: #666;">Maximum 48 hours</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Quote Thank You Area -->

<style>
.thank-you-area {
    padding: 100px 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
}

.btn-theme {
    background-color: #ffa72a;
    border-color: #ffa72a;
    color: #fff;
    padding: 15px 25px;
    font-size: 16px;
    font-weight: 600;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-block;
    border-radius: 50px;
}

.btn-theme:hover {
    background-color: #e8941f;
    border-color: #e8941f;
    color: #fff;
    transform: translateY(-2px);
    text-decoration: none;
}

.btn-dark {
    background-color: transparent;
    border: 2px solid #333;
    color: #333;
    padding: 13px 25px;
    font-size: 16px;
    font-weight: 600;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-block;
    border-radius: 50px;
}

.btn-dark:hover {
    background-color: #333;
    color: #fff;
    transform: translateY(-2px);
    text-decoration: none;
}

.contact-item {
    text-align: center;
    padding: 20px;
}

@media (max-width: 768px) {
    .action-buttons a {
        display: block;
        margin: 10px 0;
        width: 100%;
    }
    
    .contact-info .row {
        text-align: center;
    }
    
    .contact-item {
        margin-bottom: 30px;
    }
}
</style>
