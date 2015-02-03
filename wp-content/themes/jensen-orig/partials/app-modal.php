		<div class="modal-overlay app-modal">

	    <a href="" class="close-modal">
	      <span class="close-bar"></span>
	      <span class="close-bar"></span>
	    </a>
		  
		  <div class="modal-wrap">
		    <div class="modal-content">
		    
		      <div class="modal-header">
            <h3>To schedule an appointment, call:</h3>
            <div class="phone-number"><?php the_field('app_phone_number', 118); ?></div>
		      </div>
          
          <div class="emergency-block">
            <?php the_field('app_emergency_block', 118); ?>
          </div>
        
          <div class="modal-form">
            <?php the_field('app_form_intro', 118); ?>
    		    <?php echo do_shortcode('[contact-form-7 id="123" title="Schedule Appointment"]'); ?>
          </div>
		    </div>
		  </div>
		  
		</div>