<?php
include_once ('includes/head.php');
include_once('includes/header.php');

?>

<div class="container">
    <div class="contact">
    <h2>Contac Us</h2>
    <p>We are here for you</p>
    <hr width="5%" noshade="5" align="left">
    <h4>Emmanuel Phumlani Mhlunngu</h4>
    <a href="tel:2769102488" target=_blank><i class="fa fa-phone mx-4"> +27 76 910 2488</i></a>
    <a href="mailto:hi@phumlanimhlungu.co.za" target=_blank ><i class="fa fa-envelope mx-3"> hi@phumlanimhlungu.co.za</i></a>
    
    <!--Contact Form-->
    <form id="contact-form" class="py-4" method="post" action="contact.php" role="form">

        <div class="messages"></div>
    
        <div class="controls">
    
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form_name">First name *</label>
                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Enter your first name *" required="required" data-error="Firstname is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form_lastname">Email *</label>
                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Enter your email *" required="required" data-error="Valid email is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="form_message">Message *</label>
                        <textarea id="form_message" name="message" class="form-control" placeholder="Please, leave us a message *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <input type="submit" class="btn btn-primary btn-send" value="Submit">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-muted">
                        * Fields are required.
                    </p>
                </div>
            </div>
        </div>
    
    </form>
    <div class="social-icons col-12">
        <a class="social-icon" href="https://www.linkedin.com/in/phumlani-mhlungu-760b2856/" target=_blank><i class="fa fa-linkedin-in"></i></a>
        <a class="social-icon" href="https://github.com/mhlunguep" target=_blank><i class="fa fa-github"></i></a>
        <a class="social-icon" href="https://twitter.com/epmhlungu" target=_blank><i class="fa fa-twitter"></i></a>
        <a class="social-icon" href="https://facebook.com/mhlunguep" target=_blank><i class="fa fa-facebook-f"></i></a>
    </div>
    
    
    </div>
    
</div>                        

