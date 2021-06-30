<?php /* Template Name: Payment Page */ ?>

<?php get_header(); ?>
<style>
@media(min-width:768px)    {
    .col-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
	padding-right: 15px;
padding-left: 15px;
}
.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.col-md-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
}
.mb-3, .my-3 {
    margin-bottom: 1rem !important;
}
.col-lg-8 {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
}
.col-lg-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
}
    }
</style>    
<main id="primary" class="site-main  defaultpage">
    <?php
		while ( have_posts() ) :
			the_post();?>
	<section class="cms-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
        
        </section>
        
           <section class="inner-stage">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="resourse-inner">
                        <div class="resourse-box">
                            <h3>We help keep GOOD people out of jail!</h3>
                            
                            <ul>
<li>2,500 Charges Resolved</li>
<li>Offices in Phoenix and Glendale</li>
<li>Payment Plans Available</li>
</ul>
							<div class="header-right">
                        <div class="header-call">
                            <a href="tel: <?php echo get_field('phone', 'option'); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-call.svg" alt="">
                                <span class="value"><?php echo get_field('phone', 'option'); ?></span>
                            </a>
                        </div>
                        <div class="consultation">
                            <a class="orange-btn" href="<?php echo get_field('consultation_button_link', 'option'); ?>">Free Consultation</a>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="section-header">
              <p>To make a payment fill in the fields below and click on the "Pay Now" button, you will then be redirected to a secure payment page.</p>
              <hr>
              <form action="https://checkout.globalgatewaye4.firstdata.com/pay" method="post">
                <!-- Hidden Fields -->
                <input type="hidden" name="x_show_form" value="PAYMENT_FORM" />
                <input type="hidden" name="x_login" value="<?php echo $pageid = 'WSP-DIVEL-zTNT0QC@tw'; ?>" />
                <input type="hidden" name="x_fp_sequence" value="<?php echo $sequence = rand(1,9999); ?>" />
                <input type="hidden" name="x_fp_timestamp" value="<?php echo $timestamp = time(); ?>" />
                <input type="hidden" name="x_currency_code" value="<?php echo $currency = 'USD'; ?>" />
                <input type="hidden" name="x_fp_hash" value="" />
                <!-- Input Fields -->
                <div class="row">
                  <div class="col-12 col-lg-8">
                    <div class="row">
                      <div class="col-12 col-md-6 mb-3">
                        <label for="x_first_name">Cardholder First Name</label>
                        <input name="x_first_name" type="text" maxlength="30" required="">
                      </div>
                      <div class="col-12 col-md-6 mb-3">
                        <label for="x_last_name">Cardholder Last Name</label>
                        <input name="x_last_name" type="text" maxlength="30" required="">
                      </div>
                      <div class="col-12 col-md-12 mb-3">
                        <label for="x_user1">Client Name (If different)</label>
                        <input name="x_user1" type="text" maxlength="30">
                      </div>
                      <div class="col-12 col-md-6 mb-3">
                        <label for="x_email">E-mail Address</label>
                        <input type="email" name="x_email" maxlength="70" required="">
                      </div>
                      <div class="col-12 col-md-6 mb-3">
                        <label for="x_phone">Phone Number</label>
                        <input type="text" name="x_phone" maxlength="70" required="">
                      </div>
                      <div class="col-12">
                        <hr>
                      </div>
                      <div class="col-12 col-md-12 mb-3">
                        <label for="x_address">Address</label>
                        <input name="x_address" type="text" maxlength="30" required="">
                      </div>
                      <div class="col-12 col-md-6 mb-3">
                        <label for="x_city">City</label>
                        <input name="x_city" type="text" maxlength="30" required="">
                      </div>
                      <div class="col-12 col-md-6 mb-3">
                        <label for="x_state">State</label>
                        <select name="x_state" required="">
                          <option value="Alabama">Alabama</option>
                          <option value="Alaska">Alaska</option>
                          <option value="American Samoa">American Samoa</option>
                          <option value="Arizona">Arizona</option>
                          <option value="Arkansas">Arkansas</option>
                          <option value="Armed Forces">Armed Forces</option>
                          <option value="Armed Forces Americas">Armed Forces Americas</option>
                          <option value="Armed Forces Pacific">Armed Forces Pacific</option>
                          <option value="California">California</option>
                          <option value="Colorado">Colorado</option>
                          <option value="Connecticut">Connecticut</option>
                          <option value="Delaware">Delaware</option>
                          <option value="District of Columbia">District of Columbia</option>
                          <option value="Federated States of Micronesia">Federated States of Micronesia</option>
                          <option value="Florida">Florida</option>
                          <option value="Georgia">Georgia</option>
                          <option value="Guam">Guam</option>
                          <option value="Hawaii">Hawaii</option>
                          <option value="Idaho">Idaho</option>
                          <option value="Illinois">Illinois</option>
                          <option value="Indiana">Indiana</option>
                          <option value="Iowa">Iowa</option>
                          <option value="Kansas">Kansas</option>
                          <option value="Kentucky">Kentucky</option>
                          <option value="Louisiana">Louisiana</option>
                          <option value="Maine">Maine</option>
                          <option value="Marshall Islands">Marshall Islands</option>
                          <option value="Maryland">Maryland</option>
                          <option value="Massachusetts">Massachusetts</option>
                          <option value="Michigan">Michigan</option>
                          <option value="Minnesota">Minnesota</option>
                          <option value="Mississippi">Mississippi</option>
                          <option value="Missouri">Missouri</option>
                          <option value="Montana">Montana</option>
                          <option value="Nebraska">Nebraska</option>
                          <option value="Nevada">Nevada</option>
                          <option value="New Hampshire">New Hampshire</option>
                          <option value="New Jersey">New Jersey</option>
                          <option value="New Mexico">New Mexico</option>
                          <option value="New York">New York</option>
                          <option value="North Carolina">North Carolina</option>
                          <option value="North Dakota">North Dakota</option>
                          <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                          <option value="Ohio">Ohio</option>
                          <option value="Oklahoma">Oklahoma</option>
                          <option value="Oregon">Oregon</option>
                          <option value="Palau">Palau</option>
                          <option value="Pennsylvania">Pennsylvania</option>
                          <option value="Puerto Rico">Puerto Rico</option>
                          <option value="Rhode Island">Rhode Island</option>
                          <option value="South Carolina">South Carolina</option>
                          <option value="South Dakota">South Dakota</option>
                          <option value="Tennessee">Tennessee</option>
                          <option value="Texas">Texas</option>
                          <option value="Utah">Utah</option>
                          <option value="Vermont">Vermont</option>
                          <option value="Virgin Islands">Virgin Islands</option>
                          <option value="Virginia">Virginia</option>
                          <option value="Washington">Washington</option>
                          <option value="West Virginia">West Virginia</option>
                          <option value="Wisconsin">Wisconsin</option>
                          <option value="Wyoming">Wyoming</option><option value="" disabled="disabled">-------------</option>
                          <option value="Alberta">Alberta</option>
                          <option value="British Columbia">British Columbia</option>
                          <option value="Manitoba">Manitoba</option>
                          <option value="New Brunswick">New Brunswick</option>
                          <option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
                          <option value="Northwest Territories">Northwest Territories</option>
                          <option value="Nova Scotia">Nova Scotia</option>
                          <option value="Nunavut">Nunavut</option>
                          <option value="Ontario">Ontario</option>
                          <option value="Prince Edward Island">Prince Edward Island</option>
                          <option value="Quebec">Quebec</option>
                          <option value="Saskatchewan">Saskatchewan</option>
                          <option value="Yukon">Yukon</option><option value="" disabled="disabled">-------------</option>
                          <option value="N/A">Not Applicable</option>
                        </select>
                      </div>
                      <div class="col-12 col-md-6 mb-3">
                        <label for="x_zip">ZIP</label>
                        <input name="x_zip" type="text" maxlength="10" required="">
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-4">
                    <label for="x_amount">Amount to pay</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">$</span>
                        </div>
                        <input id="payment-amount" name="x_amount" type="number" step="0.01" required="" min="1.00">
                      </div>
                    <button class="btn btn-sm btn-block btn-info mt-3" type="submit">Pay Now</button>
                  </div>
                </div>
              </form>

              <script>
              (function ($) {
                'use strict';
                $(document).ready(function() {

                  $('#payment-amount').keyup(function(){
                    var inputValue = $(this).val();
                    $.post('<?php echo get_template_directory_uri(); ?>/payeezy-hash-gen.php', {
                     amountInput: inputValue,
                     pageid: $('input[name="x_login"]').val(),
                     sequence: $('input[name="x_fp_sequence"]').val(),
                     timestamp: $('input[name="x_fp_timestamp"]').val(),
                     currency: $('input[name="x_currency_code"]').val(),
                    }, function(data){
                      $('input[name="x_fp_hash"]').val(data);
                    });
                  });

                });
              }(jQuery));
              </script>

            </div>
                </div>
            </div>
        </div>
    </section>
   


		<?php	// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
