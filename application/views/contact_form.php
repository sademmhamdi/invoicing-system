<!-- Start Contact Area  
============================================= -->
<div id="contact" class="contact-us-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h2>Contact Us</h2>
                    <p>
                        Want to see what our UAE CRM & Billing solution can do for your business? Send us a message or schedule a live demo — we'll take care of the rest.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Contact Info -->
            <div class="col-lg-6 address">
                <div class="address-items">
                    <h4>Our Contact Details</h4>
                    <ul class="info">
                        <li>
                            <i class="fas fa-map-marked-alt"></i>
                            <span>Dubai, United Arab Emirates</span>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <span>+971 (0)50 123 4567</span>
                        </li>
                        <li>
                            <i class="fas fa-envelope-open"></i>
                            <span>support@amaziverse.io</span>
                        </li>
                    </ul>
                    <div class="social-address">
                        <h4>Follow Us</h4>
                        <ul class="social">
                            <li class="facebook">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="instagram">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Quick Links -->
                    <div style="margin-top: 30px;">
                        <h4>Quick Actions</h4>
                        <a href="<?php echo base_url('request-quote'); ?>" class="btn circle btn-theme effect btn-md" style="margin-bottom: 10px; display: inline-block;">
                            <i class="fas fa-file-invoice"></i> Request a Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-6 contact-form">
                <h2>Tell Us About Your Project</h2>
                
                <?php if(validation_errors()): ?>
                    <div class="alert alert-danger">
                        <?php echo validation_errors(); ?>
                    </div>
                <?php endif; ?>
                
                <?php echo form_open('submit-contact', array('class' => 'contact-form-main')); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <?php echo form_input(array(
                                    'class' => 'form-control',
                                    'id' => 'name',
                                    'name' => 'name',
                                    'placeholder' => 'Full Name *',
                                    'type' => 'text',
                                    'value' => set_value('name')
                                )); ?>
                                <span class="alert-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <?php echo form_input(array(
                                    'class' => 'form-control',
                                    'id' => 'email',
                                    'name' => 'email',
                                    'placeholder' => 'Email *',
                                    'type' => 'email',
                                    'value' => set_value('email')
                                )); ?>
                                <span class="alert-error"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <?php echo form_input(array(
                                    'class' => 'form-control',
                                    'id' => 'phone',
                                    'name' => 'phone',
                                    'placeholder' => 'Phone',
                                    'type' => 'text',
                                    'value' => set_value('phone')
                                )); ?>
                                <span class="alert-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group comments">
                                <?php echo form_textarea(array(
                                    'class' => 'form-control',
                                    'id' => 'comments',
                                    'name' => 'comments',
                                    'placeholder' => 'Tell us more about your project *',
                                    'rows' => 5,
                                    'value' => set_value('comments')
                                )); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <?php echo form_submit('submit', 'Send Message', 'class="btn circle btn-theme effect btn-md"'); ?>
                        </div>
                    </div>
                    <!-- Alert Message -->
                    <div class="col-lg-12 alert-notification">
                        <div id="message" class="alert-msg"></div>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<!-- End Contact -->

<style>
.contact-form-main .form-control {
    margin-bottom: 20px;
    padding: 15px;
    border: 2px solid #e9ecef;
    border-radius: 8px;
    font-size: 14px;
    transition: all 0.3s ease;
}

.contact-form-main .form-control:focus {
    border-color: #ffa72a;
    box-shadow: 0 0 0 0.2rem rgba(255, 167, 42, 0.25);
    outline: none;
}

.alert-danger {
    background-color: #f8d7da;
    border: 1px solid #f5c6cb;
    color: #721c24;
    padding: 12px 16px;
    border-radius: 8px;
    margin-bottom: 20px;
}

.btn-theme {
    background-color: #ffa72a;
    border-color: #ffa72a;
    color: #fff;
    padding: 15px 30px;
    font-size: 16px;
    font-weight: 600;
    transition: all 0.3s ease;
    text-decoration: none;
    border-radius: 50px;
}

.btn-theme:hover {
    background-color: #e8941f;
    border-color: #e8941f;
    color: #fff;
    transform: translateY(-2px);
    text-decoration: none;
}
</style>
