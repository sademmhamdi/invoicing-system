<!-- Start Request Quote Area  
============================================= -->
<div id="request-quote" class="contact-us-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h2>Request a Quote</h2>
                    <p>
                        Ready to transform your invoicing process? Tell us about your business needs and we'll provide you with a customized quote for our UAE-compliant CRM & Billing solution.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Quote Info -->
            <div class="col-lg-6 address">
                <div class="address-items">
                    <h4>Why Choose Our Solution?</h4>
                    <ul class="info">
                        <li>
                            <i class="fas fa-check-circle" style="color: #ffa72a;"></i>
                            <span>FTA/EmaraTax Compliant</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle" style="color: #ffa72a;"></i>
                            <span>Arabic & English Support</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle" style="color: #ffa72a;"></i>
                            <span>UAE-Based Hosting</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle" style="color: #ffa72a;"></i>
                            <span>Local Payment Gateways</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle" style="color: #ffa72a;"></i>
                            <span>24/7 Support Available</span>
                        </li>
                    </ul>
                    <div class="social-address">
                        <h4>Our Response Time</h4>
                        <p style="color: #ffa72a; font-weight: 600; font-size: 1.1rem;">
                            <i class="fas fa-clock"></i> Maximum 48 hours response guarantee
                        </p>
                    </div>
                </div>
            </div>

            <!-- Quote Request Form -->
            <div class="col-lg-6 contact-form">
                <h2>Get Your Custom Quote</h2>
                
                <?php if(validation_errors()): ?>
                    <div class="alert alert-danger">
                        <?php echo validation_errors(); ?>
                    </div>
                <?php endif; ?>
                
                <?php echo form_open('submit-quote', array('class' => 'quote-form')); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <?php echo form_input(array(
                                    'class' => 'form-control',
                                    'id' => 'full_name',
                                    'name' => 'full_name',
                                    'placeholder' => 'Full Name *',
                                    'type' => 'text',
                                    'value' => set_value('full_name')
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
                                    'placeholder' => 'Email Address *',
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
                                    'id' => 'contact_number',
                                    'name' => 'contact_number',
                                    'placeholder' => 'Contact Number *',
                                    'type' => 'text',
                                    'value' => set_value('contact_number')
                                )); ?>
                                <span class="alert-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <?php 
                                $company_sizes = array(
                                    '' => 'Select Company Size *',
                                    'startup' => 'Startup (1-10 employees)',
                                    'small' => 'Small Business (11-50 employees)',
                                    'medium' => 'Medium Business (51-200 employees)',
                                    'large' => 'Large Enterprise (200+ employees)'
                                );
                                echo form_dropdown('company_size', $company_sizes, set_value('company_size'), 'class="form-control" id="company_size"');
                                ?>
                                <span class="alert-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group comments">
                                <?php echo form_textarea(array(
                                    'class' => 'form-control',
                                    'id' => 'description',
                                    'name' => 'description',
                                    'placeholder' => 'Describe your business needs and requirements *',
                                    'rows' => 5,
                                    'value' => set_value('description')
                                )); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <?php echo form_submit('submit', 'Request Quote', 'class="btn circle btn-theme effect btn-md"'); ?>
                        </div>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<!-- End Request Quote Area -->

<style>
.quote-form .form-control {
    margin-bottom: 20px;
    padding: 15px;
    border: 2px solid #e9ecef;
    border-radius: 8px;
    font-size: 14px;
    transition: all 0.3s ease;
}

.quote-form .form-control:focus {
    border-color: #ffa72a;
    box-shadow: 0 0 0 0.2rem rgba(255, 167, 42, 0.25);
    outline: none;
}

.quote-form select.form-control {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
    background-position: right 12px center;
    background-repeat: no-repeat;
    background-size: 16px;
    padding-right: 40px;
    appearance: none;
}

.address-items .info li {
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    font-size: 15px;
}

.address-items .info li i {
    margin-right: 12px;
    font-size: 16px;
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
}

.btn-theme:hover {
    background-color: #e8941f;
    border-color: #e8941f;
    transform: translateY(-2px);
}
</style>
